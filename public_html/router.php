<?php
// Capture any errors and output them
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Get the request path
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = urldecode($uri);
$uri = rtrim($uri, '/');

// Serve static files normally
if (preg_match('/\.(css|js|jpg|jpeg|png|gif|ico|svg|woff|woff2|ttf|eot|webp)$/i', $uri)) {
    return false;
}

// Handle sitemap.xml request
if ($uri === '/sitemap.xml') {
    $_SERVER['PHP_SELF'] = '/sitemap.xml.php';
    include 'sitemap.xml.php';
    return true;
}

// Root - serve index.php
if ($uri === '/' || $uri === '') {
    $_SERVER['PHP_SELF'] = '/index.php';
    include 'index.php';
    return true;
}

// Extract page name
$page = ltrim($uri, '/');
// Don't lowercase - preserve original case for file paths
$page = preg_replace('/\?.*/', '', $page);

// Security check
if (strpos($page, '..') !== false) {
    http_response_code(404);
    return true;
}

// Try without adding .php first (for files already with .php in path like handlers/tracking_handler.php)
$file_direct = __DIR__ . '/' . $page;
if (file_exists($file_direct) && pathinfo($file_direct, PATHINFO_EXTENSION) === 'php') {
    $_SERVER['PHP_SELF'] = '/' . $page;
    include $file_direct;
    return true;
}

// Try to load the PHP file (add .php extension)
$file = __DIR__ . '/' . $page . '.php';
if (file_exists($file)) {
    $_SERVER['PHP_SELF'] = '/' . $page . '.php';
    include $file;
    return true;
}

// Try directory index
$index_file = __DIR__ . '/' . $page . '/index.php';
if (file_exists($index_file)) {
    $_SERVER['PHP_SELF'] = '/' . $page . '/index.php';
    include $index_file;
    return true;
}

// 404
http_response_code(404);
echo "404 Not Found";
return true;

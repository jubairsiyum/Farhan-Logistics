<?php
/**
 * Router for PHP Built-in Server
 * Handles SEO-friendly URLs by hiding .php extensions
 */

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = urldecode($uri);
$uri = rtrim($uri, '/');

// If requesting root, serve index.php
if ($uri === '/' || $uri === '') {
    require 'index.php';
    return true;
}

// For CSS, JS, images, etc., let the server handle them
if (preg_match('/\.(css|js|jpg|jpeg|png|gif|ico|svg|woff|woff2|ttf|eot)$/i', $uri)) {
    return false;
}

// Remove .php if someone adds it
if (substr($uri, -4) === '.php') {
    $uri = substr($uri, 0, -4);
    header('Location: ' . $uri, true, 301);
    return true;
}

// Try to find matching PHP file
$phpFile = __DIR__ . $uri . '.php';
if (file_exists($phpFile)) {
    require $phpFile;
    return true;
}

// Try directory index
$indexFile = __DIR__ . $uri . '/index.php';
if (file_exists($indexFile)) {
    require $indexFile;
    return true;
}

// 404 Not Found
http_response_code(404);
require 'includes/header.php';
echo '<div class="container py-5 text-center"><h1>404 - Page Not Found</h1><p>The page you are looking for does not exist.</p><a href="/" class="btn btn-primary-custom">Go Home</a></div>';
require 'includes/footer.php';
return true;

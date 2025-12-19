<?php
/**
 * Router for PHP Built-in Server
 * Handles routing for the development server
 */

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Remove query strings for routing
$uri = urldecode($uri);

// If requesting root, serve index.php
if ($uri === '/' || $uri === '') {
    require 'index.php';
    return true;
}

// For existing files, let the server handle them
if (file_exists(__DIR__ . $uri)) {
    return false; // Let the server serve the file
}

// If the URI doesn't have an extension, try to find a matching PHP file
if (!pathinfo($uri, PATHINFO_EXTENSION)) {
    $phpFile = __DIR__ . $uri . '.php';
    if (file_exists($phpFile)) {
        require $phpFile;
        return true;
    }
}

// Return 404 for non-existent files
http_response_code(404);
echo '404 Not Found';
return true;

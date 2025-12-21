<?php
/**
 * Shared helpers for resolving pretty URLs to actual PHP files
 * Ensures consistent routing between Apache/Nginx rewrites and the PHP built-in server
 */

if (!function_exists('fl_get_requested_path')) {
    function fl_get_requested_path(?string $requestUri = null): string
    {
        $uri = $requestUri ?? ($_SERVER['REQUEST_URI'] ?? '/');
        $path = parse_url($uri, PHP_URL_PATH) ?? '/';
        return trim($path, '/');
    }
}

if (!function_exists('fl_resolve_pretty_route')) {
    function fl_resolve_pretty_route(?string $requestUri = null): ?string
    {
        $path = fl_get_requested_path($requestUri);

        if ($path === '' || strcasecmp($path, 'index') === 0 || strcasecmp($path, 'index.php') === 0) {
            return null; // Home page
        }

        if (strpos($path, '..') !== false) {
            return null; // Block traversal attempts
        }

        $normalizedPath = str_replace(['\\', '//'], '/', $path);
        $originalExtension = pathinfo($normalizedPath, PATHINFO_EXTENSION);

        $relativeFile = $normalizedPath;
        if ($originalExtension === '') {
            $relativeFile .= '.php';
        }

        $extension = $originalExtension === '' ? 'php' : $originalExtension;

        if (strtolower($extension) !== 'php') {
            return null; // Only allow PHP documents through this resolver
        }

        $basePath = realpath(__DIR__ . '/..');
        if ($basePath === false) {
            return null;
        }

        $fullPath = $basePath . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $relativeFile);
        if (is_file($fullPath)) {
            return $fullPath;
        }

        // Support directory style URLs (e.g. /team -> /team/index.php)
        if ($extension === 'php' && $originalExtension === '') {
            $dirIndex = $basePath . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, rtrim($normalizedPath, '/') . '/index.php');
            if (is_file($dirIndex)) {
                return $dirIndex;
            }
        }

        return null;
    }
}

if (!function_exists('fl_get_active_route_basename')) {
    function fl_get_active_route_basename(?string $requestUri = null): string
    {
        $path = fl_get_requested_path($requestUri);

        if ($path === '' || strcasecmp($path, 'index') === 0 || strcasecmp($path, 'index.php') === 0) {
            return 'index.php';
        }

        $segments = explode('/', $path);
        $slug = end($segments) ?: '';

        if ($slug === '') {
            return 'index.php';
        }

        if (pathinfo($slug, PATHINFO_EXTENSION) === '') {
            $slug .= '.php';
        }

        return $slug;
    }
}

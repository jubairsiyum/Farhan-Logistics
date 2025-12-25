<?php
// Set header to indicate this is an XML file
header('Content-Type: application/xml; charset=UTF-8');

// Get the protocol and domain
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$domain = $_SERVER['HTTP_HOST'] ?? 'farhancargobd.com';
$baseUrl = $protocol . '://' . $domain;

// Define all pages and their properties
$pages = [
    [
        'url' => '/',
        'changefreq' => 'weekly',
        'priority' => '1.0',
        'lastmod' => '2025-01-15'
    ],
    [
        'url' => '/about',
        'changefreq' => 'monthly',
        'priority' => '0.9',
        'lastmod' => '2025-01-15'
    ],
    [
        'url' => '/leadership',
        'changefreq' => 'monthly',
        'priority' => '0.8',
        'lastmod' => '2025-01-15'
    ],
    [
        'url' => '/services',
        'changefreq' => 'weekly',
        'priority' => '0.95',
        'lastmod' => '2025-01-15'
    ],
    [
        'url' => '/solutions',
        'changefreq' => 'weekly',
        'priority' => '0.9',
        'lastmod' => '2025-01-15'
    ],
    [
        'url' => '/success-stories',
        'changefreq' => 'weekly',
        'priority' => '0.85',
        'lastmod' => '2025-01-15'
    ],
    [
        'url' => '/careers',
        'changefreq' => 'weekly',
        'priority' => '0.8',
        'lastmod' => '2025-01-15'
    ],
    [
        'url' => '/contact',
        'changefreq' => 'monthly',
        'priority' => '0.9',
        'lastmod' => '2025-01-15'
    ],
    [
        'url' => '/tracking',
        'changefreq' => 'daily',
        'priority' => '0.95',
        'lastmod' => '2025-01-15'
    ],
    [
        'url' => '/quote',
        'changefreq' => 'weekly',
        'priority' => '0.9',
        'lastmod' => '2025-01-15'
    ],
    [
        'url' => '/privacy',
        'changefreq' => 'yearly',
        'priority' => '0.7',
        'lastmod' => '2025-01-15'
    ],
    [
        'url' => '/terms',
        'changefreq' => 'yearly',
        'priority' => '0.7',
        'lastmod' => '2025-01-15'
    ],
    [
        'url' => '/sitemap',
        'changefreq' => 'monthly',
        'priority' => '0.7',
        'lastmod' => '2025-01-15'
    ]
];

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

foreach ($pages as $page) {
    echo "    <url>\n";
    echo "        <loc>" . $baseUrl . htmlspecialchars($page['url']) . "</loc>\n";
    echo "        <lastmod>" . $page['lastmod'] . "</lastmod>\n";
    echo "        <changefreq>" . $page['changefreq'] . "</changefreq>\n";
    echo "        <priority>" . $page['priority'] . "</priority>\n";
    echo "    </url>\n";
}

echo "</urlset>\n";
?>

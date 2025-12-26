<?php
/**
 * Diagnostic & Debug Page
 * Use this to diagnose server issues
 * DELETE THIS FILE IN PRODUCTION!
 */

error_reporting(E_ALL);
ini_set('display_errors', '1');

?>
<!DOCTYPE html>
<html>
<head>
    <title>Server Diagnostics</title>
    <style>
        body { font-family: Arial; margin: 20px; background: #f5f5f5; }
        .section { background: white; padding: 20px; margin: 10px 0; border-radius: 5px; }
        h2 { color: #333; border-bottom: 2px solid #007bff; padding-bottom: 10px; }
        .ok { color: green; font-weight: bold; }
        .error { color: red; font-weight: bold; }
        .warning { color: orange; font-weight: bold; }
        pre { background: #f8f8f8; padding: 10px; border-radius: 3px; overflow-x: auto; }
        table { width: 100%; border-collapse: collapse; }
        td { padding: 8px; border-bottom: 1px solid #ddd; }
        tr:hover { background: #f9f9f9; }
    </style>
</head>
<body>
    <h1>🔧 Farhan Logistics - Server Diagnostics</h1>

    <!-- PHP Version -->
    <div class="section">
        <h2>PHP Information</h2>
        <p><strong>PHP Version:</strong> <span class="ok"><?php echo phpversion(); ?></span></p>
        <p><strong>Server API:</strong> <?php echo php_sapi_name(); ?></p>
        <p><strong>OS:</strong> <?php echo php_uname(); ?></p>
    </div>

    <!-- File Permissions -->
    <div class="section">
        <h2>File & Directory Status</h2>
        <table>
            <tr>
                <td><strong>Current Directory</strong></td>
                <td><code><?php echo getcwd(); ?></code></td>
            </tr>
            <tr>
                <td><strong>Vendor Autoload</strong></td>
                <td>
                    <?php
                    $vendor_path = dirname(dirname(__FILE__)) . '/vendor/autoload.php';
                    if (file_exists($vendor_path)) {
                        echo '<span class="ok">✓ Found: ' . $vendor_path . '</span>';
                    } else {
                        echo '<span class="error">✗ Not Found: ' . $vendor_path . '</span>';
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td><strong>Config DB</strong></td>
                <td>
                    <?php
                    $db_path = __DIR__ . '/config/db.php';
                    echo file_exists($db_path) ? '<span class="ok">✓ Exists</span>' : '<span class="error">✗ Missing</span>';
                    ?>
                </td>
            </tr>
            <tr>
                <td><strong>Config Mail</strong></td>
                <td>
                    <?php
                    $mail_path = __DIR__ . '/config/mail.php';
                    echo file_exists($mail_path) ? '<span class="ok">✓ Exists</span>' : '<span class="error">✗ Missing</span>';
                    ?>
                </td>
            </tr>
        </table>
    </div>

    <!-- Include Tests -->
    <div class="section">
        <h2>Include Path Tests</h2>
        <?php
        $test_files = [
            'includes/header.php',
            'includes/navbar.php',
            'includes/footer.php',
            'config/db.php',
            'config/mail.php',
        ];
        
        echo '<table>';
        foreach ($test_files as $file) {
            $full_path = __DIR__ . '/' . $file;
            $status = file_exists($full_path) ? '<span class="ok">✓</span>' : '<span class="error">✗</span>';
            echo "<tr><td>$file</td><td>$status</td></tr>";
        }
        echo '</table>';
        ?>
    </div>

    <!-- Extensions -->
    <div class="section">
        <h2>Loaded Extensions</h2>
        <p><strong>OpenSSL:</strong> <?php echo extension_loaded('openssl') ? '<span class="ok">✓ Enabled</span>' : '<span class="warning">⚠ Not loaded</span>'; ?></p>
        <p><strong>cURL:</strong> <?php echo extension_loaded('curl') ? '<span class="ok">✓ Enabled</span>' : '<span class="warning">⚠ Not loaded</span>'; ?></p>
        <p><strong>PDO:</strong> <?php echo extension_loaded('pdo') ? '<span class="ok">✓ Enabled</span>' : '<span class="warning">⚠ Not loaded</span>'; ?></p>
        <p><strong>MySQL:</strong> <?php echo extension_loaded('mysqli') ? '<span class="ok">✓ Enabled</span>' : '<span class="warning">⚠ Not loaded</span>'; ?></p>
    </div>

    <!-- Try Include -->
    <div class="section">
        <h2>Include Test</h2>
        <?php
        try {
            ob_start();
            include __DIR__ . '/includes/header.php';
            ob_end_clean();
            echo '<span class="ok">✓ header.php includes successfully</span>';
        } catch (Exception $e) {
            echo '<span class="error">✗ Error: ' . $e->getMessage() . '</span>';
        }
        ?>
    </div>
    
    <!-- Config Tests -->
    <div class="section">
        <h2>Configuration Files Test</h2>
        <?php
        // Test db.php
        echo '<h3>Database Config (config/db.php)</h3>';
        try {
            ob_start();
            include __DIR__ . '/config/db.php';
            ob_end_clean();
            echo '<span class="ok">✓ Loaded successfully</span>';
            echo '<p>Database connected: ' . (isset($db_connected) && $db_connected ? '<span class="ok">Yes</span>' : '<span class="warning">No</span>') . '</p>';
        } catch (Exception $e) {
            echo '<span class="error">✗ Error: ' . $e->getMessage() . '</span>';
        }
        
        // Test mail.php
        echo '<h3>Email Config (config/mail.php)</h3>';
        try {
            ob_start();
            include __DIR__ . '/config/mail.php';
            ob_end_clean();
            echo '<span class="ok">✓ Loaded successfully</span>';
            echo '<p>PHPMailer available: ' . (defined('PHPMAILER_AVAILABLE') && PHPMAILER_AVAILABLE ? '<span class="ok">Yes</span>' : '<span class="warning">No (will use PHP mail())</span>') . '</p>';
        } catch (Exception $e) {
            echo '<span class="error">✗ Error: ' . $e->getMessage() . '</span>';
        }
        ?>
    </div>
    
    <!-- Vendor Paths Test -->
    <div class="section">
        <h2>Vendor Path Detection</h2>
        <p>The system checks multiple paths to locate composer vendor directory:</p>
        <table>
            <?php
            $paths = [
                dirname(dirname(__FILE__)) . '/vendor/autoload.php' => 'Project root',
                __DIR__ . '/../../vendor/autoload.php' => 'Alternative path',
            ];
            
            if (isset($_SERVER['HOME'])) {
                $paths[$_SERVER['HOME'] . '/vendor/autoload.php'] = 'Home directory';
            }
            $paths['/home/farhan/public_html/vendor/autoload.php'] = 'Farhan home directory';
            $paths['/home/farhancargobd/vendor/autoload.php'] = 'Farhancargobd home directory';
            
            foreach ($paths as $path => $description) {
                $exists = file_exists($path);
                $status = $exists ? '<span class="ok">✓ FOUND</span>' : '✗ Not found';
                echo "<tr><td><strong>$description</strong><br><code>$path</code></td><td>$status</td></tr>";
            }
            ?>
        </table>
    </div>

    <!-- Server Environment -->
    <div class="section">
        <h2>Server Environment Variables</h2>
        <pre><?php
            $env_vars = ['HTTP_HOST', 'SERVER_NAME', 'SERVER_SOFTWARE', 'DOCUMENT_ROOT'];
            foreach ($env_vars as $var) {
                echo "$var: " . ($_SERVER[$var] ?? 'Not set') . "\n";
            }
        ?></pre>
    </div>

    <div class="section" style="background: #fff3cd; border-left: 4px solid #ffc107;">
        <h2 style="color: #856404;">⚠️ IMPORTANT</h2>
        <p><strong>DELETE this file (debug.php) after troubleshooting!</strong></p>
        <p>This file is for diagnostics only and should not be left on production servers.</p>
    </div>
</body>
</html>

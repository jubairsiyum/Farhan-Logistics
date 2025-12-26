<?php
/**
 * Email Templates for Farhan Logistics
 * Professional, responsive HTML email templates
 */

// Define tracking URL constant
if (!defined('TRACKING_URL')) {
    $domain = $_SERVER['HTTP_HOST'] ?? 'farhancargobd.com';
    $domain = explode(':', $domain)[0]; // Remove port if present
    define('TRACKING_URL', 'https://' . $domain . '/tracking');
}

// Define support email constant
if (!defined('MAIL_SUPPORT_EMAIL')) {
    define('MAIL_SUPPORT_EMAIL', 'hannan@farhancargobd.com');
}

/**
 * Get the logo URL for emails
 * Uses the configured domain to ensure proper loading in email clients
 * 
 * @return string Logo URL
 */
function getLogoUrl() {
    $domain = defined('MAIL_DOMAIN') ? MAIL_DOMAIN : ($_SERVER['HTTP_HOST'] ?? 'farhancargobd.com');
    // Remove any port number if present
    $domain = explode(':', $domain)[0];
    return 'https://' . $domain . '/assets/images/logo.svg';
}

/**
 * Base email template wrapper
 * 
 * @param string $content Main content HTML
 * @param array $options Template options
 * @return string Complete HTML email
 */
function emailTemplate($content, $options = []) {
    $title = $options['title'] ?? 'Farhan Logistics';
    $preheader = $options['preheader'] ?? '';
    
    return '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>' . htmlspecialchars($title) . '</title>
    <!--[if mso]>
    <noscript>
        <xml>
            <o:OfficeDocumentSettings>
                <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
        </xml>
    </noscript>
    <![endif]-->
    <style>
        /* Reset styles */
        body { margin: 0; padding: 0; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
        table { border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
        img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; }
        
        /* Base styles */
        body { font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 1.6; color: #333333; background-color: #f4f4f4; }
        
        /* Responsive */
        @media only screen and (max-width: 600px) {
            .container { width: 100% !important; }
            .content-block { padding: 20px !important; }
            .mobile-hide { display: none !important; }
            h1 { font-size: 24px !important; }
        }
    </style>
</head>
<body style="margin: 0; padding: 0; background-color: #f4f4f4;">
    <!-- Preheader text -->
    <div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
        ' . htmlspecialchars($preheader) . '
    </div>
    
    <!-- Email container -->
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #f4f4f4;">
        <tr>
            <td align="center" style="padding: 20px 0;">
                <!-- Content wrapper -->
                <table border="0" cellpadding="0" cellspacing="0" width="600" class="container" style="background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                    ' . $content . '
                </table>
                
                <!-- Footer -->
                <table border="0" cellpadding="0" cellspacing="0" width="600" class="container" style="margin-top: 20px;">
                    <tr>
                        <td align="center" style="padding: 20px; color: #666666; font-size: 14px;">
                            <p style="margin: 0 0 10px;">&copy; ' . date('Y') . ' Farhan Logistics International Ltd. All rights reserved.</p>
                            <p style="margin: 0 0 10px;">
                                <a href="mailto:' . MAIL_SUPPORT_EMAIL . '" style="color: #2f338d; text-decoration: none;">' . MAIL_SUPPORT_EMAIL . '</a> | 
                                <a href="https://' . (isset($_SERVER['HTTP_HOST']) ? htmlspecialchars($_SERVER['HTTP_HOST']) : 'farhancargobd.com') . '" style="color: #2f338d; text-decoration: none;">Visit Website</a>
                            </p>
                            <p style="margin: 0; font-size: 12px; color: #999999;">This is an automated message. Please do not reply to this email.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>';
}

/**
 * Shipment tracking email template
 * 
 * @param array $data Shipment data
 * @return string HTML email
 */
function trackingEmailTemplate($data) {
    $tracking_number = $data['tracking_number'];
    $customer_name = htmlspecialchars($data['customer_name']);
    $service_type = ucwords(str_replace('_', ' ', $data['service_type']));
    $origin = htmlspecialchars($data['origin']);
    $destination = htmlspecialchars($data['destination']);
    $estimated_delivery = date('F j, Y', strtotime($data['estimated_delivery']));
    $tracking_url = TRACKING_URL;
    
    $content = '
    <!-- Header with logo -->
    <tr>
        <td align="center" style="background: linear-gradient(135deg, #2f338d 0%, #1e2259 100%); padding: 40px 20px;">
            <img src="https://res.cloudinary.com/jubairamin/image/upload/v1766672495/Untitled_design_1_datzwn.png" alt="Farhan Logistics" style="height: 60px; width: auto; display: block; margin: 0 auto;" />
            <h1 style="margin: 20px 0 0; color: #ffffff; font-size: 28px; font-weight: 700;">Shipment Created Successfully</h1>
        </td>
    </tr>
    
    <!-- Main content -->
    <tr>
        <td class="content-block" style="padding: 40px 30px;">
            <p style="margin: 0 0 20px; font-size: 16px; line-height: 1.6; color: #333333;">
                Dear <strong>' . $customer_name . '</strong>,
            </p>
            
            <p style="margin: 0 0 30px; font-size: 16px; line-height: 1.6; color: #333333;">
                Thank you for choosing Farhan Logistics International Ltd. Your shipment has been successfully created and is now being processed by our team.
            </p>
            
            <!-- Tracking number box -->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin: 0 0 30px;">
                <tr>
                    <td style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); padding: 30px; border-radius: 8px; border-left: 4px solid #ec2025; text-align: center;">
                        <p style="margin: 0 0 10px; font-size: 14px; color: #666666; text-transform: uppercase; letter-spacing: 1px;">Your Tracking Number</p>
                        <p style="margin: 0; font-size: 32px; font-weight: 700; color: #2f338d; letter-spacing: 2px; font-family: \'Courier New\', monospace;">' . $tracking_number . '</p>
                    </td>
                </tr>
            </table>
            
            <h2 style="margin: 0 0 20px; font-size: 20px; color: #2f338d; font-weight: 700;">📦 Shipment Details</h2>
            
            <!-- Details table -->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin: 0 0 30px;">
                <tr>
                    <td style="padding: 12px 0; border-bottom: 1px solid #e9ecef;">
                        <strong style="color: #666666; font-size: 14px;">Service Type:</strong>
                    </td>
                    <td style="padding: 12px 0; border-bottom: 1px solid #e9ecef; text-align: right;">
                        <span style="background: #2f338d; color: #ffffff; padding: 4px 12px; border-radius: 4px; font-size: 13px; font-weight: 600;">' . $service_type . '</span>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 12px 0; border-bottom: 1px solid #e9ecef;">
                        <strong style="color: #666666; font-size: 14px;">Origin:</strong>
                    </td>
                    <td style="padding: 12px 0; border-bottom: 1px solid #e9ecef; text-align: right; font-size: 14px; color: #333333;">
                        ' . $origin . '
                    </td>
                </tr>
                <tr>
                    <td style="padding: 12px 0; border-bottom: 1px solid #e9ecef;">
                        <strong style="color: #666666; font-size: 14px;">Destination:</strong>
                    </td>
                    <td style="padding: 12px 0; border-bottom: 1px solid #e9ecef; text-align: right; font-size: 14px; color: #333333;">
                        ' . $destination . '
                    </td>
                </tr>
                <tr>
                    <td style="padding: 12px 0;">
                        <strong style="color: #666666; font-size: 14px;">Estimated Delivery:</strong>
                    </td>
                    <td style="padding: 12px 0; text-align: right; font-size: 14px; color: #ec2025; font-weight: 600;">
                        ' . $estimated_delivery . '
                    </td>
                </tr>
            </table>
            
            <h2 style="margin: 0 0 20px; font-size: 20px; color: #2f338d; font-weight: 700;">🔍 How to Track Your Shipment</h2>
            
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin: 0 0 30px;">
                <tr>
                    <td style="background: #f8f9fa; padding: 20px; border-radius: 8px;">
                        <ol style="margin: 0; padding-left: 20px; color: #333333;">
                            <li style="margin-bottom: 10px;">Visit our tracking page at <a href="' . $tracking_url . '" style="color: #2f338d; text-decoration: none; font-weight: 600;">' . $tracking_url . '</a></li>
                            <li style="margin-bottom: 10px;">Enter your tracking number: <strong>' . $tracking_number . '</strong></li>
                            <li>Click "Track Shipment" to view real-time status updates</li>
                        </ol>
                    </td>
                </tr>
            </table>
            
            <!-- CTA Button -->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin: 0 0 30px;">
                <tr>
                    <td align="center">
                        <a href="' . $tracking_url . '" style="display: inline-block; background: linear-gradient(135deg, #ec2025 0%, #c91d22 100%); color: #ffffff; padding: 16px 40px; text-decoration: none; border-radius: 6px; font-weight: 600; font-size: 16px; box-shadow: 0 4px 12px rgba(236, 32, 37, 0.3);">
                            🚀 Track Your Shipment Now
                        </a>
                    </td>
                </tr>
            </table>
            
            <!-- Need help section -->
            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <td style="background: #f8f9fa; padding: 20px; border-radius: 8px; border-left: 4px solid #2f338d;">
                        <p style="margin: 0 0 10px; font-size: 16px; color: #333333; font-weight: 600;">📞 Need Assistance?</p>
                        <p style="margin: 0; font-size: 14px; color: #666666; line-height: 1.6;">
                            Our support team is here to help!<br>
                            <strong>Email:</strong> <a href="mailto:' . MAIL_SUPPORT_EMAIL . '" style="color: #2f338d; text-decoration: none;">' . MAIL_SUPPORT_EMAIL . '</a><br>
                            <strong>Phone:</strong> +880 1844-167431<br>
                            <strong>Hours:</strong> Saturday - Thursday, 9:00 AM - 6:00 PM
                        </p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    
    <!-- Brand tagline -->
    <tr>
        <td align="center" style="background: #f8f9fa; padding: 20px; border-top: 1px solid #e9ecef;">
            <p style="margin: 0; font-size: 14px; color: #666666; font-style: italic;">
                "Your trusted partner in global logistics solutions"
            </p>
        </td>
    </tr>';
    
    return emailTemplate($content, [
        'title' => 'Shipment Tracking - ' . $tracking_number,
        'preheader' => 'Your shipment ' . $tracking_number . ' has been created. Track it now!'
    ]);
}

/**
 * Shipment status update email template
 * 
 * @param array $data Shipment data with status update
 * @return string HTML email
 */
function statusUpdateEmailTemplate($data) {
    $tracking_number = $data['tracking_number'];
    $customer_name = htmlspecialchars($data['customer_name']);
    $new_status = ucwords(str_replace('_', ' ', $data['status']));
    $location = htmlspecialchars($data['location']);
    $description = htmlspecialchars($data['description'] ?? '');
    $tracking_url = TRACKING_URL;
    
    // Status colors and icons
    $status_colors = [
        'pending' => '#6c757d',
        'collected' => '#0dcaf0',
        'in_transit' => '#0d6efd',
        'customs' => '#ffc107',
        'out_for_delivery' => '#198754',
        'delivered' => '#198754'
    ];
    $color = $status_colors[$data['status']] ?? '#6c757d';
    
    $content = '
    <!-- Header -->
    <tr>
        <td align="center" style="background: linear-gradient(135deg, #2f338d 0%, #1e2259 100%); padding: 40px 20px;">
            <img src="" alt="Farhan Logistics" style="height: 60px; width: auto; display: block; margin: 0 auto;" />
            <h1 style="margin: 20px 0 0; color: #ffffff; font-size: 28px; font-weight: 700;">Shipment Status Update</h1>
        </td>
    </tr>
    
    <!-- Main content -->
    <tr>
        <td class="content-block" style="padding: 40px 30px;">
            <p style="margin: 0 0 20px; font-size: 16px; line-height: 1.6; color: #333333;">
                Dear <strong>' . $customer_name . '</strong>,
            </p>
            
            <p style="margin: 0 0 30px; font-size: 16px; line-height: 1.6; color: #333333;">
                Your shipment <strong>' . $tracking_number . '</strong> has been updated.
            </p>
            
            <!-- Status box -->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin: 0 0 30px;">
                <tr>
                    <td style="background: ' . $color . '; padding: 30px; border-radius: 8px; text-align: center;">
                        <p style="margin: 0 0 10px; font-size: 14px; color: rgba(255,255,255,0.9); text-transform: uppercase; letter-spacing: 1px;">Current Status</p>
                        <p style="margin: 0; font-size: 28px; font-weight: 700; color: #ffffff;">' . $new_status . '</p>
                    </td>
                </tr>
            </table>
            
            <!-- Update details -->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin: 0 0 30px;">
                <tr>
                    <td style="background: #f8f9fa; padding: 20px; border-radius: 8px; border-left: 4px solid ' . $color . ';">
                        <p style="margin: 0 0 10px; font-size: 14px; color: #666666;"><strong>Location:</strong> ' . $location . '</p>
                        ' . ($description ? '<p style="margin: 0; font-size: 14px; color: #333333;">' . $description . '</p>' : '') . '
                    </td>
                </tr>
            </table>
            
            <!-- CTA Button -->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin: 0 0 20px;">
                <tr>
                    <td align="center">
                        <a href="' . $tracking_url . '" style="display: inline-block; background: linear-gradient(135deg, #ec2025 0%, #c91d22 100%); color: #ffffff; padding: 16px 40px; text-decoration: none; border-radius: 6px; font-weight: 600; font-size: 16px; box-shadow: 0 4px 12px rgba(236, 32, 37, 0.3);">
                            View Full Tracking History
                        </a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>';
    
    return emailTemplate($content, [
        'title' => 'Status Update - ' . $tracking_number,
        'preheader' => 'Your shipment status has been updated to: ' . $new_status
    ]);
}

/**
 * Quote request confirmation email
 * 
 * @param array $data Quote data
 * @return string HTML email
 */
function quoteConfirmationEmailTemplate($data) {
    $customer_name = htmlspecialchars($data['name']);
    $service_type = htmlspecialchars($data['service_type'] ?? 'N/A');
    
    $content = '
    <tr>
        <td align="center" style="background: linear-gradient(135deg, #2f338d 0%, #1e2259 100%); padding: 40px 20px;">
            <h1 style="margin: 0; color: #ffffff; font-size: 28px; font-weight: 700;">Quote Request Received</h1>
        </td>
    </tr>
    <tr>
        <td class="content-block" style="padding: 40px 30px;">
            <p style="margin: 0 0 20px; font-size: 16px;">Dear <strong>' . $customer_name . '</strong>,</p>
            <p style="margin: 0 0 20px; font-size: 16px;">Thank you for your quote request for <strong>' . $service_type . '</strong> services.</p>
            <p style="margin: 0 0 20px; font-size: 16px;">Our team will review your requirements and get back to you within 24 hours with a competitive quote.</p>
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin: 20px 0;">
                <tr>
                    <td style="background: #f8f9fa; padding: 20px; border-radius: 8px;">
                        <p style="margin: 0; font-size: 14px; color: #666666;">Reference ID: <strong>#' . uniqid() . '</strong></p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>';
    
    return emailTemplate($content, [
        'title' => 'Quote Request Confirmation',
        'preheader' => 'We received your quote request and will respond shortly'
    ]);
}

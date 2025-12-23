<?php
header('Content-Type: application/json');
require_once dirname(__DIR__) . '/config/db.php';

try {
    if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
        throw new Exception('Invalid request method');
    }

    $trackingNumber = isset($_GET['tracking_number']) ? trim($_GET['tracking_number']) : '';

    if (empty($trackingNumber)) {
        throw new Exception('Please provide a tracking number');
    }

    // Validate tracking number format (FL followed by 9 digits)
    if (!preg_match('/^FL\d{9}$/', $trackingNumber)) {
        throw new Exception('Invalid tracking number format. Expected format: FL123456789');
    }

    // Fetch shipment details
    $stmt = $pdo->prepare("
        SELECT 
            tracking_number,
            customer_name,
            customer_email,
            origin,
            destination,
            service_type,
            current_status,
            estimated_delivery,
            actual_delivery,
            created_at
        FROM shipment_tracking 
        WHERE tracking_number = ?
    ");
    $stmt->execute([$trackingNumber]);
    $shipment = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$shipment) {
        echo json_encode([
            'success' => false,
            'message' => 'Tracking number not found. Please verify your tracking number and try again.'
        ]);
        exit;
    }

    // Fetch tracking events/history
    $stmt = $pdo->prepare("
        SELECT 
            event_type,
            location,
            description,
            event_date
        FROM tracking_events 
        WHERE tracking_number = ?
        ORDER BY event_date DESC
    ");
    $stmt->execute([$trackingNumber]);
    $events = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Format dates
    $shipment['created_at_formatted'] = date('M d, Y h:i A', strtotime($shipment['created_at']));
    $shipment['estimated_delivery_formatted'] = $shipment['estimated_delivery'] ? date('M d, Y', strtotime($shipment['estimated_delivery'])) : 'TBD';
    $shipment['actual_delivery_formatted'] = $shipment['actual_delivery'] ? date('M d, Y h:i A', strtotime($shipment['actual_delivery'])) : null;

    // Format events
    foreach ($events as &$event) {
        $event['event_date_formatted'] = date('M d, Y h:i A', strtotime($event['event_date']));
    }

    // Determine status badge class
    $statusBadgeClass = '';
    switch ($shipment['current_status']) {
        case 'pending':
            $statusBadgeClass = 'bg-secondary';
            break;
        case 'collected':
            $statusBadgeClass = 'bg-info';
            break;
        case 'in_transit':
            $statusBadgeClass = 'bg-primary';
            break;
        case 'customs':
            $statusBadgeClass = 'bg-warning';
            break;
        case 'out_for_delivery':
            $statusBadgeClass = 'bg-info';
            break;
        case 'delivered':
            $statusBadgeClass = 'bg-success';
            break;
        default:
            $statusBadgeClass = 'bg-secondary';
    }

    echo json_encode([
        'success' => true,
        'data' => [
            'shipment' => $shipment,
            'events' => $events,
            'statusBadgeClass' => $statusBadgeClass
        ]
    ]);

} catch (PDOException $e) {
    error_log('Database error in tracking handler: ' . $e->getMessage());
    echo json_encode([
        'success' => false,
        'message' => 'An error occurred while fetching tracking information. Please try again later.'
    ]);
} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'message' => $e->getMessage()
    ]);
}

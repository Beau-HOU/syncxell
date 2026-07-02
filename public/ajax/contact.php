<?php
ob_start();
session_start();
require_once '../../service/url.php';
require_once '../../service/service.php';

ob_end_clean();
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

$name    = trim($_POST['contact_name']    ?? '');
$email   = trim($_POST['contact_email']   ?? '');
$phone   = trim($_POST['contact_phone']   ?? '');
$org     = trim($_POST['contact_org']     ?? '');
$sector  = trim($_POST['contact_sector']  ?? '');
$message = trim($_POST['contact_message'] ?? '');

if (!$name || !$email || !$message) {
    echo json_encode(['success' => false, 'message' => 'Please fill in all required fields (name, email, message).']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Please enter a valid email address.']);
    exit;
}

$name    = htmlspecialchars($name);
$email   = htmlspecialchars($email);
$phone   = htmlspecialchars($phone);
$org     = htmlspecialchars($org);
$sector  = htmlspecialchars($sector);
$message = htmlspecialchars($message);

$to      = params('admin_email');
$subject = "New Contact Request — SYNCXELL | {$name}";
$body    = "Name:         {$name}\n"
         . "Email:        {$email}\n"
         . "Phone:        {$phone}\n"
         . "Organization: {$org}\n"
         . "Sector:       {$sector}\n"
         . "\nMessage:\n{$message}";
$headers = "From: noreply@syncxell.com\r\n"
         . "Reply-To: {$email}\r\n"
         . "X-Mailer: PHP/" . phpversion();

@mail($to, $subject, $body, $headers);

echo json_encode([
    'success' => true,
    'message' => 'Your message has been received. Our team will contact you within one business day.',
]);

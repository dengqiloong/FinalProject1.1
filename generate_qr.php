<?php
session_start();
require 'phpqrcode/qrlib.php';

// Generate a unique QR code URL (you can use more complex logic here if needed)
$qrCodeContent = 'http://example.com/attendance?token=' . uniqid();
$_SESSION['qr_code_content'] = $qrCodeContent;

// Generate QR code image
QRcode::png($qrCodeContent, 'qr_code.png');

// Return the QR code image URL
echo json_encode(['qr_code_url' => 'qr_code.png']);
?>

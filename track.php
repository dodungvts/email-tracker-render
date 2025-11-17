<?php
// Ghi log khi email mở
$log = [
    'ip' => $_SERVER['REMOTE_ADDR'] ?? 'unknown',
    'time' => date('Y-m-d H:i:s'),
    'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'unknown',
    'referer' => $_SERVER['HTTP_REFERER'] ?? 'email'
];
file_put_contents('log.txt', json_encode($log) . PHP_EOL, FILE_APPEND | LOCK_EX);

// Trả về font (giả lập)
header('Content-Type: font/ttf');
header('Cache-Control: no-cache');
echo base64_decode('VGVzdCBmb250IGZvciB0cmFja2luZw=='); // font nhỏ
?>


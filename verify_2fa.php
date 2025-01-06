<?php
session_start();
require_once '../config/db_connection.php';

if (!isset($_SESSION['2fa'])) {
    header("Location: /public/login.html");
    exit();
}

// Logic xác thực 2FA ở đây
?>
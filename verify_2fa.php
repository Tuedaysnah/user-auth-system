<?php
session_start();
require_once 'db_connection.php';

if (!isset($_SESSION['2fa'])) {
    header("Location: login.html");
    exit();
}

// Logic xác thực 2FA ở đây
?>
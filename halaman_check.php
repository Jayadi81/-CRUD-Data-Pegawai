<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: loginn.php");
    exit();
}

// Konten halaman yang hanya bisa diakses oleh user yang login
?>

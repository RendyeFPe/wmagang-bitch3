<?php
session_start();
session_destroy(); // Menghapus semua data session
header('Location: index.php');
exit;
?>

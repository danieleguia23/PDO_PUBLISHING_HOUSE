<?php
include 'db_connect.php';
if (isset($_GET['id'])) {
    $stmt = $pdo->prepare("DELETE FROM books WHERE book_id = ?");
    $stmt->execute([$_GET['id']]);
    header("Location: index.php");
}
?>
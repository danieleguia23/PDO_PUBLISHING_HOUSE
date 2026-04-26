<?php 
include 'db_connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $pdo->prepare("INSERT INTO books (title, genre, author_id) VALUES (?, ?, ?)");
    $stmt->execute([$_POST['title'], $_POST['genre'], $_POST['author_id']]);
    header("Location: index.php");
}
?>
<form method="POST">
    <input type="text" name="title" placeholder="Book Title" required><br>
    <input type="text" name="genre" placeholder="Genre"><br>
    <input type="number" name="author_id" placeholder="Author ID" required><br>
    <button type="submit">Save Book</button>
</form>
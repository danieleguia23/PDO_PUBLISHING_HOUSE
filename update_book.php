<?php
include 'db_connect.php';
$id = $_GET['id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $pdo->prepare("UPDATE books SET title = ?, genre = ? WHERE book_id = ?");
    $stmt->execute([$_POST['title'], $_POST['genre'], $id]);
    header("Location: index.php");
}
$stmt = $pdo->prepare("SELECT * FROM books WHERE book_id = ?");
$stmt->execute([$id]);
$book = $stmt->fetch();
?>
<form method="POST">
    <input type="text" name="title" value="<?php echo $book['title']; ?>"><br>
    <input type="text" name="genre" value="<?php echo $book['genre']; ?>"><br>
    <button type="submit">Update Book</button>
</form>
<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html>
<head><title>PDO Publishing House</title></head>
<body>
    <h1>Author's Books List</h1>
    <a href="add_book.php">Add New Book</a>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Genre</th>
            <th>Author ID</th>
            <th>Actions</th>
        </tr>
        <?php
        $stmt = $pdo->query("SELECT * FROM books");
        while ($row = $stmt->fetch()) {
            echo "<tr>
                <td>{$row['book_id']}</td>
                <td>{$row['title']}</td>
                <td>{$row['genre']}</td>
                <td>{$row['author_id']}</td>
                <td>
                    <a href='update_book.php?id={$row['book_id']}'>Edit</a> | 
                    <a href='delete_book.php?id={$row['book_id']}'>Delete</a>
                </td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>
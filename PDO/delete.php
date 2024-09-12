<?php
// Kết nối tới MySQL sử dụng PDO
$dbh = new PDO('mysql:host=localhost;dbname=melody', 'root', '');
$sql_stmt = "DELETE FROM my_contacts WHERE id = :id";
$stmt = $dbh->prepare($sql_stmt);
$stmt->bindParam(':id', $id);
$id = 8;

$stmt->execute();

echo "đã xóa";

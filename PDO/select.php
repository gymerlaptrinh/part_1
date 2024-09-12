<?php
// Kết nối tới MySQL sử dụng PDO
$dbh = new PDO('mysql:host=localhost;dbname=melody', 'root', '');
$sql_stmt = "SELECT * FROM my_contacts";
$stmt = $dbh->query($sql_stmt);
if ($stmt->rowCount() > 0) {
    // Lặp qua các bản ghi trả về
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Full Name: " . $row['full_names'] . "<br>";
        echo "Gender: " . $row['gender'] . "<br>";
        echo "Contact No: " . $row['contact_no'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";
        echo "City: " . $row['city'] . "<br>";
        echo "Country: " . $row['country'] . "<br>";
        echo "<hr>";
    }
}

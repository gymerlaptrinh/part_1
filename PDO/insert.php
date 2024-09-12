<?php
// Kết nối tới MySQL sử dụng PDO
$dbh = new PDO('mysql:host=localhost;dbname=melody', 'root', '');

// Chuẩn bị câu lệnh SQL với placeholders
$sql_stmt = "INSERT INTO my_contacts (
        id,
        full_names,
        gender,
        contact_no,
        email,
        city,
        country
    ) VALUES (:id, :full_names, :gender, :contact_no, :email, :city, :country)";


$stmt = $dbh->prepare($sql_stmt);

$stmt->bindParam(':id', $id);
$stmt->bindParam(':full_names', $full_names);
$stmt->bindParam(':gender', $gender);
$stmt->bindParam(':contact_no', $contact_no);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':city', $city);
$stmt->bindParam(':country', $country);

$id = 21;
$full_names = 'TMT';
$gender = 'Male';
$contact_no = '77';
$email = 'tmt@gmail.com';
$city = 'ss';
$country = 'HN';

$stmt->execute();
echo "Đã thêm";

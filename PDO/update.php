<?php

$dbh = new PDO('mysql:host=localhost;dbname=melody', 'root', '');

$sql_stmt = "UPDATE my_contacts SET 
        full_names = :full_names,
        gender = :gender,
        contact_no = :contact_no,
        email = :email,
        city = :city,
        country = :country
    WHERE id = :id";

$stmt = $dbh->prepare($sql_stmt);

// Gán giá trị cho các tham số
$stmt->bindParam(':id', $id);
$stmt->bindParam(':full_names', $full_names);
$stmt->bindParam(':gender', $gender);
$stmt->bindParam(':contact_no', $contact_no);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':city', $city);
$stmt->bindParam(':country', $country);


$id = 8;
$full_names = 'Trần Mạnh Thắng';
$gender = 'nam';
$contact_no = '8798';
$email = 'tmt2@gmail.com';
$city = 'bn';
$country = 'hn';

$stmt->execute();

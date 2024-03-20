<?php
include 'createtable_db.php';
$DuLieu = 'task';
$Completed = '0';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $sql = "INSERT INTO CongViec (tittle, completed)
    VALUES ($DuLieu, $Completed)";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
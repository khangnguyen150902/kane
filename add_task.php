<?php
include 'createtable_db.php';

$DuLieu = $_POST['task'];
$Completed = '0';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['add_DB'])){
        $sql = "INSERT INTO CongViec (title, completed)
        VALUES ('$DuLieu', 0)";
        if (mysqli_query($conn, $sql)) {
            echo "Thêm thành công";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        header('Location: TodoList.php');
    }
}
?>
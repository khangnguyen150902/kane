
<?php
$servername = "localhost";
$username = "root";
$password = "";
$namedb = 'dtabase';
//Tạo kết nối
$conn = mysqli_connect($servername, $username, $password,);
//Kiểm tra kết nối
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
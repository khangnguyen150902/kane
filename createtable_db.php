<?php 
include 'connect_db.php';

$namedb = "dtabase";

// Kiểm tra xem database đã tồn tại hay chưa
$sql = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$namedb'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    // Nếu database chưa tồn tại, thực hiện tạo mới
    $sql_create_db = "CREATE DATABASE $namedb";
    if (!mysqli_query($conn, $sql_create_db)) {
        echo "Lỗi tạo database: " . mysqli_error($conn);
    }
}

$conn = mysqli_connect($servername, $username, $password,$namedb);
//Tạo cơ sở dữ liệu
// Tên bảng bạn muốn kiểm tra/tạo
$table_name = "CongViec";

// Kiểm tra xem bảng đã tồn tại hay chưa
$sql_check_table = "SHOW TABLES LIKE '$table_name'";
$result_check_table = mysqli_query($conn, $sql_check_table);

if (mysqli_num_rows($result_check_table) == 0) {
    // Nếu bảng chưa tồn tại, thực hiện tạo mới
    $sql_create_table = "CREATE TABLE $table_name (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title NVARCHAR(100) NOT NULL,
        completed BOOLEAN NOT NULL, 
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
        ON UPDATE CURRENT_TIMESTAMP
    )";
    if (!mysqli_query($conn, $sql_create_table)) {
       echo "Lỗi tạo bảng: " . mysqli_error($conn);
    }
}
?>

<?php
// Kết nối đến cơ sở dữ liệu
include 'createtable_db.php';

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . mysqli_connect_error());
}

// Lấy dữ liệu từ yêu cầu AJAX
$taskId = $_POST['taskId'];
$completed = $_POST['completed'];

// Cập nhật trạng thái hoàn thành của công việc trong cơ sở dữ liệu
$sql = "UPDATE CongViec SET completed = $completed WHERE id = $taskId";

if (!mysqli_query($conn, $sql)) {
    echo "Lỗi cập nhật dữ liệu: " . mysqli_error($conn);
}
?>

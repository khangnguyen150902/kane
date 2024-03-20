<?php
include 'createtable_db.php';

// Kiểm tra xem có yêu cầu POST từ form hay không
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete_db'])) {
        $taskId = $_POST['task_id'];

        // Xoá dữ liệu từ bảng
        $sql = "DELETE FROM CongViec WHERE id = $taskId";
        if (mysqli_query($conn, $sql)) {
            echo "Xoá thành công";
        } else {
            echo "Lỗi: " . mysqli_error($conn);
        }
        header('Location: TodoList.php');
    }
}
?>
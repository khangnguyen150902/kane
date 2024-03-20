<?php 
//Truy vấn
include 'createtable_db.php';

$sql = "SELECT * FROM CongViec";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Hiển thị danh sách công việc
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<li class="list-group-item">';
        // Checkbox
        echo '<form action="delete_db.php" method ="POST">'; 
        if ($row['completed'] == 1) {
            echo '<input style="margin-right: 5px;" type="checkbox" name="task_checkbox" value="' . $row['id'] . '" checked>';
        } else {
            echo '<input style="margin-right: 5px;" type="checkbox" name="task_checkbox" value="' . $row['id'] . '">';
        }
        echo $row['title'];
        // Trường hidden để lưu trữ giá trị của title
        echo '<input type="hidden" name="task_id" value="' . $row['id'] . '">';
        // Nút "Xoá"
        echo '<button class="btn btn-danger btn-xs pull-right" name="delete_db">Xoá</button></form>';
        echo '</li>';
    }
} else {
    echo '<li class="list-group-item">Không có công việc nào được tìm thấy.</li>';
}
?>

<script>
$(document).ready(function(){
    $('input[name="task_checkbox"]').on('change', function(){
        var taskId = $(this).val();
        var completed = this.checked ? 1 : 0;

        $.ajax({
            type: 'POST',
            url: 'update_task_status.php',
            data: {taskId: taskId, completed: completed},
            success: function(response) {
                console.log(response);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
});
</script>
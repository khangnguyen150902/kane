<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <form action="add_task.php" method ="POST">
            <div class="form-group">
                <input style="margin-top: 50px;" type="text" class="form-control" placeholder="Nhập Công Việc" name="task">
            </div>
            <button type="submit" class="btn btn-primary" name="add_DB" >Thêm công việc</button>
        </form>
        <br>
        <h2 class="text-center">Danh Sách Công Việc</h2>
        <ul class="list-group mt-3">
            <?php include 'show_tasks.php' ?>
        </ul>
    </div>
</body>
</html>
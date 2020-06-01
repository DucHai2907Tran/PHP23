<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="post1_2.php" method="POST" role="form">
            <legend><h3 align="Center"><b>ZENT GROUP - PHP - Thực hành về gửi giữ liệu dùng POST</b></h3></legend>
            
            <div class="form-group">
                <label for="">Mã Sinh Viên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập mã sinh viên" name="msv">
            </div>
            
            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập họ và tên" name="hvt">
            </div>

            <div class="form-group">
                <label for="">Số điện thoai</label>
                <input type="text" class="form-control" id="" placeholder="Nhập số điện thoại" name="sdt">
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="Nhập Email" name="email">
            </div>
            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" id="" placeholder="Nhập địa chỉ" name="dc">
            </div>
            
            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>
</body>
</html>
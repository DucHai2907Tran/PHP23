<?php 
  require_once('../../connection.php');

  //category
  //Câu lệnh truy vấn
  $query_category = "SELECT * FROM categories";

  //Thực thi câu lệnh
  $result_cate = $conn->query($query_category);

  //Tạo ra một bảng chứa dữ liệu
  $categories = array();

  while ($row = $result_cate->fetch_assoc()) {
    $categories[] = $row;
  }
  //Load post Lấy dữ liệu cần sửa
  $id = $_GET['id'];
  $query_post = "SELECT * FROM posts WHERE id = ".$id;
  $post = $conn->query($query_post)->fetch_assoc();
  //End Load post
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">Zent - Education And Technology Group</h3>
    <h3 align="center">Update Post Information</h3>
    <hr>
    <?php if (isset($_COOKIE['msg'])) { ?>
        <div class="alert alert-warning">
          <strong>Thông báo</strong> <?= $_COOKIE['msg']?> 
       </div>
    <?php } ?>
        <form action="post_edit_action.php" method="POST" role="form" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $post['id'] ?>">
            <div class="form-group">
                <label for="">Title</label>
                <input value="<?= $post['title']?>" type="text" class="form-control" id="" placeholder="" name="title">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input value="<?= $post['description']?>" type="text" class="form-control" id="" placeholder="" name="description">
            </div>
            <div class="form-group">
                <label for="">Contents</label>
                <textarea class="form-control" id="" placeholder="" name="contents" rows="8"><?= $post['contents']?></textarea>
            </div>
            <div class="form-group">
                <label for="">Category</label>
                <select name="category_id" class="form-control">
                    <?php foreach ($categories as $cate) { ?>
                    <option <?= ($post['category_id']==$cate['id']?"selected":'') ?> value="<?= $cate['id'] ?>"><?= $cate['title'] ?></option>
                    <?php } ?>
            </select>
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <td><img src="../../img/<?= $post['thumbnail']?>" alt="" width="300px" height="200px"></td>
                <input type="file" class="form-control" id="" placeholder="" name="thumbnail">
            </div>
             <div class="form-group">
                <label for="">Hiện thị bài viết</label>
                <input <?= ($post['status']==1?"checked":'') ?> type="checkbox" id="" placeholder="" value="1" name="status"> <em>(Check để hiện thị bài viết)</em>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
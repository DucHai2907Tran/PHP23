<?php 

	require_once('../../connection.php');
	//Load post
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
    	<h3 align="center">Zent - Education Anh Technology Group</h3>
    	<h3 align="center">Posts Detail</h3>
    	<hr>
    	<h2>Title : <?= $post['title']?></h2>
    	<h3>Description : <?= $post['description']?></h3>
        <td><img src="<?= $post['thumbnail']?>" alt="" width="300px" height="200px"></td>
        <h5>Created_at : <?= $post['created_at']?></h5>
        <h3>Content : <?= $post['contents']?></h3>
    </div>
</body>
</html>
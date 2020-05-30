<?php 

	require_once('../../connection.php');
	//Load author
	$id = $_GET['id'];
	$query_author = "SELECT * FROM authors WHERE id = ".$id;
	$author = $conn->query($query_author)->fetch_assoc();
	
	//End Load author
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
    	<h3 align="center">Category Detail</h3>
    	<hr>
    	<h2>name : <?= $author['name']?></h2>
    	<h2>Email : <?= $author['email']?></h2>
    </div>
</body>
</html>
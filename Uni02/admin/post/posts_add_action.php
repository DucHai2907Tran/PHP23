<?php 
	require_once('../../connection.php');

	$target_dir = "../../img/";
	$thumbnail="";


	$title = $_POST['title'];
	$description = $_POST['description'];;
	$content = $_POST['contents'];
	$thumbnail = $_POST['thumbnail'];
	$query = "INSERT INTO categories(title,description) VALUES ('".$title."','".$description."');";
	$status = $conn->query($query);
	if ($status == true) {
		setcookie('msg','Thêm mới thành công',time()+5);
		header('Location: post.php');
	}else{
		setcookie('msg','Thêm mới không thành công',time()+5);
		header('Location: post_add.php');
	}
 ?>
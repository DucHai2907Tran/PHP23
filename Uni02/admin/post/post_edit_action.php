<?php 
	require_once('../../connection.php');

	date_default_timezone_set('Asia/Ho_Chi_Minh');

	$target_dir = "../../img/";
	$thumbnail = "";

	$target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên

	$status_upload = move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file);

	if ($status_upload) { // nếu upload file không có lỗi 
	    $thumbnail = "',thumbnail = '".basename( $_FILES["thumbnail"]["name"]."");
	}
	//  
	$id = $_POST['id'];

	$title = $_POST['title'];
	$description = $_POST['description'];
	$contents = $_POST['contents'];

	$status = 0;
	if (isset($_POST['status'])) {
		$status = $_POST['contents'];
	}
	$category_id = $_POST['category_id'];
	$author_id = 1;
	$created_at = date('Y-m-d H:i:s');

	$query = "UPDATE posts SET title='".$title."',description='".$description."',contents='".$contents."',author_id='".$author_id."',category_id='".$category_id.$thumbnail."',status='".$status."' WHERE id =".$id;
	// die($query);

	$status = $conn->query($query);
	// die($query);
	if ($status == true) {
		setcookie('msg','Cập nhật thành công',time()+5);
		header('Location: post.php');
	} else {
		setcookie('msg','Cập nhật không thành công',time()+5);
		header('Location: post.php');
	}

?>
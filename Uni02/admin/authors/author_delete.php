<?php 
	require_once('../../connection.php');
	$id = $_GET['id'];
	$query = "DELETE FROM authors WHERE id =".$id;
	$status = $conn->query($query);
	if ($status == true) {
		setcookie('msg','Xóa thành công',time()+5);
	}else{
		setcookie('msg','Xóa không thành công',time()+5);
	}
	header('Location: author.php');
 ?>
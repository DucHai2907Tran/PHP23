<?php 
//THÔNG SỐ KẾT NÔI CSDL

$severname = "localhost";

$username = "root";

$password = "";

$dbname = "blogs";


//Tạo kết nối đến CSDL

$conn = new mysqli($severname, $username, $password, $dbname);

//Câu lệnh truy vấn
$query = "SELECT * FROM categories";

//Thực thi câu lệnh
$result = $conn->query($query);

//Tạo 1 mảng để chứa dữ liệu
$categories = array();

while($row = $result->fetch_assoc()) {
	$categories[] = $row;
}

foreach ($categories as $cate) {
	echo "<pre>";
			print_r($cate);
	echo "</pre>";
}

?>

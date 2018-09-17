<?php 
if (isset($_POST['btn-upload'])) {
	
	$img = $_FILES['img']['name'];
	$img_loc = $_FILES['img']['tmp_name'];
	$folder = "uploads/";
	if (move_uploaded_file($img_loc, $folder.$img)) {
		echo "Upload Sukses <br>";
		echo "<img src = '".$folder.$img."'>";
	}
	else{
		echo "Upload Gagal";
	}
}

 ?>

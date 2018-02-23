<?php require "inc/conn.php";?>
<!DOCTYPE html>
<html>
<head>
	<title>KassaBro AdminPanel</title>
</head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3mobile.css">
<body>
<form action="admin_panel.php" method="POST" enctype="multipart/form-data" class="form-control">
	
	<table>
		<tr>
			<td><label>Category</label></td>
			<td>
				<?php 
					$query = "SELECT * FROM `tbl_cat`"; 
					$result =mysqli_query($conn,$query)?>
					<select name='txt_cat' id="txt_cat" class='form-control'><br>
					<?php    
					while ($row = mysqli_fetch_assoc($result)) {
						unset($id,$name);
						$id = $row['cat_id'];
						$name = $row['cat_name'];  
						echo '<option value="'.$name.'" name="'.$id.'">'.$name.'</option>';
					}
					echo "</select>";
				?>
			</td>
		</tr>
		<tr>
			<td><label>Category Id</label></td>
			<td><input type="text" name="txt_channel_id" id="txt_channel_id" class="form-control"></td>
		</tr>
		<tr>
			<td><label>Video Title</label></td>
			<td><input type="text" name="txt_title" id="txt_title" class="form-control"></td>
		</tr>
		<tr>
			<td><label>Video Description</label></td>
			<td><input type="text" name="txt_desc" id="txt_desc" class="form-control"></td>
		</tr>
		<tr>
			<td><label>Video Image</label></td>
			<td><input type="file" name="txt_file" id="txt_file" class="form-control"></td>
		</tr>
		<tr>
			<td><label>Video Link</label></td>
			<td><input type="text" name="txt_link" id="txt_link" class="form-control"></td>
		</tr>
		<tr>
			<td><button type="submit" name="submit" id="submit" class="form-control">Submit</button></td>
			<td><button type="submit" name="cancal" id="cancal" class="form-control">Cancal</button></td>
		</tr>
	</table>
</form>	
<?php
if (isset($_POST['submit'])) {
		
		$wdate = $_POST['txt_cat'];
		$wname = $_POST['txt_channel_id'];
		$waddress = $_POST['txt_title'];
		$wmphone = $_POST['txt_desc'];
		$whphone = $_POST['txt_link'];

		$image = $_FILES['txt_file']['name'];
    	$file_type = $_FILES['txt_file']['type'];
    	$file_size = $_FILES['txt_file']['size'];
    	$temp_name = $_FILES['txt_file']['tmp_name'];
    	$upload_to = 'img/';
    	if(move_uploaded_file($temp_name, $upload_to.$image)){
    		echo "done";
    	}else{
    		echo "error";
    	}
		$submit = "INSERT INTO `tbl_upload` (`up_cat_name`, `up_cat_id`, `up_title`, `up_desc`,`up_img`,`up_link`) VALUES ('$wdate', '$wname', '$waddress', '$wmphone', '$image' , '$whphone');";
		$workadd = mysqli_query($conn,$submit);
	

	if($workadd){
		echo "Post Add<br>";
	}else{
		echo "unable Add<br>";
	}
} 
?>
</body>
</html>
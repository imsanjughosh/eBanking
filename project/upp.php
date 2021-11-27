<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Update Profile</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<?php include ('header.php');
     if(empty($_SESSION['ardent'])){
	header('Location:login.php');}
                    
		 ?>

		<!-- Heading -->
			<div id="heading">
				<h1>Update Profile Credential</h1>
			</div>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">
						<form method="post" enctype="multipart/form-data">


							<?php
	if(isset($_SESSION['ardent']['id'])){
		$id = $_SESSION['ardent']['id'];
		# verify
		$verify = mysqli_query($connect,"SELECT id,name,email,mobile,path FROM open WHERE id='$id'");
		$count = mysqli_num_rows($verify);
		if($count==0)
			die("Something went wrong :/");

		$row = mysqli_fetch_array($verify);
	}
?>
	 

		<table>
		<tr>
			<td>
				Name
			</td>
			<td>
				<input type="text" name="name" value="<?php echo $row['name']?>">
			</td>
		</tr>
		<tr>
			<td>
				Email
			</td>
			<td>
				<input type="email" name="email" value="<?php echo $row['email']?>">
			</td>
		</tr>
		<tr>
			<td>
				Mobile Number
			</td>
			<td>
				<input type="text" name="mb" value="<?php echo $row['mobile']?>">
			</td>
		</tr>
	
		<tr>
			<td>
				Profile Pic
			</td>
			<td>
				<input type="file" name="ppic">
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="update" value="Save Changes">
			</td>
		</tr>
	</table>
</form>
<a href="profile.php">	<input id="sanju" type="submit"  name="okk" value="Can't Update"></a>

<?php
	if(isset($_POST['update'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mb'];
		$file_name=$_FILES['ppic']['name'];
	    $file_size=$_FILES['ppic']['size'];
	    $file_type=$_FILES['ppic']['type'];
	    $file_tmp_path=$_FILES['ppic']['tmp_name'];
	
		$id = $_SESSION['ardent']['id'];
		 $random_number = rand();
	$destination_path = "images/".$random_number.'_'.$file_name;
		if(empty($name) or empty($email) or empty($mobile) or empty($destination_path)){
			echo "Empty fields are not allowed";
		} else {

          
	if($file_type=="image/jpg" or $file_type=="image/png" or $file_type=="image/PNG" or $file_type=="image/JPG" or $file_type=="image/JPEG" or $file_type=="image/jpeg")
	{
		move_uploaded_file($file_tmp_path,$destination_path) or die($_FILES['ppic']['error']);
		$updateData = mysqli_query($connect,"UPDATE open SET path='$destination_path' WHERE id = '$id'") or die(mysql_error($connect));

	} else {
		echo "<h4>oops! File type must be JPG,PNG</h4>";
	}
	

			#update
			$up = mysqli_query($connect,"UPDATE open SET name ='$name',email='$email',mobile='$mobile',path='$destination_path' WHERE id ='$id'") or die(mysqli_error($connect));
			if($up) {
				header("Location:profile.php?msg=Success&bid=$id");
			}
		}
	}
	
?>
					</div>
				</div>
			</section>

		<!-- Footer -->
		<?php include ('footer.php');?>
	
	</body>
</html>
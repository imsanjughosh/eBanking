<?php
if(isset($_GET['id'])){
	$id = ($_GET['id']);
	include('connect.php');

	$verify = mysqli_query($connect,"SELECT id,balance FROM php1 WHERE id='$id'");
	$count = mysqli_num_rows($verify);
	if ($count==0)
	die("something went wrong :/");

$row =  mysqli_fetch_array($verify);
		# code...
}
?>
<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Profile</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
		<?php include ('header.php');
if(empty($_SESSION['sanju'])){
	header('Location:index.php');
} 
		 ?>

		<!-- Heading -->
			<div id="heading">
				<!-- <h1><h1>Hi <?php echo $_SESSION['ardent']['name']?></h1></h1> -->
				<h1><h1>Hi <?php echo $_SESSION['sanju']['name']?></h1></h1>
			</div>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">
						<!--------------------------------->
						<form method="post">
		<input type="hidden" name="id" value="<?php echo $row['id']?>">
			<table>
				<tr>
				<td>name</td>	
				<td><input type="type" name="balance" value="<?php echo $row['balance']?>" required></td>
				</tr>
				<tr>	
				<td><input type="submit" name="ok" value="save"></td>
				</tr>
			
			</table>
		</form>

	<?php
		if(isset($_POST['ok'])){
	$id= $_POST['id'];
	$name = $_POST['balance'];
	if(empty($balance)){
	echo("balance is empty");
	}
	 else{
$query = mysqli_query($connect,"UPDATE php1 SET balance='$balance' WHERE id='$id'") or die(mysqli_error($connect));
	if($query){
		header("Location:viewalluser.php?msg=Update Success");
	}
	}
	}
?>





						<!--------------------------------->
						
	

					</div>
				</div>
			</section>

		<!-- Footer -->
			<?php include ('footer.php'); ?>
	</body>
</html>
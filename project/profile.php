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


    <?php 
	  include ('header.php');
      if(empty($_SESSION['ardent']))
	  {
	    header('Location:login.php');
      } 
    ?>

    <!-- Heading -->
    <div id="heading">
        <!--<h1>Hi <?php echo $_SESSION['ardent']['name']?></h1>
			<br><br>--->
        <h1>Your Profile</h1>
    </div>

    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="inner">
            <div class="content">
                <!--<h4><?php // echo session_id() ?></h4>-->
                <?php

	$id = $_SESSION['ardent']['id'];

	$fetchURL = mysqli_query($connect,"SELECT path FROM open WHERE id ='$id'");
	// var_dump($fetchURL);
	// exit;
	// url => 'images/ajhadsgaskj.jpg'
	$picture = mysqli_fetch_array($fetchURL);
	?>

                <table border="1" cellpadding="10">
                    <thead>
                        <tr>
                            <th>
                                Identity
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Email
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img src="<?php echo $picture['path']?>" width="100" height="100">
                            </td>
                            <td>
                                <?php echo $_SESSION['ardent']['name']?>
                            </td>
                            <td>
                                <?php echo $_SESSION['ardent']['email'] ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a href="upp.php"><input type="submit" name="ok" value="Update Profile Pic"></a>
                <!-- <h1>Hi <?php echo $_SESSION['ardent']['name'].'<br>'.$_SESSION['ardent']['email']?></h1>
 -->
                <!-- <form method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>
				DOB
			</td>
			<td>
				<input type="date" name="dob" required>
			</td>
		</tr>
		<tr>
			<td>
				Profile Picture Upload
			</td>
			<td>
				<input type="file" name="ppic" required>
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="ok" value="Upload">
			</td>
		</tr>
		
	</table>
</form>
 -->
                <!--  <form>
			<tr>
			<td>
				<a href="passwordchange.php">Password Change</a>
			</td>
		</tr>
		</form> -->
                <?php
	if(isset($_POST['ok'])){
		// var_dump($_FILES);
		// exit;
		# normal POST data
		//$dob = $_POST['dob'];
		$id = $_SESSION['ardent']['id'];

		# file data
		/*$file_name = $_FILES['ppic']['name'];
		$file_size = $_FILES['ppic']['size'];
		$file_type = $_FILES['ppic']['type'];
		$file_tmp_path = $_FILES['ppic']['tmp_name'];
		*////echo $file_tmp_path;
		# destination path
		// images/abcd.jpg
		// rand function will generate a random number
		/*$random_number = rand();
		$destination_path = "images/".$random_number.'_'.$file_name;
		// if file is image or not
		if($file_type=="image/jpg" or $file_type=="image/png" or $file_type=="image/PNG" or $file_type=="image/JPG" or $file_type=="image/JPEG" or $file_type=="image/jpeg") {

			move_uploaded_file($file_tmp_path,$destination_path) or die($_FILES['ppic']['error']);

			$updateData = mysqli_query($connect,"UPDATE open SET  path= '$destination_path' WHERE id = '$id'") or die(mysqli_error($connect));

		} else {
			echo "<h4>oops! File type must be JPG,PNG</h4>";
		}
*/
	}
?>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include ('footer.php'); ?>
</body>

</html>
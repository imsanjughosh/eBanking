<?php
//include('connect.php');
//include ('header.php');
if(isset($_SESSION['sanju']['id'])){
	$id = ($_SESSION['sanju']['id']);
	

	$verify = mysqli_query($connect,"SELECT id FROM admin WHERE id='$id'");
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
	header('Location:index.php');}
                    
		 ?>

    <!-- Heading -->
    <div id="heading">
        <h1>Change Your Password</h1>
        <!--<h1><h1>Hi <?php echo $_SESSION['ardent']['name']?></h1></h1>-->
    </div>

    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="inner">
            <div class="content">

                <form method="post">
                    <input type="hidden" name="id" value="<?php echo $row['id']?>">
                    <table>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="pw" required></td>
                        </tr>
                        <tr>
                            <td>New_Password</td>
                            <td><input type="password" name="npw" required></td>
                        </tr>
                        <tr>
                            <td>Confirm_Password</td>
                            <td><input type="password" name="cpw" required></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="ok" value="change"></td>
                        </tr>


                    </table>
                </form>
                <?php
			if(isset($_POST['ok'])){
	$id= $_SESSION['sanju']['id'];
	$password =($_POST['pw']);
	$newpassword=($_POST['npw']);
	$confirmpassword=($_POST['cpw']);
	$query= "select * from admin WHERE password='$password' and id='$id'";
	$execute =mysqli_query($connect,$query) or die(mysqli_error($connect));
	$count=mysqli_num_rows($execute);
			if($count==1)
			{
			if($newpassword=$confirmpassword)
			{
				$query = mysqli_query($connect,"UPDATE admin SET password='$confirmpassword' WHERE id='$id'") or die(mysqli_error($connect));
				if($query){
		header("Location:changepassword.php?msg= Password Update Success");
	}
			}
			else
			{
				header("Location:changepassword.?msg= Password Update Fail");
			}
			}
			else{
				echo "incorrect password";
			}
			
		}
			?>




            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include ('footer.php'); ?>
</body>

</html>
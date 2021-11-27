<?php
include ('connect.php');

if(empty($_POST['email']) or empty($_POST['password'])) 
{
	header('Location:login.php?error=all-fields-requried');
}

$email = $_POST['email'];
$password =$_POST['password'];
// echo $password;
// exit;
$query = mysqli_query($connect,"SELECT * FROM open WHERE email = '$email' and password = '$password'") or die(mysqli_error($connect));

# check if valid user or not
if(mysqli_num_rows($query)==1)
{

	$row = mysqli_fetch_array($query);
	# user is valid :)
	$_SESSION['ardent'] = $row;
	//$_SESSION['gnit'] = "asjdjksadnksal";


	# redirect user to profile page
	header('Location:profile.php');


} 
else
{
	header("Location:login.php?error=invalid-user");
}


?>
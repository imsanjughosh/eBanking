<?php
include ('connect.php');

if(empty($_POST['em']) or empty($_POST['password'])) {
	header('Location:index.php?error=all-fields-requried');
}

$email = $_POST['em'];
$password = ($_POST['password']);
// echo $password;
// exit;
$query = mysqli_query($connect,"SELECT * FROM admin WHERE email = '$email' and password = '$password'") or die(mysqli_error($connect));

# check if valid user or not
if(mysqli_num_rows($query)==1) {

	$row = mysqli_fetch_array($query);
	# user is valid :)
	$_SESSION['sanju'] = $row;
	//$_SESSION['gnit'] = "asjdjksadnksal";


	# redirect user to profile page
	header('Location:profile.php');
} 
else
{
	header("Location:index.php?error=invalid-user");
}


?>
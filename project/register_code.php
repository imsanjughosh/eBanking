<?php
include('connect.php');

if(isset($_POST))
{
	$err = 0;
foreach ($_POST as $key => $value) 
{
	if(empty($value))
	{
		$err = 1;
	}
}	

if($err==1){
	die("All fields are required");
}

	# recieve data
	$name = $_POST['nm'];
	$gender=$_POST['gen'];
	$email = $_POST['em'];
	$mobile = $_POST['mb'];
	$password = $_POST['password'];
	$address = $_POST['adr'];
	#file data
	$file_name=$_FILES['ppic']['name'];
	$file_size=$_FILES['ppic']['size'];
	$file_type=$_FILES['ppic']['type'];
	$file_tmp_path=$_FILES['ppic']['tmp_name'];
	
	$andhar=$_POST['andhar'];
	$pan=$_POST['pan'];


	# checking if email duplicate or not
	$str = "SELECT * FROM open WHERE email='$email'";
	$execute = mysqli_query($connect,$str) or die(mysqli_error($connect));

	$count = mysqli_num_rows($execute);

	if( $count == 1 ) 
	{
		die("Email already exists");
	}

	
	$random_number = rand();
	$destination_path = "images/".$random_number.'_'.$file_name;
	if($file_type=="image/jpg" or $file_type=="image/png" or $file_type=="image/PNG" or $file_type=="image/JPG" or $file_type=="image/JPEG" or $file_type=="image/jpeg")
	{
		move_uploaded_file($file_tmp_path,$destination_path) or die($_FILES['ppic']['error']);
		// $updateData = mysqli_query($connect,"UPDATE open SET path= '$destination_path' WHERE id = '$id'") or die(mysql_error($connect));

	}
	else 
	{
		echo "<h4>oops! File type must be JPG,PNG</h4>";
	}
	# save the data in database
	$string = "INSERT INTO open VALUES (0,'$name','$gender','$email','$mobile','$password','$address','$destination_path','$andhar','$pan','','','')";
	$query = mysqli_query($connect,$string) or die(mysqli_error($connect));
	//var_dump($query);
	if($query)
	{
		# redirect from current page to the desired location
		header('Location:index.php?success=1');
		
	}

}
?>
<?php
include('connect.php');
if(isset($_GET['id']))

{
$id=$_GET['id'];
if($_GET['status']==1){

$random_number = rand();
$account_no = $random_number.'_'.$id;
$one=1;
$balance=5000;
} 
else 
{
$account_no = '';
$one=0;
$balance=0;
}


 $up = mysqli_query($connect,"UPDATE open SET accountno='$account_no',balance='$balance',status='$one' WHERE id='$id'") or die(mysqli_error($connect));
if($up)
{

header('Location:viewalluser.php?success=1');
}
}
      ?>
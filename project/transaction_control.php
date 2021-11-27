<?php
include('connect.php');
if (isset($_SESSION["ardent"]['id'])) {
	$_id = ($_SESSION["ardent"]['id']);
	//$openid=$_id;
	//echo"$_id";
	$query1=mysqli_query($connect,"SELECT accountno,balance FROM open WHERE id='$_id'");
	$row1=mysqli_fetch_array($query1);
	//print_r($row1);
	
	//If value gets using session ,not using user id
	// $accountno=$_SESSION['ardent']['accountno'];
	// $balance=$_SESSION['ardent']['balance'];


    //sender value get
	$accountno=$row1["accountno"];
	$balance=$row1["balance"];
	//echo "$accountno";
	//echo "$balance";
	if(empty($_POST['acc']) or empty($_POST['amt']) or empty($_POST['type'])) 
	 {
	header('Location:transaction.php?error=all-fields-requried');
     }

            $acc = $_POST['acc'];
            $amt =$_POST['amt'];
            $type=$_POST['type'];
           

            $query2=mysqli_query($connect,"SELECT accountno,balance FROM open WHERE accountno='$acc'");
            //$count=mysqli_num_rows($query2);
            $row2=mysqli_fetch_array($query2);

			//Reciver details get
            $balance2=$row2["balance"];
            $accountno2=$row2["accountno"];
            //echo "$accountno2";
            if ($accountno2==$acc) {
            	if ($balance>=$amt) {
            		$balance=$balance-$amt;
            		$query3=mysqli_query($connect,"UPDATE open SET balance='$balance' WHERE accountno= '$accountno'" );
            		$balance2=$balance2+$amt;
            		$query4=mysqli_query($connect,"UPDATE open SET balance='$balance2' WHERE accountno= '$accountno2'" );
            		$date=date('d-m-y');
            		$string="INSERT INTO transaction VALUES (0,'$accountno','$accountno2','$date','$amt','$type') ";
            		$query5=mysqli_query($connect,$string);

            		# code...
            		header('Location:history.php?msg:Transaction Successfull');

            		//echo "transaction Successfull";
            	}
            	else{
                    header('Location:checkbal.php?msg:Balance is insufficient');
            		//echo "Balance is not Sufficient ";
            	}
            	# code...
            }
            else{
                header('Location:transaction.php?msg:Account is no exist');
            	//echo "Account no.is not exist";
            }
	        
	        //echo "$accountno2";
	        //echo "$balance2";






           // echo "$acc";
             //echo "$amt";
              //echo "$type";
              //echo "$date";





	# code...
}
?>
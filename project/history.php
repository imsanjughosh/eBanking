<?php include ('header.php');
//include('connect.php');
if (isset($_SESSION["ardent"]['id'])) {
	$_id = ($_SESSION["ardent"]['id']);
	//$openid=$_id;
	//echo"$_id";
	$query1=mysqli_query($connect,"SELECT accountno FROM open WHERE id='$_id'");
	$row1=mysqli_fetch_array($query1);
	//print_r($row1);
	$accountno=$row1["accountno"];
	//echo "$accountno";



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

    <?php if(empty($_SESSION['ardent'])){
	header('Location:login.php');}
                    
		 ?>


    <!-- Heading -->
    <div id="heading">



        <h1>Your Profile</h1>
        <!--<h1><h1>Hi <?php echo $_SESSION['ardent']['name']?></h1></h1>-->
    </div>

    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="inner">
            <div class="content">
                <!----------------------------------------------->

                <!--DEBIT-->
                <h3 style="color:red;">DEBIT</h3>
                <?php
							$query= mysqli_query($connect,"SELECT * FROM transaction WHERE acc_no_from='$accountno' ");
		                    $count=mysqli_num_rows($query);
		


		if($count>0)
		{


			echo "No of record found=".$count;
			//if(isset($_GET['done']))
			//{
			//	echo"delete success";
			//}

			?>
                <form method="post" action="login_control.php">
                    <table border="1" cellpadding="10">

                        <thead>
                            <tr>
                                <th>
                                    T_id
                                </th>

                                <th>
                                    ACC_NO_FROM
                                </th>
                                <th>
                                    ACC_NO_TO
                                </th>
                                <th>
                                    T_DATE
                                </th>
                                <th>
                                    AMT
                                </th>
                                <th>
                                    TYPE
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
			$t_id=1;
			while($row=mysqli_fetch_array($query)){
				?>
                            <tr>
                                <td>
                                    <?php echo $t_id ?>
                                </td>
                                <td>
                                    <?php echo $row[1] ?>
                                </td>
                                <td>
                                    <?php echo $row[2] ?>
                                </td>
                                <td>
                                    <?php echo $row[3] ?>
                                </td>
                                <td>
                                    <?php echo $row[4] ?>
                                </td>

                                <td>
                                    <?php echo $row[5] ?>
                                </td>

                            </tr>
                            <?php
				$t_id++;
				} ?>

                        </tbody>
                    </table>


                    <!--we dont need this
						<?php
						if(isset($_GET['bid'])){
							if($row['id']==$_GET['bid']){
								echo"<h4 style ='background_color:green; color:white;padding:5px;'>
								Update Succesfull</h4>";
							}
						}
						?>-->


                    <?php
	}
	else{
		echo "no record found";}?>


                </form>




                <!--CREDIR-->
                <h3 style="color:green;">CREDIT</h3>
                <?php
							$query2= mysqli_query($connect,"SELECT * FROM transaction WHERE acc_no_to='$accountno' ");
		                    $count2=mysqli_num_rows($query2);
		


		if($count2>0)
		{
			echo "No of record found=".$count2;
			//if(isset($_GET['done']))
			//{
			//	echo"delete success";
			//}

			?>
                <form method="post" action="login_control.php">
                    <table border="1" cellpadding="10">

                        <thead>
                            <tr>
                                <th>
                                    T_id
                                </th>

                                <th>
                                    ACC_NO_FROM
                                </th>
                                <th>
                                    ACC_NO_TO
                                </th>
                                <th>
                                    T_DATE
                                </th>
                                <th>
                                    AMT
                                </th>
                                <th>
                                    TYPE
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
			$t_id=1;
			while($row=mysqli_fetch_array($query2)){
				?>
                            <tr>
                                <td>
                                    <?php echo $t_id ?>
                                </td>
                                <td>
                                    <?php echo $row[1] ?>
                                </td>
                                <td>
                                    <?php echo $row[2] ?>
                                </td>
                                <td>
                                    <?php echo $row[3] ?>
                                </td>
                                <td>
                                    <?php echo $row[4] ?>
                                </td>

                                <td>
                                    <?php echo $row[5] ?>
                                </td>

                            </tr>
                            <?php
				$t_id++;
				} ?>

                        </tbody>
                    </table>


                    <!--we dont need this
						<?php
						if(isset($_GET['bid'])){
							if($row['id']==$_GET['bid']){
								echo"<h4 style ='background_color:green; color:white;padding:5px;'>
								Update Succesfull</h4>";
							}
						}
						?>-->











                    <?php
	}
	else{
		echo "no record found";}?>


                </form>
























            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include ('footer.php'); ?>
</body>

</html>
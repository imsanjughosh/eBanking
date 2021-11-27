<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Login</title>
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
				<h1>View_All_Transaction</h1>
			</div>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">
						<?php
		//include('connect.php');
		$query= mysqli_query($connect,"SELECT * FROM transaction");

		$count=mysqli_num_rows($query);
		


		if($count>0)
		{
			echo "No. of record found = ".$count;
			if(isset($_GET['done'])){
				echo"delete success";
			}

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
						
						<?php
						if(isset($_GET['bid'])){
							if($row['id']==$_GET['bid']){
								echo"<h4 style ='background_color:green; color:white;padding:5px;'>
								Update Succesfull</h4>";
							}
						}
						?>
					</td>
					
					

					


				</tr>
				<?php
				$t_id++;
				} ?>
			
		</tbody>
	</table>
	<?php
	}else{
		echo "no record found";
	}
	?>
	
			
		</form>

		
	</div></div></section>
			

		<!-- Footer -->
			<?php include ('footer.php'); ?>
	</body>
</html>
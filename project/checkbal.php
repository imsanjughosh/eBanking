<!DOCTYPE HTML>
<!--
Industrious by TEMPLATED
templated.co @templatedco
Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
    <title>Check Balance</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="is-preload">

    <!-- Header -->
    <?php include ('header.php');
     if(empty($_SESSION['ardent'])){
	header('Location:login.php');}
                    
		 ?>

    <!-- Heading -->
    <div id="heading">
        <h1>Check Balance</h1>
    </div>

    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="inner">
            <div class="content">
                <!--<h4><?php // echo session_id() ?></h4>-->
                <!-- <?php
//var_dump($_SESSION['ardent']);
$id = $_SESSION['ardent']['id'];
?> -->

                <table>
                    <thead>
                        <tr>
                            <th>
                                Account Number
                            </th>
                            <th>
                                Balance
                            </th>
                            <th>
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <?php echo $_SESSION['ardent']['accountno']?>
                            </td>
                            <td>
                                <?php echo $_SESSION['ardent']['balance']?>
                            </td>
                            <td>
                                <?php echo $_SESSION['ardent']['status'] ?>
                            </td>
                        </tr>
                    </tbody>
                </table>


            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include ('footer.php'); ?>
</body>

</html>
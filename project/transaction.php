<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
    <title>Transaction</title>
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
        <h1>Transaction</h1>
    </div>

    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="inner">
            <div class="content">
                <form method="post" action="transaction_control.php">
                    <table>
                        <tr>
                            <td>To Account</td>
                            <td><input type="text" name="acc" placeholder="Enter  receiver A/c no " required></td>
                        </tr>
                        <tr>
                            <td>Amount</td>
                            <td><input type="text" name="amt" placeholder="Amount to send" required></td>
                        </tr>

                        <tr>
                            <td>
                                Your Account is
                            </td>
                            <td>
                                <select name="type" required>
                                    <option value="">----Select Type---- </option>
                                    <option>Current</option>
                                    <option>Savings</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="ok" value="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include ('footer.php'); ?>
</body>

</html>
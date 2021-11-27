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
    <?php include ('header.php') ?>

    <!-- Heading -->
    <div id="heading">
        <h1>Login</h1>
    </div>

    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="inner">
            <div class="content">
                <form method="post" action="login_control.php">
                    <table>
                        <tr>
                            <td>
                                Email
                            </td>
                            <td>
                                <input type="email" name="email" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                password
                            </td>
                            <td>
                                <input type="password" name="password" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" name="ok" value="Login">
                            </td>
                        </tr>
                    </table>
                </form>
                <a href="openaccount.php"> <input type="submit" name="okk" value="Open Account"></a>


            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include ('footer.php'); ?>
</body>

</html>
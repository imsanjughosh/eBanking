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
    <?php include ('header.php');
if(empty($_SESSION['sanju'])){
header('Location:index.php');
} 
?>

    <!-- Heading -->
    <div id="heading">

        <h1>Profile</h1>
        <br><br>
    </div>

    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="inner">
            <div class="content">

                <?php

$id = $_SESSION['sanju']['id'];

$fetchURL = mysqli_query($connect,"SELECT id,name,email FROM admin WHERE id ='$id'");
$picture = mysqli_fetch_array($fetchURL);
?>

                <table border="1" cellpadding="1" cellspacing="1">
                    <thead>
                        <tr>
                            <th>
                                Identity
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Email
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <!-- using id or using session both are here..whatever u can use -->
                                <!-- <?php echo $picture['id']?> -->
                                <?php echo $_SESSION['sanju']['id']?>
                            </td>
                            <td>
                                <?php echo $picture['name']?>
                                <!-- <?php echo $_SESSION['sanju']['name']?> -->
                            </td>
                            <td>
                                <?php echo $picture['email'] ?>
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
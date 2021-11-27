<!DOCTYPE HTML>
<!--
Industrious by TEMPLATED
templated.co @templatedco
Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
    <title>ViewAll</title>
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

    <script type="text/javascript">
    function doOnclick() {
        document.getElementById("h").innerHTML = "Activate";
        document.getElementById("h").style.backgroundColor = 'red';
        return false;
    }
    </script>

    <!-- Heading -->
    <div id="heading">
        <h1>View_All_User</h1>
    </div>

    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="inner">
            <div class="content">


                <?php
                           
                  // $id = $_SESSION['ardent']['id'];

             $fetchURL = mysqli_query($connect,"SELECT * FROM open");
                    //$array = mysqli_fetch_array($fetchURL);
                     $count=mysqli_num_rows($fetchURL);
                     if( $count > 0 ) {

                 # records below:

?>
                <table border="1" cellspacing="5" cellpadding="10">
                    <thead>
                        <tr>
                            <th>
                                id
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Gender
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Mobile
                            </th>
                            <th>
                                Password
                            </th>
                            <th>
                                Address
                            </th>
                            <th>
                                Path
                            </th>
                            <th>
                                Aadhar
                            </th>
                            <th>
                                Pan
                            </th>
                            <th>
                                Accountno
                            </th>
                            <th>
                                Balance
                            </th>
                            <th>
                                Status
                            </th>
                            <th>
                                #
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row=mysqli_fetch_array($fetchURL)){ ?>
                        <tr>
                            <td>
                                <?php echo $row['id']?>
                            </td>

                            <td>
                                <?php echo $row['name']?>
                            </td>

                            <td>
                                <?php echo $row['gender']?>
                            </td>

                            <td>
                                <?php echo $row['email']?>
                            </td>

                            <td>
                                <?php echo $row['mobile']?>
                            </td>

                            <td>
                                <?php echo $row['password']?>
                            </td>
                            <td>
                                <?php echo $row['address']?>
                            </td>
                            <td>
                                <img src="/project/<?php echo $row['path']?>" width="50" height="50">
                                <!-- <img src="/project/".'<?php echo $row['path']?>" width="50" height="50"> -->
                            </td>
                            <td>
                                <?php echo $row['andhar']?>
                            </td>
                            <td>
                                <?php echo $row['pan']?>
                            </td>
                            <td>
                                <?php echo $row['accountno']?>
                            </td>
                            <td>
                                <?php echo $row['balance']?>
                            </td>
                            <td>
                                <?php echo $row['status']?>
                            </td>
                            <td>

                                <?php if($row['status']==0){ ?>
                                <a href="viewcontrol.php?id=<?php echo $row['id']?>&status=1" id="h"
                                    onclick="doOnclick()"
                                    style="text-decoration: none; background-color:green; color:black;padding:15px;border:2px solid #008080; font-weight: bold;">Activate</a>
                                <?php } else {
             	?>
                                <a href="viewcontrol.php?id=<?php echo $row['id']?>&status=0" id="h"
                                    onclick="doOnclick()"
                                    style="text-decoration: none; background-color:red; color:black;padding:15px;border:2px solid #008080; font-weight: bold;">Deactivate</a>
                                <?php

             	} ?>

                            </td>
                        </tr>
                        <?php   } ?>
                    </tbody>
                </table>
                <?php
} else {
echo "No records found";
}



?>

            </div>
        </div>
    </section>
    <!-- Footer -->
    <?php include ('footer.php'); ?>

</body>

</html>
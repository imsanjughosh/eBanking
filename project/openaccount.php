<!DOCTYPE HTML>
<!--
Industrious by TEMPLATED
templated.co @templatedco
Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
    <title>Open Account</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <script type="text/javascript">
    function validate() {
        var nm_verify = /^[A-Za-z]+$/;
        var regx = /^[7-9]\d{9}$/;
        var regx2 = /^\d{12}$/;
        var regx3 = /^[A-Z]{5}\d{4}[A-Z]$/;
        var uname = document.getElementById("name").value;
        //var email=document.getElementById("email").value;
        var mobile = document.getElementById("mobile").value;
        var andhar = document.getElementById("andhar").value;
        var pan = document.getElementById("pan").value;
        //var password=document.getElementById("password").value;	

        if (uname.match(nm_verify)) {

            true;
        } else {
            document.getElementById("msg").innerHTML = "**Only alphabates are allowed";
            document.getElementById("msg").style.color = "red";
            return false;
        }

        if (mobile.match(regx)) {
            document.getElementById("mbmsg").innerHTML = "Valid";
            document.getElementById("mbmsg").style.color = "green";
            true;
        } else {
            document.getElementById("mbmsg").innerHTML = "**Enter valid mobile no";
            document.getElementById("mbmsg").style.color = "red";
            return false;
        }
        if (andhar.match(regx2)) {
            document.getElementById("andharmsg").innerHTML = "Valid";
            document.getElementById("andharmsg").style.color = "green";
            true;
        } else {
            document.getElementById("andharmsg").innerHTML = "**Enter valid Aandhar no";
            document.getElementById("andharmsg").style.color = "red";
            return false;
        }
        if (pan.match(regx3)) {
            document.getElementById("panmsg").innerHTML = "Valid";
            document.getElementById("panmsg").style.color = "green";
            true;
        } else {
            document.getElementById("panmsg").innerHTML = "**Enter valid pan no";
            document.getElementById("panmsg").style.color = "red";
            return false;
        }

    }
    </script>
</head>

<body class="is-preload">

    <!-- Header -->
    <?php include ('header.php');

             

?>



    <!-- Heading -->
    <div id="heading">
        <h1>Open an account</h1>
    </div>

    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="inner">
            <div class="content">
                <form method="post" id="signupform" enctype="multipart/form-data" action="register_code.php"
                    onsubmit="return validate()" name="vform">
                    <table>
                        <tr>
                            <td>
                                Name
                            </td>
                            <td>
                                <input type="text" name="nm" id="name" placeholder="Enter your name" value="" required>
                                <span id="msg"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Gender
                            </td>
                            <td>
                                <select name="gen">
                                    <option value="">----Select Gender----</option>
                                    <option>Female</option>
                                    <option>Male</option>
                                    <option>Transgender</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Email
                            </td>
                            <td>
                                <input type="email" name="em" placeholder="Enter your email" required>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                Mobile Number
                            </td>
                            <td>
                                <input type="text" name="mb" placeholder="Enter valid mobile no" id="mobile" value=""
                                    required>
                                <span id="mbmsg"></span>
                            </td>
                        </tr>
                        <tr>
                        <tr>
                            <td>
                                Password
                            </td>
                            <td>
                                <input type="password" name="password" minlength="6" placeholder="Enter strong password"
                                    required>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                Address
                            </td>
                            <td>
                                <textarea name="adr" placeholder="Enter your address..."></textarea>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                Profile Pic
                            </td>
                            <td>
                                <input type="file" name="ppic" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Aandhar Number
                            </td>
                            <td>
                                <input type="text" name="andhar" placeholder="Enter Andhar  no" id="andhar" value=""
                                    required="Please provide 12 digit andhar no">
                                <span id="andharmsg"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Pan Number
                            </td>
                            <td>
                                <input type="text" name="pan" placeholder="Enter Pan number" id="pan" value=""
                                    required="Please enter 10 digit pan number ">
                                <span id="panmsg"></span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="submit" name="ok" id="signupbtn" value="CREATE ACCOUNT">
                            </td>
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
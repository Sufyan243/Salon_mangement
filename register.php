<?php
include('includes/db.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $clientname = $_POST['clientname'];
    $clientemail = $_POST['clientemail'];
    $clientphone = $_POST['clientphone'];
    $clientpassword = $_POST['clientpassword'];
    $confirmpassword = $_POST['confirmpassword'];

    if(! preg_match("/^[a-zA-z0-9_]{5,}$/",$clientname)){
        $error = "Username must ne at least five character long and can contain only letters,alphabets and underscores";}
    elseif(!filter_var($clientemail,FILTER_VALIDATE_EMAIL)){
        $error = "invalid email address";
    }
    elseif($clientpassword < 6){

        $error = "Password must be at least 6 character long";}

    elseif($confirmpassword !== $clientpassword){
            $error = "Passwords not match";
    }
    else{

        $sql = "SELECT client_id from clients where client_name = ?";
        $stmt = mysqli_prepare($conn,$sql);
        mysqli_stmt_bind_param($stmt,'s' , $clientname);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        if(mysqli_stmt_num_rows($stmt) > 0){
            $error = "Username already taken";
        }
        else{
            $sql2 = "SELECT client_id from clients where email = ?";
            $stmt = mysqli_prepare($conn,$sql2);
            mysqli_stmt_bind_param($stmt,'s' , $clientemail);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
        }

        if(mysqli_stmt_num_rows($stmt) > 0){
            $error = "Email address already taken";
        }

        else {
            $hashed_password = password_hash($clientpassword, PASSWORD_DEFAULT);
            $sql3 = "INSERT INTO clients (client_name, phone_number, email, password) VALUES (?, ?,?, ?)";
            $stmt = mysqli_prepare($conn, $sql3);
            mysqli_stmt_bind_param($stmt, 'ssss', $clientname,$clientphone,$clientemail, $hashed_password);

            if (mysqli_stmt_execute($stmt)) {
                header("Location: login.php");
                exit;
            } else {
                $error = "Registration failed. Please try again.";
            }
        }
    }
    mysqli_close($conn);
}



?>


<!DOCTYPE html>
<html>

<head>
    <title>Register </title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Blaxcut - Barbershop Website Template" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="css/mdb.min.css" rel="stylesheet" type="text/css" id="mdb">
    <link href="css/plugins.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/coloring.css" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css">
</head>

<style>
    input[type=email]::placeholder,[type=password]::placeholder,[type=text]::placeholder,[type=tel]::placeholder{
        color: white !important;

    }
</style>

<body class="dark-scheme">
    <div id="wrapper">

        <!-- page preloader begin -->
        <div id="de-loader"></div>

        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <!-- section begin -->
            <section id="subheader" class="jarallax">
                <img src="https://i.pinimg.com/736x/a0/de/d4/a0ded45f17c4d7549174762ade491055.jpg" class="jarallax-img" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 text-center">
                            <h1>Register </h1>
                            <div class="de-separator"></div>
                        </div>
                    </div>
                </div>
                <div class="de-gradient-edge-bottom"></div>
            </section>


        <section class="no-top jarallax">
            <div class="de-gradient-edge-top"></div>
            <img src="https://i.pinimg.com/736x/9d/7f/11/9d7f113fabb49b7c2b3ac648d76e647e.jpg" class="jarallax-img" alt="">
            <div class="container position-relative z1000">
                <div class="row gx-5">

                    <div class="col-lg-6 offset-lg-3">

                        <div class="d-sch-table">
                            <h2 class="wow fadeIn text-center">Register Now</h2>
                            <div class="de-separator"></div>
                
                            <form  class="form-border position-relative z1000" method="post" action="">
                                <div class="row">
                                    <div class="col-lg-12 mb10">
                                        <div class="field-set">
                                            <input type="text" name="clientname" id="clientname" class="form-control" placeholder="Your Username" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb10">
                                        <div class="field-set">
                                            <input type="email" name="clientemail" id="clientemail" class="form-control" placeholder="Your Email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb10">
                                        <div class="field-set">
                                            <input type="tel" name="clientphone" id="clientphone" class="form-control" placeholder="Your Phone" required>
                                        </div>
                                        <div class="col-lg-12 mb10">
                                        <div class="field-set">
                                            <input type="password" name="clientpassword" id="clientpassword" class="form-control" placeholder="Your Password" required>
                                        </div>
                                    </div><div class="col-lg-12 mb10">
                                        <div class="field-set"> 
                                            <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" placeholder="Confirm Password" required> 
                                        </div>
                                    </div>
                                    </div>
                                </div>


                                <div class="text-center">
                                    <div id="submit" class="mt20">
                                        <button type="submit" class="btn-main">Register</button>
                                    </div>
                                </div>
                                <br>
                                <div class="de-separator"></div>
                                <p style="color: #fff; font-weight: bolder;">Already have an account?          <a href="login.php" style="font-weight: bolder;">Login Now</a>    </p>
                

                            </form>





                            <div class="d-deco"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="de-gradient-edge-bottom"></div>
        </section>




        <!-- content close -->
        <a href="#" id="back-to-top"></a>
        <!-- footer begin -->
        <?php include('includes/footer.php') ?>

        <!-- footer close -->
    </div>

    <!-- Javascript Files
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>
    <script src='../../../www.google.com/recaptcha/api.js' async defer></script>
</body>

</html>
<?php include('includes/header.php'); ?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Blaxcut - Barbershop Website Template</title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Blaxcut - Barbershop Website Template" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="css/mdb.min.css" rel="stylesheet" type="text/css" id="mdb">
    <link href="css/plugins.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/coloring.css" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css">
    <style>
        .de_form {
            margin: 0;
            padding: 0;
        }

        .de_radio {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
        }

        .radio-img {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            gap: 10px;
            width: 400px;
        }

        .radio-img img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
        }

        .radio-img label {
            font-size: 14px;
            line-height: 1.5;
        }

        .radio-img {
            padding: 8px 16px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }

        .btn-main {
            padding: 8px 16px;
            background-color: #cf814d;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }

        .radio-img .btn-main:hover {
            background-color: #cf814d;
        }
    </style>
</head>

<body class="dark-scheme">
    <div id="wrapper">
        <div id="de-loader"></div>
        
        <!-- Header (include PHP or HTML) -->

        <!-- Page Content -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            
            <!-- Subheader Section -->
            <section id="subheader" class="jarallax">
                <img src="images/background/6.jpg" class="jarallax-img" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 text-center">
                            <h1>Appointment</h1>
                            <div class="de-separator"></div>
                        </div>
                    </div>
                </div>
                <div class="de-gradient-edge-bottom"></div>
            </section>

            <!-- Form Section -->
            <section id="section-form" class="no-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <form name="contactForm" id="contact_form" class="form-border" method="post">
                                <div id="step-1" class="row">
                                    <h3 class="s2">Choose Services</h3>
                                    <!-- Service Options Here -->

                                    <h3 class="s2">Select Date</h3>
                                    <input type="date" name="date" id="date" class="form-control" required />
                                    <div class="spacer-single"></div>

                                    <h3 class="s2">Select Time</h3>
                                    <div class="custom_radio">
                                        <!-- Time Radio Buttons Here -->
                                    </div>

                                    <h3 class="s2">Your Details</h3>
                                    <div class="mb25">
                                        <input type="text" name="Name" id="name" class="form-control" placeholder="Your Name" required>
                                    </div>
                                    <div class="mb25">
                                        <input type="email" name="Email" id="email" class="form-control" placeholder="Your Email" required>
                                    </div>
                                    <div class="mb25">
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone" required>
                                    </div>
                                    <div class="mb25">
                                        <input type="text" name="message" id="message" class="form-control" placeholder="Your message (optional)">
                                    </div>
                                    <button type="submit" class="btn-main">Book Appointment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

        <!-- Javascript Files
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>
    <script src="js/custom-marquee.js"></script>
</body>

</html>

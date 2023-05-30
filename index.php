<?php
	include 'core/init.php';
	if($getFromU->loggedIn() === true){
		header('Location: home.php');
	}

?>
<html>

<head>
    <title>Phoneix</title>
    <meta charset="UTF-8" />
    
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"/>
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>


    <!--link rel="shortcut icon" type="image/x-icon" href="./assets/images/bird.svg"-->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL; ?>assets/images/logo.png">
    <link rel="stylesheet" href="assets/css/style-complete.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/js/popper.min.js" />
    <link rel="stylesheet" href="assets/js/bootstrap.min.js" />
    <script src="assets/js/jquery-3.1.1.min.js"></script>

</head>
<!--Helvetica Neue-->

<body>
    <!--
<div class="front-img">
	<img src="assets/images/background.jpg">
</div>	
-->

    <div class="preloader" id="preloader">
        <div id="loader"></div>
    </div>

    <div class="container-fluid">
        <div class="main-box">

            <div class="main-box-wrapper">
                <div class="row">
                    <div class="left col-md-6 col-12" style="background-image: '../images/logo.png'; background-size: contain; background-position: left bottom;">

                    </div>
                    <div class="right col-md-6 col-12">

                        <?php include 'includes/login.php';?>

                        <div class="middle">
                            <h1>Wanna connect with your fellow mates</h1>
                            <span>Join Phoneix today.</span>
                        </div>

                        <?php include 'includes/signup-form.php';?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.onload = function() {
            var preloader = document.getElementsByClassName('preloader')[0];
            setTimeout(function() {
                preloader.style.display = 'none';
            }, 3000);
        };

    </script>

</body>

</html>

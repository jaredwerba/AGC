<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <title>Awfully Good Comapny</title>

  <link href="css/bootstrap.css" rel="stylesheet" />
	<link href="css/kenny.css" rel="stylesheet" />
	<link href="css/smoke.min.css" rel="stylesheet">


    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Limelight' rel='stylesheet' type='text/css'>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		    <![endif]-->
</head>

<body>
<nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="images/flags/US.png"/>
                English(US)
                <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#"><img src="images/flags/DE.png"/> Deutsch</a></li>
                <li><a href="#"><img src="images/flags/GB.png"/> English(UK)</a></li>
                <li><a href="#"><img src="images/flags/FR.png"/> Français</a></li>
                <li><a href="#"><img src="images/flags/RO.png"/> Română</a></li>
                <li><a href="#"><img src="images/flags/IT.png"/> Italiano</a></li>

                <li class="divider"></li>
                <li><a href="#"><img src="images/flags/ES.png"/> Español <span class="label label-default">soon</span></a></li>
                <li><a href="#"><img src="images/flags/BR.png"/> Português <span class="label label-default">soon</span></a></li>
                <li><a href="#"><img src="images/flags/JP.png"/> 日本語 <span class="label label-default">soon</span></a></li>
                <li><a href="#"><img src="images/flags/TR.png"/> Türkçe <span class="label label-default">soon</span></a></li>

              </ul>
        </li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="#">
                    <i class="fa fa-twitter-square"></i>
                    Follow
                </a>
            </li>
             <li>
                <a href="#">
                    <i class="fa fa-facebook-square"></i>
                    Like
                </a>
            </li>
       </ul>
    </div>
  </div>
</nav>
<div class="main" style="background-image: url('images/mobile.jpeg')">
        <video id="video_background" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
            <source src="images/pgg.webm" type="video/webm">
            <source src="images/pgg.mp4" type="video/mp4">
            Video not supported
        </video>
	<div class="cover orange" data-color="black"></div>
    <div class="container">
        <h1 class="logo">
            Awfully Good Company
        </h1>
        <div class="content">
            <h4 class="motto">We're good friends to have</h4>
            <div class="subscribe">
                <h5 class="info-text">
                    Join the waiting list for the beta. Maybe you wanna help someone.
                </h5>
                <div class="row">
                    <!-- <div class="col-md-4 col-md-offset-4 col-sm6-6 col-sm-offset-3 ">
                        <form class="form-inline" role="form">
                          <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail2">Email address</label>
                            <input type="email" class="form-control transparent" placeholder="Your email here...">
                          </div>
                          <button type="submit" class="btn btn-warning btn-fill">Notify Me</button>
                        </form>
                    </div> -->
										<?php
											if ($_POST["submit"]) {
												$name = $_POST['name'];
												$email = $_POST['email'];
												$message = $_POST['message'];
												$human = intval($_POST['human']);
												$from = 'Demo Contact Form';
												$to = 'example@domain.com';
												$subject = 'Message from Contact Demo ';

												$body ="From: $name\n E-Mail: $email\n Message:\n $message";

												// Check if name has been entered
												if (!$_POST['name']) {
													$errName = 'Please enter your name';
												}

												// Check if email has been entered and is valid
												if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
													$errEmail = 'Please enter a valid email address';
												}

												//Check if message has been entered
												if (!$_POST['message']) {
													$errMessage = 'Please enter your message';
												}
												//Check if simple anti-bot test is correct
												if ($human !== 5) {
													$errHuman = 'Your anti-spam is incorrect';
												}

										// If there are no errors, send the email
										if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
											if (mail ($to, $subject, $body, $from)) {
												$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
											} else {
												$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
											}
										}
											}
										?>

										<!DOCTYPE html>
										<html lang="en">
										  <head>
										    <meta charset="utf-8">
										    <meta http-equiv="X-UA-Compatible" content="IE=edge">
										    <meta name="viewport" content="width=device-width, initial-scale=1">
										    <meta name="description" content="Bootstrap contact form with PHP example by BootstrapBay.com.">
										    <meta name="author" content="BootstrapBay.com">
										    <title>Bootstrap Contact Form With PHP Example</title>
										    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
										  </head>
										  <body>
										  	<div class="container">
										  		<div class="row">
										  			<div class="col-md-6 col-md-offset-3">
										  				<h1 class="page-header text-center">Contact Form Example</h1>
														<form class="form-horizontal" role="form" method="post" action="index.php">
															<div class="form-group">
																<label for="name" class="col-sm-2 control-label">Name</label>
																<div class="col-sm-10">
																	<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
																	<?php echo "<p class='text-danger'>$errName</p>";?>
																</div>
															</div>
															<div class="form-group">
																<label for="email" class="col-sm-2 control-label">Email</label>
																<div class="col-sm-10">
																	<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
																	<?php echo "<p class='text-danger'>$errEmail</p>";?>
																</div>
															</div>
															<div class="form-group">
																<label for="message" class="col-sm-2 control-label">Message</label>
																<div class="col-sm-10">
																	<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
																	<?php echo "<p class='text-danger'>$errMessage</p>";?>
																</div>
															</div>
															<div class="form-group">
																<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
																<div class="col-sm-10">
																	<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
																	<?php echo "<p class='text-danger'>$errHuman</p>";?>
																</div>
															</div>
															<div class="form-group">
																<div class="col-sm-10 col-sm-offset-2">
																	<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
																</div>
															</div>
															<div class="form-group">
																<div class="col-sm-10 col-sm-offset-2">
																	<?php echo $result; ?>
																</div>
															</div>
														</form>
													</div>
												</div>
											</div>

            </div>
        </div>
    </div>

 </div>

	<!-- Smoke -->
	<script src="js/smoke.min.js"></script>
	<script src="js/es.min.js"></script>
  <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>

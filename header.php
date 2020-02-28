<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Energy!</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/fixed.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <header>
    <!-- NAVIGATION BAR -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
      <a class="navbar-brand" href="index.html"><img src="images/musiclogo.png" alt=""></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a href="index.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item active">
            <a href="login.html" class="nav-link">Login</a>
          </li>
          <li class="nav-item ">
            <a href="about.html" class="nav-link">About us</a>
          </li>
          <li class="nav-item ">
            <a href="eventList.php" class="nav-link">Events</a>
          </li>
          <li class="nav-item ">
            <a href="contact.html" class="nav-link">Contact</a>
          </li>
        </ul>

        <?php
        if (isset($_SESSION['userId'])) {
          echo '<form action="includes/logout.inc.php" method="post">
              <button type="submit" name="logout-submit">Logout</button>
            </form>';
        } else {
          echo '<form action="includes/login.inc.php" method="post">
              <input type="text" name="mailuid" placeholder="E-mail/username...">
              <input type="password" name="pwd" placeholder="Password...">
              <button type="submit" name="login-submit">Login</button>
              <a type="submit" href="signup.php" class="btn btn-dark" style="color: #fffa">Signup</a>
            </form>';
        }
        ?>

      </div>


    </nav>
    <!-- END OF NABIGATION BAR -->
    <div class="editpanel text-center ">
      <?php
      if (isset($_SESSION['userId'])) {
        echo '<p class="panel">Add/Remove functions are on</p>';
      }
      ?>

    </div>


    <div class="bg">
      <img src="images/opera.jpg" alt="bground">
    </div>



    <!-- MAIN TEXT -->

    <!-- END OF MAIN TEXT -->


    <!-- Middle section -->
    <!-- <div id="login" class="container-fluid bgform" method="POST">
	<div class="col-md-8 text-center">
    

      <form class="form-container" action="includes/login.inc.php" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">E-mail/Username</label>
          <input type="text" name="mailuid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail/Username...">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password...">
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Remember me</label>
        </div>
        <button type="submit" name="login-submit" class="btn btn-block btn-success">LogIn</button>
      </form> -->

    <!-- <form action="includes/logout.inc.php" method="post">
            <button type="submit" name="logout-submit" class="btn btn-danger">Logout</button>
        </form> -->

    </div>
    </div>
    </div>
    <!-- End of middle section -->
    <!-- <div id="course" class="row justify-content-center">
	<div class="col-md-8 text-center">
		<h1>Are you a music passionate?</h1>
		<p class="lead">Come join us in our journey in finding the best event for every genre</p>
		<a class="btn btn-secondary btn-sm" href="#"_blank">Join our team</a>
	</div> 
</div> -->


  </header>
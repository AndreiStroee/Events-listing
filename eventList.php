<?php
session_start();
?>

<?php
require("includes/dbhEv.inc.php");
?>

<?php

if (isset($_POST['addevent'])) {

  $eventname = $_POST['eventname'];
  $eventday = $_POST['eventday'];
  $eventmonth = $_POST['eventmonth'];
  $eventdetails = $_POST['eventdetails'];
  $eventlink = $_POST['eventlink'];
  $eventprice = $_POST['eventprice'];
  $eventimage = $_POST['eventimage'];

  $sqlquery = "INSERT INTO event(eventname, eventday, eventmonth, eventdetails, eventlink, eventprice, eventimage) VALUES('$eventname', '$eventday', '$eventmonth', '$eventdetails', '$eventlink', '$eventprice', '$eventimage' );";
  $start = mysqli_query($connEv, $sqlquery) or die("Can not insert data into database!" . mysqli_error($connEv));

}

if (isset($_GET['del'])) {

  $id = $_GET['del'];
  $delquery = "DELETE FROM event WHERE id='$id';";
  $startdelquery = mysqli_query($connEv, $delquery) or die("Did not delete data from db".mysqli_error($connEv));

}
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

  <!-- NAVIGATION BAR -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top">
    <a class="navbar-brand" href="index.html"><img src="images/musiclogo.png" alt=""></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="index.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="events.php" class="nav-link">Login</a>
        </li>
        <li class="nav-item ">
          <a href="about.html" class="nav-link">About us</a>
        </li>
        <li class="nav-item active">
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

  <!-- <div class="video-background">
  <div class="video-wrap">
    <div id="video">
      <video id="bgvid" autoplay muted playsinline>
        <source src="video/play.mp4" type="video/mp4">
      </video>
    </div>
  </div>
</div> -->


  <!-- MAIN TEXT -->
  <!-- <div class="caption text-center">
  <h1>eNergy</h1>
  <h3>Music is the art of thinking with sounds</h3>
  <a href="#" class="btn btn-outline-light btn-lg">Search events</a>
</div> -->
  <!-- END OF MAIN TEXT -->


  <!-- Middle section -->
  <!-- <div id="course" class="row justify-content-center">
	<div class="col-md-8 text-center">
		<h1>Are you a music passionate?</h1>
		<p class="lead">Come join us in our journey in finding the best event for every genre</p>
		<a class="btn btn-secondary btn-sm" href="#"_blank">Join our team</a>
	</div> 
</div> -->
  <!-- End of middle section -->




  <!-- ADD AN EVENT BUTTON -->
  <div class="buttonCont">
    <?php
    $checkConn = isset($_SESSION['userId']);
    if ($checkConn) { ?>

      <form action="<?php $_SERVER['PHP_SELF'] ?>" class="addevent" method="post">
        <div class="dropright">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Add an event
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <form>
              <div class="form-group">
                <label for="eventname">Event name</label>
                <input type="text" class="form-control" id="eventname" name="eventname" placeholder="Enter event name">
              </div>
              <div class="form-group">
                <label for="eventday">Event day</label>
                <input type="text" class="form-control" id="eventday" name="eventday" placeholder="Enter event day">
              </div>
              <div class="form-group">
                <label for="eventmonth">Event month</label>
                <input type="text" class="form-control" id="eventmonth" name="eventmonth" placeholder="Enter event month">
              </div>
              <div class="form-group">
                <label for="eventdetails">Event details</label>
                <input type="text" class="form-control" id="eventdetails" name="eventdetails" placeholder="Enter event details">
              </div>
              <div class="form-group">
                <label for="eventlink">Link</label>
                <input type="text" class="form-control" id="eventlink" name="eventlink" placeholder="Enter event link">
              </div>
              <div class="form-group">
                <label for="eventprice">Price</label>
                <input type="text" class="form-control" id="eventprice" name="eventprice" placeholder="Enter event price">
              </div>
              <div class="form-group">
                <label for="eventimage">Image URL</label>
                <input type="text" class="form-control" id="eventimage" name="eventimage" placeholder="Enter event image">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary" name="addevenet" id="addevent">Add Event</button>
              </div>
          </div>
      </form>
  </div>
  </div>
  

<?php } ?>

</div>

<!-- DELETE EVENT BUTTON -->

<!-- EVENT EXAMPLE -->
<form>
  <?php

  # code...
  $sqlquery = "SELECT * FROM event;";
  $start = mysqli_query($connEv, $sqlquery) or die("Can't add data to db" . mysqli_error($connEv));
  $check = mysqli_num_rows($start);
  if ($check > 0) {

    while ($events = mysqli_fetch_assoc($start)) {







  ?>

      <div class="container">
        <div class="row">
          <div class="[ col-xs-12 col-sm-offset-2 col-sm-8 ]">
            <ul class="event-list">
              <li>
                <time>
                  <span class="day"><?php echo $events['eventday']; ?></span>
                  <span class="month"><?php echo $events['eventmonth']; ?></span>
                </time>
                <img src="<?php echo $events['eventimage']; ?>" alt="">
                <div class="info">
                  <h2 class="title"><?php echo $events['eventname']; ?></h2>
                  <p class="desc"><?php echo $events['eventdetails']; ?></p>
                  <ul>
                    <li style="width:50%;"><a href="<?php echo $events['eventlink']; ?>"><span class="fa fa-globe"></span> Website</a></li>
                    <li style="width:50%;"><span class="fa fa-money"></span><?php echo $events['eventprice']; ?></li>
                  </ul>
                </div>
                <div class="social">
                  <ul>
                    <li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
                    <li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
                    <li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
                  </ul>
                </div>
              </li>
            </ul>
            <a href="<?php $_SERVER['PHP_SELF']; ?>?del=<?php echo $events['id'];?>" class="btn btn-danger">
              Delete
            </a>
          </div>
        </div>
      </div>

  <?php
    }
  }
  ?>
</form>










<!-- FOOTER -->
<footer class="footer">
  <div class="footer-top">
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12 segment-one md-mb-30 sm-mb-30">
        <h3>eNergy</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus consequuntur expedita unde itaque voluptates! Consectetur vel, officiis quibusdam iste nobis, molestias in consequuntur incidunt, sapiente nesciunt omnis quos eveniet quas!</p>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 segment-two md-mb-30 sm-mb-30">
        <h2>eNergy</h2>
        <ul>
          <li><a href="#">Events</a></li>
          <li><a href="#">Register</a></li>
          <li><a href="#">LogIn</a></li>
          <li><a href="#">Careers</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 segment-three sm-mb-30">
        <h2>Follow Us</h2>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam voluptates voluptatum incidunt cumque nobis at vitae aliquam explicabo ratione enim dicta suscipit dolorem cum, sunt eius earum reiciendis. Numquam, atque.</p>
        <a href="http://www.facebook.com"><i class="fa fa-facebook"></i></a>
        <a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a>
        <a href="http://www.instagram.com"><i class="fa fa-instagram"></i></a>
        <a href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 segment-four sm-mb-30">
        <h2>Our Newsletter</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat eum recusandae debitis voluptates perspiciatis magni sed optio quasi, iusto, repellendus beatae commodi accusamus, nulla odit reprehenderit sapiente assumenda omnis quisquam.</p>
        <form action="">
          <input type="email">
          <input type="submit" value="Subscribe!">
        </form>
      </div>
    </div>
  </div>
  <p class="footer-bottom-text">All Rights reserved by &copy;eNergy.2019</p>
</footer>
<!-- END FOOTER -->



<!--- Script Source Files -->

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--- End of Script Source Files -->

</body>

</html>
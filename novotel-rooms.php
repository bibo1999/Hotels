<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800|Old+Standard+TT' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<!--<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">-->


<!-- bootstrap -->
<!--<link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css" />

<!-- uniform -->
<!--<link type="text/css" rel="stylesheet" href="asset/uniform/css/uniform.default.min.css" />

<!-- animate.css -->
<!--<link rel="stylesheet" href="asset/wow/animate.css" />


<!-- gallery -->
<!--<link rel="stylesheet" href="asset/gallery/blueimp-gallery.min.css">-->


<!-- favicon -->
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<link rel="stylesheet" href="pyramidseye.css">

</head>
<?php require_once('nav.php'); ?>

<style>
    .container1{
        margin-top:100px;
        margin-right: 50px;
        margin-left: 200px;
    }
</style>
<div class="container1">




<!-- form -->

<div class="row">
  <?php
    require_once('config.php');
    $q = "SELECT * FROM rooms ORDER BY rooms.id ASC";
    $run = mysqli_query($conn, $q);
    $count = 0;
    if(mysqli_num_rows($run) > 0){
        while($row = mysqli_fetch_array($run)){
  ?>
  <div class="col-sm-6 wowload fadeInUp">
      <div class="rooms">
          <img src="image/photos/<?php echo $row['image1']; ?>" class="img-responsive">
          <div class="info">
              <h3><?php echo $row['title']; ?></h3>
              <p style="color: white;"> Size: <?php echo $row['size']; ?> m²<br> Per Night: <?php echo $row['price']; ?> </p>
              <a href="room-details.php?id=<?php echo $row['id']; ?>" class="btn btn-default">Check Details</a>
          </div>
      </div>
  </div>
  <?php
        }
    }
  ?>
  
  
</div>


</div>


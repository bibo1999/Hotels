<?php include 'nav.php';?>

<?php
    require_once('config.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $q = "SELECT * FROM rooms WHERE rooms.id = $id";
        $run = mysqli_query($conn, $q);
        $row = mysqli_fetch_array($run);
    }
?>
<style>
    .images{
        display:flex;
        flex-direction:row;
        flex-wrap:wrap;
    }
    .img-responsive{
        width:50%;
    }
    .title{
        margin-top:150px;
        color:white;
    }
    .row{
        color:white;
        margin-left:0;
        margin-right:0;
        background-color:grey;
    }
</style>
<div class="container">
<h1 class="title"><?php echo $row['title']; ?> <a href="reservation.php?id=<?php echo $row['id']; ?>" class="btn btn-default">Reserve</a></h1>
 <!-- RoomDetails -->
                <div class="images">
                <img src="image/photos/<?php echo $row['image1']; ?>" class="img-responsive" >
                <img src="image/photos/<?php echo $row['image2']; ?>"  class="img-responsive" >
                <img src="image/photos/<?php echo $row['image3']; ?>"  class="img-responsive" >
                <img src="image/photos/<?php echo $row['image4']; ?>"  class="img-responsive" >
                </div>
                <!-- Controls -->
  <!-- RoomCarousel-->


<div class="room-features spacer">
  <div class="row">
    <div class="col-sm-12 col-md-5"> 
    <p><?php echo $row['description']; ?></p>
    </div>
    <div class="col-sm-6 col-md-3 amenitites"> 
    <h3>Common Facilities</h3>    
    <ul>
      <li>Television with more than 400 channels.</li>
      <li>Attached bathroom with bath-tub.</li>
      <li>Wide balcony towards beautiful garden.</li>
      <li>House keeping 3 times per day.</li>
      <li>24 hours water supply.</li>
    </ul>
    

    </div>  
    <div class="col-sm-3 col-md-2">
      <div class="size-price">Size:<br><span><?php echo $row['size']; ?> m²</span></div>
    </div>
    <div class="col-sm-3 col-md-2">
      <div class="size-price">Price:<br><span><?php echo $row['price']; ?> egy</span></div>
    </div>
  </div>
</div>
                     


</div>
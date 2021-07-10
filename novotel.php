<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.12.0/css/mdb.min.css">
    <link rel="stylesheet" type="text/css" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/mdb-plugins-gathered.min.css">
    <link rel="stylesheet" href="pyramidseye.css">

    <script src="https://kit.fontawesome.com/4b1c3479e4.js" crossorigin="anonymous"></script>
<style>
.col {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
    display:flex;
    flex-wrap:wrap;
}
.card-body {
    flex: 1 1 auto;
    padding: 1.25rem;
}
.form-group {
    margin-bottom: 1rem;
}
.checked {
      color: rgb(255, 165, 0);
    }
    .contain{
      display: flex;
      justify-content: flex-start;
      margin-top: 50px;
    }
     .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      margin: auto;
      text-align: center;
      font-family: arial;
      margin-top: 5px;
      background-image: linear-gradient(to right,rgb(69, 69, 179),rgb(59, 59, 61));
    }
    .card h1{
      font-size: 26px;
      color: rgb(255, 255, 255);
    }
    
    .price {
      color: grey;
      font-size: 22px;
    }
    .text{
      color: white;
      text-align: left;
    }
    
    .card button {
      border: none;
      outline: 0;
      padding: 12px;
      color: white;
      background-color: rgb(36, 36, 36);
      text-align: center;
      cursor: pointer;
      width: 100%;
      font-size: 18px;
    }
    
    .card button:hover {
      opacity: 0.7;
    }
    .room-container{
      display:flex;
      flex-wrap:wrap;
    }
</style>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">






</head>

<body>
<body>
         <div id="nav-placeholder">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">

          <a class="navbar-brand" href="#" target="_blank">
          <strong>Corotel</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Left -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="Home.php">Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php" target="_blank">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="hotels.php" target="_blank">Hotels</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Tour.php" >Tours</a>
            </li>
            <?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "hotel";

$conn = mysqli_connect($server, $user, $pass, $database);
//fetching data
$query = "SELECT * from users ORDER BY `id` DESC";
$result = mysqli_query($conn,$query);

$row = mysqli_fetch_array ($result);
//print_r ($row);
$id = $row[0];
$username = $row[1];
?>

          </ul>
        </div>
        <div class="navbar-collapse collapse order-3 dual-collapse2">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <li><a href="admin-login.php">Admin</a></li>
              </li>
              
          </ul>
          <?php
          if($id){
            echo "<li><a href='welcome.php' style='color:white;'> $username </a></li>";
          }
          else{
            echo "<li><a href='index.php'>login</a></li>";
          }
          ?>

        </nav>


      <div class="image-section">
      <div class="image-section-head">
      <h5>  Hotel Novotel Cairo El Borg      
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span></h5>
            <p><i class="fa fa-map-marker" aria-hidden="true"></i>3 Saray El Gezirah, Zamalek, Cairo, Egypt </p>
            <a href="https://www.google.com/maps/place/Pyramids+Eyes+Hotel/@29.989437,31.1348007,17z/data=!3m1!4b1!4m8!3m7!1s0x145845cd33f9512b:0x8f38efbf9fecf359!5m2!4m1!1i2!8m2!3d29.989437!4d31.1369894">Great location - show map</a>
      </div>
    <div class="image-section-body">
    
   <img class="img" src="novotel/1.jpg" style="width: 50%; height: 100%;"onclick="openModal();currentSlide(1)" class="hover-shadow cursor" ></a>
   <img class="img" src="novotel/2.jpg"style="width: 50%; height: 100%;"onclick="openModal();currentSlide(2)" class="hover-shadow cursor"></a>
  <img  class="img" src="novotel/3.jpg"style=" width: 50%; height: 100%;"onclick="openModal();currentSlide(3)" class="hover-shadow cursor"></a>
   <img class="img" src="novotel/4.jpg"style="width: 50%; height: auto;"onclick="openModal();currentSlide(4)" class="hover-shadow cursor"></a>
   <img class="img" src="novotel/5.jpg"style="width: 50%; height: 100%;"onclick="openModal();currentSlide(5)" class="hover-shadow cursor"></a>
   <img class="img" src="novotel/6.jpg"style="width: 50%; height: 100%;"onclick="openModal();currentSlide(6)" class="hover-shadow cursor"></a>
   <img class="img" src="novotel/7.jpg"style="width: 50%; height: 100%;"onclick="openModal();currentSlide(7)" class="hover-shadow cursor"></a>
   <img class="img" src="novotel/8.jpg"style="width: 50%; height: 100%;"onclick="openModal();currentSlide(8)" class="hover-shadow cursor"></a>
    </div>
  </div>
  <div id="myModal" class="modal">
    <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">
  
      <div class="mySlides">
        <div class="numbertext">1 / 25</div>
        <img src="image.jpg" style="width:100%">
      </div>
  
      <div class="mySlides">
        <div class="numbertext">2 / 25</div>
        <img src="image2.jpg" style="width:100%">
      </div>
  
      <div class="mySlides">
        <div class="numbertext">3 / 25</div>
        <img src="image3.jpg" style="width:100%">
      </div>
      
      <div class="mySlides">
        <div class="numbertext">4 / 25</div>
        <img src="image4.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">5 / 25</div>
        <img src="image5.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">6 / 25</div>
        <img src="image6.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">7 / 25</div>
        <img src="image7.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">8 / 25</div>
        <img src="image8.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">9 / 25</div>
        <img src="images/img2.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">10 / 25</div>
        <img src="images/img3.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">11 / 25</div>
        <img src="images/img4.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">12 / 25</div>
        <img src="images/img5.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">13 / 25</div>
        <img src="images/img6.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">14 / 25</div>
        <img src="images/img7.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">15 / 25</div>
        <img src="images/img8.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">16 / 25</div>
        <img src="images/img9.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">17 / 25</div>
        <img src="images/img10.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">18 / 25</div>
        <img src="images/img11.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">19 / 25</div>
        <img src="images/img12.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">20 / 25</div>
        <img src="images/img13.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">21 / 25</div>
        <img src="images/img14.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">22 / 25</div>
        <img src="images/img16.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">23 / 25</div>
        <img src="images/img17.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">24 / 25</div>
        <img src="images/img18.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">25 / 25</div>
        <img src="images/img19.jpg" style="width:100%">
      </div>
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      </div>
  <script>
    function openModal() {
      document.getElementById("myModal").style.display = "block";
    }
    
    function closeModal() {
      document.getElementById("myModal").style.display = "none";
    }
    
    var slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      captionText.innerHTML = dots[slideIndex-1].alt;
    }
    </script>
  
<div class="user">
  Average User Rating
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star"></span>
</div>
<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5"></div>
    </div>
  </div>
  <div class="side right">
    <div>929</div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4"></div>
    </div>
  </div>
  <div class="side right">
    <div>842</div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3"></div>
    </div>
  </div>
  <div class="side right">
    <div>359</div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2"></div>
    </div>
  </div>
  <div class="side right">
    <div>129</div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1"></div>
    </div>
  </div>
  <div class="side right">
    <div>79</div>
  </div>
</div>
<div class="row">
  <div class="col-sm-7">
    <hr/>
    <div class="review-block">
      <div class="row">
        <div class="col-sm-3">
          <img src="avatar.png" class="img-rounded">
          <div class="review-block-name">Yasmine</div>
          <div class="review-block-date">April 2021<br/>1 night</div>
        </div>
        <div class="col-sm-9">
          <div class="review-block-rate">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          </div>
          <div class="review-block-title">Exceptional</div>
          <div class="review-block-description">First of all, it was a surprise that we got a Nile view room instead of city view, which we booked. The room was spacious enough to take all of us without extra charge. The king size bed for me and my hubby. The sofa bed for my two children. We asked for a cot for the baby which they provided for free! The cot was wooden not a pack'n'play. It was in excellent condition and clean. The view was amazing and really speedy room service.
Breakfast was on the roof overlooking the Nile. It was a breathtaking view! Especially that you can eat at the terrace and not inside if you chose to. Pastries were freshly baked and the coffee was great with multiple selections ( Nescafe Allegra machine 🤗) Lots of tea flavors as well. It was a really comfortable stay. Will definitely come back.
          </div>
        </div>
      </div>
      <hr/>
      <div class="row">
        <div class="col-sm-3">
          <img src="avatar.png" class="img-rounded">
          <div class="review-block-name"> Essam</div>
          <div class="review-block-date">May 2021<br/>1 night</div>
        </div>
        <div class="col-sm-9">
          <div class="review-block-rate">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
          </div>
          <div class="review-block-title">Very Good</div>
          <div class="review-block-description">The staff is very friendly, professional, helpful and cooperative. The location is amazing. Quick responses.</div>
        </div>
      </div>
      <hr/>
      <div class="row">
        <div class="col-sm-3">
          <img src="avatar.png" class="img-rounded">
          <div class="review-block-name">Amro</div>
          <div class="review-block-date">June 2021<br/>9 nights</div>
        </div>
        <div class="col-sm-9">
          <div class="review-block-rate">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          </div>
          <div class="review-block-title">Wonderful</div>
          <div class="review-block-description">Everything's was wonderful and location is exceptional at cairo.
Special thank to Mr. Ahmed ( front office Manger) and his team members for kind welcoming and help during our stay as will as Hotel security team.</div>
        </div>
      </div>
    </div>
  </div>
</div>
<br><br>
<div class="description">
 <br> <h3>Description</h3>
<br><br><p>Just a short walk from Cairo Tower, Novotel Cairo El Borg is in a great location in central Cairo, only 199 m from Cairo Opera house. The rooms have views overlooking the Nile or Cairo city.

All of the rooms at the Novotel El Borg are air-conditioned and include an LCD TV with a satellite and cable channels, tea/coffee facilities and a sitting area.

Guest at the Novotel Cairo can relax in the hotel’s outdoor swimming pool or hot tub or work out in the gym. Massage services are available.

The Novotel Cairo showcases a rooftop restaurant with spectacular views of Cairo and the Nile. The restaurant serves a range of international cuisine and has a ‘dry’ bar. Room service is available 24 hours a day.

The hotel is 19.3 km from the Pyramids and the Sphinx.

Couples in particular like the location – they rated it 8.8 for a two-person trip.

We speak your language!</p><strong>Hotel Novotel Cairo El Borg has been welcoming guests since Sept 22, 2009<strong>
    <br><br><h3>Most popular facilities</h3>
    <br>
    <i class="fa fa-wifi" aria-hidden="true">Free WiFi</i>
    <i class="fa fa-bus" aria-hidden="true">Airport shuttle (free)</i>
    <i class="fa fa-bed" aria-hidden="true"> Family rooms</i>
    <br>
    <i class="fas fa-parking">Free Parking</i>
    <i class="fas fa-smoking-ban">Non-smoking rooms</i>
    <i class="fas fa-concierge-bell">Room service</i>
<!--Rooms-->
    <br><br><h3><a href="novotel-rooms.php"> Click Here to Check Rooms</a></h3>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="asset/js/vendor/jquery.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>

<?php
require_once 'footer.php';
?>


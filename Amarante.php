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
          
      <h5>  Amarante Pyramids Hotel        
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span></h5>
            <p><i class="fa fa-map-marker" aria-hidden="true"></i>29 Abou Hazem Street, off Pyramids Road, Giza, 99999 Cairo, Egypt  </p>
            <a href="https://goo.gl/maps/iEZrtcp4j4X1WpUG6">Great location - show map</a>
      </div>
    <div class="image-section-body">
    
   <img class="img" src="images/1.jpg" style="width: 50%; height: 100%;"onclick="openModal();currentSlide(1)" class="hover-shadow cursor" ></a>
   <img class="img" src="images/2.jpg"style="width: 50%; height: 100%;"onclick="openModal();currentSlide(2)" class="hover-shadow cursor"></a>
  <img  class="img" src="images/3.jpg"style=" width: 50%; height: 100%;"onclick="openModal();currentSlide(3)" class="hover-shadow cursor"></a>
   <img class="img" src="images/4.jpg"style="width: 50%; height: auto;"onclick="openModal();currentSlide(4)" class="hover-shadow cursor"></a>
   <img class="img" src="images/5.jpg"style="width: 50%; height: 100%;"onclick="openModal();currentSlide(5)" class="hover-shadow cursor"></a>
   <img class="img" src="images/6.jpg"style="width: 50%; height: 100%;"onclick="openModal();currentSlide(6)" class="hover-shadow cursor"></a>
   <img class="img" src="images/7.jpg"style="width: 50%; height: 100%;"onclick="openModal();currentSlide(7)" class="hover-shadow cursor"></a>
   <img class="img" src="images/8.jpg"style="width: 50%; height: 100%;"onclick="openModal();currentSlide(8)" class="hover-shadow cursor"></a>
    </div>
  </div>
  <div id="myModal" class="modal">
    <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">
  
      <div class="mySlides">
        <div class="numbertext">1 / 25</div>
        <img src="images/1.jpg" style="width:100%">
      </div>
  
      <div class="mySlides">
        <div class="numbertext">2 / 25</div>
        <img src="images/2.jpg" style="width:100%">
      </div>
  
      <div class="mySlides">
        <div class="numbertext">3 / 25</div>
        <img src="images/3.jpg" style="width:100%">
      </div>
      
      <div class="mySlides">
        <div class="numbertext">4 / 25</div>
        <img src="images/4.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">5 / 25</div>
        <img src="images/5.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">6 / 25</div>
        <img src="images/6.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">7 / 25</div>
        <img src="images/7.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">8 / 25</div>
        <img src="images/8.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">9 / 25</div>
        <img src="images/9.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">10 / 25</div>
        <img src="images/10.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">11 / 25</div>
        <img src="images/11.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">12 / 25</div>
        <img src="images/12.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">13 / 25</div>
        <img src="images/13.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">14 / 25</div>
        <img src="images/14.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">15 / 25</div>
        <img src="images/15.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">16 / 25</div>
        <img src="images/16.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">17 / 25</div>
        <img src="images/17.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">18 / 25</div>
        <img src="images/18.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">19 / 25</div>
        <img src="images/19.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">20 / 25</div>
        <img src="images/2.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">21 / 25</div>
        <img src="images/3.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">22 / 25</div>
        <img src="images/4.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">23 / 25</div>
        <img src="images/5.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">24 / 25</div>
        <img src="images/6.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">25 / 25</div>
        <img src="images/7.jpg" style="width:100%">
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
    <div>541</div>
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
    <div>591</div>
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
    <div>369</div>
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
    <div>172</div>
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
    <div>144</div>
  </div>
</div>
<div class="row">
  <div class="col-sm-7">
    <hr/>
    <div class="review-block">
      <div class="row">
        <div class="col-sm-3">
          <img src="avatar.png" class="img-rounded">
          <div class="review-block-name">Najeeb</div>
          <div class="review-block-date">January 2021<br/>2 nights</div>
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
          <div class="review-block-description">I am a regular customer in the hotel. The last transaction was very bad and I decided not to go again, especially since I sat in the hotel more than ten times. The cleaners as well as the baggage handlers are very respectful but at reception it was bad.
          </div>
        </div>
      </div>
      <hr/>
      <div class="row">
        <div class="col-sm-3">
          <img src="avatar.png" class="img-rounded">
          <div class="review-block-name"> Sherif</div>
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
          <div class="review-block-description">I had a conflict with my Booking, yet Mrs May, at the reception handled all my concerns, and turned a non satisfied client to a satisfied one with her profeaionalism, I will really recommend Amarante for friends and families.</div>
        </div>
      </div>
      <hr/>
      <br>
      <div class="row">
        <div class="col-sm-3">
          <img src="avatar.png" class="img-rounded">
          <div class="review-block-name">Lana</div>
          <div class="review-block-date">August 2019<br/>1 night</div>
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
          <div class="review-block-description">I can't complain about anything at the hotel. The guy at the reception was very very helpful. The waiters in the restaurants and at the pool were very cheerful. Breakfast was amazing. Everything really exceeded my expectations. Will definitely be back soon.<br><br><br><br></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="description">
 <br> <h3>Description</h3>
<br><br><p>Built in the early 1940's, the original building at Hotel Amarante Pyramids was the residence of the founder of the Egyptian theater, Youssef Bey Wahby. The hotel is located in Cairo. It features free WiFi, tropical gardens and an outdoor pool.

Each room here will provide you with a flat-screen TV, air conditioning and a balcony. Featuring a bath or shower, private bathroom also comes with a hairdryer and bathrobes. You can enjoy pool view from the room. Extras include a mini-bar, a seating area and satellite channels.

At Amarante Pyramids Hotel you will find a 24-hour front desk and a restaurant. Room service is available 24 hours.

The hotel is 3.5 mi from Giza Pyramids, 3.5 mi from Great Sphinx and 4.2 mi from The Egyptian Museum. Cairo International Airport is 15 mi away.

We speak your language!</p><strong>Amarante Pyramids Hotel has been welcoming guests since May 27, 2014<strong>
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


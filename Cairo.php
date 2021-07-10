
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/mdb-plugins-gathered.min.css">
  <link rel="stylesheet" href="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.12.0/css/mdb.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="styles.css">
<style>
      .checked {
      color: rgb(255, 165, 0);
    }
    .contain{
      display: flex;
      justify-content: flex-start;
      margin-top: 50px;
    }
     .card-left {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      max-width: 400px;
      margin: auto;
      text-align: center;
      font-family: arial;
      margin-top: 5px;
    }
    .card-left h1{
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
    
    .card-left button {
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
    
    .card-left button:hover {
      opacity: 0.7;
    }
    .card-right {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      max-width: 400px;
      margin: auto;
      text-align: center;
      font-family: arial;
      margin-top: 5px;
    }
    .card-right h1{
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
    
    .card-right button {
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
    
    .card-right button:hover {
      opacity: 0.7;
    }
    .panel-title{
      text-align: left;
    }
    .panel-body{
      text-align: left;
      color: white;
      font-family: sans-serif;
    }
    body .overlay{width: 100%;height: 100%;}

#button-addon1 {
  color: #f77781;
}
.text-muted .mb-0 .py-2{
  color:white;
}
.container {
  color:white;
}
i {
  color: #f77781;
}

.form-control::placeholder {
  font-size: 0.95rem;
  color: #aaa;
  font-style: italic;
}

.form-control.shadow-0:focus {
  box-shadow: none;
}
.foote_bottom_ul_amrc li { display:inline;border: none;}
.foote_bottom_ul_amrc li a { color:white; margin:0 20px;font-style:inherit;font-size: 20px;}
.foote_bottom_ul_amrc a:hover{box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.2);color: #e4e2e2;} 

</style>
</head>
<body>



<!--navigation bar-->
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
<!--Right-->
<div class="navbar-collapse collapse order-3 dual-collapse2">
  <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="logout.php" >Sign out</a>
      </li>
  </ul>
  </div>
</nav>

<div class=Paragraph>
  <p>Cairo</p>
</div>
<div class="contain">
<div class="card-left">
  <img src="Steigenberger1.jpg" style="width:100%">
  <h1>Steigenberger Hotel ElTahrir
  </h1>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star"></span>
  <p class="price">$19.99 - $30 <br>per night</p>
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Description:</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">STEIGENBERGER Hotel El Tahrir proudly takes its place in Africa's largest and most enthralling city, delivering to the heart of Cairo highest level of consistent quality with heartfelt hospitality.
          The guarantee of excellence is the Steigenberger name itself, a name built on 80 years' experience of providing incomparable hospitality and exquisite service throughout the world.
          Throughout Steigenberger Hotel El Tahrir's 295 rooms and suites, business, banquet and conference facilities, restaurants, spa and health club, guests are assured of efficiency with a warm and genuine welcome. Attention to detail is second nature to staff who will anticipate and exceed guests' expectations every minute of every day.
          Tourists, travelers, businessmen and women can now relish a stylish and inspiring experience in one of the most inspirational locations in Egypt, ideally located close to many of the capital's most famous sites. The hotel, situated alongside the Egyptian Museum of Antiquities, is within walking distance of the Khan el Khalili Bazaar, Cairo Tower and Cairo Opera House,
          A short drive away, guests will find the Islamic District, the Cairo Citadel and the Hanging Church while the Great Pyramids of Giza and the Sphinx are just a 30-minute drive. <br><br></div>
      </div>
    </div>
  </div> 
  <div class="panel-heading">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Location:</a>
    </h4>
  </div>
  <div id="collapse2" class="panel-collapse collapse in">
    <div class="panel-body">    <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=495&amp;height=364&amp;hl=en&amp;q=Steigenberger Hotel El Tahrir&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div><style>.mapouter{position:relative;text-align:right;width:100%;height:364px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:364px;}.gmap_iframe {height:364px!important;}</style>
  </div>
  </div>
  </div>
    <p><a href="Steigenberger.php"><button>Read-More</button></a></p>
</div>

  <div class="card-right">
    <img src="novotel1.jpg" style="width:100%">
    <h1>Hotel Novotel Cairo El Borg
    </h1>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star"></span>
    <p class="price">$19.99 - $30 <br>per night</p>
    <div class="panel-group" id="accordion">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Description:</a>
          </h4>
        </div>
        <div id="collapse3" class="panel-collapse collapse in">
          <div class="panel-body">Upscale and eco-friendly, Novotel Cairo El Borg lies 600 metres from Cairo Opera House and a 15-minute walk from the Egyptian Museum.
            Hotel amenities include a heated outdoor pool and a rooftop terrace with views of the Nile. En-suite rooms feature king beds, work areas, satellite TV, and Wi-Fi. Additional conveniences include air conditioning and minibars. Suites for up to four guests are available. A fitness centre and spa are among the on-site facilities. Massages are offered for a fee. For business guests, meeting space accommodates up to 40 delegates. The hotel offers a choice of dining options – the rooftop Café Frais and the 24-hour Le Gout restaurant. Guests can also order hot dishes and cold snacks from the room service menu and enjoy a soft drink at the dry bar. Novotel Cairo El Borg lies just 300 metres from the Museum of Modern Art and around four miles from the Pharaonic Village.
            The Great Pyramid at Giza is about a 40-minute drive away.Just a short walk from Cairo Tower, Novotel Cairo El Borg is in a great location in central Cairo, only 650 ft from Cairo Opera house. The rooms have views overlooking the Nile.<br><br></div>
        </div>
      </div>
    </div> 
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Location:</a>
      </h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse in">
      <div class="panel-body">    <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=495&amp;height=364&amp;hl=en&amp;q=Hotel Novotel Cairo El Borg&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div><style>.mapouter{position:relative;text-align:right;width:100%;height:364px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:364px;}.gmap_iframe {height:364px!important;}</style>
    </div>
    </div>
    </div> 
      <p><a href="novotel.php"><button>Read-More</button></a></p>
  </div>
</div>
          <!-- FOOTER -->
        
         
       
          <div style="width: 100%;height: 100px;"><br/>
    <hr style="color: rgb(168, 167, 167) ;border:solid 0.5px;height:1px ; margin-top:150px;"/>
    <div class="container">



<body class="d-flex flex-column">

 
      <div class="row py-5">
        <div class="col-lg-12 mx-auto text-white text-center">
          <h1 class="display-4"> <span>Corotel </span>  </h1>
          <p class="lead mb-0">Welcome To Corotel<BR/>
            Graduation project by students of Modern Academy</p>
          
        </div>
      </div>
   
 


   
   
      <div class="container text-center">
        <p class="text-muted mb-0 py-2">© 2020-2021 Modern Students Graduation Project</p>
      
   
 
  
  
    <hr style="border:solid 0.5px ;color:white;"/>
    <ul class="foote_bottom_ul_amrc">
      <li><a href="Home.php">Home</a></li>
      <li><a href="contact.php">Contact us</a></li>
      <li><a href="hotels.php">Hotels</a></li>
      <li><a href="Tour.php">Tours</a></li>
      <li><a href="#">About us</a></li>
      
    
    </ul>
    <hr style="border:solid 0.5px ;color:white;"/>
  </div>
  <br>
  <br>
    <p class="text-center">producted @2021 | Designed With by Students Mis modern academy Graduation Project </p>
    <br>
    <br>
   
  </div>
  </div>
<!-- End  footer -->
</body>
</html>

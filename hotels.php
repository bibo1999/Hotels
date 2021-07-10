<html>
    <title>Test</title>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.12.0/css/mdb.min.css">
        <link rel="stylesheet" href="styles.css">
        <style>
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
        <div class="main-container">
          <div class="cont Left">
          <img src="cairotower.jpg" style="height: 500px;width: 550px;">
          <div class="middle">
            <div onclick="location.href='Cairo.php';">
            <div class="text">Cairo</div>
          </div>
          </div>
          </div>
          <div class="cont Right">
            
            <img src="Egitos.jpg" style="height: 500px;width: 550px;" >
            <div class="middle">
              <div onclick="location.href='Giza.php';">
                <div class="text">Giza</div>
            </div>
            </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br>
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
      <li><a href="#">Home</a></li>
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

      </div>
       </body>

</html>
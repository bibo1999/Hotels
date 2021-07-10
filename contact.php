<?php include 'nav.php';?>

<?php
    require_once('db.php');
    $error = "";
    $color = "red";
    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($con,$_POST['name']);
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $phone = mysqli_real_escape_string($con,$_POST['phone']);
        $message = mysqli_real_escape_string($con,$_POST['message']);

        $q = "SELECT * FROM feedback ORDER BY feedback.id DESC LIMIT 1";
        $r = mysqli_query($con, $q);
        if(mysqli_num_rows($r) > 0){
            $row = mysqli_fetch_array($r);
            $id = $row['id'];
            $id = $id + 1;
        }
        else{
            $id = 1;
        }


        if(empty($name) or empty($email) or empty($phone) or empty($message)){
            $error = "All Feilds Required, Try Again";

        }
        else{
            $insert_query = "INSERT INTO `feedback`(`id`, `name`, `email`, `phone`, `message`) VALUES ('$id','$name','$email','$phone','$message')";
            if(mysqli_query($con, $insert_query)){
                $error = "We've got your feedback";
                $color = "green";
            }
            else{
                $error = "Error occured";
            }
        }
    }

?>
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
    <div class="flex-container">
    <div class="contact-image">
    <img class="image" src="81.jpg">
    </div>
    <div class="contact-title"  >
           		
       		<label style="color: <?php echo $color; ?>">
                <?php
                    echo $error;
                ?>
            </label>
            <h4>Write to us</h4>
			<form role="form" method="post">
                <div class="form-group">	
                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                </div>
                <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                <input type="phone" class="form-control" name="phone" id="phone" placeholder="Phone">
                </div>
                <div class="form-group">
                <textarea type="email" class="form-control" name="message" placeholder="Message" rows="4"></textarea>
                </div>	
                <input type="submit" class="btn btn-primary" value="Send" name="submit">
			</form>
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

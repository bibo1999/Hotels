<html>
    <title>hompage</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="jquery-3.6.0.js"></script>
  
  <script src="jquery-3.6.0.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.0/css/all.css">

<head>
    <script> 
        $(document).ready (function(){
          $("slidehotelimg:gt(0)").hide();
          setInterval(  function(){ $("slidehotelimg:first").fadeOut('1000').next().fadeIn('1000').end().appendTo("slidehotel")},2500);
                  }   );
       </script>

<script>
  $(document).ready(function(){
      // Toggles paragraphs display
      $(".readmore-btn").click(function(){
          $("p").toggle();
      });
  });
  </script>
   
 
    <style>
        /* start framwoek */
      .container{margin: auto;width: 1200px;color:white; }
      
      .text-center{text-align: center;}
      .upper{text-transform:uppercase;}
      .main-color{color:rgb(45, 45, 102);}
      .main-background{background-color:rgb(45, 45, 102);}
      /* end our framwork */
      /* start header */
      .header{ background:url('header.jpg'); 
        background-size: cover;
        top: 0;
        left: 0;
        right: 0;
        color: #fff; height: 300px;}
        .imgmenu{
            position: relative;
           display: inline-block;
            }
        .menul{
            display: none;
            position: absolute;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            background:transparent ;
            color:#eee;
            width:150px;
            height:200px;
           
           
                right:10px;
            top: 40px;
          
        }

        .imgmenu:hover .menul{
            display: block;
            }
        
        

      .header .overlay{background: rgba(49, 55, 61,0.8);width: 100%;height: 100%;}
      .header .navbar { overflow: hidden;padding: 20px 0; }
      .header .navbar .menu {float: right;position: relative; }
      .header .entro .h1{margin: 0px;font-size: 50px;font-weight: 800;}
      .header .entro .p{margin: 5px 0 40px;line-height: 1.6;font-size: 20px;color: rgb(168, 167, 167);}
      .header .buttons .button {background:transparent ;padding: 10px 0;width: 180px;font-size: 20px;margin: 0 6px;border: 1px solid #909090 ;border-radius: 10px;transition: all 0.5 ease-in-out; }
      .header .buttons .button:hover {background-color:rgb(45, 45, 102) ;border:1px solid rgb(45, 45, 102) ;color:#fff ; }
      
      /* end header */
      /*mneu*/
    ul {
     list-style-type:none;
     margin: 0;
     padding: 0;
    width: 110px;
     background:transparent;border: 1px solid #909090 ;border-radius: 10px 10px;transition: all 0.5 ease-in-out;
 
      }

   .menul li a {
   display: block;
   color: #322458;
   padding: 8px 16px;
   text-decoration: none;
}

  .menul  li {text-align: center; list-style-type: none;}

  .menul li:last-child {
  border-bottom: none;
   }

   .menul  li a.active {
  background-color: #282051;
  color: white;
  border-radius: 5px;
}

.menul li a:hover:not(.active) {
  background-color: rgb(45, 45, 102);
  color: white;
   }
      /*mneu*/
 
     
     
      

      /* start body */
      .containerbody{margin: auto;width: 1300px;height: 2000px; }
      .content{
        display: inline-block;
      }
      .divtop{margin:auto;  width: 1300px;float: right;}
      .divl{float: left;width: 230px;height: 600px;border-radius: 8px;}
     
      .divr{ float: left;width: 230px;height: 600px;border-radius: 8px;}
     
      
    

      
      .box{ float:left; width: 360PX;margin: 20px;;border-radius: 15px; ;padding: 10PX;box-shadow: 0px 5px 5px rgb(0,0,0,0.15);}
      .boximg{width: 320px;height: 300px;margin-bottom:10px ;border-radius: 8px;}
      .box h3{margin-top: 8px;text-align: center;font-size: 25px ;}
      .box h4 {margin-bottom: 10px;} 
      .box p {font-size: 20px;line-height: 25px;height: 120px;overflow: hidden;display: none;}  
      .box a {display: inline-block;color: #000;text-decoration: none;padding: 10px 15px ; margin-top: 15px; border-radius: 10px;} 
      .box a:hover{box-shadow: 0px 5px 5px rgb(0,0,0,0.2);color:rgb(45, 45, 102) ;} 
     
           
      
      /* end body */
      </style>
      <style>
          /* start footer*/
  

body {
  background-image: linear-gradient(to right,rgb(30, 30, 66),rgb(59, 59, 61));
  min-height: 100vh;
  display: block;
  margin: 0;
}
body .overlay{width: 100%;height: 100%;}

#button-addon1 {
  color: #f77781;
}

i {
  color: #f77781;
}

.foter::placeholder {
  font-size: 0.95rem;
  color: #aaa;
  font-style: italic;
}
 .foter { text-align: center; border: none;list-style-type: none;width: 100%;}

.form-control.shadow-0:focus {
  box-shadow: none;
}

.foter   li { display:inline;}
.foter li a { color:white; margin:0 20px;font-style:inherit;font-size: 25px;list-style-type: none;text-decoration: none;}
.foter a:hover{box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.2);color: #e4e2e2;} 

      /*end footer*/
      .fa-info-circle{
      color:#DDB;
    }
    .container-fluid {
        
        color: #ddd;
        margin-left: 500px;
        
    }
    .container-fluid a{
      color: white;
      text-decoration: blanchedalmond;
      text-align: center;
    }
.row{
  margin-top: 50px;
  display: inline-grid;
}
    </style>
  </head>
  
  <body>
   <!--start header-->
    <div class="header">
      <div class="overlay">
        <div class="container">
        <div class="navbar">
            <span>BOOK<span class="main-color">. HOTELS </span> </span>
           
            <span class="menu">
                <div style=" float:right;">
              <div style="width: 30px;height: 100px; float: left;padding:12px;"class="main-color"  > </div>
               
               <div class="imgmenu" style="float: right;width: 50px;height: 50px; "> <img  src="icons8-menu-64.png "  style="width: 50px;height: 50px;padding: auto;"></img>
                
             
                    <ul class="menul"  >
                        <li><a class="active" href="#home">Home</a></li>
                        <li><a href="hotels.php">Hotels</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="Tour.php">Tours</a></li>
                        
                      </ul>
                
               
              </div>
               </div>
               

            </span>
           
             
           
        <br>
        <div class="entro text-center">
            <h1 class="h1" class="upper">BOOK<span class="main-color" >.HOTELS</span></h1>
            <P class="p">
                Welcome to book hotels<BR/>
                Graduation project by students of Modern Academy
            </P>
        
        <div class="buttons">
            <button onclick="document.location='index.php'" class="button" >Sign in</a</button>
            <button onclick="document.location='register.php'" class="button" >Sign up</button>
        </div>
        </div>
         
            </div>
          </div>
       </div>
    </div>
      
    <!--end header-->
    <div class="container-fluid">
      <i class="fa fa-info-circle" aria-hidden="true">
          <a style="font-family: Arial, Helvetica, sans-serif;" href="https://www.who.int/ar/emergencies/diseases/novel-coronavirus-2019/advice-for-public", >Coronavirus (COVID-19) support.
          </a>
      </i>
  </div>
    <!--start body-->
    <div class="containerbody" >
      <div class="divtop">
       <div class="divl"><img style="width: 100%;;height:100%;" src="left.jpg"  ></div>
      
      
    
        <div class="box" >
           <h3><span class="main-color"><A href="#" > TOURS </A></span></h3>
          <img style="width:355px;height: 320px;" class="boximg" src="tors.jpg">
           <h4>Tourist places close to hotels</h4>
           <p>There are very many tourist and recreational places near our hotels. You can enjoy the best times. Learn more about the places from here.
             </p>
             <a  class="readmore-btn">Read more</a>
      </div>
      <div class="box" >
        <h3><A href="#" > HOTELS </A></h3>
       <img class="boximg" style="width:355px;height: 320px;"  src="hotels.jpg">
        <h4> Hotels</h4>
        <p>There are very many tourist and recreational places near our hotels. You can enjoy the best times. Learn more about the places from here.
          </p>
          <a  class="readmore-btn">Read more</a>
   </div>

   <div class="divr"><img style="width: 100%;height: 100%;" src="right.jpg" ></div>
          
       </div>
       
         <div class="row">
       <h2>How You Can Protect Your Staff and Others and Slow the Spread of COVID-19</h2>
        We can protect workers by supporting them in maintaining both personal preventive behaviors (socially distancing, wearing cloth masks, washing hands) and environmental interventions. Evaluate your workplace to identify scenarios where workers cannot maintain social distancing of at least 6 feet from each other and/or guests. Use appropriate combinations of controls following the hierarchy of controls to address these situations to limit the spread of the virus that causes COVID-19. A committee of both workers and management may be most effective at identifying all possible scenarios.
  
          While protecting workers, it is important to note that control recommendations or interventions to reduce exposure to SARS-CoV-2 (the virus that causes COVID-19) must be compatible with any safety programs and personal protective equipment (PPE) normally required for the job task. Approaches to consider may include the following:
          
         <br><br><strong> Create a COVID-19 Workplace Health and Safety Plan</strong><br>
          
          Review the CDC Interim Guidance for Businesses and Employers and the Resuming Business Toolkit for guidelines and recommendations that all employers can use to protect their employees.
          
          Continue to follow any state or local regulations for hotels in addition to the recommendations here.
          Identify an on-site workplace coordinator who will be responsible for COVID-19 assessment and control.
          In addition to work areas, identify other areas that may lead to close contact among employees, for example break rooms, outside patios, parking garages, inside lounging areas, dining areas/kitchenspdf iconexternal icon, game rooms, pools, hot tubs, saunas, spas, salons, lobbies, fitness centers, laundry rooms, and routes of entry and exit.
          When developing plans, include all employees in the workplace, for example: staff, utility employees, maintenance, supervisory staff, hotel management, facilities staff, security staff, and housekeeping/janitorial staff, and outside contractors who may enter the facility.
          If hotel guests or contractors enter the workspace, develop plans to communicate with them regarding modification to work or service processes.
          Notify all workers that any COVID-19 concerns should be directed to the identified coordinator.
          Implement flexible sick leave and supportive policies and practices.
          Develop policies that encourage sick employees to stay at home without fear of reprisals, and ensure employees are aware of these policies.
          Maintain flexible policies that permit employees to stay home to care for a sick family member or take care of children due to school and childcare closures.
          If contractors are employed in the workplace, develop plans to communicate with the contracting company regarding modifications to work processes.
          Consider conducting daily in-person or virtual health checks (e.g., symptom and/or temperature screening) of employees on scheduled workdays.
          Screening options could include having employees self-screen before arriving at work or taking employees’ temperatures and assessing potential symptoms prior to beginning work (see CDC Interim Guidance for Businesses and Employers).
          Make sure employees can maintain at least 6 feet of distance while waiting for screening, if done on site.
          Make employee health screenings as private as possible and maintain the confidentiality of each individual’s medical status and history. 
          <br><br><strong>Additional Cleaning Guidance for Housekeeping</strong>In addition to the cleaning guidance above, employees cleaning guestrooms should:

          Wash hands with soap and water for at least 20 seconds before entering and after exiting a guestroom.
          <br> hand sanitizer containing at least 60% alcohol if soap and water aren’t available.
          <br> away all single-use items provided by the hotel or left by the guest.
          <br>Clean frequently touched surfaces such as tables, light switches, countertops, handles, desks, remote controls, phones, toilets, toilet flush handles, sink faucets, door handles, pens, and irons.
          <br>Wash all hotel linens according to the manufacturer’s label and use the warmest appropriate water setting. Allow items to dry completely.
          <br>Wear disposable gloves when handling dirty laundry or trash.
          <br>Do not shake dirty laundry.
          <br>Wash hands immediately after handling dirty laundry or trash.
          <br>If a guest is ill and isolating in their hotel room, discontinue all but essential housekeeping services to the room.
          <br>Additional precautions for cleaning a room after a guest who has been ill has checked out of the hotel:
          <br>Close off the room.
          <br>Wait 24 hours before you enter the room. If 24 hours is not feasible, wait as long as possible.
          <br>If possible, open outside doors and windows to increase air circulation.
          <br>Thoroughly clean and disinfect the room, as stated above.
          <br>Use a vacuum equipped with a high-efficiency particulate air (HEPA) filter, if available.
          <br>After the room has been appropriately disinfected, it can be opened for guest use.
          <br><br><strong>Are pools and water areas safe to use?</strong>
          <br>Gym, beach, swimming pool, spa, sauna and steam bath facilities can be used safely with certain restrictions, as determined by national guidelines.  In particular, look for the following measures:

          a maximum number of people allowed to ensure adequate physical distancing
          fabric mask policies required by local or national regulations
          hand washing stations, especially in the toilet and change room areas
          single use towels only 
          a bin for guests to place their towel after use for laundering
          individual use drinking water
          tissues and waste containers with lids
          high touch areas such as door handles disinfected regularly throughout the day
          <br><br><strong>What should travellers do if they get sick while at an accommodation facility?</strong>
          <br>If a guest develops symptoms of COVID-19, such as fever, dry cough or tiredness, they should notify the facility manager and seek medical advice by contacting local health authorities.

          The guest should isolate from others, including fellow travellers. If the guest cannot be isolated or staff need to enter the room, the ill person should put on a medical mask, and people nearby should also wear a mask.  If the medical mask cannot be tolerated by the ill person, then he or she should cough or sneeze into a bent elbow or use tissues to cover the mouth, and discard the tissue immediately into a closed waste bag.
          As we offer accommodation to the guest in special room isolated from other guests and we take care of him making him satisfied and not being sick , enjoying his stay at the hotel.
        </div>
       </div>
       


    
    <!--end body-->
           <!-- FOOTER -->
        
       
   <div style="width: 100%;height: 100px;"><br/>
    <hr/>
       

    <div class="container">



<body class="d-flex flex-column">

 
      <div class="row1 py-5">
        <div class="col-lg-12 mx-auto text-white text-center">
          <h1 class="display-4"> <span>BOOK. HOTELS </span>  </h1>
          <p class="lead mb-0">Welcome To Corotel<BR/>
            Graduation project by students of Modern Academy</p>
          
        </div>
      </div>
   
 


   
   
      <div class="container text-center">
        <p class="text-muted mb-0 py-2">© 2020-2021 Modern Students Graduation Project</p>
      
   
 
  
  
    <hr style="border:solid 0.5px ;color:white;"/>
    <ul class="foter" >
      <li><a href="Home.php">Home</a></li>
      <li><a href="contact.php">Contact Us</a></li>
      <li><a href="hotels.php">Hotels</a></li>
      <li><a href="Tour.php">Tours</a></li> 
      <li><a href="#">About US</a></li>
    
    
    
    </ul>
    <hr style="border:solid 0.5px ;color:white;"/>
  </div>
  <br>
  <br>
    <p class="text-center">producted @2021 | Designed With by Students Mis modern academy Graduation Project </p>
    <br>
    <br>
   
  </div>
  </div>-->
<!-- End  footer -->

      
      
 
   

  </body>
  
  
  </html>
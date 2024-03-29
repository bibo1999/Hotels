<style>
    .message{
        margin-top:150px;
    }
    .col-xs-6{
        padding-left: 15px;
    }
    .row .col-md-8 {
        margin-top:150px;
        color:white;
        font-size:50px;
        text-align:center;
    }

</style>
<div class="container">
<div class="row">
<div class="col-sm-7 col-md-8">Reservation<br> Form
</div>
<div class="col-sm-5 col-md-4">

    <?php
        require_once('config.php');
        require_once('nav.php');

        $error = "";
        $color = "red";
        if(isset($_POST['submit'])){
            $name = mysqli_real_escape_string($conn,$_POST['name']);
            $email = mysqli_real_escape_string($conn,$_POST['email']);
            $phone = mysqli_real_escape_string($conn,$_POST['phone']);
            $day = $_POST['day'];
            $month = $_POST['month'];
            $year = $_POST['year'];
            $adults = $_POST['no_adults'];
            $rooms = $_POST['no_rooms'];
            $message = mysqli_real_escape_string($conn,$_POST['message']);

            $q = "SELECT * FROM requests ORDER BY requests.id DESC LIMIT 1";
            $r = mysqli_query($conn, $q);
            if(mysqli_num_rows($r) > 0){
                $row = mysqli_fetch_array($r);
                $id = $row['id'];
                $id = $id + 1;
            }
            else{
                $id = 1;
            }


            if(empty($name) or empty($email) or empty($phone) or $adults == "no" or $rooms == "no" or empty($message) or $day == "no" or $month == "no" or $year == "no"){
                $error = "All Feilds Required, Try Again";

            }
            else{
                $insert_query = "INSERT INTO `requests`(`id`, `name`, `email`, `phone`, `day`, `month`, `year`, `adults`, `rooms`, `message`) VALUES ('$id','$name','$email','$phone','$day','$month','$year','$adults','$rooms','$message')";
                if(mysqli_query($conn, $insert_query)){
                    $error = "We've got your request";
                    $color = "green";
                }
                else{
                    $error = "Error occured";
                }
            }
        }
        
    ?>
    <label class="message" style="color: <?php echo $color; ?>">
        <?php
            echo $error;
        ?>
    </label>
    <form role="form" class="wowload fadeInRight" method="post">
        <div class="form-group">
            <input type="text" name="name" class="form-control"  placeholder="Name">
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control"  placeholder="Email">
        </div>
        <div class="form-group">
            <input type="Phone" name="phone" class="form-control"  placeholder="Phone">
        </div>        
        <div class="form-group">
            <div class="row">
            <div class="col-xs-6">
            <select class="form-control" name="no_rooms">
              <option value="no">No. of Rooms</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
            </div>        
            <div class="col-xs-6">
            <select class="form-control" name="no_adults">
              <option value="no">No. of Adults</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
            </div></div>
        </div>
        <div class="form-group">
            <div class="row2">
            <div class="col-xs-4">
              <select class="form-control " name="day" id="day">
                <option value="no">Day</option>
                <option value="01">1</option>
                <option value="02">2</option>
                <option value="03">3</option>
                <option value="04">4</option>
                <option value="05">5</option>
                <option value="06">6</option>
                <option value="07">7</option>
                <option value="08">8</option>
                <option value="09">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
                
              </select>
            </div>
            <div class="col-xs-4">
              <select class="form-control " name="month" id="month">
                <option value="no">Month</option>
                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
              </select>
            </div>
            <div class="col-xs-4">
              <select class="form-control" name="year">
                <option value="no">Year</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
              </select>
            </div>
          </div>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="message" placeholder="Message" rows="4"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Request" name="submit">
    </form>    
</div>
</div>  
</div>
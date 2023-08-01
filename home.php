<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <script src="https://kit.fontawesome.com/3a56e5b054.js" crossorigin="anonymous"></script>
  <style>
    .title ul,b,i{
        list-style: none;
        overflow: hidden;
        padding: 5px;
        color: white;
    }
    a{
      text-decoration: none;
    }
    .title li,.logout{
        display:block;
        float:right;
        font-size:30px;
        color:lavender;
        padding:5px;
        text-decoration: none;
    }
    .logo{
        float:left;
        font-family:copperplate, papyrus, fantasy;
        font-size:20px;
        padding-top: 10;
    }
    h1,p{
      margin: 0 0;
      padding: 0 0;
    }
    h1{
      line-height: 0.7;
    }
    .title{
      background-color: rgb(255, 145, 0);
    }
    .from_to{
      border: 3.5px solid rgba(255, 134, 0, 1);
      color: white;
      height: 50px;
      width: 100px;
      padding: 5px;
      margin-left: 20px;
      
    }
    
    img{
      width: 150px;
    }
    .promise{
      text-align: center;
    }
    .footer{
      display: flex;
      text-align: center;
      align-items: center;
      background-color:rgb(255, 145, 0);
      color: white;
      width:100%; 
      font-size:larger;
      padding: 10px;
      padding-left: 650px;
    }
    .footer a{
      padding-left: 10px;
      padding-right: 10px;
    }
    .touch{
      background-color: rgb(244, 244, 245);
    }
    select,input{
      height: 30px;
      width: 180px;
      border-radius: 8px;
      /* background-color: rgb(255, 163, 0, 1);     */
      border-color: rgb(255, 163, 0, 1);;
        
    }
    button{
      background-color: rgb(255, 145, 0);
      border: 1px solid rgb(255, 145, 0);
      padding: 5px;
      border-radius: 7px;
    }
    button:hover{
        background-color: white;
    }
    .some{
      display: flex;
      border: 1px solid black;
      padding: 10px;
    }
    .some div{  
      text-align: center;
    }
    .some b{
      color: black;
    }
    .from_to th{
      padding-left:15px; 
      font-family:copperplate, papyrus, fantasy;
      color:white;
      font-size: 36px;
    }
  </style>
</head>
<body>
    <?php
    session_start();
    ?>
  <form action="" method="post">
  <div class="title">
    <ul>
        <b class="logo" style="color:white">Happy Bus</b> <i class="fa-solid fa-bus" style="font-size:30px;color:lavender;float:left;"></i>
        <li><button class="logout" name="logout"><i class="fa-solid fa-right-from-bracket" style="color:lavender;"></i></button>
        <li><a class="current" href="history.php"><i class="fas fa-history" style="color:lavender;"></i></a>
        <li><a class="current" href="home.php"><i class="fas fa-home" style="color:lavender;"></i></a>
    </ul>
    
  </div>
  <h1 style="padding-left:20px; font-family:copperplate, papyrus, fantasy;color:black">Hello <?php echo $_SESSION["username"]?></h1>
    <br>
    <h1 style="padding-left:20px; font-family:copperplate, papyrus, fantasy;color:black"> Where you want to go today? </h1>
    <br>
  <div <p style="background-image: url('https://th.bing.com/th/id/R.0ed95b1dcb1c91253530eb24ca717aa6?rik=cSZKhnVUujCOBw&riu=http%3a%2f%2fwww.grammoney.in%2flandingassets%2fimages%2fbus-booking.png&ehk=hiGWjVVf%2bfGkzYmfevQATb8eim6cd7fQP4XkueVn7KI%3d&risl=&pid=ImgRaw&r=0'); height: 300px; background-size:1200px; background-size: 100% 100%; background-repeat: no-repeat; ">.</p>
  <table class="from_to">
    <th >From</th> 
    <th>
      <div>
        <select name="from" id="from" style="width:158px;">
          <option value="">select city</option>
          <option value="Amaravathi">Amaravathi</option>
          <option value="Bangulore">Bangulore</option>
          <option value="Chennai">Chennai</option>
          <option value="Delhi">Delhi</option>
          <option value="Haryana">Haryana</option>
          <option value="Hyderabad">Hyderabad</option>
          <option value="Kerala">Kerala</option>
          <option value="Mumbai">Mumbai</option>
          <option value="Warangal">Warangal</option>
          <option value="Vijayawada">Vijayawada</option>
        </select>
    <th >To </th>
    <th>
        <select name="To" id="to" class="scrl" style="width:155px;">
          <option value="">select city</option>
          <option value="Amaravathi">Amaravathi</option>
          <option value="Bangulore">Bangulore</option>
          <option value="Chennai">Chennai</option>
          <option value="Delhi">Delhi</option>
          <option value="Haryana">Haryana</option>
          <option value="Hyderabad">Hyderabad</option>
          <option value="Kerala">Kerala</option>
          <option value="Mumbai">Mumbai</option>
          <option value="Warangal">Warangal</option>
          <option value="Vijayawada">Vijayawada</option>
        </select>
        <th style="color:black;">On </th>
      <th>
          <input type="date" id="date" style="width:180px;" name="date">

      </th>
      <th>
        <button onclick="something()" name="search">Search</button>
      </th>
  </div>
    </table>
  </div>
</form>
  <br>
  <div class="touch">
    <div class="promise">
      <br>
      <img src="https://www.hadleyadvantage.com/wp-content/uploads/2013/04/customer-promise.png" alt="">
      <h2>WE PROMISE YOUR SAFE RIDE</h2>
    </div>
    <div class="some">
      <div>
        <img src="https://th.bing.com/th/id/OIP.QxianlvlQpba_spNPp40WQHaHa?w=184&h=185&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="">
        <br><b>UNMATCHED BENEFITS</b><br>
        <p>We take care of your travel beyond ticketing by providing you with innovative and unique benefits.</p>
      </div>
      <hr>
      <div>
        <img src="https://cdn3.iconfinder.com/data/icons/male-user-icons-2/500/muser-headset-1024.png" alt="">
        <br><b>SUPERIOR CUSTOMER SERVICE </b><br>
        <p>We put our experience and relationships to good use and are available to solve your travel issues.</p>
      </div>
      <hr>
      <div>
        <img src="https://cdn.onlinewebfonts.com/svg/img_195264.png" style="width:100px;" alt="">
        <br><b>LOWEST PRICES</b><br>
        <p>We always give you the lowest price with the best partner offers.</p>
      </div>
      <hr>
      <div>.</div>
    </div>
  </div>
  <br><br>
  <center>
    <div class="footer">
      <a href="about_us.php">About us</a>
      <a href="mobile_version.php">Mobile Version</a>
      <a href="contact_us.html" style="float:right">Contact Us</a>
      <!-- <a style="padding-bottom: 5px;" href="">Values</a> -->
    </div> 
  </center>
</body>
</html>
<?php
  if (isset($_POST['search'])){
    $date=$_POST['date'];
    $from=$_POST['from'];
    $to=$_POST['To'];
    if (empty($date) && empty($from) && empty($to)){
      echo "<script> alert('please make sure that to and from and date are selected');</script>";
    }
    else{
      $fone=fopen("from.txt","w+") or die("Unable to open");
      $ftwo=fopen("to.txt","w+") or die("Unable to open");
      $fthree=fopen("date.txt","w+") or die("Unable to open");
      fwrite($fone,$from);
      fwrite($ftwo,$to);
      fwrite($fthree,$date);
      fclose($fone);
      fclose($ftwo);
      fclose($fthree);
      echo "<script> window.location.href='bus_book.php';</script>";
    }
  }
  if (isset($_POST['logout'])){
    require_once "signout.php";
    echo "<script>window.location.href='login.php';</script>";

  }
?>
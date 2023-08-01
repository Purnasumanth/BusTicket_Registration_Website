<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Payment</title>
  <script src="https://kit.fontawesome.com/3a56e5b054.js" crossorigin="anonymous"></script>
  <style>
    .title ul,b,i{
        list-style: none;
        overflow: hidden;
        padding: 5px;
    }
    .title li{
        display:block;
        float:right;
        font-size:30px;
        color:lavender;
        padding:5px;
        text-decoration: none;
        
    }
    a{
      text-decoration: none;
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
    .some2{
        display: float;
        
        position: absolute;
        bottom: 0;
        width: 100%;    
    }
    body{
        position: relative;
        height: 95vh;
    }
    .logo{
        float:left;
        font-family:copperplate, papyrus, fantasy;
        font-size:20px;
        padding-top: 10;
    }
    .title{
      background-color: rgb(255, 145, 0);
    }
    .pay{
        border: 1px solid black;
        padding: 20px;
        text-align: center;
        margin-left: 600px;
        margin-top: 10vh;
        height: 200px;
        color: white;
        width: 300px;
        font-size: x-large;
        border: 2px solid rgb(255, 145, 0);
        background-color: rgb(251, 181, 89);
    }
    .pay:hover{
        background-color: white;
        color: black;
    }
    button{
        padding: 10px;
        padding-left: 20px;
        padding-right: 20px;
        display: block;
        margin-left:15vh;
        border-radius: 7px;
        border: 1px solid rgb(251, 181, 89);
        background-color: white;
    }
    .pay:hover button{
        background-color: rgb(255, 145, 0);;
    }
    body{
        position: relative;
        height: 100vh;
    }
  </style>
</head>
<body>
    <div class="title">
        <ul>
            <b class="logo" style="color:white">Happy Bus</b> <i class="fa-solid fa-bus" style="font-size:30px;color:lavender;float:left;"></i> 
            <li><a class="current" href="home.php"><i class="fas fa-home" style="color:lavender;"></i></a>
        </ul>
    </div>
    <form method="post" class="pay">
        UPI id:
        <input type="text" placeholder="please enter your UPI id"><br><br>
        <button name="pay">Pay</button>
    </form>
    <br><br>
    <div class="some2">
        <center>
            <div class="footer">
                <a href="about_us.php">About us</a>
                <a href="mobile_version.php">Mobile Version</a>
                <a href="contact_us.html" style="float:right">Contact Us</a>
                <!-- <a style="padding-bottom: 5px;" href="">Values</a> -->
            </div> 
        </center>
    </div>
    <!-- <script>
        function halwa(){
            window.location.href="successful.html";
        }
    </script> -->
</body>
</html>
<?php
$conn=mysqli_connect("localhost:3307","root","Sumanth747.","mysql");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  else{
    // echo "DONE";
  }
$ff=fopen("from.txt","r");
$ft=fopen("to.txt","r");
$fd=fopen("date.txt","r");
$txtf=fread($ff,filesize("from.txt"));
$txtt=fread($ft,filesize("to.txt"));
$txtd=fread($fd,filesize("date.txt"));
$idd=$_SESSION['id'];
// echo $_SESSION['id'].$txtf.$txtt.$txtd;

if(isset($_POST['pay'])){
$result = mysqli_query($conn,"INSERT INTO `transaction`(`username`, `source`, `destination`, `doj`) VALUES ('$idd','$txtf','$txtt','$txtd')");
var_dump($result);
if ($result===true){
    header("Location: successful.html");
}
}
fclose($ff);
fclose($ft);
fclose($fd);
?>

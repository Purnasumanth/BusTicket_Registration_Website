<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/3a56e5b054.js" crossorigin="anonymous"></script>
    <title>About us</title>
    <style>
    .title ul,b,i{
        list-style: none;
        overflow: hidden;
        padding: 5px;
    }
    .title li{
        display:block;
        float:right;
        font-size:30px;color:lavender;
        padding:5px;
        text-decoration: none;
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
    #footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        height: 100px;
    }
    .button{
        text-align: center;
        
    }
    button{
        padding: 10px;
        padding-left: 20px;
        padding-right: 20px;
        background-color: rgb(255, 145, 0);
        border-radius: 5px;
        border: 1px solid rgb(255, 145, 0);
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
    </style>
</head>
<body>
    <div class="title">
        <ul>
            <b class="logo" style="color:white">Happy Bus</b> <i class="fa-solid fa-bus" style="font-size:30px;color:lavender;float:left;"></i>
            <li><a class="current" href="home.php"><i class="fas fa-home" style="color:lavender;"></i></a>
        </ul>
    </div>
    <p style="font-size: larger;">Our Introduction
        <b>HAPPY BUS</b> is a bus ticket booking website that helps people to book tickets online.
        <br><br>
        <b> Who We Are</b> <br>
        Our dedicated team of  developers, designers, marketers and sales are passionate about helping people to attain easy ticket booking. Since our founding in 2023, <b>HAPPY BUS</b> has enabled 5000+customers around the world to travel. <br><br><br>
        For further information, please visit our website at <a href="home.php">Happy bus</a> or contact us at <a href="mailto:'sumanth.21bce9227@vitapstudent.ac.in'">sumanth.21bce9227@vitapstudent.ac.in</a> .
    </p>
    <div class="button" onclick="button()"><button>Home page</button></div>
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
    <script>
        function button(){
            window.location.href = "home.php";
        }
    </script>
</body>
</html>
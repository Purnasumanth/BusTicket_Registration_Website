<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/3a56e5b054.js" crossorigin="anonymous"></script>
    <title>Mobile Version</title>
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
        /* position: fixed; */
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
    img{
        width: 50%;
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
    <p style="font-size: larger; text-align: center;">
        <b>THIS FEATURE IS STILL UNDER CONSTRUCTION.</b> <br>
        <img src="https://media.istockphoto.com/photos/webpage-under-construction-picture-id592021506" alt="">
    </p>
    <div class="button" onclick="button()"><button>Home page</button></div>
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
    <script>
        function button(){
            window.location.href = "home.php";
        }
    </script>
</body>
</html>
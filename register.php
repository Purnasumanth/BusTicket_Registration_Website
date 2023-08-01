<?php
require 'config.php';
if(!empty($_SESSION["id"])){

}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM login_table WHERE username = '.$username.' OR email = '.$email.'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO login_table(pname,username,email,pass) VALUES('$name','$username','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
      header('location: login.php');
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/3a56e5b054.js" crossorigin="anonymous"></script>
    <title>Sign Up</title>
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
        height: auto;
    }
    .login{
        text-align: center;
    }
    /* button{
        padding: 10px;
        padding-left: 20px;
        padding-right: 20px;
        display: block;
        margin:0 auto;
    } */
    button{
        padding: 10px;
        padding-left: 20px;
        padding-right: 20px;
        display: block;
        margin-left:70px;
        border-radius: 7px;
        border: 1px solid rgb(251, 181, 89);
        background-color: white;
    }
    .form:hover button{
        background-color: rgb(255, 145, 0);;
    }
    input{
        display: block;
        margin:0 auto;
        width: 225px;
        height: 20px;
    }
    .form{
        padding: 15px;
        border: 2px solid rgb(255, 145, 0);
        width: 525px;
        display: flex;
        background-color: rgb(251, 181, 89);
        border-radius: 15px; 
        
    }
    .form:hover{
        background-color: white;
    }
    .halwa{
        grid-column-start: 2;
        grid-row-start: 2;
        justify-content: center;
        align-content: center;
        display: grid;
        grid-template-columns: auto auto auto;
        margin-top: 6%;
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
            <li style="font-size:20px;"><a href="register.php"><i class="fa-solid fa-user-plus" style="font-size:30px;color:lavender;float:left;"></i></li>
        <li style="font-size:20px;"><a href="login.php"><i class="fa-solid fa-right-to-bracket" style="font-size:30px;color:lavender;float:left;"></i></li>
            <li><a class="current" href="index.html"><i class="fas fa-home" style="color:lavender;"></i></a>
        </ul>
    </div>
    
    <div class="halwa">
        <div class="form">
            <img src="login.jpg" alt="" style="width: 230px; padding: 20px;">
            <br>
            <br>
            <form action="" method="post" class="login">
                <br>
                Name:
                <input type="text" name="name" placeholder="Name"><br>
                Username:
                <input type="text" name="username" placeholder="Username"><br>
                Password:
                <input type="password" name="password" placeholder="Password"><br>
                Email:
                <input type="email" name="email" placeholder="Email"><br>
                Confirm Password:
                <input type="password" name="confirmpassword" id = "confirmpassword" placeholder="confirm password"><br>
                <button onclick="button()" type="submit" name="submit">Register</button><br>
            </form>
        </div>
    </div>
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

</body>
</html>
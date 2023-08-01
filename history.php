
<html>
    <head>
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

            table,tr,th,td{
                border: 1px solid black;
                border-collapse: collapse;
                padding: 10px;
            }
            table{
                width: 800px;
                height: max-content;
                margin-left: 45vh;
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
            <b class="logo"style="color:white">Happy Bus</b> <i class="fa-solid fa-bus" style="font-size:30px;color:lavender;float:left;"></i>
            <li><a class="current" href="home.php"><i class="fas fa-home" style="color:lavender;"></i></a>
        </ul>
    </div>

        <header>HISTORY </header>
        
    </body>
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
</html>

<?php
require "config.php";
$id = $_SESSION['id'];

$sql = "SELECT * FROM `transaction` WHERE `username`='$id'";
        $result = $conn->query($sql);
        // var_dump($result);
        // echo "<p>Your Busses on <b>$date</b> from $from to $to.</p>";

        if ($result->num_rows > 0) {
            echo "<br><br>";
            echo "<table><tr><th>Transaction Id</th><th>Date of Journey</th><th>Source</th><th>Destination</th><th>Amount</th><th>Booking Date</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            
            echo "<tr><td>" .$row["tid"] . " </td><td>" .$row["doj"]. " </td><td>" . $row["source"]."</td><td>". $row["destination"]. "</td><td>". $row["amount"]. "</td><td>". $row["book_date"]. "</td></tr>";
        }
        echo "</table>";
        } else {
        echo "0 results";
        }
?>

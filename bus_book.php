<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/3a56e5b054.js" crossorigin="anonymous"></script>
    <title>Bus Booking</title>
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
        padding: 10px 10px 0px 10px;
        bottom: 0;
        width: 100%;
        /* Height of the footer*/
        height: 90px;
        /* background: grey; */
    }
    button{
        padding: 10px;
        font-size: x-large;
        border-radius: 8px;
        background-color: rgb(255, 145, 0);
        border: 1px solid rgb(255, 145, 0);
        color: white;
        width: 150px;
    }
    button:hover{
        background-color: white;
        color: black;
    }
    table{
        border-collapse: collapse;
        background-color: rgb(251, 181, 89);
    }
    th, td {
        border: 1px solid black;
        width: 700px;
        
        text-align: center;
        font-size: x-large;
        margin:20px auto;
        color: white;
    }
    tr:hover {
        background-color: coral;
    }
    .halwa{
        grid-column-start: 2;
        grid-row-start: 2;
        justify-content: center;
        align-content: center;
        display: grid;
        grid-template-columns: auto auto auto;
    }
    body{
        text-align: center;
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
    p{
        font-size: x-large;
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
    
    <?php
        require 'config.php';
        $fone=fopen("from.txt","r") or die("Unable to open");
        $ftwo=fopen("to.txt","r") or die("Unable to open");
        $fthree=fopen("date.txt","r") or die("Unable to open");
        $from=fread($fone,filesize("from.txt"));
        $to=fread($ftwo,filesize("to.txt"));
        $date=fread($fthree,filesize("date.txt"));
        $sql = "SELECT * from bus_slots where source='".$from."' AND destination='".$to."'";
        $result = $conn->query($sql);
        echo "<p>Your Busses on <b>$date</b> from $from to $to.</p>";

        if ($result->num_rows > 0) {
            echo "<br><br>";
            echo "<table><tr><th>Bus Id</th><th>Bus Name</th><th>Source</th><th>Destination</th><th>Amount</th><th>Book</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            
            echo "<tr><td>" .$row["bus id"] . " </td><td>" .$row["bus name"]. " </td><td>" . $row["source"]."</td><td>". $row["destination"]. "</td><td>". $row["amount"]. "</td><td> <button onclick='gui()'>Book</button></td></tr>";
        }
        echo "</table>";
        } else {
        echo "0 results";
        }
        $conn->close();
    ?>
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
<script>
    function gui() {
        window.location.href='seat_booking.php';
    }
</script>
</html>

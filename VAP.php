<?php
  include("database.php");
  $conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="VAP_Style.css">
    <title>DiamondCare</title>
    <link rel="icon" href="./image/Diamonde-removebg-preview.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/d9dfb6a543.js" crossorigin="anonymous"></script>
</head>
<body>
    <!--VAP Section Start-->

    <div class="box">
     
        <div class="container">
            <p>View all appointments:</p>
        <a href="./patient.php"><div class="return_button"><button>BACK</button></div></a> 
        </div>
        
    </div>
    
</body>
</html>

<?php

    $sql = "SELECT *from service";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)  
    {

        echo '<div class="delet_box">';
        while ($row = mysqli_fetch_assoc($result)) {
            $Date_of_Appointment=$row["date_appointment"];
            echo '<div class="flex_box">';
            echo '<div class="date_appointment">date_appointment: ' . $Date_of_Appointment . '</div>';
            echo '</div>'; 
        }
        echo '</div>';  
    }
    else 
    {
        echo'<div class="msg_error">No dates found.</div>';
    }
    mysqli_close($conn);
?> 
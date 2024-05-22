<?php
  include("database.php");
  $conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="DRP_Style.css">
    <title>DiamondCare</title>
    <link rel="icon" href="./image/Diamonde-removebg-preview.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/d9dfb6a543.js" crossorigin="anonymous"></script>
</head>
<body>
    <!--VAP Section Start-->

    <div class="box">  
        <div class="container">
            <p>Display all appointments between two given dates:</p>
            <form action="DRP.php" method="post">
                <div class="flex_date">
                    <input type="date" name="date_01" id="date_01">
                    <input type="date" name="date_02" id="date_02">
                    <div class="btn_date"><button name="btn_date">DONE</button></div>
                </div>
            </form> 
            <a href="./patient.php"><div class="return_button"><button>BACK</button></div></a>  
        </div>  
    </div>
    
</body>
</html>

<?php
    if(isset($_POST["btn_date"])) 
    {
        $date_01=$_POST["date_01"];
        $date_02=$_POST["date_02"];
        $sql = "SELECT *from service inner join patient on service.Matricule=patient.Matricule";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)  
        {

            echo '<div class="delet_box">';
            while ($row = mysqli_fetch_assoc($result)) 
            {
                $Matricule = $row["Matricule"];
                $first_name = $row["first_name"];
                $last_name = $row["last_name"];
                $Date_of_birth = $row["Date_of_birth"];
                $Date_of_Appointment=$row["date_appointment"];
                $groupe_sanguin = $row["groupe_sanguin"];
                if($Date_of_Appointment >= $date_01 && $Date_of_Appointment <=$date_02)
                {
                    echo '<div class="flex_box">';
                    echo '<div class="date_appointment">date_appointment: ' . $Date_of_Appointment . '</div>';
                    echo '</div>'; 
                }
            }
            echo '</div>';  
        }
    else 
    {
        echo'<div class="msg_error">No dates found.</div>';
    }

    }
 
    mysqli_close($conn);
?> 
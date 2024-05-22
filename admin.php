<?php
  include("database.php");
  $conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_style.css">
    <title>DiamondCare</title>
    <link rel="icon" href="./image/Diamonde-removebg-preview.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/d9dfb6a543.js" crossorigin="anonymous"></script>
</head>
<body>
    <!--Admin Section Start-->

    <div class="box">
        <div class="Dashboard">Dashboard</div>
        <div class="Dashboard_box">
            <div class="patients_Doctor">Number of patients registered:</div>
            <div class="patients_Doctor">Number of Appointment:</div>
            <div class="Dashboard_box_img"><img src="./image/3b175bd66d5e4117a2139f6a23a8daca.jpg"></div>
        </div>
        <div class="nav_box">
            <div class="img_logo"><img src="./image/Diamonde-removebg-preview.png"><a href="admin.php"><p class="text_logo">DiamondCare</p></a></div>
            <div class="boxes_task">
                <div class="box_task_01"><a href="#"><p class="task"><a href="admin_serch.php">Search for a patient</a></p></a></div>
                <div class="box_task_02"><a href="#"><p class="task"><a href="admin_delete.php">Delete a patient</p></a></div>
                <div class="box_task_03"><a href="#"><p class="task"><a href="admin_Edit.php">Edit patient information</p></a></div>
                <div class="box_task_04"><a href="#"><p class="task"><a href="admin_descending.php">descending classification of patients</p></a></div>
            </div>
            <div class="boxes_link_1_2_3">
                <div class="box_link_01"><a href="index.php"><p class="HOME">HOME</p></a></div>
                <div class="box_link_02"><a href="services.php"><p class="SERVICES">SERVICES</p></a></div>
                <div class="box_link_03"><a href="doctor.php"><p class="DOCTOR">DOCTOR</p></a></div>
            </div>
            <div class="boxes_link_4_5_6">
                <div class="box_link_04"><a href="Review.php"><p class="REVIEW">REVIEW</p></a></div>
                <div class="box_link_05"><a href="about.php"><p class="ABOUT">ABOUT</p></a></div>
                <div class="box_link_06"><a href="blogs.php"><p class="BLOG">BLOG</p></a></div>
            </div>
            
            <div class="Dashboard_img"><img src="./image/9c2b6d73a6cc34fa02d8d9d2eca28c68.jpg"></div>
        </div>

    </div>

    <!--hidden image-->

    <div class="hidden_img"><img src="./image/Medicine%20Customizable%20Isometric%20Illustrations%20_%20Amico%20Style.jpg"></div>

     <!--hidden image-->

    
</body>
</html>

<?php
    $count = 0;
    $Second_count = 0;
    $sql = "SELECT *FROM patient";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $count++;

        }
    }
    echo '<div class="count"> ' . $count . '</div>';

    $sql = "SELECT *FROM service";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
          $Second_count++;
  
        }
    }
    echo '<div class="Second_count"> ' . $Second_count . '</div>';

    
    mysqli_close($conn);
?> 
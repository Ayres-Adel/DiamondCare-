<?php
  include("database.php");
  $conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
?> 
<!DOCTYPE html>
<html lang="en">
    <!--head Section Start-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title> DiamondCare </title>
    <link rel="icon" href="./image/Diamonde-removebg-preview.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/d9dfb6a543.js" crossorigin="anonymous"></script>
</head>
    <!--head Section Start-->
<body>        
    <!--header Section Start-->

    <header class="header">
        <a href="#" class="logo"><div class="logo_med"><img src="./image/Diamonde.png"></div></i>DiamondCare.</a>
        <!--nav Section Start-->
        
        <nav class="navbar">
            
                <a href="./index.php" name="home1"><label class="underline">Home</label></a>          
                <a href="./services.php" name="services1" ><label class="underline">Services</label></a>
                <a href="./doctor.php" name="doctor" ><label class="underline">doctors</label></a>
                <a href="./about.php" name="about1"> <label class="underline">About</label></a>
                <a href="./Review.php" name="review1"><label class="underline">Review</label></a>
                <a href="./blogs.php" name="blogs1"><label class="underline">Blogs</label></a>
                <a href="./Login.php"><label  class="log_in_style">log in</label></a>

        </nav>

        <!--nav Section END-->

    </header>

    <!--move to home section-->

    <a href="./index.php" name="home"></a>

    <!--move to home section-->

    <!--header Section END-->

    <!--homepage Section Start-->

    <section class="homepage">

        <div class="Container_01">
            <img src="./image/undraw_medicine_b1ol.png" class="img_undraw_medicine">
            <div>
            <h1>24/7 Regular Check Up by Our Experienced Doctors</h1>
            <p>our medical care facility provides continuous access to routine check-up appointments with our team of highly skilled and knowledgeable doctors, regardless of the time of day.</p>
            </div>
        </div>
        <div class="heartbeat"><img src="./image/heartbeat.gif" class="img_heartbeat"></div>

        <div class="Container_02">
            <div1>
                <h1>15</h1>
                <p>Clinic Location</p>
            </div1>
            <div2>
                <h1>18</h1>
                <p>Surgery Room</p>
            </div2>
            <div3>
                <h1>1200+</h1>
                <p>Patient Capacity</p>
            </div3>
        </div>

        <div class="Container_03">
            <h1>4 Easy Step To Get Your Solutions</h1>
            <div class="flex_Container_03">
                <div>
                    <h1><i class="fa-solid fa-magnifying-glass" style="color: #74C0FC;"></i></h1>
                    <h2>Serch Doctor</h2>
                    <p>discovering the ideal healthcare provider has never been easier. Whether you're seeking a specialist, primary care physician, or allied healthcare professional, our platform empowers you to search based on your unique preferences.</p>
                </div>
                <div>
                    <h1><i class="fa-solid fa-suitcase-medical" style="color: #74C0FC;"></i></h1>
                    <h2>Check Profile</h2>
                    <p>Explore comprehensive information about each practitioner, including their qualifications, specialties, experience, and patient reviews.</p>
                </div>
                <div>
                    <h1><i class="fa-solid fa-business-time" style="color: #74C0FC;"></i></h1>
                    <h2>Appointment</h2>
                    <p>Our Appointment feature streamlines the process of scheduling medical appointments, putting control back in your hands. With just a few clicks, you can book appointments with your preferred healthcare provider at a time that suits you best.</p>
                </div>
                <div>
                    <h1><i class="fa-solid fa-droplet" style="color: #74C0FC;"></i></h1>
                    <h2>Get solution</h2>
                    <p>Our 'Get Solution' feature offers personalized healthcare recommendations designed to address your specific needs. Whether you're seeking advice on managing a chronic condition, exploring treatment options, or looking for preventive care strategies, our platform has you covered.</p>
                </div>
        </div>

        <div class="Container_04">
            <h1><label>Our</label> Department</h1>
            <div class="flex_Container_04">
            <img src="./image/undraw_Hello_re_3evm.png" class="img_Hello_medicine">
            <div class="grid_Container_04">
                <p><i class="fa-solid fa-stethoscope fa-2xl" style="color: #74C0FC;"></i><label>Cardiology</label></p>
                <p><i class="fa-solid fa-bone fa-2xl" style="color: #74C0FC;"></i><label>Orthopedic</label></p>
                <p><i class="fa-solid fa-heart-crack fa-2xl" style="color: #74C0FC;"></i><label>Surgery</label></p>
            </div>
            </div>
        </div>

        <div class="footer">
            <div class="grid_footer">
                <h1>DiamondCare</h1>
                <p>Empowering Your Health Journey Every Step of the Way</p>
            </div>
            <div class="flex_footer">
                <p><i class="fa-brands fa-square-facebook fa-2xl" style="color: #ffffff;"></i></p>
                <p><i class="fa-brands fa-instagram fa-2xl" style="color: #ffffff;"></i></p>
                <p><i class="fa-brands fa-square-twitter fa-2xl" style="color: #ffffff;"></i></p>
            </div>
            
        </div>

        <div class="rights">-- @ 2024 Insove - All rights reserved --</div>
        
            
    </section>
</body>
</html>

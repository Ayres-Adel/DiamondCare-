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
    <title>DiamondCare</title>
    <link rel="icon" href="./image/Diamonde-removebg-preview.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/d9dfb6a543.js" crossorigin="anonymous"></script>
</head>
    <!--head Section Start-->
<body>
            
    <!--header Section Start-->

    <header class="header">

    <a href="#" class="logo"><div class="logo_med"><img src="./image/Diamonde.png"></div></i>DiamondCare.</a>
        <!--nav Section Start-->
        
        <nav class="navbar" style="margin-left: -150px;">
            
                <a href="#patient" name="home1"><label class="underline">Home</label></a>      
                <a href="#services" name="services1" ><label class="underline">Services</label></a>
                <a href="#doctor" name="doctor1" ><label class="underline">doctors</label></a>
                <a href="#about" name="about1"> <label class="underline">About</label></a>
                <a href="#review" name="review1"><label class="underline">Review</label></a>
                <a href="#blogs" name="blogs1"><label class="underline">Blogs</label></a>
                <a href="./index.php"><label  class="log_out_style">log out</label></a>
        </nav>

        <!--nav Section END-->

    </header>

    <!--move to home section-->

    <a  name="patient"></a>

    <!--Section one Start-->

    <section class="Section_one">
        <div class="img_Nurses"><img src="./image/Doctor-rafiki.png"></div>
        <p class="text_patient"><label class="Special_text">Special </label>Touch</p>
        <p class="information_patient">At DiamondCare we believe in the power of the Special Touch—the extra care and attention that makes all the difference in your healthcare journey. </p>
        <a href="#about" name="about1"><div class="button_information">More information</div></a>
    </section>

    <!--Section one End-->

    <!--Section two Start-->

    <section class="Section_two">

    <div class="boxes_Section_two">
        
        <div class="box_p1">
        <div class="img_Section_two"><img src="./image/Doctor-bro.png"></div>
            <p><a href="#about" name="about1">About Us</a></p>
        </div>

        <div class="box_p2">
            <div class="img_Section_two"><img src="./image/Doctors-pana.png"></div>
            <p><a href="./VAP.php">View all appointments</a></p>
        </div>

        <div class="box_p3">
            <div class="img_img_Section_two_01"><img src="./image/Medicine-amico.png"></div>
            <p><a href="./DRP.php">descending ranking of patients</a></p>
        </div>
    </div>

    </section>
    
    <!--Section two End-->

    <section class="Service" >
        <!-- start:box 1-2-3 -->
        <div class="text02"><a name="services"></a><center>OUR <span class="SERVICE">SERVICE</span></center></div>
        
        <div class="boxes-1-2-3">

            <div class="box01">

                <div class="logo_check"><i class="fa-solid fa-clipboard-check" style="color: #004880;"></i></div>
                <span class="text_check">Free Checkup</span> <br>
                <p class="text_lorem">Take advantage of our complimentary checkup service, designed to prioritize your health and well-being.</p>
            </div>

            <div class="box02">

                <div class="logo_check"><i class="fa-solid fa-truck-medical" style="color: #004880;"></i></div>
                <span class="text_check">24/7 Ambulance</span>
                <p class="text_lorem">Our 24/7 ambulance service ensures prompt and reliable medical assistance whenever you need it most.</p>
            </div>

            <div class="box03">

                <div class="logo_check"><i class="fa-solid fa-user-doctor" style="color: #004880;"></i></div>
                <span class="text_check">Experts Consultancy</span>
                <p class="text_lorem">Gain access to our team of seasoned healthcare experts for personalized guidance and support. </p>
            </div>
        </div>
        <!-- fin:box 1-2-3 -->

        <!-- start:box 4-5-6 -->

        <div class="boxes-4-5-6">

            <div class="box04">

                <div class="logo_check"><i class="fa-solid fa-pills" style="color: #004880;"></i></div>
                <span class="text_check">Medicines</span> <br>
                <p class="text_lorem">Our pharmacy offers a comprehensive range of high-quality medications to meet your healthcare needs.</p>
            </div>

            <div class="box05">

                <div class="logo_check"><i class="fa-solid fa-bed-pulse" style="color: #004880;"></i></div>
                <span class="text_check">Bed Facility</span> <br>
                <p class="text_lorem">Our Bed Facility offers a comfortable and supportive environment for patients requiring overnight care or extended stays. </p>
            </div>

            <div class="box06">
                <div class="logo_check"><i class="fa-solid fa-heart-pulse" style="color: #004880;"></i></div>
                <span class="text_check">Nutrition Tips</span> <br>
                <p class="text_lorem">Discover practical advice and insights to optimize your diet and fuel your body for health and vitality.</p>
            </div>
        </div>

        <!-- fin:box 4-5-6 -->

    </section> <br> <br>

    <!--Service Section Ends-->

     <!--doctor Section Start-->

     <section class="Doctor">
        <!-- start:box 1-2-3 -->
        <div class="text02"><a name="doctor"></a><center>OUR <span class="DOCTOR">DOCTORS</span></center></div>
        
        <div class="boxes-Doctor-1-2-3">

            <div class="box-Doctor-01">
                <div class="img-doctor"><img src="./image/doctor-smiling-with-stethoscope.jpg"></div>
                <p class="Michael-doctor">Dr. Michael Johnson</p>
                <p class="service-Pediatrics">Pediatrics Service specialist</p>
                <a href="./book.php"><div class="Appointment-Booking">Make an appointment<p class="square_doctor"><i class="fa-solid fa-square-caret-right fa-2xl" style="color: #1662a0;"></i></p></div></a>
            </div>

            <div class="box-Doctor-02">
                <div class="img-doctor"><img src="./image/doctor-thinking-isolated-white-background.jpg"></div>
                <p class="David-doctor">Dr. David Smith</p>
                <p class="General-Medicine-doctor">General Medicine Service specialist</p>
                <a href="./book.php"><div class="Appointment-Booking">Make an appointment<p class="square_doctor"><i class="fa-solid fa-square-caret-right fa-2xl" style="color: #1662a0;"></i></p></div></a>
            </div>

            <div class="box-Doctor-03">
                <div class="img-doctor"><img src="./image/young-medical-student.jpg"></div>
                <p class="Christopher-doctor">Dr. Christopher Lee</p>
                <p class="dentist-doctor">dentist Service specialist</p>
                <a href="./book.php"><div class="Appointment-Booking">Make an appointment<p class="square_doctor"><i class="fa-solid fa-square-caret-right fa-2xl" style="color: #1662a0;"></i></p></div></a>
            </div>
        </div>
        <!-- fin:box 1-2-3 -->

        <!-- start:box 4-5-6 -->
        <div class="boxes-Doctor-4-5-6">

            <div class="box-Doctor-04">
                <div class="img-doctor"><img src="./image/portrait-young-doctor-man.jpg"></div>
                <p class="Matthew-doctor">Dr. Matthew Taylor</p>
                <p class="Orthopedics-doctor">Orthopedics Service specialist</p>
                <a href="./book.php"><div class="Appointment-Booking">Make an appointment<p class="square_doctor"><i class="fa-solid fa-square-caret-right fa-2xl" style="color: #1662a0;"></i></p></div></a>
            </div>

            <div class="box-Doctor-05">
                <div class="img-doctor"><img src="./image/portrait-happy-smiling-male-doctor-with-stethoscope.jpg"></div>
                <p class="Jonathan-doctor">Dr. Jonathan Brown</p>
                <p class="surgery-doctor">surgery Service specialist</p>
                <a href="./book.php"><div class="Appointment-Booking">Make an appointment<p class="square_doctor"><i class="fa-solid fa-square-caret-right fa-2xl" style="color: #1662a0;"></i></p></div></a>
            </div>

            <div class="box-Doctor-06">
                <div class="img-doctor"><img src="./image/cheerful-doctor-with-stethoscope.jpg"></div>
                <p class="Alexander-doctor">Dr. Alexander Rodriguez</p>
                <p class="ophthalmology-doctor">ophthalmology Service specialist</p>
                <a href="./book.php"><div class="Appointment-Booking">Make an appointment<p class="square_doctor"><i class="fa-solid fa-square-caret-right fa-2xl" style="color: #1662a0;"></i></p></div></a>
            </div>
        </div>

        <!-- fin:box 4-5-6 -->

    </section> <br> <br>

    <!--doctor Section Ends-->

    <!--About Section Start-->

    <section class="About">

    <div class="text03"><a name="about" href="#about1"></a><center><span class="ABOUT">About </span>Us</center></div>
        <div class="img_About"><img src="./image/Download%20Vaccination%20and%20injection%20male%20doctor%20in%20medical%20gown%20with%20vaccine%20for%20free.jpg"></div>
        <div class="text_About">We Take Care Of Your Healthy Life</div>
        <p class="text_About_01">we are dedicated to safeguarding and enhancing your well-being at every step of your health journey. Our mission is to provide comprehensive and compassionate care that empowers you to lead a fulfilling and healthy life.</p>
        <p class="text_About_01">With a team of highly skilled healthcare professionals and cutting-edge technology, we strive to exceed your expectations and deliver personalized solutions tailored to your unique needs. </p>
            

    </section>

    <!--About Section End-->

     <!--Review Section Start-->

     <section class="Review">

     <div class="text04"><a name="review" href="#review1"></a><center>CLIENT'S <span class="REVIEW">REVIEW</span></center></div>
    <div class="boxes_review">
        <div class="box_r1">
            <div class="img_r1"><center><img src="./image/b9758057d06f10602a17b5e005ed172f.jpg"></center></div>
            <p class="box_t1" style="margin-left: -17px;">Emily Taylor</p>
            <div class="start">
                <i class="fa-solid fa-star" style="color: #ffffff;"></i>
                <i class="fa-solid fa-star" style="color: #ffffff;"></i>
                <i class="fa-solid fa-star" style="color: #ffffff;"></i>
                <i class="fa-solid fa-star" style="color: #ffffff;"></i>
            </div>
            <center><p class="box_lorem">I cannot thank DiamondCare enough for the exceptional care I received. From the moment I walked in, I was greeted with warmth and professionalism. </p></center>
        </div>

        <div class="box_r2">
            <div class="img_r2"><center><img src="./image/business%20profile%20picture%20men.jpg"></center></div>
            <p class="box_t1" style="margin-left: -18px;">Henry Wilson</p>
            <div class="start">
                <i class="fa-solid fa-star" style="color: #ffffff;"></i>
                <i class="fa-solid fa-star" style="color: #ffffff;"></i>
                <i class="fa-solid fa-star" style="color: #ffffff;"></i>
                <i class="fa-solid fa-star" style="color: #ffffff;"></i>
            </div>
            <center><p class="box_lorem">I'm so grateful to have found DiamondCare for my healthcare needs. The entire team made me feel like family from day one. </p></center>
        </div>

        <div class="box_r3">
            <div class="img_r3"><center><img src="./image/download.jpg"></center></div>
            <p class="box_t1" style="margin-left: -34px;">Alexander Smith</p>
            <div class="start">
                <i class="fa-solid fa-star" style="color: #ffffff;"></i>
                <i class="fa-solid fa-star" style="color: #ffffff;"></i>
                <i class="fa-solid fa-star" style="color: #ffffff;"></i>
                <i class="fa-solid fa-star" style="color: #ffffff;"></i>
            </div>
            <center><p class="box_lorem">Choosing DiamondCare for my medical care was one of the best decisions I've made for my health. From the moment I walked through the door, I felt supported and valued as a patient.</p></center>
        </div>
    </div>
    <div class="hidden_img_Review_flex">
        <div class="hidden_img_Review"><img src="./image/Free%20Vector%20_%20Online%20doctor%20concept%20illustration.jpg"></div>
        <div class="hidden_img_Review"><img src="./image/Free%20Vector%20_%20Online%20doctor%20concept%20illustration.jpg"></div>
        <div class="hidden_img_Review"><img src="./image/Free%20Vector%20_%20Online%20doctor%20concept%20illustration.jpg"></div>
    </div>


    </section>

    <!--Review Section End-->

    <!--blogs Section Start-->

    <section class="blogs">

    <div class="text05"><a name="blogs" href="#blogs1"></a><center>OUR <span class="BLOGS">BLOGS</span></center></div>
        
        <div class="boxes_blogs">

            <div class="box_b1">
                <div class="img_blogs"><img src="./image/young-handsome-physician-medical-robe-with-stethoscope.jpg"></div>
                <div class="calendar_blogs"><i class="fa-solid fa-calendar-plus" style="color: #004880;"></i> 15st May, 2021</div>
                <div class="user_blogs"><i class="fa-solid fa-user" style="color: #004880;"></i> By Ayres</div>
                <center><p class="blogs_title">Mindful Eating</p></center>
                <center><p class="blogs_lorem">you can cultivate a deeper connection with your food, enhance digestion, and promote a healthier relationship with eating</p></center>
                
            </div>
    
            <div class="box_b2">
                <div class="img_blogs"><img src="./image/medical-banner-with-doctor-patient.jpg"></div>
                <div class="calendar_blogs"><i class="fa-solid fa-calendar-plus" style="color: #004880;"></i> 26st May, 2022</div>
                <div class="user_blogs"><i class="fa-solid fa-user" style="color: #004880;"></i> By Saif</div>
                <center><p class="blogs_title">Sleep Essentials</p></center>
                <center><p class="blogs_lorem">from establishing a relaxing bedtime routine to creating a conducive sleep environment. Prioritize restful sleep to boost mood, energy levels, and overall well-being.</p></center>
            </div>
    
            <div class="box_b3">
                <div class="img_blogs"><img src="./image/medical-banner-with-doctor-wearing-goggles.jpg"></div>
                <div class="calendar_blogs"><i class="fa-solid fa-calendar-plus" style="color: #004880;"></i> 1st May, 2021</div>
                <div class="user_blogs"><i class="fa-solid fa-user" style="color: #004880;"></i> By Ayres</div>
                <center><p class="blogs_title">Digital Detox</p></center>
                <center><p class="blogs_lorem">Discover the importance of taking a break from screens in this blog post. Explore the benefits of a digital detox for mental wellness</p></center>
            </div>

    </section>

    <!--blogs Section End-->

    
</body>
</html>
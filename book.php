<?php
  include("database.php");
  $conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="book_style.css">
    <title>DiamondCare</title>
    <link rel="icon" href="./image/Diamonde-removebg-preview.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/d9dfb6a543.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="Sign_up">
        <div class="text"><center>BOOK <span class="BOOK">NOW</span></center></div>

        <div class="img_Sign">
    
            <img src="./image/Reading%20list%20Customizable%20Flat%20Illustrations%20_%20Rafiki%20Style.jpg">
        
        </div>
         
        <div class="box">   
            <div class="inner_box">
    
            <div class="text01"><center>Book Appointment</center></div>
    
                <form action="book.php" method="post">

                    <div class="your_information"><input type="text" name="your_name" placeholder="Last name" value="<?php echo isset($_POST['your_name']) ? htmlspecialchars($_POST['your_name']) : ''; ?>"></div>
                    <div class="your_information"><input type="text" name="your_number" placeholder="Registration number" value="<?php echo isset($_POST['your_number']) ? htmlspecialchars($_POST['your_number']) : ''; ?>"></div>
                    <div class="your_information"><input type="text" name="your_email" placeholder="Email" value="<?php echo isset($_POST['your_email']) ? htmlspecialchars($_POST['your_email']) : ''; ?>"></div>
                    <div class="your_information"><input type="date" name="date" value="<?php echo isset($_POST['date']) ? $_POST['date'] : ''; ?>"></div>

                    <div class="Service">
                        <label for="Service_specialist">Choose a Service specialist:</label>
                        <select name="Service_specialist" id="Service_specialist" class="Service_specialist">
                            <option value="Pediatrics"<?php if(isset($_POST['Service_specialist']) && $_POST['Service_specialist'] == 'Pediatrics') echo ' selected="selected"'; ?>>Pediatrics</option>
                            <option value="General-Medicine"<?php if(isset($_POST['Service_specialist']) && $_POST['Service_specialist'] == 'General-Medicine') echo ' selected="selected"'; ?>>General Medicine</option>
                            <option value="dentist"<?php if(isset($_POST['Service_specialist']) && $_POST['Service_specialist'] == 'dentist') echo ' selected="selected"'; ?>>dentist</option>
                            <option value="Orthopedics"<?php if(isset($_POST['Service_specialist']) && $_POST['Service_specialist'] == 'Orthopedics') echo ' selected="selected"'; ?>>Orthopedics</option>
                            <option value="surgery"<?php if(isset($_POST['Service_specialist']) && $_POST['Service_specialist'] == 'surgery') echo ' selected="selected"'; ?>>surgery</option>
                            <option value="ophthalmology"<?php if(isset($_POST['Service_specialist']) && $_POST['Service_specialist'] == 'ophthalmology') echo ' selected="selected"'; ?>>ophthalmology</option>
                        </select>
                    </div>

                    <div class="Book_Now"><button name="Book_Now">Book Now</button></div>    
                    
                </form>
    
            </div>
            </div>
        </div> 
    
    
        </section>
    
        <!--Sign up Section End-->
    
        <!--hidden image-->
    
         <div class="hidden_img"><img src="./image/Free%20Vector%20_%20Online%20doctor%20concept%20illustration.jpg"></div>
    
        <!--hidden image-->
    
        <!--footer Section Start-->
    
        <section class="footer">
    
            <div class="nav_footer">
    
            <div class="home"><a href="./index.php" name="home1">Home</a> </div>
            <div class="services"><a href="./services.php" name="services1" >Services</a></div>  
            <a href="./doctor.php" name="doctor" >doctors</a>       
            <div class="about"><a href="./about.php" name="about1">About</a></div>
            <div class="review"><a href="./Review.php" name="review1">Review</a></div>
            <div class="blogs"><a href="./blogs.php" name="blogs1">Blogs</a></div>
    
            </div>
    
        </section>
    
        <!--footer Section Start-->

    
</body>
</html>


<?php
    $tester = 1;
    $verification=0;
    if(isset($_POST["Book_Now"]))
    {
        $last_name=$_POST["your_name"];
        $your_number=$_POST["your_number"];
        $your_email=$_POST["your_email"];
        $date=$_POST["date"];
        $Service_specialist=$_POST["Service_specialist"];
        $sql = "SELECT *FROM service";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                if($row["date_appointment"]==$date)
                {
                    echo'<p class="erorr_date"><i class="fa-solid fa-circle-exclamation" style="color: #af4242;"></i></p>';
                    echo '<div class="error-message-date" style="margin-left: 1060px;">there is another appointment with this date </div>';
                    $verification=1;
                }
            }
        }
        $sql = "SELECT *from patient";
        $result = mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                if($row["last_name"]==$last_name && $row["Matricule"]==$your_number && $row["Email"]==$your_email && $verification==0)
                {
                    $sql = "INSERT INTO service (service_specialist,date_appointment,Matricule) 
                            VALUES ('$Service_specialist','$date','$your_number')"; 
                    mysqli_query($conn,$sql);
                    header("Location: index.php");  
                    $tester=0;
                }

                if($tester==1 && $verification==0)
                {
                    if(empty($last_name))
                    {
                        echo'<p class="erorr_last_name"><i class="fa-solid fa-circle-exclamation" style="color: #af4242;"></i></p>';
                        echo '<div class="error-message-last-name">last name is empty</div>';
                        $tester=0;
                    }
                    else
                    {
                        if($row["last_name"]!=$last_name)
                        {
                            echo'<p class="erorr_last_name"><i class="fa-solid fa-circle-exclamation" style="color: #af4242;"></i></p>';
                            echo '<div class="error-message-last-name" style="margin-left: 1176px;">this name not registered</div>';
                            $tester=0;
                        }
                    }
            
                    if(empty($your_number))
                    {
                        echo'<p class="erorr_Matricule"><i class="fa-solid fa-circle-exclamation" style="color: #af4242;"></i></p>';
                        echo '<div class="error-message-Matricule">Matricule is empty</div>';
                        $tester=0;
                    }
                    else
                    {
                        if($row["Matricule"]!=$your_number)
                        {
                            echo'<p class="erorr_Matricule"><i class="fa-solid fa-circle-exclamation" style="color: #af4242;"></i></p>';
                            echo '<div class="error-message-Matricule" style="margin-left: 1155px;">this Matricule not registered</div>';
                            $tester=0;
                        }

                    }
            
                    if(empty($your_email))
                    {
                        echo'<p class="erorr_Email"><i class="fa-solid fa-circle-exclamation" style="color: #af4242;"></i></p>';
                        echo '<div class="error-message-Email">Email is empty</div>';
                        $tester=0;
                    }
                    else
                    {
                        if($row["Email"]!=$your_email)
                        {
                            echo'<p class="erorr_Email"><i class="fa-solid fa-circle-exclamation" style="color: #af4242;"></i></p>';
                            echo '<div class="error-message-Email" style="margin-left: 1210px;">Email not registered</div>';
                            $tester=0;
                        }
                    }
            
                    if(empty($date))
                    {
                        echo'<p class="erorr_date"><i class="fa-solid fa-circle-exclamation" style="color: #af4242;"></i></p>';
                        echo '<div class="error-message-date">Date is empty</div>';
                        $tester=0;
                    }

                }         
        }
        }
    
    }

    mysqli_close($conn);
?> 
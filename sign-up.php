<?php
  include("database.php");
  $conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style-sign-up.css">
    <link rel="stylesheet" href="index.html">
    <link rel="icon" href="./image/Diamonde-removebg-preview.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/d9dfb6a543.js" crossorigin="anonymous"></script>
    <title>DiamondCare</title>
</head>
<body>  
    <!--Sign up Section Start-->

    <section class="Sign_up">

    <div class="img_Sign">

        <img src="./image/Free%20Vector%20_%20Health%20insurance%20abstract%20concept%20vector%20illustration_%20health%20insurance%20contract,%20medical%20expenses,%20claim%20application%20form,%20agent%20consultation,%20sign%20document,%20emergency%20coverage%20abstract%20metaphor_.jpg">
    
    </div>
     
    <div class="box">   
        <div class="inner_box">

        <div class="text01"><center><span class="Sign">Sign </span>up</center></div>

            <form action="sign-up.php" method="post">

                <div class="First_name"><input type="text" name="First_name" placeholder="First name" value="<?php echo isset($_POST['First_name']) ? htmlspecialchars($_POST['First_name']) : ''; ?>"><span class="bx"><i class='bx bxs-user'></i></span></div>
                <div class="Last_name"><input type="text" name="Last_name" placeholder="Last name" value="<?php echo isset($_POST['Last_name']) ? htmlspecialchars($_POST['Last_name']) : ''; ?>"><span class="bx"><i class='bx bxs-user'></i></span> </div>
                <div class="Email"><input type="text" name="Email" placeholder="Email" value="<?php echo isset($_POST['Email']) ? htmlspecialchars($_POST['Email']) : ''; ?>"><span class="bx_email"><i class="fa-solid fa-envelope"></i></span></div>
                <div class="number"><input type="text" name="Matricule" placeholder="Matricule" value="<?php echo isset($_POST['Matricule']) ? htmlspecialchars($_POST['Matricule']) : ''; ?>"><span class="bx_number"><i class="fa-solid fa-hashtag"></i></span></div>
                <div class="date_birdhday"><input type="date" name="date" value="<?php echo isset($_POST['date']) ? $_POST['date'] : ''; ?>"></div>


                <div class="groupe_sanguin">
                    <label for="sanguin">Choose a Service specialist:</label>
                    <select name="sanguin" id="sanguin" class="sanguin">
                    <option value="A+" <?php echo (isset($_POST['sanguin']) && $_POST['sanguin'] == 'A+') ? 'selected' : ''; ?>>A+</option>
                    <option value="A-" <?php echo (isset($_POST['sanguin']) && $_POST['sanguin'] == 'A-') ? 'selected' : ''; ?>>A-</option>
                    <option value="B+" <?php echo (isset($_POST['sanguin']) && $_POST['sanguin'] == 'B+') ? 'selected' : ''; ?>>B+</option>
                    <option value="B-" <?php echo (isset($_POST['sanguin']) && $_POST['sanguin'] == 'B-') ? 'selected' : ''; ?>>B-</option>
                    <option value="AB+" <?php echo (isset($_POST['sanguin']) && $_POST['sanguin'] == 'AB+') ? 'selected' : ''; ?>>AB+</option>
                    <option value="AB-" <?php echo (isset($_POST['sanguin']) && $_POST['sanguin'] == 'AB-') ? 'selected' : ''; ?>>AB-</option>
                    <option value="O+" <?php echo (isset($_POST['sanguin']) && $_POST['sanguin'] == 'O+') ? 'selected' : ''; ?>>O+</option>
                    <option value="O-" <?php echo (isset($_POST['sanguin']) && $_POST['sanguin'] == 'O-') ? 'selected' : ''; ?>>O-</option>
                    </select>
                </div>


                <div class="Password"><input type="password" name="Password" placeholder="Password"><span class="bx_Password"><i class='bx bxs-lock-alt' ></i></span></div>
                <div class="login"><button name="Sign_up">Sign up</button></div>
                <div class="text02">Have an account?<span class="log_in_design"><a href="./Login.php">Log in</a></span></div>
                
                

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
    $tester=1;
    $tester_A = 1;
    if(isset($_POST["Sign_up"])){     
        $First_name = $_POST["First_name"];

        $Last_name = $_POST["Last_name"];

        $Email = $_POST["Email"];

        $Matricule = $_POST["Matricule"];

        $date = $_POST["date"];

        $sanguin = $_POST["sanguin"];

        $Password = $_POST["Password"];

        $minLength = 8;

        $maxLength = 20;

        $uppercaseRequired = true;

        $lowercaseRequired = true;

        $numberRequired = true;

        $length = strlen($Password);

        $sql = "SELECT *FROM patient";

        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
              if($Matricule==$row["Matricule"])
              {
                echo '<p class="error_Matricule"><i class="fas fa-circle-exclamation" style="color: #af4242;"></i></p>';
                echo '<div class="error-message-Matricule" style="margin-left: 890px;">there is another Patient with this Matricule</div>';
                $tester=0;
              }
            }
          }

        if(empty($First_name))
        {
            echo'<p class="error_first_name"><i class="fa-solid fa-circle-exclamation" style="color: #af4242;"></i></p>';
            echo '<div class="error-message-first-name">first name is empty</div>';
        }
        else{
            if(!preg_match("/^[a-zA-Z]+$/", $First_name))
            {
                echo'<p class="error_first_name"><i class="fa-solid fa-circle-exclamation" style="color: #af4242;"></i></p>';
                echo '<div class="error-message-first-name" style="margin-left: 910px;">The first name must be in letters only</div>';

            }
        }
        if(empty($Last_name))
        {
            echo'<p class="error_last_name"><i class="fa-solid fa-circle-exclamation" style="color: #af4242;"></i></p>';
            echo '<div class="error-message-last-name">last name is empty</div>';
        }
        else{
            if(!preg_match("/^[a-zA-Z]+$/", $Last_name))
            {
                echo'<p class="error_last_name"><i class="fa-solid fa-circle-exclamation" style="color: #af4242;"></i></p>'; 
                echo '<div class="error-message-last-name" style="margin-left: 911px;">The last name must be in letters only</div>';
            }
        }
        if(empty($Email))
        {  
            echo'<p class="error_email"><i class="fa-solid fa-circle-exclamation" style="color: #af4242;"></i></p>';
            echo '<div class="error-message-email">Email is empty</div>';
        }
        else{
            if(!filter_var($Email, FILTER_VALIDATE_EMAIL))
            {
                echo'<p class="error_email"><i class="fa-solid fa-circle-exclamation" style="color: #af4242;"></i></p>';
                echo '<div class="error-message-email" style="margin-left: 1080px;">Email is invalid</div>';
            }
            }
        if(empty($Matricule))
        {
                echo'<p class="error_Matricule"><i class="fa-solid fa-circle-exclamation" style="color: #af4242;"></i></p>';
                echo '<div class="error-message-Matricule">Matricule is empty</div>';
        }
        else{
            if(!filter_var($Matricule, FILTER_VALIDATE_INT))
            {
                echo'<p class="error_Matricule"><i class="fa-solid fa-circle-exclamation" style="color: #af4242;"></i></p>'; 
                echo '<div class="error-message-Matricule" style="margin-left: 920px;">The Matricule must be in integer only</div>';
            }
            }
        if(empty($date))
        {
                echo'<p class="error_date"><i class="fa-solid fa-circle-exclamation" style="color: #af4242;"></i></p>';
                echo '<div class="error-message-date">date is empty</div>';
        }
        if(empty($Password))
        {
                echo'<p class="error_Password"><i class="fa-solid fa-circle-exclamation" style="color: #af4242;"></i></p>';
                echo '<div class="error-message-password">Password is empty</div>';
                $tester=0;
        }
        else 
        {
            if ($length < $minLength || $length > $maxLength && $tester_A==1) 
            {
                    echo'<p class="error_Password"><i class="fa-solid fa-circle-exclamation" style="color: #af4242;"></i></p>';
                    echo '<div class="error-message-password" style="margin-left: 856px;">Password must be between 8 and 20 characters long.</div>';
                    $tester_A=0;
            }
    
    
            if ($uppercaseRequired && !preg_match('/[A-Z]/', $Password) && $tester_A==1) 
            {
                    echo'<p class="error_Password"><i class="fa-solid fa-circle-exclamation" style="color: #af4242;"></i></p>';
                    echo '<div class="error-message-password" style="margin-left: 856px;">Password must contain at least one uppercase letter.</div>';
                    $tester_A=0;
            }
    
    
            if ($lowercaseRequired && !preg_match('/[a-z]/', $Password) && $tester_A==1) 
            {
                    echo'<p class="error_Password"><i class="fa-solid fa-circle-exclamation" style="color: #af4242;"></i></p>';
                    echo '<div class="error-message-password" style="margin-left: 858px;">Password must contain at least one lowercase letter</div>';
                    $tester_A=0;
            }
    
    
            if ($numberRequired && !preg_match('/\d/', $Password) && $tester_A==1) 
            {
                    echo'<p class="error_Password"><i class="fa-solid fa-circle-exclamation" style="color: #af4242;"></i></p>';
                    echo '<div class="error-message-password" style="margin-left: 890px;">Password must contain at least one number.</div>';
                    $tester_A=0;
            }
    
        }   
        





        if(!empty($First_name) && !empty($Last_name) && !empty($Email) && !empty($Matricule)&& !empty($date)&& !empty($sanguin)&& !empty($Password) && $tester==1 && $tester_A==1){
            if(filter_var($Email, FILTER_VALIDATE_EMAIL) && preg_match("/^[a-zA-Z]+$/", $First_name) && preg_match("/^[a-zA-Z]+$/", $Last_name) && filter_var($Matricule, FILTER_VALIDATE_INT))
            {
                $sql = "INSERT INTO patient (Matricule,first_name,last_name,Email,Date_of_birth,groupe_sanguin,Password) 
                        VALUES ('$Matricule','$First_name','$Last_name','$Email','$date','$sanguin','$Password')";
                mysqli_query($conn,$sql); 
                header("Location: Login.php"); 
            }
        }
    }
    mysqli_close($conn);
?> 
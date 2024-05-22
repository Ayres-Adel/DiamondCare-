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
        <nav class="navbar">
            
                <a href="./index.php" name="home1"><label class="underline">Home</label></a>          
                <a href="./services.php" name="services1" ><label class="underline">Services</label></a>
                <a href="./doctor.php" name="doctor" ><label class="underline">doctors</label></a>
                <a href="./about.php" name="about1"> <label class="underline">About</label></a>
                <a href="./Review.php" name="review1"><label class="underline">Review</label></a>
                <a href="./blogs.php" name="blogs1"><label class="underline">Blogs</label></a>

        </nav>

        <!--nav Section END-->
    </header>

    <!--move to home section-->

    <a href="./index.php" name="home"></a>

    <!--move to home section-->

    <!--header Section END-->

    <!--main Section Start-->

    <section>
        
        <div class="test">
            <p class="test1">Welcome</p>
        </div>


        <div class="img_log">

            <img src="./image/Free%20Vector%20_%20Online%20doctor%20concept%20illustration.jpg">

        </div>

        <div class="box">
            <div class="box_inner">
            <div class="text01"><center><span class="Sign">Sign </span>in</center></div>

            <form action="Login.php" method="post">

                <div class="Username"><input type="text" name="Username" placeholder="first name" value="<?php echo isset($_POST['Username']) ? htmlspecialchars($_POST['Username']) : ''; ?>"><span class="bx"><i class='bx bxs-user'></i></span></div>
                <div class="Password"><input type="password" name="Password" placeholder="Password"><span class="bx"><i class='bx bxs-lock-alt' ></i></span> <br> 
                <div class="login"><button name="log_in">Log in</button></div>
                <div class="tx01">Don't Have an account?<span class="Sign_up_design"><a href="./sign-up.php">Sign up</a></span></div>

            </form>
            </div>
        </div>

    </section>

    <!--main Section END-->

    <!--hidden image-->

    <div class="hidden_img"><img src="./image/Free%20Vector%20_%20Online%20doctor%20concept%20illustration.jpg"></div>

    <!--hidden image-->

</body>
</html>


<?php
$tester=1;
  if(isset($_POST["log_in"]))
    {
        $Username = $_POST["Username"];
        $Password = $_POST["Password"];
        $sql = "SELECT *FROM patient";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                if($row["first_name"]==$Username && $row["Password"]==$Password )    
                {
                    header("Location: patient.php"); 
                    $tester=0;
                }
            }
        }   
        $sql = "SELECT *FROM admin";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                if($row["username"]==$Username && $row["password"]==$Password)
                {
                    header("Location: admin.php"); 
                    $tester=0;
                }
                if($tester==1)
                {
                    if(empty($Username))
                    {
                        echo'<p class="error_username"><i class="fa-solid fa-circle-exclamation" style="color: #af4242;"></i></p>';
                        echo'<p class="error_username_message">Username is empty</p>';
                        $tester=0;

                    }
                    else
                    {
                        if($row["username"]!=$Username)
                        {
                            echo'<p class="error_username"><i class="fa-solid fa-circle-exclamation" style="color: #af4242;"></i></p>';
                            echo'<p class="error_username_message" style="margin-left: 1100px;">Username is incorrect</p>';
                            $tester=0;
                        }
                    }

                    if(empty($Password))
                    {
                        echo'<p class="error_password"><i class="fa-solid fa-circle-exclamation" style="color: #af4242;"></i></p>';
                        echo'<p class="error_password_message">Password is empty</p>';
                        $tester=0;
                    }
                    else
                    {
                        if($row["password"]!=$Password)
                        {
                            echo'<p class="error_password"><i class="fa-solid fa-circle-exclamation" style="color: #af4242;"></i></p>';
                            echo'<p class="error_password_message" style="margin-left: 1103px;">Password is incorrect</p>';
                            $tester=0;
                        }
                    }
                }   
            }
        }
    }
    mysqli_close($conn);
?> 
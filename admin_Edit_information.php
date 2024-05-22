<?php
  include("database.php");
  $conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_Edit_information.css">
    <title>DiamondCare</title>
    <link rel="icon" href="./image/Diamonde-removebg-preview.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/d9dfb6a543.js" crossorigin="anonymous"></script>
</head>
<body>
    <!--Admin Section Start-->

    <div class="box">
    <div class="text"><center>Edit <span class="BOOK">patients</span></center></div>
        <form action="admin_Edit_information.php" method="post">
                    <div class="box_Edit">
                    <div class="text_Matricule">input a Matricule:</div>
                    <div class="number"><input type="text" name="Matricule" placeholder="Matricule"></div>
                    <div class="First_name"><input type="text" name="First_name" placeholder="First name"></div>
                    <div class="Last_name"><input type="text" name="Last_name" placeholder="Last name"></div>
                    <div class="text_date_appointment">date of birth:</div>
                    <div class="date_birthday"><input type="date" name="date_birthday"></div>
                    

                    <div class="groupe_sanguin">
                        <label for="sanguin">Choose a groupe sanguin:</label>
                        <select name="sanguin" id="sanguin" class="sanguin">
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        </select>
                    </div>
                    <div class="Edit"><a href="admin_Edit_information.php"><button name="Edit">Edit</button></a></div>
                </div>

        </form>

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
            

        </div>
        
    </div>

    <!--hidden image-->

    <div class="hidden_img"><img src="./image/Medicine%20Customizable%20Isometric%20Illustrations%20_%20Amico%20Style.jpg"></div>

     <!--hidden image-->

    
</body>
</html>

<?php
    if(isset($_POST["Edit"]))
    {
        $first_name=$_POST["First_name"];
        $last_name=$_POST["Last_name"];
        $date_birthday=$_POST["date_birthday"];
        $Matricule=$_POST["Matricule"];
        $groupe_sanguin=$_POST["sanguin"];
        $sql = "SELECT *from patient";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {

            while ($row = mysqli_fetch_assoc($result)) 
            {
                $sql = "UPDATE patient
                SET Matricule='$Matricule', first_name='$first_name', last_name='$last_name', groupe_sanguin='$groupe_sanguin' , Date_of_birth='$date_birthday'
                WHERE Matricule='$Matricule'";
                mysqli_query($conn,$sql);
                header("Location: admin.php"); 
            }

        }
    }

    mysqli_close($conn);
?> 
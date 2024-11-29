<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: ../signup/signup.php");
    exit;
}



if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '../_dbconnect.php';
    $currentpass = $_POST["currentpass"];
    $newpass = $_POST["newpass"];
    $confirmpass = $_POST["confirmpass"];
    $mail = $_SESSION['useremail'];

    // Check whether this username exists
    $sql2 = "Select * from users where useremail='$mail' "; 
    $result2 = mysqli_query($conn, $sql2);
            while($row2 = mysqli_fetch_assoc($result2)){
              $oldpass = $row2['password'];
             
            }
        $update = false;
        if (password_verify($currentpass, $oldpass)){ 
                    if($newpass == $confirmpass){
                        $update = true;
                        $hash = password_hash($newpass, PASSWORD_DEFAULT);
                        $sql = " UPDATE `users` SET `password` = '$hash' WHERE `users`.`useremail` = '$mail' ";
                        $result = mysqli_query($conn, $sql);
                        echo ' <script>alert("Welldone! your password is changed succesfully");</script>  ';
                            // header("location: /project/Student/index.php");
                    }else{
                         echo '<script>alert("Please Enter the Same password!");</script> ';
                    }
            
        }
        else {
            echo ' <script>alert("Password do not match with old password, please enter the correct password!");</script>  ';
            
        }

       
        
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" href="./images/logo.png">
    <link rel="stylesheet" href="style.css">
    

    <style>
        header{position: relative;}
        .change-password-container{
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 90vh;
        }
        .change-password-container form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-radius: var(--border-radius-2);
            padding : 3.5rem;
            background-color: var(--color-white);
            box-shadow: var(--box-shadow);
            width: 95%;
            max-width: 32rem;
        }
        .change-password-container form:hover{box-shadow: none;}
        .change-password-container form input[type=password]{
            border: none;
            outline: none;
            border: 1px solid var(--color-light);
            background: transparent;
            height: 2rem;
            width: 100%;
            padding: 0 .5rem;
        }
        .change-password-container form .box{
            padding: .5rem 0;
        }
        .change-password-container form .box p{
            line-height: 2;
        }
        .change-password-container form h2+p{margin: .4rem 0 1.2rem 0;} 
        .btn{
            background: none;
            border: none;
            border: 2px solid var(--color-primary) !important;
            border-radius: var(--border-radius-1);
            padding: .5rem 1rem;
            color: var(--color-white);
            background-color: var(--color-primary);
            cursor: pointer;
            margin: 1rem 1.5rem 1rem 0;
            margin-top: 1.5rem;
        }
        .btn:hover{
            color: var(--color-primary);
            background-color: transparent;
        }
    </style>

</head>
<body>
<header>
<div class="logo" >
    <img src="./images/rk-logo.png" alt="">
    <h1>R<span class="danger">K</span>U</h1>
</div>
<div class="navbar">
    <a href="index.php"  >
        <span class="material-icons-sharp">home</span>
        <h3>Home</h3>
    </a>
    <a href="timetable.php" onclick="timeTableAll()">
        <span class="material-icons-sharp">today</span>
        <h3>Time Table</h3>
    </a> 
    <a href="exam.php">
        <span class="material-icons-sharp">grid_view</span>
        <h3>Examination</h3>
    </a>
    <a href="password.php" class="active">
        <span class="material-icons-sharp">password</span>
        <h3>Change Password</h3>
    </a>
    <a href="/project/faculty/Attendance/student.php">
        <span class="material-symbols-outlined">bar_chart</span>
        <h3>Attendance</h3>
    </a>

    <a href="/project/faculty/srms/find-result.php">
        <span class="material-symbols-outlined">monitoring</span>
        <h3>Results</h3>
    </a>
    
    <a href="../_logout.php">
        <span class="material-icons-sharp" onclick="">logout</span>
        <h3>Logout</h3>
    </a>
</div>
<div id="profile-btn">
    <span class="material-icons-sharp">person</span>
</div>
<div class="theme-toggler">
    <span class="material-icons-sharp active">light_mode</span>
    <span class="material-icons-sharp">dark_mode</span>
</div>

</header>

    <div class="change-password-container">
        <form action="password.php" method="POST" >
            <h2>Create new password</h2>
            <p class="text-muted">Your new password must be different from previous used passwords.</p>
            <div class="box">
                <p class="text-muted">Current Password</p>
                <input type="password" id="currentpass" name="currentpass" >
            </div>
            <div class="box">
                <p class="text-muted">New Password</p>
                <input type="password" id="newpass" name="newpass" >
            </div>
            <div class="box">
                <p class="text-muted">Confirm Password</p>
                <input type="password" id="confirmpass" name="confirmpass">
            </div>
            
            <div class="button">
                <input type="submit" value="Save" class="btn" id="btn" >
                <a href="index.php" class="text-muted">Cancel</a>
            </div>
            <!-- <a href="" data-toggle="modal" data-target="#forgatemodal">Forget password?</a> -->
            <!-- <a href="#"><p>Forget password?</p></a> -->
        </form>    
    </div>

</body>

<script src="app.js"></script>

</html>
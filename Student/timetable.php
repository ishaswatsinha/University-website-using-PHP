<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: ../signup/signup.php");
    exit;
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
    <link rel="shortcut icon" href="./images/logo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
    <a href="timetable.php" class="active" onclick="timeTableAll()">
        <span class="material-icons-sharp">today</span>
        <h3>Time Table</h3>
    </a> 
    <a href="exam.php">
        <span class="material-icons-sharp">grid_view</span>
        <h3>Examination</h3>
    </a>
    <a href="password.php">
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

    <main style="margin: 0;">
        <div class="timetable active" id="timetable">
            <div>
                <span id="prevDay">&lt;</span>
                <h2>Today's Timetable</h2>
                <span id="nextDay">&gt;</span>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Time</th>
                        <th>Room No.</th>
                        <th>Subject</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </main>

</body>

<script src="timeTable.js"></script>
<script src="app.js"></script>
</html>
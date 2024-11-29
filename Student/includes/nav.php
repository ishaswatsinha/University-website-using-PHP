<?php 
echo 
'
<header>
<div class="logo" >
    <img src="./images/rk-logo.png" alt="">
    <h1>R<span class="danger">K</span>U</h1>
</div>
<div class="navbar">
    <a href="index.php" class="active" >
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
    <a href="password.php">
        <span class="material-icons-sharp">password</span>
        <h3>Change Password</h3>
    </a>

    <a href="/project/student/Attendance/index.php">
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

'
?>
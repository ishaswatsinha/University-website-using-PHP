<!-- ---------------------------REGISTRATION----------------------------------- -->
<?php
$showAlert1 = false;
$showError1 = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(isset($_POST['submit2'])){
    include '../includes/_dbconnect.php';
    $name = $_POST["name"];
    $useremail = $_POST["useremail"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    // $exists=false;

    // Check whether this username exists
    $existSql = "SELECT * FROM `admin` WHERE useremail = '$useremail'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        // $exists = true;
        $showError1 = "Username Already Exists";
    }
    else{
        // $exists = false; 
        if(($password == $cpassword)){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `admin` (`name`, `useremail`, `password`, `dt`) VALUES ('$name','$useremail', '$hash', current_timestamp())";


            $result = mysqli_query($conn, $sql);
            if ($result){
                $showAlert1 = true;
            }
        }
        else{
            $showError1 = "Passwords do not match";
        }
    }
}
}
    
?>
<!-- --------------------------LOGIN--------------------------------- -->
<?php
$login = false;
$showError2 = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(isset($_POST['submit1'])){
    include '../includes/_dbconnect.php';
    $username = $_POST["useremail"];
    $password = $_POST["password"]; 
  
    $sql = "Select * from admin where useremail='$username' ";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num == 1){
        while($row=mysqli_fetch_assoc($result)){
          if (password_verify($password, $row['password'])){ 
            $login = true;
            session_start();
            $_SESSION['adminlogedin'] = true;
            $_SESSION['useremail'] = $username;
        header("location: /project/admin/dashboard.php");
          
    // ------------------------------------------------------
    $sql2 = "Select * from admin where useremail='$username' "; 
    $result2 = mysqli_query($conn, $sql2);
            while($row2 = mysqli_fetch_assoc($result2)){
              $_SESSION['uname']= $row2['name'];
             
            }

    } 
    else{
        $showError2 = "Invalid Credentials";
    }
}
}
}
}

    
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="login.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body style="background-color:black">


    <section style="position: absolute; width: 100%;">
        <?php
    if($showAlert1){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError1){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError1.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>
        <?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError2){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError2.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>
    </section>





    <section class="container2">

        <div class="login-container">
            <div class="circle circle-one"></div>
            <div class="form-container">
                <img src="https://raw.githubusercontent.com/hicodersofficial/glassmorphism-login-form/master/assets/illustration.png"
                    alt="illustration" class="illustration" />

                <h1 class="opacity">Admin</h1>
                <h5 class="opacity"> Login</h5>
                <form action="signup.php" method="post">
                    <input type="useremail" placeholder="USERNAME" name="useremail" />
                    <input type="password" placeholder="PASSWORD" name="password" />
                    <button type="submit" name="submit1" class="opacity">SUBMIT</button>
                </form>
                <div class="register-forget opacity">
                    <!-- <a href="../signup/signup.html">REGISTER</a> -->
                    <a href="" data-toggle="modal" data-target="#exampleModal">SIGN UP</a>
                    <a href="" data-toggle="modal" data-target="#forgatemodal">FORGOT PASSWORD</a>
                </div>
                <center>
                    <a href="../index1.php">Back </a>
                </center>
            </div>
            <div class="circle circle-two"></div>
        </div>
        <div class="theme-btn-container"></div>
    </section>


    <!--SignUp Modal -->
    <form action="signup.php" method="post">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="column" id="main">
                            <h1>Sign Up </h1>
                            <h3>Enter your personal details and start journey with us</h3>
                            <form>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="name" class="form-control" id="name" name="name" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label for="useremail">E-mail </label>
                                    <input type="email" class="form-control" id="useremail" name="useremail"
                                        aria-describedby="emailHelp" placeholder="E-mail">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Password">
                                </div>

                                <div class="form-group">
                                    <label for="cpassword">Confirm Password</label>
                                    <input type="password" class="form-control" id="cpassword" name="cpassword"
                                        placeholder="Password">
                                    <small id="emailHelp" class="form-text text-muted">Make sure to type the same
                                        password</small>
                                </div>
                                <button type="submit" name="submit2" class="btn btn-primary">Sign Up</button>
                            </form>
                        </div>
                        <div>

                            <svg width="67px" height="578px" viewBox="0 0 67 578" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                                <desc>Created with Sketch.</desc>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <path
                                        d="M11.3847656,-5.68434189e-14 C-7.44726562,36.7213542 5.14322917,126.757812 49.15625,270.109375 C70.9827986,341.199016 54.8877465,443.829224 0.87109375,578 L67,578 L67,-5.68434189e-14 L11.3847656,-5.68434189e-14 Z"
                                        id="Path" fill="#F9BC35"></path>
                                </g>
                            </svg>
                        </div>
                        <div class="column" id="secondary">
                            <div class="sec-content">
                                <h2>Welcome Back!</h2>
                                <h3>Already have an account? </h3>
                                <button type="button" class="btn btn-primary">Login</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <!--Forget  Modal -->
    <div class="modal fade" id="forgatemodal" tabindex="-1" role="dialog" aria-labelledby="forgatemodalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="column" id="main">
                        <h1>Forgot Password </h1>
                        <h3>Enter your registered email to reset your password.</h3>
                        <form>
                            <div class="form-group">
                                <label for="useremail">E-mail </label><br>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="E-mail">
                            </div>

                            <button type="submit" class="btn btn-primary">Reset Password</button>
                        </form>
                    </div>
                    <div>
                        <svg width="67px" height="578px" viewBox="0 0 67 578" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <!-- Generator: Sketch 53.2 (72643) - https://sketchapp.com -->
                            <!-- <title>Path</title> -->
                            <desc>Created with Sketch.</desc>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <path
                                    d="M11.3847656,-5.68434189e-14 C-7.44726562,36.7213542 5.14322917,126.757812 49.15625,270.109375 C70.9827986,341.199016 54.8877465,443.829224 0.87109375,578 L67,578 L67,-5.68434189e-14 L11.3847656,-5.68434189e-14 Z"
                                    id="Path" fill="#F9BC35"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="column" id="secondary">
                        <div class="sec-content">
                            <h2>Welcome Back!</h2>
                            <h3>Already have an account? </h3>
                            <button type="button" class="btn btn-primary">Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>


</body>

</html>
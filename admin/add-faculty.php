<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(!isset($_SESSION['adminlogedin']) || $_SESSION['adminlogedin']!=true){
    header("location:login/signup.php");
    exit;
}else{

if(isset($_POST['submit']))
{
$facultyname=$_POST['fullanme'];
// $roolid=$_POST['rollid']; 
$facultyemail=$_POST['emailid']; 
$address=$_POST['address'];
$phone1=$_POST['phone1']; 
$gender=$_POST['gender']; 
$password=$_POST['password']; 
$pass = $password;
$dob=$_POST['dob']; 
$status=1;

$sql="INSERT INTO `user` ( `uname`, `password`, `email`, `status`, `phone`, `dob`, `gender`, `address`, `created`) VALUES (:facultyname , :password , :facultyemail, '1', $phone1, :dob, :gender, :address, current_timestamp());";

$query = $dbh->prepare($sql);
$query->bindParam(':facultyname',$facultyname,PDO::PARAM_STR);
// $query->bindParam(':phone',$phone,PDO::PARAM_INT);
// $query->bindParam(':roolid',$roolid,PDO::PARAM_STR);
$query->bindParam(':facultyemail',$facultyemail,PDO::PARAM_STR);
$query->bindParam(':address',$address,PDO::PARAM_STR);
$query->bindParam(':gender',$gender,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->bindParam(':dob',$dob,PDO::PARAM_STR);
// $query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
    $error1 == false;
$msg="Faculty info added successfully";
}
else 
{
$error1 == true;
$error="Something went wrong. Please try again";
}


include "includes/_dbconnect.php";
$hash = password_hash($pass, PASSWORD_DEFAULT);
$sql1 ="INSERT INTO `faculty` (`name`, `useremail`, `password`, `dt`) VALUES ( '$facultyname', '$facultyemail', '$hash', current_timestamp());";
$result = mysqli_query($conn , $sql1);


}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMS Admin| Add Faculty< </title>
            <link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
            <link rel="stylesheet" href="css/font-awesome.min.css" media="screen">
            <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen">
            <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen">
            <link rel="stylesheet" href="css/prism/prism.css" media="screen">
            <link rel="stylesheet" href="css/select2/select2.min.css">
            <link rel="stylesheet" href="css/main.css" media="screen">
            <script src="js/modernizr/modernizr.min.js"></script>
</head>

<body class="top-navbar-fixed">
    <div class="main-wrapper">

        <!-- ========== TOP NAVBAR ========== -->
        <?php include('includes/topbar.php');?>

        <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
        <div class="content-wrapper">
            <div class="content-container">

                <!-- ========== LEFT SIDEBAR ========== -->
                <?php include('includes/leftbar.php');?>
                <!-- /.left-sidebar -->

                <div class="main-page">

                    <div class="container-fluid">
                        <div class="row page-title-div">
                            <div class="col-md-6">
                                <h2 class="title"> Add Faculty </h2>

                            </div>

                            <!-- /.col-md-6 text-right -->
                        </div>
                        <!-- /.row -->
                        <div class="row breadcrumb-div">
                            <div class="col-md-6">
                                <ul class="breadcrumb">
                                    <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>

                                    <li class="active">faculty hire</li>
                                </ul>
                            </div>

                        </div>
                        <!-- /.row -->
                    </div>
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h5>Fill the Faculty info</h5>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <?php if($msg){?>
                                        <div class="alert alert-success left-icon-alert" role="alert">
                                            <strong>Well done!</strong><?php echo htmlentities($msg); ?>
                                        </div><?php } 
else if($error){?>
                                        <div class="alert alert-danger left-icon-alert" role="alert">
                                            <strong>Oh snap!</strong> <?php echo htmlentities($error); ?>
                                        </div>
                                        <?php } ?>
                                        <form class="form-horizontal" action="add-faculty.php" method="post">

                                            <div class="form-group">
                                                <label for="default" class="col-sm-2 control-label">Full Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="fullanme" class="form-control"
                                                        id="fullanme" required="required" autocomplete="off">
                                                </div>
                                            </div>
                                            
                                        

                                            <div class="form-group">
                                                <label for="default" class="col-sm-2 control-label">Email id</label>
                                                <div class="col-sm-10">
                                                    <input type="email" name="emailid" class="form-control" id="email"
                                                        required="required" autocomplete="off">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="default" class="col-sm-2 control-label">Password</label>
                                                <div class="col-sm-10">
                                                    <input type="Password" name="password" class="form-control" id="password"
                                                         required="required" autocomplete="off">
                                                </div>
                                            </div>

                                            <!-- <div class="form-group">
                                                <label for="default" class="col-sm-2 control-label">Confirm Password</label>
                                                <div class="col-sm-10">
                                                    <input type="Password" name="cpassword" class="form-control" id="cpassword"
                                                         required="required" autocomplete="off">
                                                </div>
                                            </div> -->

                                            <div class="form-group">
                                                <label for="default" class="col-sm-2 control-label">Phone</label>
                                                <div class="col-sm-10">
                                                    <input type="number" name="phone1" class="form-control" id="phone1"
                                                        maxlength="10" required="required">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="default" class="col-sm-2 control-label">Address</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" name="address" id="address" cols="20"
                                                        rows="5"></textarea>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label for="default" class="col-sm-2 control-label">Gender</label>
                                                <div class="col-sm-10">
                                                    <input type="radio" name="gender" value="Male" required="required"
                                                        checked="">Male <input type="radio" name="gender" value="Female"
                                                        required="required">Female <input type="radio" name="gender"
                                                        value="Other" required="required">Other
                                                </div>
                                            </div>









                                            <div class="form-group">
                                                <label for="date" class="col-sm-2 control-label">DOB</label>
                                                <div class="col-sm-10">
                                                    <input type="date" name="dob" class="form-control" id="date">
                                                </div>
                                            </div>



                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" name="submit"
                                                        class="btn btn-primary">Add</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <!-- /.col-md-12 -->
                        </div>
                    </div>
                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->
        </div>
        <!-- /.main-wrapper -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>
        <script src="js/prism/prism.js"></script>
        <script src="js/select2/select2.min.js"></script>
        <script src="js/main.js"></script>
        <script>
        $(function($) {
            $(".js-states").select2();
            $(".js-states-limit").select2({
                maximumSelectionLength: 2
            });
            $(".js-states-hide").select2({
                minimumResultsForSearch: Infinity
            });
        });
        </script>
</body>

</html>
<?PHP } ?>
<?php
include_once("guest_header.php");
if (isset($_POST['btn'])) {
    $pwd = $_POST['pswd'];
    $em = $_SESSION['forgot_em'];
    $token = $_SESSION['forgot_token'];

    $hash = password_hash($pwd, PASSWORD_DEFAULT);

    $q = "update users set password='$hash' where useremail='$em'";
    if (mysqli_query($conn, $q)) {
        $del = "delete from token where email='$em' and token='$token'";
        if (mysqli_query($conn, $del)) {
            unset($_SESSION['forgot_em']);
            unset($_SESSION['forgot_token']);
        }
        setcookie('success', "Password updated successfully", time() + 2, "/");
?>
        <script>
            window.location.href = "signup.php";
        </script>
    <?php
    } else {
        setcookie('error', 'error in updating password', time() + 2, "/");
    ?>
        <script>
            window.location.href = "signup.php";
        </script>
<?php
    }
}
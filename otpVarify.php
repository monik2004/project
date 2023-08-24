<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/util.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<?php
include 'CRUD_Operation/sendMail.php';
session_start();
error_reporting(0);

if (isset($_POST['LogIn'])) {
    $varifyOtp = $_POST['varifyOtp'];

    if ($_SESSION['Otp'] === $varifyOtp) {
        echo "
            <script>
                alert('Log In Done');
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Otp Not Curect We Sending Again ');
            </script>
        ";
        $mailId = $_SESSION['email'];
        $mailSend->sendIt($mailId);
    }
}

?>

<body>
    <?php include 'header.php' ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="container" id="container2">
            <input type="text" name="varifyOtp" required placeholder="Enter Otp ">
            <br>
            <input type="submit" name="LogIn" id="otpButton" value="Log In">
        </div>
    </form>

    <?php include 'footer.php' ?>
</body>

</html>

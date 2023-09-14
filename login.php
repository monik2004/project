<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/util.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<?php
    include 'CRUD_Operation/sendMail.php';
    // session_start();

    if (isset($_POST['BtnSendOtp'])) {
        $mailId = $_POST['LoginEmail'];
        $mailSend->sendIt($mailId);        
    }
?>

<body>
    <?php include 'header.php' ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="container" id="container">
            <input type="email" name="LoginEmail" required placeholder="Enter Your Registerd Email ">
            <br>
            <input type="submit" name="BtnSendOtp" id="otpButton" value="Send Otp">
        </div>
    </form>

    <?php include 'footer.php' ?>
</body>

</html>
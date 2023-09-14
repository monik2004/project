<?php include("header.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/util.css">
    <link rel="stylesheet" href="css/contectus.css">
</head>

<?php
include "CRUD_Operation/connection.php";

    if (isset($_POST["Submit"])) {
        
        $name=$_POST["FullName"];
        $email=$_POST["Email"];
        $subject=$_POST["Subject"];
        $message=$_POST["message"];
        
        $insertSql = $conn->prepare("INSERT INTO `contectrequest`(`Name`, `Email`, `Subject`, `Message`) VALUES (?,?,?,?)");
        $insertSql->bind_param("ssss",$name,$email,$subject,$message);
        $insertSql->execute();

        echo "
            <script>
                alert('Thanks For Contact Us');
            </script>
        ";
    }
?>

<body>
    <div class="container">
        <div class="contectForm">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <h1>Contect us</h1>
                <input type="text" name="FullName" placeholder="Full Name">
                <br><br>
                <input type="email" name="Email" placeholder="Email">
                <br><br>
                <input type="text" name="Subject" placeholder="Subject">
                <br><br>
                <textarea name="message" rows="3" placeholder="Message"></textarea>
                <br><br>
                <input type="submit" id="btn_submit" name="Submit" value="Submit">

            </form>
        </div>
        <img src="img/contectFormImage.jpg" id="img1" >
    </div>
</body>

</html>
<?php include("footer.php") ?>
<?php include("header.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/util.css">
    <link rel="stylesheet" href="css/contectus.css">
</head>

<body>
    <div class="container">
        <div class="contectForm">
            <form action="#" method="post">
                <h1>Contect us</h1>
                <input type="text" name="FullName" placeholder="Full Name">
                <br><br>
                <input type="email" name="Email" placeholder="Email">
                <br><br>
                <input type="text" name="Subject" placeholder="Subject">
                <br><br>
                <textarea name="message" rows="3" placeholder="Message"></textarea>
                <br><br>
                <input type="submit" id="btn_submit" value="Submit">

            </form>
        </div>
        <img src="img/contectFormImage.jpg" id="img1" >
    </div>
</body>

</html>
<?php include("footer.php") ?>
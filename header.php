<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <?php
    error_reporting(0);
    session_start();
    if (($_SESSION['UserType'] == 'Hospital' or $_SESSION['UserType'] == 'Doner' ) and $_SESSION['LOgin_or_Not']) {
        echo '
            <nav>
                <div class="menu">
                    <div class="logo">
                        <img src="img/heart1.png">
                    </div>
                    <div class="menuItem"><a href="/project"> Home </a></div>
                    <div class="menuItem"><a href="aboutUs.php"> About Us </a></div>
                    <div class="menuItem"><a href="contectUs.php"> Contect us </a></div>
                    <div class="menuItem"><a href="logout.php"> Log Out </a></div>
                    <div class="menuItem"> ' . $_SESSION["UserName"] . ' </div>
                </div>
                </nav>
        ';
    } else if( $_SESSION['UserType'] == 'Admin' and $_SESSION['LOgin_or_Not']){
        echo '
            <nav>
                <div class="menu">
                    <div class="logo">
                        <img src="img/heart1.png">
                    </div>
                  
                    <div class="menuItem"><a href="../logout.php"> Log Out </a></div>
                    <div class="menuItem"> <a href="admin.php">' . $_SESSION["UserName"] . ' </a> </div>
                </div>
                </nav>
        ';
    }
    else {
        echo '
            <nav>
                <div class="menu">
                    <div class="logo">
                        <img src="img/heart1.png">
                    </div>
                    <div class="menuItem"><a href="/project"> Home </a></div>
                    <div class="menuItem"><a href="aboutUs.php"> About Us </a></div>
                    <div class="menuItem"><a href="contectUs.php"> Contect us </a></div>
                    <div class="menuItem"><a> Register </a>
                        <div class="subMenu">
                            <div class="subMenuItem"> <a href="donerRegistrationForm.php"> Register Doner/Reciver </a> </div>
                            <div class="subMenuItem"> <a href="hospitalRegistrationForm.php"> Register Hospital </a> </div>
                        </div>
                    </div>
                    <div class="menuItem"><a href="login.php"> Log In </a></div>
                </div>
                </nav>
            ';
    }

    ?>


</body>

</html>
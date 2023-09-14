<!DOCTYPE html>
<html lang="en">

<?php
include "CRUD_Operation/connection.php";
include "CRUD_Operation/checkEmail.php";

if (isset($_POST['submit'])) {
    // Initializing All Variable
    $donerName = $_POST['userName'];
    $donerAge = $_POST['userAge'];
    $donerFatherName = $_POST['userFatherName'];
    $donerGender = $_POST['userGender'];
    $donerMobileNo = $_POST['userMobile'];
    $donerEmail = $_POST['userEmail'];
    $donerAddress = $_POST['userAddress'];
    $donerCity = $_POST['usercity'];
    $donerState = $_POST['userState'];
    $donerBloodFroup = $_POST['userBloodGroup'];

    if ($varify->check($donerEmail) ) {

        $insertSql = $conn->prepare("INSERT INTO `userregistration`(`User_Name`, `User_Age`, `User_Father_Name`, `User_Gender`, `User_Mobile_No`, `User_Email`, `User_Address`, `User_City`, `User_State`) VALUES (?,?,?,?,?,?,?,?,?)");
        $insertSql->bind_param("sssssssss", $donerName, $donerAge, $donerFatherName, $donerGender, $donerMobileNo, $donerEmail, $donerAddress, $donerCity, $donerState);
        $insertSql->execute();

        echo "
            <script>
                alert('Thanks For Rugister Your Name');
            </script>
        ";
    } else {
        echo "
        <script>
            // if(alert('Email Exist')){
            // }
            alert('Email Exist Pleass Re Enter Form')
            location.href='/Project/donerRegistrationForm.php';
            </script>
        ";
    }
}

?>

<head>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/util.css">
    <link rel="stylesheet" href="css/donerRegistrationForm.css">
</head>

<?php include("header.php") ?>

<body>
    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="text" name="userName" placeholder="Enter Your Name">
            <br>
            <input type="text" name="userAge" placeholder="Enter Your Age">
            <br>
            <input type="text" name="userFatherName" placeholder="Enter Your Father Name ">
            <br>
            <div class="gneder">
                <label for="Gender">Gender :- </label>
                <input type="radio" name="userGender" value="Male">Male
                <input type="radio" name="userGender" value="Female">Female
            </div>
            <br>
            <select name="userBloodGroup">
                <option disabled selected> Select Blood Group </option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
            <br>
            <br>
            <input type="text" name="userMobile" placeholder="Enter Your Mobile Number">
            <br>
            <input type="email" name="userEmail" placeholder="Enter Your Email">
            <br>
            <textarea name="userAddress" cols="30" rows="5" placeholder="Enter Your Address"></textarea>
            <br>
            <input type="text" name="usercity" placeholder="Enter Your City">
            <br>
            <select name="userState">
                <option disabled selected> Select State </option>
                <option value="Delhi">Delhi</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Rajasthan">Rajasthan</option>
            </select>
            <br>
            <input type="submit" name="submit" value="Register">
        </form>
    </div>

</body>

<?php include("footer.php") ?>

</html>
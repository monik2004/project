<!DOCTYPE html>
<html lang="en">
<?php
include "CRUD_Operation/connection.php";
include "CRUD_Operation/checkEmail.php";

session_start();
error_reporting(0);
if (isset($_POST['submit'])) {

    // Initializing All Variable
    $HospitalName = $_POST['hospitalName'];
    $HospitalOwner = $_POST['hospitalowner'];
    $HospitalType = $_POST['hospitalType'];
    $HospitalMobileNo1 = $_POST['hospitalNumber1'];
    $HospitalMobileNo2 = $_POST['hospitalNumber2'];
    $HospitalEmail = $_POST['hosptalEmail'];
    $HospitalAddress = $_POST['hospitalAddress'];
    $HospitalCity = $_POST['hospitalCity'];
    $HospitalState = $_POST['hospiState'];

    if ($varify->check($HospitalEmail)) {

        $insertSql = $conn->prepare("INSERT INTO `hospitalregistration`(`Hospital_Name`, `Hospital_Owner`, `Hospital_Type`, `Hospital_contect_No1`, `Hospital_contect_No2`, `Hospital_Email`, `Hospital_Address`, `Hospital_city`, `Hospital_State`) VALUES (?,?,?,?,?,?,?,?,?)");
        $insertSql->bind_param("sssssssss", $HospitalName, $HospitalOwner, $HospitalType, $HospitalMobileNo1, $HospitalMobileNo2, $HospitalEmail, $HospitalAddress, $HospitalAddress, $HospitalAddress);
        $insertSql->execute();

        echo "
            <script>
                alert('Thanks For Rugister Your Hospital');
            </script>
        ";
    } else {
        echo "
        <script>
            // if(alert('Email Exist')){
            // }
            alert('Email Exist Pleass Re Enter Form')
            location.href='/Project/hospitalRegistrationForm.php';
            </script>
        ";
    }
}

?>

<head>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/util.css">
    <link rel="stylesheet" href="css/hospitalRegistrationForm.css">
</head>

<?php include("header.php") ?>

<body>

    <div class="container">
        <div class="hospitalRegistrationForm">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <input type="text" name="hospitalName" placeholder="Enter Hospita Name" required>
                <br>
                <input type="text" required name="hospitalowner" placeholder="Enter Owner / Trusty Name">
                <br>
                <select name="hospitalType" required>
                    <option disabled selected place value="">Select Hospital Type</option>
                    <option value="Goverment">Goverment</option>
                    <option value="Private">Private</option>
                    <option value="NGo">NGO</option>
                </select>
                <br>
                <input required type="text" name="hospitalNumber1" placeholder="Hospital Contect Number">
                <br>
                <input type="text" name="hospitalNumber2" placeholder="Hospital Contect Number 2">
                <br>
                <input type="text" required name="hosptalEmail" placeholder="Hospital Email">
                <br>

                <textarea name="hospitalAddress" required cols="30" rows="5" placeholder="Enter Hospital Address"></textarea>
                <br>
                <input type="text" name="hospitalCity" required id="" placeholder="Enter City Name">
                <br>

                <select name="hospiState" required>
                    <option disabled selected value="">Select State</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Rajasthan">Rajasthan</option>
                </select>
                <br>
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>

</body>

<?php include("footer.php");

?>

</html>
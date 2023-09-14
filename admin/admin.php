<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/util.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="css/admin.css">

</head>

<body>
    <?php include "../header.php";
    error_reporting(0); ?>
    <?php include "../CRUD_Operation/connection.php" ?>
    <div class="container">
        <div class="sub-container-1">
        <h1>Registerd Users </h1>
            <?php
            $qry = 'SELECT `User_Id` FROM `userregistration` ';
            $res = mysqli_query($conn, $qry);
            $Count_User = 0;
            while ($row = mysqli_fetch_assoc($res)) {
                $Count_User += 1;
            }
            echo "
                   <a href='registerUserData.php'> <h1>  $Count_User </h1> </a> 
                ";

            ?>
        </div>
        <div class="sub-container-2">
        <h1> Contect Requests  </h1>
        <?php
            $qry = 'SELECT `id` FROM `contectrequest`  ';
            $res = mysqli_query($conn, $qry);
            $Count_User = 0;
            while ($row = mysqli_fetch_assoc($res)) {
                $Count_User += 1;
            }

            echo "
            <a href='contectUsRequestData.php'> <h1>  $Count_User </h1> </a> 
                ";

            ?> 
        </div>
        <div class="sub-container-3">
        <h1>Registerd Hospital  </h1>
            <?php
            $qry = 'SELECT `Hosptal_Id` FROM `hospitalregistration`  ';
            $res = mysqli_query($conn, $qry);
            $Count_User = 0;
            while ($row = mysqli_fetch_assoc($res)) {
                $Count_User += 1;
            }

            echo "
            <a href='registeredHospitalsData.php'> <h1>  $Count_User </h1> </a> ";

            ?>
        </div>
    </div>

    <?php include "../footer.php"; ?>
</body>

</html>
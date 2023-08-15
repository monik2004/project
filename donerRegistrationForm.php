<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/util.css">
    <link rel="stylesheet" href="css/donerRegistrationForm.css">
</head>

<?php include("header.php") ?>

<body>
    <div class="container">
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
        <input type="text" name="userMobile" placeholder="Enter Your Mobile Number">
        <br>
        <input type="email" name="userEmail" placeholder="Enter Your Email">
        <br>
        <textarea name="userAddress" cols="30" rows="5" placeholder="Enter Your Address" ></textarea>
        <br>
        <input type="text" name="usercity" placeholder="Enter Your City" >
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
        <input type="submit" value="Register">

    </div>

</body>

<?php include("footer.php") ?>

</html>
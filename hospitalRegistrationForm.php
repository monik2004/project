<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/util.css">
    <link rel="stylesheet" href="css/hospitalRegistrationForm.css">
</head>

<?php include("header.php") ?>

<body>

    <div class="container">
        <div class="hospitalRegistrationForm">
            <form action="#" method="post">
                <input type="text" name="hospitalName" placeholder="Enter Hospita Name">
                <br>
                <input type="text" name="hospitalowner" placeholder="Enter Owner / Trusty Name">
                <br>
                <select name="hospitalType">
                    <option disabled selected place >Select Hospital Type</option>
                    <option value="Goverment">Goverment</option>
                    <option value="Private">Private</option>
                    <option value="NGo">NGO</option>
                </select>
                <br>
                <input type="text" name="hospitalNumber1" placeholder="Hospital Contect Number">
                <br>
                <input type="text" name="hospitalNumber2" placeholder="Hospital Contect Number 2">
                <br>
                <input type="text" name="hosptalNumber" placeholder="Hospital Email">
                <br>
                <input type="text" name="hospitalAddress" placeholder="Enter Hospital Address">
                <br>
                <input type="text" name="hospitalCity" id="" placeholder="Enter City Name">
                <br>

                <select name="hospiState">
                    <option disabled selected> Select State </option>
                    <option value="Delhi">Delhi</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Rajasthan">Rajasthan</option>
                </select>
                <br>
                <input type="submit" value="Submit">

            </form>
        </div>
    </div>

</body>

<?php include("footer.php") ?>

</html>
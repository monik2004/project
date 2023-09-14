<?php
include "../CRUD_Operation/connection.php";

       $SelectSql = $conn->prepare("SELECT * FROM `userregistration` ");
       $SelectSql->execute();
       $res = $SelectSql->get_result();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/util.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="css/tabletheme.css">
</head>
<body>
    <?php include "../header.php" ?>
    <table class="tabl" sty>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Age</th>
            <th>Father Name</th>
            <th>Gender</th>
            <th>Mobile No</th>
            <th>Email</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Blood Group</th>
        </tr>

        <?php
            while ($row = $res->fetch_assoc()) {
                $html="";
                $html.="<tr>";
                $html.= "<td>".$row["User_Id"]."</td>";
                $html.= "<td>".$row["User_Name"]."</td>";
                $html.= "<td>".$row["User_Age"]."</td>";
                $html.= "<td>".$row["User_Father_Name"]."</td>";
                $html.= "<td>".$row["User_Gender"]."</td>";
                $html.= "<td>".$row["User_Mobile_No"]."</td>";
                $html.= "<td>".$row["User_Email"]."</td>";
                $html.= "<td>".$row["User_Address"]."</td>";
                $html.= "<td>".$row["User_City"]."</td>";
                $html.= "<td>".$row["User_State"]."</td>";
                $html.= "<td>".$row["User_Blood_Group"]."</td>";
                $html.= "</tr>";
                echo $html;
            }
        ?>
            
    </table>
    <?php include "../footer.php"; ?>

</body>
</html>
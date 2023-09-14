<?php
include "../CRUD_Operation/connection.php";

       $SelectSql = $conn->prepare("SELECT * FROM `hospitalregistration` ");
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
            <th>Hospital Name</th>
            <th>Hospital Owner</th>
            <th>Hospital Type</th>
            <th>Contect No 1 </th>
            <th>Contect No 2 </th>
            <th>Email</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
        </tr>

        <?php
            while ($row = $res->fetch_assoc()) {
                $html="";
                $html.="<tr>";
                $html.= "<td>".$row["Hosptal_Id"]."</td>";
                $html.= "<td>".$row["Hospital_Name"]."</td>";
                $html.= "<td>".$row["Hospital_Owner"]."</td>";
                $html.= "<td>".$row["Hospital_Type"]."</td>";
                $html.= "<td>".$row["Hospital_contect_No1"]."</td>";
                $html.= "<td>".$row["Hospital_contect_No2"]."</td>";
                $html.= "<td>".$row["Hospital_Email"]."</td>";
                $html.= "<td>".$row["Hospital_Address"]."</td>";
                $html.= "<td>".$row["Hospital_city"]."</td>";
                $html.= "<td>".$row["Hospital_State"]."</td>";
                $html.= "</tr>";
                echo $html;
            }
        ?>
            
    </table>
    <?php include "../footer.php"; ?>

</body>
</html>
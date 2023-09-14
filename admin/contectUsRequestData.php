<?php
include "../CRUD_Operation/connection.php";

       $SelectSql = $conn->prepare("SELECT * FROM `contectrequest` ");
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
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
        </tr>

        <?php
            while ($row = $res->fetch_assoc()) {
                $html="";
                $html.="<tr>";
                $html.= "<td>".$row["id"]."</td>";
                $html.= "<td>".$row["Name"]."</td>";
                $html.= "<td>".$row["Email"]."</td>";
                $html.= "<td>".$row["Subject"]."</td>";
                $html.= "<td>".$row["Message"]."</td>";
                $html.= "</tr>";
                echo $html;
            }
        ?>
            
    </table>
    <?php include "../footer.php"; ?>

</body>
</html>
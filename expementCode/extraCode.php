<?php

include "../CRUD_Operation/connection.php";
$x="xyzabc@gmail.com";


$SelectSql= $conn->prepare("SELECT * FROM `hospitalregistration` WHERE `Hospital_Email` = ?");
$SelectSql->bind_param("s",$x);
$SelectSql->execute();
$res= $SelectSql->get_result();

$SelectSql2= $conn->prepare("SELECT * FROM `userregistration` WHERE `User_Email` = ?");
$SelectSql2->bind_param("s",$x);
$SelectSql2->execute();
$res2= $SelectSql2->get_result();

echo $res->num_rows . "<br>";
echo $res2->num_rows. "<br>";
// echo ($res->num_rows !=  $res2->num_rows ).'<br>';


if ($res->num_rows == 0  && $res2->num_rows == 0 ) {
    echo "We Can Insert ";
}else{
    echo"We Can not insert";
}

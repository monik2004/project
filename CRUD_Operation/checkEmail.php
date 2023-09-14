<?php

class checkEmail
{
    public function check($mailid)
    {
        session_start();

        $host = "localhost";
        $user = "root";
        $pass = "";
        $dbName = "bloodbank";
        $conn = mysqli_connect($host, $user, $pass, $dbName);

        $SelectSql = $conn->prepare("SELECT * FROM `hospitalregistration` WHERE `Hospital_Email` = ?");
        $SelectSql->bind_param("s", $mailid);
        $SelectSql->execute();
        $res = $SelectSql->get_result();

        $SelectSql2 = $conn->prepare("SELECT * FROM `userregistration` WHERE `User_Email` = ?");
        $SelectSql2->bind_param("s", $mailid);
        $SelectSql2->execute();
        $res2 = $SelectSql2->get_result();
        
        // $SelectSql3 = $conn->prepare("SELECT * FROM `admin`  WHERE `Email` = ?");
        
        $SelectSql3 = $conn->prepare("SELECT * FROM `admin`  WHERE `Email` = ?");
        $SelectSql3->bind_param("s", $mailid);
        $SelectSql3->execute();
        $res3 = $SelectSql3->get_result();


        if ($res->num_rows == 0  && $res2->num_rows == 0 && $res3->num_rows == 0) {
            return 1;
        } else {
            if($res->num_rows == 1){
                $_SESSION['UserType'] = "Hospital";
                $x = $res->fetch_row();
                $uname= $x[1] ; 
                $_SESSION['UserName'] = $uname;
            }elseif ($res2->num_rows == 1) {
                $_SESSION['UserType'] = "Doner";
                $x = $res2->fetch_row();
                $uname= $x[1] ; 
                $_SESSION['UserName'] = $uname;
            }elseif ($res3->num_rows == 1) {
                $_SESSION['UserType'] = "Admin";
                $x = $res3->fetch_row();
                $uname= $x[1] ; 
                $_SESSION['UserName'] = $uname;
            }
         
            return 0;
        }
    }
}

$varify = new checkEmail;

    // echo $varify->check('xydz@gmail.com');

?>
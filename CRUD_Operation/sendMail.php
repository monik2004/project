<?php

class sendMail
{
    public function sendIt($email)
    {
        include 'CRUD_Operation/checkEmail.php';

        $tomail = $email;
        $sub = "Varification Otp";
        $otp = random_int(0, 9) . random_int(0, 9) . random_int(0, 9) . random_int(0, 9);
        $body = "This Is Otp To Varify Your Email And Login $otp ";
        $header = "From: rupareliyamonik3@gmail.com";

        if($varify->check($email) == 0){

            if (mail($tomail, $sub, $body, $header)) {
                echo "
                    <script>
                    alert('Otp send ');
                    location.href='otpVarify.php';
                    </script>
                ";
                $_SESSION["email"]= $email;
                $_SESSION['Otp']=$otp;
                // header("location: otpVarify.php ");
            } else {
                echo "
                    <script>
                        alert('Otp Is Not Sended Server Problem !!! ');
                        location.href='login.php';
                    </script>
            ";
            // header("location: login.php ");
            }
        }else{
            echo "
                    <script>
                        alert('$email Is Not Exist Please Register Email First');
                        location.href='login.php';
                    </script>
            ";
            // header("location: login.php ");
        }

    }
}
    $mailSend = new sendMail();

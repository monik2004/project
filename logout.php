<?php
    error_reporting(0);
    session_start();
    session_destroy();
    // echo ' fdi';
    echo "
         <script>
            setTimeout(() => {
                alert('Log Out')
                location.href='index.php';
            }, 500);
        </script>

    ";
?>
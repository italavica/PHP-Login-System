<?php    
    function ForceLogin(){

        if(isset($_SESSION['user_id'])){
            //the user is allowed here.
        } else {
            //the user is not allowed here.
            header('Location: /php_login_system/login.php'); exit;
        }

    }

?>
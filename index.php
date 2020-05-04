
<?php 
define('__CONFIG__',true);
//DEFINE THE CONFIG
require_once 'inc/config.php';
//ALLOW THE CONFIG ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="follow">

    <!--Uikit JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.4.2/dist/css/uikit.min.css" />
    <title>Page title</title>
</head>

<body>

<div class="uk-section uk-container">
   <?php echo " Hello World";
   echo " Today is: ". date("Y m d");
    ?>
    <p>
        <a href="/php_login_system/login.php">Login</a>
        <a href="/php_login_system/register.php">Register</a>

    </p>

</div>
<?php require_once 'inc/footer.php'; ?>
</body>
</html>
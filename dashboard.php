<?php 

    //Allow the config
    define('__CONFIG__',true);
    //Require the config
    require_once 'inc/config.php';


    ForceLogin();

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="follow">

    <title>Page title</title>

    <!--Uikit JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.4.2/dist/css/uikit.min.css" />
</head>

    <body>

        <div class="uk-section uk-container">
Dashboard here
        </div>

         <?php require_once 'inc/footer.php'; ?>
    </body>
</html>
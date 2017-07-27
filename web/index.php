<?php
    session_start();

    include 'config/config.php';
    include 'include/functions.php';
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Moj PHP web</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">

    </head>
    <body>
        <?php
            include 'scripts/menu.php';
        ?>
        <div>
        <?php
            $page = !empty($_GET['page']) ? $_GET['page'] : 'home';
            $pagePath = 'pages/' . basename($page) . '.php';

            if (file_exists($pagePath))
            {
                include $pagePath;
            }
            else
            {
                include 'pages/404.php';
            }
        ?>
        </div>

    </body>
</html>

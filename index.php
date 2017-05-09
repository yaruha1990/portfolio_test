<?php
session_start();
include 'headandmenu.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <link href="maps.css" rel="stylesheet">
        <?php print_components($components) ?>
    </head>
<body style="padding: 20px">
    <div class="panel panel-default">
        <div class="panel-heading">
            <span style="padding: 20px;font-size: large">Portfolio Yaroslav Storozhuk</span>
        </div>
        <div class="panel-heading" align="right">
            <?php
                if (!empty($_COOKIE['login'])){
                    toEnterC($toEnterCookies);
                } else if (!empty($_SESSION['login'])){
                    toEnterS($toEnterSession);
                } else{
                    notEntered($notEnteredForm);
                }
            ?>
        </div>
        <div class="panel-body">
            <?php print_menu($menu) ?>
        </div>
    </div>
<br>
</body>
</html>




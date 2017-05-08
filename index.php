<?php
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
                    echo "<p>You have entered as ".$_COOKIE['login']."</p>"."
                                <form action=\"exit.php\" method=\"get\">
                                <input type=\"submit\" value=\"Exit\" class=\"btn btn-success\">
                                </form>";
                } else{
                    echo "<form action=\"enter.php\" method=\"request\" role=\"form\" class=\"form-inline\">
                <div class=\"form-group\">
                    <label for=\"login\">Login</label>
                    <input size=\"10\" name=\"login\" type=\"text\" class=\"form-control\" id=\"login\" placeholder=\"Enter your login\">
                </div>
                <div class=\"form-group\">
                    <label for=\"password\">Password</label>
                    <input size=\"10\" name=\"pass\" type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Enter your password\">
                </div>
                <input type=\"submit\" value=\"Entry\" class=\"btn btn-success\"/> /
                <a href=\"registration.php\" class=\"btn btn-success\">Registration</a>
            </form>";
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




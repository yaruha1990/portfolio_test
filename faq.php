<?php
session_start();
include 'headandmenu.php';
include 'messages.php'?>
<!DOCTYPE html>
<html>
<head>
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
        }else if (!empty($_SESSION['login'])){
            echo "<p>You have entered as ".$_SESSION['login']."</p>"."
                                <form action=\"exit.php\" method=\"get\">
                                <input type=\"submit\" value=\"Exit\" class=\"btn btn-success\">
                                </form>";
        }else{
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

<div class="container">
    <h3>Contact us or ask your question below</h3>
    <form name="form" action="check.php" method="request" role="form">
        <div class="form-group">
            <label for="firstName">First name</label>
            <input type="text" name="firstName" class="form-control" id="firstName" placeholder="Enter your first name">
        </div>
        <div class="form-group">
            <label for="lastName">Last name</label>
            <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Enter your last name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email-address">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" name="message" id="message" rows="10" placeholder="Write your message here"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form><br><br>

    <article class="panel panel-default">
        <h3 style="padding-left: 13px">List of your frequently asked questions</h3>
        <?php
        if (isset($arr)) {
            krsort($arr); $i = 0;
            foreach ($arr as $key => $value) {
                if ($i >= 5)break;
                echo "<div class='panel-body' style='border-top: inherit;border-radius: inherit;margin-top: 20px'><label>" . $key . ', ' . $value['firstName'] . " " . $value['lastName'] . ", " . $value['email'] . "</label><hr>" . $value['message'] . "</div>";
                $i++;
            }
        }
        ?>
    </article>
</div>
</body>
</html>
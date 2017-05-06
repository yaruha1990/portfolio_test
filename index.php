<?php
include 'headandmenu.php'
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
            <form role="form" class="form-inline">
                <div class="form-group">
                    <label for="login">Login</label>
                    <input size="10" type="text" class="form-control" id="login" placeholder="Enter your login">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input size="10" type="password" class="form-control" id="password" placeholder="Enter your password">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input size="10" type="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <label for="email">
                    <input type="checkbox">Remember me
                </label>
                <button type="submit" class="btn btn-success">Registration</button>
            </form>
        </div>
        <div class="panel-body">
            <?php print_menu($menu) ?>
        </div>
    </div>
</div><br>
</body>
</html>




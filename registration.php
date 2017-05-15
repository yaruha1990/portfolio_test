<?php
include 'headandmenu.php';?>

<!DOCTYPE html>
<html>
<head>
    <?php print_components($components) ?>
</head>
<body style="padding: 20px">
<div class="panel panel-default ">
    <div class="panel-heading">
        <span style="padding: 20px">Yaroslav Storozhuk</span>
    </div>
    <div class="panel-body">
        <?php print_menu($menu) ?>
    </div>
</div>

<div class="container">
    <h3>Registration</h3>
    <form name="form" action="regCheck.php" method="post" role="form">
        <div class="form-group">
            <label for="login">Login</label>
            <input required type="text" name="login" class="form-control" id="login" placeholder="Enter your login">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input required type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
        </div>
        <div class="form-group">
            <label for="email">Password</label>
            <input required type="password" name="pass" class="form-control" id="pass" placeholder="Enter your password">
        </div>
        <div class="form-group">
            <label for="passwordConfirm">Confirm password</label>
            <input type="password" class="form-control" name="passwordConfirm" id="passwordConfirm" rows="10" placeholder="Confirm your password" />
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
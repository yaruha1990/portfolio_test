<?php
session_start();
session_destroy();
setcookie('login',"");
setcookie('pass',"");
header("Location:index.php");


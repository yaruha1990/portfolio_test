<?php
session_start();
    $dbh = new PDO('mysql:host=localhost; dbname=mybase', 'root', '');
    $sth = $dbh->query("select * from `user`");
    $user = $sth->fetchAll(PDO::FETCH_ASSOC);
    $login = $_POST['login'];
    $pass = md5($_POST['pass']);
    $checkbox = null;
    if (!empty($_POST['remember'])){
        $checkbox = $_POST['remember'];
    }
    if (empty($login) || empty($pass)){
        exit("Invalid data<br><input type='button' value='Back' onclick='history.back()'>");
    }
    $count = 0;
    $num = 0;

    foreach ($user as $key => $value) {
        if ($login == $value['login']){
            $num++;
        }
        if ($login == $value['login'] && $pass == $value['password'] && $checkbox == 'on') {
            setcookie("login", $login, time() + 3600);
            setcookie("pass", $pass, time() + 3600);
            echo "Hello, $login";
            $count++;
            header("refresh:2;url=index.php");
        }
        if ($login == $value['login'] && $pass == $value['password'] && $checkbox == null) {
            $_SESSION['login'] = $login;
            $_SESSION['pass'] = $pass;
            echo "Hello, $login";
            $count++;
            header("refresh:2;url=index.php");
        }
    }
    if ($num == 0) exit("Such login is not registered yet!<br><input type='button' value='Back' onclick='history.back()'>");
    if ($count==0){
        exit("Invalid login or password!<br><input type='button' value='Back' onclick='history.back()'>");
    }
    $count=0;


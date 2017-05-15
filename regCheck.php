<?php
if ($_POST['passwordConfirm'] != $_POST['pass']){
    exit("Your password and confirmed password don't match!<br><input type='button' value='Back' onclick='history.back()'>");
} else{
    $dbh = new PDO('mysql:host=localhost; dbname=mybase', 'root', '');
    $sth = $dbh->query("select * from `user`");
    $user = $sth->fetchAll(PDO::FETCH_ASSOC);
    if (!empty($user)){
        foreach ($user as $key => $value){
            if ($_POST['login'] == $value['login']){
                exit("Such login is already registered!<br><input type='button' value='Back' onclick='history.back()'>");
            } else if ($_POST['email'] == $value['email']){
                exit("Such email is already registered!<br><input type='button' value='Back' onclick='history.back()'>");
            } else {
                goto a;
            }
        }
    } a:{
        echo "Registration success!";
        $sth = $dbh->query("insert into `user` (`login`, `email`,`password`,`passwordConfirm`)
VALUES ('$_POST[login]','$_POST[email]',md5($_POST[pass]),md5($_POST[passwordConfirm]))");
        header("refresh:1;url=index.php");
    }
}







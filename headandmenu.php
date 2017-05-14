<?php
$menu = [

    "home" => [
        "class"=>"glyphicon glyphicon-home",
        "style"=>"padding-right: 20px; padding-left: 20px; text-decoration: none;",
        "text"=>"Home",
        "href"=>"index.php"
    ],
    "projects" => [
        "class"=>"glyphicon glyphicon-duplicate",
        "style"=>"padding-right: 20px; text-decoration: none",
        "text"=>"Projects",
        "href"=>"projects.php"
    ],
    "contacts" => [
        "class"=>"glyphicon glyphicon-earphone",
        "style"=>"padding-right: 20px; text-decoration: none",
        "text"=>"Contacts",
        "href"=>"contacts.php"
    ],
    "faq" => [
        "class"=>"glyphicon glyphicon-question-sign",
        "style"=>"padding-right: 20px; text-decoration: none",
        "text"=>"FAQ",
        "href"=>"faq.php"
    ],
];

$toEnterCookies = [
    "text"=>"You have entered as ",
    "action"=>"exit.php",
    "method"=>"post",
    "type"=>"submit",
    "value"=>"Exit",
    "class"=>"btn btn-success"
];
$toEnterSession = [
    "text"=>"You have entered as ",
    "action"=>"exit.php",
    "method"=>"post",
    "type"=>"submit",
    "value"=>"Exit",
    "class"=>"btn btn-success"
];

$notEnteredForm = [
    "action"=>"enter.php",
    "method"=>"post",
    "role"=>"form","class"=>"form-inline",
    "LoginDivClass"=>"form-group","loginFor"=>"login","loginLabelText"=>"Login",
    "loginSize"=>"10","loginName"=>"login","loginType"=>"text","loginClass"=>"form-control","loginId"=>"login","loginPlaceholder"=>"login",
    "passFor"=>"password","passText"=>"Password","passName"=>"pass","passType"=>"password","passId"=>"password","passPlaceholder"=>"password",
    "remFor"=>"remember","remText"=>"Remember me",
    "checkType"=>"checkbox","checkName"=>"remember",
    "submitType"=>"submit","submVal"=>"Entry","submClass"=>"btn btn-success",
    "ahref"=>"registration.php","aclass"=>"btn btn-success","aText"=>"Registration"
];

$components = [

    "meta" => [
        "charset" => "UTF-8"
    ],
    "title" => [
        "text" => "Portfolio Yaroslav Storozhuk"
    ],
    "meta1" => [
        "name" => "viewport",
        "content" => "width=device-width, initial-scale=1"
    ],
    "link" => [
        "rel" => "stylesheet",
        "href" => "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css",
        "integrity" => "sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u",
        "crossorigin" => "anonymous"
    ],
    "link1" => [
        "rel" => "stylesheet",
        "href" => "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css",
        "integrity" => "sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp",
        "crossorigin" => "anonymous"
    ],
    "script" => [
        "src" => "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js",
        "integrity" => "sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa",
        "crossorigin" => "anonymous"
    ]
];

function print_components($components){
    foreach ($components as $key => $value){
        if ($key == "meta"){
            echo "<meta charset='$value[charset]'>";
        } if ($key == "title"){
            echo "<title>'$value[text]'</title>";
        } if ($key == "meta1"){
            echo "<meta name='$value[name]' content='$value[content]'>";
        } if ($key == "link"){
            echo "<link rel='$value[rel]' href='$value[href]' integrity='$value[integrity]' crossorigin='$value[crossorigin]'>";
        } if ($key == "link1"){
            echo "<link rel='$value[rel]' href='$value[href]' integrity='$value[integrity]' crossorigin='$value[crossorigin]'>";
        } if ($key == "script"){
            echo "<script src='$value[src]' integrity='$value[integrity]' crossorigin='$value[crossorigin]'></script>";
        }
    }
}

function print_menu($menu){
    foreach ($menu as $key => $value) {
        echo "<a class='$value[class]' style='$value[style]' href='$value[href]'> $value[text]</a>";
    }
}

function toEnterC($toEnterCookies){
    echo "<p>$toEnterCookies[text] $_COOKIE[login]</p><form action='$toEnterCookies[action]' method='$toEnterCookies[method]'><input type='$toEnterCookies[type]' value='$toEnterCookies[value]' class='$toEnterCookies[class]'></form>";
}

function toEnterS($toEnterSession){
    echo "<p>$toEnterSession[text] $_SESSION[login]</p><form action='$toEnterSession[action]' method='$toEnterSession[method]'><input type='$toEnterSession[type]' value='$toEnterSession[value]' class='$toEnterSession[class]'></form>";
}

function notEntered($notEnteredForm){
    echo "<form action='$notEnteredForm[action]' method='$notEnteredForm[method]' role='$notEnteredForm[role]' class='$notEnteredForm[class]'>
            <div class='$notEnteredForm[LoginDivClass]'><label for='$notEnteredForm[loginFor]'>$notEnteredForm[loginLabelText]</label>
            <input size='$notEnteredForm[loginSize]' name='$notEnteredForm[loginName]' type='$notEnteredForm[loginType]' class='$notEnteredForm[loginClass]' id='$notEnteredForm[loginId]' placeholder=$notEnteredForm[loginPlaceholder]></div>
            <div class='$notEnteredForm[LoginDivClass]'><label for='$notEnteredForm[passFor]'>$notEnteredForm[passText]</label>
            <input size='$notEnteredForm[loginSize]' name='$notEnteredForm[passName]' type='$notEnteredForm[passType]' class='$notEnteredForm[loginClass]' id='$notEnteredForm[passId]' placeholder=$notEnteredForm[passPlaceholder]>
            <label for='$notEnteredForm[remFor]'>$notEnteredForm[remText]</label>
            <input type='$notEnteredForm[checkType]' name='$notEnteredForm[checkName]'></div>
            <input type='$notEnteredForm[submitType]' value='$notEnteredForm[submVal]' class='$notEnteredForm[submClass]' /> / 
            <a href='$notEnteredForm[ahref]' class='$notEnteredForm[aclass]'>$notEnteredForm[aText]</a></form>";
}


?>
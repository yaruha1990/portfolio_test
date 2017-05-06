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
    ]
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

?>
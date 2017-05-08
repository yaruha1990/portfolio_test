<?php
session_start();
include 'headandmenu.php';
$javaProjects = [
    "Snake" => [
        "class" => "list-group-item list-group-item-action flex-column align-items-start",
        "href" => "https://github.com/yaruha1990/Snake_1.1",
        "text" => "Snake",
        ],
    "Calculator" => [
        "class" => "list-group-item list-group-item-action flex-column align-items-start",
        "href" => "https://github.com/yaruha1990/Calculator",
        "text" => "Calculator",
    ],
    "VacanciesSearcher" => [
        "class" => "list-group-item list-group-item-action flex-column align-items-start",
        "href" => "https://github.com/yaruha1990/VacanciesSearcher",
        "text" => "VacanciesSearcher",
    ],
    "UsersWebApp" => [
        "class" => "list-group-item list-group-item-action flex-column align-items-start",
        "href" => "https://github.com/yaruha1990/UsersWebApp",
        "text" => "UsersWebApp",
    ],
    "Cashpoint" =>[
        "class" => "list-group-item list-group-item-action flex-column align-items-start",
        "href" => "https://github.com/yaruha1990/Cashpoint",
        "text" => "Cashpoint",
    ],
];
$phpProjects = [
    "portfolio_test" => [
        "class" => "list-group-item list-group-item-action flex-column align-items-start",
        "href" => "https://github.com/yaruha1990/portfolio_test",
        "text" => "Portfolio",
    ],
    "php" => [
        "class" => "list-group-item list-group-item-action flex-column align-items-start",
        "href" => "https://github.com/yaruha1990/PHP",
        "text" => "PHP",
    ]
];
function print_projects($projects){
    foreach ($projects as $key => $value){
        echo "<a class='$value[class]' href='$value[href]'>$value[text]</a>";
    }
}
?>

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
<div class="container">
    <h1>My projects</h1>
    <article class="form-group">
        <h3>Java</h3>
        <div class="list-group">
            <?php print_projects($javaProjects)?>
        </div>
        <h3>PHP</h3>
        <div class="list-group">
            <?php print_projects($phpProjects)?>
        </div>
    </article>
</div>
</body>
</html>


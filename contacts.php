<?php
include 'headandmenu.php';
$contacts = [
    "Name" => "Yaruha's company",
    "Address" => "Nekrasova Street 115, Bila Tserkva, Kyivs'ka oblast",
    "Email" => "yaruha@ukr.net",
    ""=>"Also, you can contact us from <a href=\"faq.php\">FAQ</a> page",
];

function print_contacts($contacts){
    foreach ($contacts as $key => $value){
        if ($key==""){
            echo "<li class='list-group-item'><b>$key</b><span>$value</span></li>";
        } else{
            echo "<li class='list-group-item'><b>$key: </b><span>$value</span></li>";
        }
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
    <h1>Contacts</h1>
    <article class="form-group">
        <h3>Main office</h3>
        <ul class="list-group">
            <?php print_contacts($contacts)?>
        </ul>
    </article>
</div>
    <input id="pac-input" class="controls" type="text" placeholder="Search Box">
    <div id="map" style="width: 1140px; height: 400px;margin-left: 87px"></div>
<script src="google_maps.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMRwsgaucMPwlUIUlED8SNe9VFH6tp5Lo&libraries=places&callback=initAutocomplete"
        async defer></script>
</body>
</html>
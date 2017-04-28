<?php
include 'headandmenu.php';
$contacts = [
    "Name" => "Yaruha's company",
    "Address" => "USA, California, San Francisco, Silicon Valley",
    "Email" => "yaruha@ukr.net",
];

function print_contacts($contacts){
    foreach ($contacts as $key => $value){
        echo "<li class='list-group-item'><b>$key: </b><span>$value</span></li>";
    }
}
?>

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
    <h1>Contacts</h1>
    <article class="form-group">
        <h3>Main office</h3>
        <ul class="list-group">
            <?php print_contacts($contacts)?>
        </ul>
    </article>

    <h3>Contact us</h3>
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
        <div class="form-group">
            <label for="file">Add file</label>
            <input type="file" class="form-control" id="file"/>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
</body>
</html>
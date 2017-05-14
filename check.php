<?php
if ($_FILES['letter']['name']==null && $_FILES['letter']['type']==null && $_POST['message']==null) {
    exit("Invalid request!"."<br>"."Enter your message or attach file, please<br><input type='button' value='Back' onclick='history.back()'>");
} if ($_POST['message']==null && $_FILES['letter']['name']!=null && $_FILES['letter']['type']!=null){
    if ($_FILES['letter']['size'] > 500000){
        exit("File size is too large!<br>Choose another file, please<br><input type='button' value='Back' onclick='history.back()'>");
    } if (($_FILES['letter']['type']!='image/jpeg') && ($_FILES['letter']['type']!='text/plain')){
        exit("Invalid file format!<br>Choose another file, please<br><input type='button' value='Back' onclick='history.back()'>");
    }
    move_uploaded_file($_FILES['letter']['tmp_name'],'uploads/'.$_POST['firstName'].' '.$_POST['lastName'].'('.$_POST['email'].')');
    echo "Thank you for your request!"."<br><br>"."It will be processed soon.";
    header("Refresh: 3; url = faq.php");
} else{
    $file = fopen("messages.php","a+t");
    ob_start();
    var_export($_POST);
    $out = ob_get_contents();
    ob_end_clean();
    fwrite($file,'$arr['."'".date("Y.m.d H:i:s",time()+60*60)."'".']='.$out.";\n");
    fclose($file);
    move_uploaded_file($_FILES['letter']['tmp_name'],'uploads/'.$_POST['firstName'].' '.$_POST['lastName'].'('.$_POST['email'].')');
    echo "Thank you for your request!"."<br><br>"."It will be processed soon.";
    header("Refresh: 3; url = faq.php");
}




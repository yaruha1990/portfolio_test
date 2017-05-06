<?php
if (sizeof($_REQUEST) > 0){
    $file = fopen("messages.php","a+t");
    ob_start();
    var_export($_REQUEST);
    $out = ob_get_contents();
    ob_end_clean();
    fwrite($file,'$arr['."'".date("Y.m.d H:i:s",time())."'".']='.$out.";\n");
    fclose($file);
}
echo "Thank you for your request!"."<br><br>"."It will be processed soon.";
header("Refresh: 3; url = faq.php");

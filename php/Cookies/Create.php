<?php
$cookie_name="user";
$cookie_value="this is cookie value";

// setcookie($cookie_name,$cookie_value,time()+(8640*30),"/");
if(!isset($_COOKIE[$cookie_name]))
{
    echo "cookie names ". $cookie_name . "not set";
}
else
{
    echo "value = ". $_COOKIE[$cookie_name];
}

//to delete simply set the expiration date in the past
setcookie($cookie_name,"",time()-3600,"/");
echo "<br>Cookie " . $cookie_name . " is deleted.";
?>
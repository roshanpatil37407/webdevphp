<?php
setcookie("user","roshan",time() + 3600.);
setcookie("language","english",time() + 3600.);
if(isset($_COOKIE['use']) && isset($_COOKIE['language']))
{
    $user=$_COOKIE['user'];
    $language=$_COOKIE['language'];
    echo"welcom, $user!<br>";
    echo"your preferred language is $language.<br> ";
}
else
{
    echo "cookie are not sent ";
}
if(isset($_COOKIE["user"])) 
{
    setcookie("user" ,"", time() -3600, "/");
    echo"the 'user' cookie has been deleted.";
}
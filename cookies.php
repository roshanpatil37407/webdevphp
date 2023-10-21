<?php
// Set a cookie with the name "user" and value "JohnDoe"
setcookie("user", "JohnDoe", time() + 3600, "/"); // Expires in 1 hour
echo "Cookie 'user' is set.";
?>

<!-- receiver.php -->
<?php
if (isset($_GET['name'])) {
    $name = $_GET['name'];
    echo "Hello, $name!";
}

if (isset($_GET['age'])) {
    $age = $_GET['age'];
    echo " You are $age years old.";
}
?>

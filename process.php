<!DOCTYPE html>
<html>
<head>
    <title>Registration Data</title>
</head>
<body>
    <h1>Registration Data</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullname = $_POST["fullname"];
        $gender = $_POST["gender"];
        $interests = isset($_POST["interests"]) ? implode(", ", $_POST["interests"]) : "None";
        $country = $_POST["country"];

        echo "<p><strong>Full Name:</strong> $fullname</p>";
        echo "<p><strong>Gender:</strong> $gender</p>";
        echo "<p><strong>Interests:</strong> $interests</p>";
        echo "<p><strong>Country:</strong> $country</p>";
    } else {
        echo "No data received.";
    }
    ?>
</body>
</html>

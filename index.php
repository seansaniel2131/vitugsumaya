<!DOCTYPE html>
<html>
<head>
    <title>Test Connection String</title>
</head>
<body>
    <h1>Testing Connection String</h1>

    <?php
        // Database credentials
        $servername = "localhost";
        $username = "vitugsumayaoptic_savariz";
        $password = "aq54uOQ[=ab{";
        $dbname = "vitugsumayaoptic_wanders";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            echo "Connection failed: " . $conn->connect_error;
        } else {
            echo "Connection successful!";
        }

        // Close connection
        $conn->close();
    ?>
</body>
</html>

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

 <div class="container">
        <div class="header">
            <h1>Vitug Sumaya Optical Clinic Quezon City Branch</h1>
        </div>
        <div class="menu">
            <a href="#">Appointments</a>
            <a href="#">Patients</a>
            <a href="#">Transactions</a>
            <a href="#">Balance</a>
            <a href="#">Sales Report</a>
            <a href="#">Complaints</a>
            <a href="#">Return Request</a>
            <a href="#">Screening Result</a>
            <a href="#">Log Out</a>
        </div>

<div class="dashboard">
</div>
</body>
</html>

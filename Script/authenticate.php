<?php
header('Content-Type: application/json');

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the username and password from the request
    $data = json_decode(file_get_contents('php://input'), true);
    $username = $data['username'];
    $password = $data['password'];

    // Database credentials
    $servername = "localhost";
    $dbUsername = "vitugsumayaoptic_savariz";
    $dbPassword = "aq54uOQ[=ab{";
    $dbname = "vitugsumayaoptic_wanders";

    // Create connection
    $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

    if ($conn->connect_error) {
        http_response_code(500); // Internal Server Error
        echo json_encode(['error' => 'Database connection error']);
        exit;
    }

    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);

$sql = "SELECT UserID, CAST(BranchID AS UNSIGNED) AS BranchID FROM Users WHERE Username='$username' AND Password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $userData = $result->fetch_assoc();
        
        // Include the BranchID in the response data
        $response = $userData;
        
        echo json_encode($response);
    } else {
        http_response_code(401); // Unauthorized
        echo json_encode(['error' => 'Invalid credentials']);
    }

    $conn->close();
} else {
    http_response_code(405); // Method Not Allowed
    echo json_encode(['error' => 'Method not allowed']);
}
?>

<?php
header("Access-Control-Allow-Origin: http://localhost:3000"); 
header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Methods: POST, OPTIONS"); 
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit; 
}

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "movieprojectdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(["message" => "Database connection failed: " . $conn->connect_error]);
    exit;
}

$data = json_decode(file_get_contents("php://input"));

$requiredFields = ['email', 'password', 'firstName', 'lastName', 'contactNo'];
foreach ($requiredFields as $field) {
    if (empty($data->$field)) {
        http_response_code(400);
        echo json_encode(["message" => ucfirst($field) . " is required!"]);
        exit;
    }
}

$hashedPassword = password_hash($data->password, PASSWORD_BCRYPT);

$stmt = $conn->prepare("INSERT INTO users (email, password, firstName, middleName, lastName, contactNo, role) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $data->email, $hashedPassword, $data->firstName, $data->middleName, $data->lastName, $data->contactNo, $data->role);

if ($stmt->execute()) {
    http_response_code(201);
    echo json_encode(["message" => "User registered successfully"]);
} else {
    http_response_code(500);
    echo json_encode(["message" => "User registration failed: " . $stmt->error]);
}

$stmt->close();
$conn->close();
?>

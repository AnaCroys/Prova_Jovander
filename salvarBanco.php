<?php
// Database configuration
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'prova';

// Establishing a connection to the database
$conn = new mysqli($host, $username, $password, $database);

// Checking the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["nome"];
    $email = $_POST["email"];

    // SQL query to insert the data into the table
    $sql = "INSERT INTO cadastro (name, email) VALUES ('$name', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

// Closing the database connection
$conn->close();
?>

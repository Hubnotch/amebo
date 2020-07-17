
<?php
$servername = "localhost";
$username = "root";
$password = "newsletter";

// Create connection
$conn = mysqli_connect($servername, $username, '', $password);

$message = '';

if (isset ($POST['submit'])) {
    $name = $_POST['name'];
    $name = mysqli_real_escape_string($conn, $name);
    $email = $_POST['email'];
    $email = mysqli_real_escape_string($conn, $email);

    $query = "INSERT INTO capture (name, email) VALUES ('$name', '$email')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "<script> alert('Successfully Subscribed! We'll Notify You in time')</script>";
    } else {
        echo "<script> alert('Not Successfully Subscribed! Make sure to subscribe ')</script>";
    }
}

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";


// // Create database
// $sql = "CREATE DATABASE myDB";
// if ($conn->query($sql) === TRUE) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . $conn->error;
// }

// // sql to create table
// $sql = "CREATE TABLE MyGuests (
// email VARCHAR(50),
// reg_date TIMESTAMP
// )";

// if ($conn->query($sql) === TRUE) {
//     echo "Table MyGuests created successfully";
// } else {
//     echo "Error creating table: " . $conn->error;
// }

// $sql = "INSERT INTO MyGuests (email)
// VALUES ('john@example.com')";

// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }


// $conn->close();

?>


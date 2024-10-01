<?php
session_start();  // Start a session
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "navata";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["submit"])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];
    
    $sql = "SELECT * FROM reg WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    if ($result->num_rows > 0) {
        // Store user details in session variables
        $_SESSION['fullname'] = $row['fullname'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];  // Assuming you have an email field in your database
        $_SESSION['phonenumber'] = $row['phonenumber'];
        $_SESSION['password'] = $row['password']; 
        $_SESSION['gender'] = $row['gender'];  // Assuming you have a phone field in your database
        header("Location: index.php"); // Redirect to profile page
        exit();
    } else {
        echo '<script>
            window.location.href = "login.php";
            alert("Login failed. Invalid Username or Password");
        </script>';
    }
}

$conn->close();
?>

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
    
    $sql = "SELECT * FROM logina WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    if ($result->num_rows > 0) {
        // Store user details in session variables
       
        $_SESSION['username'] = $row['username'];
        
        $_SESSION['password'] = $row['password']; 
        
        header("Location: indexa.php"); // Redirect to profile page
        exit();
    } else {
        echo '<script>
            window.location.href = "logina.php";
            alert("Login failed. Invalid Username or Password");
        </script>';
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Registration Form</title>
        <meta name="viewport" content="width=device-width,initial scale=1.0">
        <link rel="stylesheet" href="styles/styler.css">
<style>
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;

}

body{
    display: flex;
    height: 100vh;
    justify-content: center;
    align-items: center;
    background: url(assets/rbg.jpg);
    background-size: cover;
    background-position: center;
}

.container{
    width: 100%;
    max-width: 650px;
    background: transparent;
    padding: 28px;
    margin: 0 28px;
    border-radius: 10px;
}

.form-title{
    font-size: 35px;
    font-weight: 600;
    text-align: center;
    padding-bottom: 6px 10px;
    color: #02015d;
    text-shadow: 2px 2px 2px rgba(110, 119, 146, 0.644);
}

.main-user-info{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 20px 0;
}

.user-input-box:nth-child(2n){
    justify-content: end;
}

.user-input-box{
    display: flex;
    flex-wrap: wrap;
    width: 50%;
    padding-bottom: 15px;
}

.user-input-box label{
    width: 95%;
    color: #3b0202;
    font-size: 20px;
    font-weight: 400;
    margin: 5px 0;
}

.user-input-box input{
    height: 40px;
    width: 95%;
    border-radius: 7px;
    outline: none;
    border: 1px solid grey;
    padding: 0 10px;
}

.gender-title{
    color: #02015d;
    font-size: 24px;
    font-weight: 600;
    text-shadow: 2px 2px 2px rgba(110, 119, 146, 0.443);
}

.gender-category{
    margin: 15px 0;
    color: #3b0202;
}

.gender-category label{
    padding: 0 20px 0 5px;
}

.gender-category label,
.gender-category input,
.form-submit-btn input{
    cursor: pointer;
}

.form-submit-btn{
    margin-top: 40px;
}

.form-submit-btn input{
    display: block;
    width: 100%;
    margin-top: 10px;
    font-size: 20px;
    padding: 10px;
    border:none;
    border-radius: 3px;
    color: white;
    background: rgba(97, 173, 116, 0.721);
}

.form-submit-btn input:hover{
    background: rgba(36, 143, 63, 0.909);
    color: rgb(255, 255, 255);
}
</style>
</head>
<body>
    <div class="container">
        <h1 class="form-title">Registration</h1>
       


         <form action="reg.php" method="post">
            <div class="main-user-info">
                <div class="user-input-box">
                    <label for="fullname">FullName</label>
                    <input type="text"
                    id="fullname"
                    name="fullname"
                    placeholder="Enter Full Name"/>
                   
                </div>
                <div class="user-input-box">
                    <label for="username">Username</label>
                    <input type="text"
                    id="username"
                    name="username"
                    placeholder="Enter Username"/>
                 
                </div>
                <div class="user-input-box">
                    <label for="email">Email</label>
                    <input type="email"
                    id="email"
                    name="email"
                    placeholder="Enter Email"/>
               
                </div>
                <div class="user-input-box">
                    <label for="phoneNumber">Phone Number</label>
                    <input type="tel"
                    id="phonenumber"
                    name="phonenumber"
                    placeholder="Enter Phone Number"/>
               
                </div>
                <div class="user-input-box">
                    <label for="password">Password</label>
                    <input type="password"
                    id="password"
                    name="password"
                    placeholder="Enter Password"/>
                </div>
                <div class="user-input-box">
                    <label for="confirmpassword">Confirm Password</label>
                    <input type="password"
                    id="confirmpassword"
                    name="confirmpassword"
                    placeholder="Enter Confirm Password"/>                   
                </div>
            </div>
            <div class="gender-details-box">
                <span class="gender-title">Gender</span>
                <div class="gender-category">
                    <input type="radio" name="gender" value="m" id="male">
                    <label for="male">Male</label>
                    <input type="radio" name="gender" value="f"  id="female">
                    <label for="female">Female</label>
                    <input type="radio" name="gender" value="o"  id="other">
                    <label for="other">Other</label>                  
                </div>
            </div>
            <div class="form-submit-btn">
                <input type="submit" value="submit" name="submit">
            </div>
        </form>
    </div>
    <?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database credentials
$servername = "localhost";
$db_username = "root";
$db_password = "";    
$dbname = "navata";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define variables and set to empty values
    $fullname = $username = $email = $phonenumber = $password = $confirmpassword = $gender = "";
    $fullnameErr = $usernameErr = $emailErr = $phonenumberErr = $passwordErr = $confirmpasswordErr = $genderErr = "";
    $isValid = true;

    // Validate Fullname
    if (empty($_POST["fullname"])) {
        $fullnameErr = "Fullname is required";
        $isValid = false;
    } else {
        $fullname = test_input($_POST["fullname"]);
        if (!preg_match("/^[a-zA-Z0-9 ]*$/", $fullname)) {
            $fullnameErr = "Only letters, numbers, and spaces allowed";
            $isValid = false;
        }
    }

    // Validate username
    if (empty($_POST["username"])) {
        $usernameErr = "Username is required";
        $isValid = false;
    } else {
        $username = test_input($_POST["username"]);
        if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
            $usernameErr = "Only letters and numbers allowed";
            $isValid = false;
        }
    }

    // Validate email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        $isValid = false;
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            $isValid = false;
        }
    }

    // Validate phone number
    if (empty($_POST["phonenumber"])) {
        $phonenumberErr = "Phone Number is required";
        $isValid = false;
    } else {
        $phonenumber = test_input($_POST["phonenumber"]);
        if (!preg_match("/^[0-9]{10}$/", $phonenumber)) {
            $phonenumberErr = "Invalid phone number format. Must be 10 digits.";
            $isValid = false;
        }
    }

    // Validate password
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
        $isValid = false;
    } else {
        $password = test_input($_POST["password"]);
        if (strlen($password) < 6) {
            $passwordErr = "Password must be at least 6 characters";
            $isValid = false;
        }
    }

    // Validate confirm password
    if (empty($_POST["confirmpassword"])) {
        $confirmpasswordErr = "Confirm password is required";
        $isValid = false;
    } else {
        $confirmpassword = test_input($_POST["confirmpassword"]);
        if ($password !== $confirmpassword) {
            $confirmpasswordErr = "Passwords do not match";
            $isValid = false;
        }
    }

    // Validate gender
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
        $isValid = false;
    } else {
        $gender = test_input($_POST["gender"]);
    }

    // Display errors
    if (!$isValid) {
        echo "<ul>";
        if (!empty($fullnameErr)) echo "<li>$fullnameErr</li>";
        if (!empty($usernameErr)) echo "<li>$usernameErr</li>";
        if (!empty($emailErr)) echo "<li>$emailErr</li>";
        if (!empty($phonenumberErr)) echo "<li>$phonenumberErr</li>";
        if (!empty($passwordErr)) echo "<li>$passwordErr</li>";
        if (!empty($confirmpasswordErr)) echo "<li>$confirmpasswordErr</li>";
        if (!empty($genderErr)) echo "<li>$genderErr</li>";
        echo "</ul>";
    } else {
        // Establish connection to the database
        $conn = new mysqli($servername, $db_username, $db_password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO reg (fullname, username, email, phonenumber, password, gender) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $fullname, $username, $email, $phonenumber, $password, $gender);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement and connection
        $stmt->close();
        $conn->close();
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
</body>
</html>
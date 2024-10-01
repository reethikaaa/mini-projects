<?php
session_start();  // Start the session

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: admin.php");  // Redirect to login page if not logged in
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Handlooms and Handcrafts</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body{
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
            background-color: #d6c4b2;
            background-size: cover;
            background-position: center;
        }
        
        header {
            background-color: #333;
            color: #fff;
            padding: 1rem 0;
        }
        
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }
        
        nav ul li {
            margin: 0 1rem;
        }
        
        nav ul li a {
            color: #fff;
            text-decoration: none;
        }
        
        nav ul li a.active {
            border-bottom: 2px solid #fff;
        }
        
        .container{
            width: 585px;
            height: 756px;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, .2);
            backdrop-filter: blur(20px);
            padding: 40px 50px;
            margin: 0 28px;
            border-radius: 10px;
            box-shadow: inset -2px 2px 2px rgb(353, 353, 353);
        }

        .form-title{
            font-size: 26px;
            font-weight: 600;
            text-align: center;
            padding-bottom: 6px;
            color: #4a372b;
            border-bottom: solid 1px #ffffff;
        }
        
        .about-section {
            background-color: transparent;
            padding: 2rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .about-section h1 {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .about-content {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
        }
        
        .about-content img {
            display: block;
            margin: 0 auto;
            flex: 1 1 40%;
            max-width: 250px;
            border-radius: 10px;
        }
        
        .text-content {
            color: #4a372b;
            flex: 1 1 55%;
        }
        
        .text-content h2 {
            margin-top: 0;
        }
        
        .text-content ul {
            list-style: disc;
            padding-left: 1rem;
        }
        
    </style>        
</head>
<body>
    
    <main>
        <section class="about-section">
            <div class="container">
                <h1 class="form-title">PROFILE</h1>
                <div class="about-content">
                    <img src="assets/logo.png" alt="Handloom Image"  >
                    <div class="text-content">
                    <p><strong>Username:</strong> <?php echo $_SESSION['username']; ?></p>
           
            <p><strong>password:</strong> <?php echo $_SESSION['password']; ?></p>
           
                        
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>

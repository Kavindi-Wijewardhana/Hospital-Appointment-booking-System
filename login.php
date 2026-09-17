
<?php 
include 'config.php'; 
session_start(); 

if (isset($_POST['login'])) {
    $uname = $_POST['username'];
    $pass = $_POST['password'];
    
    
    $sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['user'] = $uname;
        header("Location: dashbord.php"); // ඔබේ Screenshot එකේ ඇති නම dashbord.php බැවින් එය භාවිතා විය යුතුය
        echo "Username " . $uname . " Password " . $pass;
    } else {
        echo "<script>alert('වැරදි නමක් හෝ මුරපදයක්!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="login-container">
    <h2>Login</h2>
    <form name="loginForm" method="post" onsubmit="return validateForm()">
        <label>Username:</label>
        <input type="text" name="username" required>
        
        <label>Password:</label>
        <input type="password" name="password" required>
        
        <button type="submit" name="login">Login</button>
    </form>
</div>

<script src="script.js"></script>
</body>
</html>


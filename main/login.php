<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
    <h2>Login</h2>
    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>
<?php
require_once("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Perform validation as needed

    // Check if the username exists
    $check_user_query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $check_user_query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Verify the password
        if (password_verify($password, $row["password"])) {
            // Start a session to store user information
            session_start();
            $_SESSION["username"] = $username; // Store username in session variable

            // Redirect the user to the landing page (replace 'landing_page.php' with the actual landing page URL)
            header("Location: dashboard.php");
            exit(); // Ensure no further code execution after redirection
        } else {
            echo "Incorrect password. Please try again.";
        }
    } else {
        echo "Username not found. Please register first.";
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h2>Register</h2>
    <form action="register.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>
<?php
require_once("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);

   

    // Check if the username is already taken
    $check_username_query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $check_username_query);

    if (mysqli_num_rows($result) > 0) {
        echo "Username already exists. Please choose a different one.";
    } else {
        // Insert new user into the database
        $insert_user_query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        mysqli_query($conn, $insert_user_query);

        echo "Registration successful!";
    }

    mysqli_close($conn);
}
?>

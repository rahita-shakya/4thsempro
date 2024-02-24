<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .room-container {
            display: flex;
            justify-content: space-around;
            margin-top: 50px;
        }

        .room {
            width: 200px;
            height: 250px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .room h2 {
            margin-top: 0;
        }

        .room p {
            margin-bottom: 0;
        }

        .room img {
            width: 80%;
            height: auto;
            margin-bottom: 10px;
        }

        /* Hover effect */
        .room:hover {
            transform: translateY(-45px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }
        a{
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
    <h1>Welcome, <?php echo $username; ?>!</h1>
    <!-- Add dashboard content here -->
    
    <p>This is your dashboard. You can manage your bookings, view account information, etc.</p>
    
    <!-- Room showcase -->
    <div class="room-container">
        <a href="../room/single.php" class="room">
            <img src="../photo/single.jpg" alt="Single Room">
            <h2>Single Room</h2>
            <p>Book a cozy single room for your stay.</p>
        </a>
        <a href="../room/double.php" class="room">
            <img src="../photo/double.jpg" alt="Double Room">
            <h2>Double Room</h2>
            <p>Experience comfort in our spacious double room.</p>
        </a>
        <a href="../room/deluxe.php" class="room">
            <img src="../photo/deluxe-room.jpg" alt="Deluxe Room">
            <h2>Deluxe Room</h2>
            <p>Indulge in luxury with our deluxe room amenities.</p>
        </a>
    </div>

    <!-- Example: Logout button -->
    <form action="logout.php" method="post">
        <input type="submit" value="Logout">
    </form>

    <!-- Add any additional scripts or JavaScript code here -->
</body>
</html>

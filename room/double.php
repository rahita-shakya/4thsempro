<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Single Room</title>
    <!-- Add any additional CSS or meta tags here -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Book Single Room</h1>
    <p>Please fill in the details to book a single room.</p>
    
    <!-- Booking form -->
    <form action="process_booking.php" method="post">
        <label for="num_people">Number of People:</label>
        <input type="number" id="num_people" name="num_people" required><br>

        <label for="check_in">Check-in Date:</label>
        <input type="date" id="check_in" name="check_in" required><br>

        <label for="check_out">Check-out Date:</label>
        <input type="date" id="check_out" name="check_out" required><br>

        <!-- Add any additional fields as needed -->

        <input type="submit" value="Submit">
    </form>

    <!-- Add any additional HTML content or scripts here -->
</body>
</html>

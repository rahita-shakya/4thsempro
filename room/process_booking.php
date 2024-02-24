<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $room_id = $_POST["room_id"];
    $guest_name = $_POST["guest_name"];
    $check_in = $_POST["check_in"];
    $check_out = $_POST["check_out"];

    // Perform any necessary validation

    // Assuming you have a database connection established
    require_once("../main/database.php");

    // Insert booking into the database
    $insert_query = "INSERT INTO bookings (room_id, guest_name, check_in, check_out) VALUES ('$room_id', '$guest_name', '$check_in', '$check_out')";

    if (mysqli_query($conn, $insert_query)) {
        // Booking successful
        echo "Booking successful!";
    } else {
        // Booking failed
        echo "Error: " . mysqli_error($conn);
    }

    // Close database connection
    mysqli_close($conn);
}
?>

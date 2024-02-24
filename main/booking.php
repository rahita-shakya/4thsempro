<?php
require_once("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $room_id = $_POST["room_id"];
    $guest_name = $_POST["guest_name"];
    $check_in = $_POST["check_in"];
    $check_out = $_POST["check_out"];

    // Perform validation as needed

    // Check room availability
    $availability_query = "SELECT status FROM rooms WHERE room_id = $room_id";
    $result = mysqli_query($conn, $availability_query);
    $row = mysqli_fetch_assoc($result);

    if ($row['status'] == 'available') {
        // Update room status to 'booked'
        $update_room_query = "UPDATE rooms SET status = 'booked' WHERE room_id = $room_id";
        mysqli_query($conn, $update_room_query);

        // Insert booking details into the database
        $insert_booking_query = "INSERT INTO bookings (room_id, guest_name, check_in, check_out) VALUES ($room_id, '$guest_name', '$check_in', '$check_out')";
        mysqli_query($conn, $insert_booking_query);

        echo "Booking successful!";
    } else {
        echo "Room is already booked.";
    }

    mysqli_close($conn);
}
?>

<?php
// Database connection (adjust credentials as needed)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "events_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle event completion
if (isset($_POST['completed'])) {
    $eventId = $_POST['completed'];
    $sql = "UPDATE events SET completed = 1 WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $eventId);
    $stmt->execute();
    $stmt->close();
}

// Handle new event submission
if (isset($_POST['new_event']) && !empty($_POST['new_event'])) {
    $newEvent = $_POST['new_event'];
    $sql = "INSERT INTO events (event_description) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $newEvent);
    $stmt->execute();
    $stmt->close();
}

// Fetch non-completed events
$sql = "SELECT id, event_description FROM events WHERE completed = 0";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Reminders</title>
</head>
<body>

<h2>Event Reminders</h2>

<!-- Form to add new event -->
<form method="post">
    <input type="text" name="new_event" placeholder="Enter new event" required>
    <button type="submit">Add Event</button>
</form>

<h3>Your Events:</h3>

<form method="post">
    <ul>
        <?php
        if ($result->num_rows > 0) {
            // Output each event
            while ($row = $result->fetch_assoc()) {
                echo '<li>';
                echo '<label>';
                echo '<input type="checkbox" name="completed" value="' . $row['id'] . '" onchange="this.form.submit()">';
                echo htmlspecialchars($row['event_description']);
                echo '</label>';
                echo '</li>';
            }
        } else {
            echo '<li>No events to display!</li>';
        }
        ?>
    </ul>
</form>

</body>
</html>

<?php
$conn->close();
?>

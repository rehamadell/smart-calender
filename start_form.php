<?php

$connection = mysqli_connect('localhost', 'root', '', 'smart_calender_db');

if (isset($_POST['send'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $phone = trim($_POST['phone']);
    $age = trim($_POST['age']);

    // Initialize an array to hold validation errors
    $errors = [];

    // Validate Name
    if (empty($name)) {
        $errors[] = "Name is required.";
    }

    // Validate Email
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Validate Password
    if (empty($password)) {
        $errors[] = "Password is required.";
    } elseif (strlen($password) < 12) {
        $errors[] = "Password must be at least 12 characters.";
    }

    // Validate Phone
    if (empty($phone)) {
        $errors[] = "Phone number is required.";
    }

    // Validate Age
    if (empty($age)) {
        $errors[] = "Age is required.";
    }

    // Check if there are any validation errors
    if (empty($errors)) {
        // Sanitize inputs
        $name = mysqli_real_escape_string($connection, $name);
        $email = mysqli_real_escape_string($connection, $email);
        $phone = mysqli_real_escape_string($connection, $phone);
        $age = mysqli_real_escape_string($connection, $age);
        
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert into the database
        $request = "INSERT INTO start_form(name, email, password, phone, age) VALUES('$name', '$email', '$hashed_password', '$phone', '$age')";

        if (mysqli_query($connection, $request)) {
            header('Location: start.php');
            exit();
        } else {
            echo 'Something went wrong, try again';
        }

    } else {
        // Display validation errors
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }

} else {
    echo 'Something went wrong, try again';
}

mysqli_close($connection);

?>

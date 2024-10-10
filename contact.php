<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];

    $errors = array();
    
    if (empty($first_name)) {
        $errors[] = "First Name is required.";
    }

    if (empty($last_name)) {
        $errors[] = "Last Name is required.";
    }

    if (empty($age) || !is_numeric($age) || $age <= 0) {
        $errors[] = "Please enter a valid Age.";
    }

    if (empty($contact)) {
        $errors[] = "Contact is required.";
    }

    if (empty($address)) {
        $errors[] = "Address is required.";
    }

    if (count($errors) > 0) {
        echo "<h3>Error:</h3>";
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    } else {
        echo "<h3>Form Submitted Successfully</h3>";
        echo "<p>First Name: $first_name</p>";
        echo "<p>Last Name: $last_name</p>";
        echo "<p>Age: $age</p>";
        echo "<p>Contact: $contact</p>";
        echo "<p>Address: $address</p>";
    }
}
?>
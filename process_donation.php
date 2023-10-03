<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'e-donate');
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }

    // Prepare and bind the INSERT statement
    $stmt = $conn->prepare("INSERT INTO donations (donor_name, donor_add, donor_mess, donor_items, donor_upload, donor_option) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $donor_name, $donor_add, $donor_mess, $donor_items, $donor_upload, $donor_option);

    // Sanitize and retrieve form data
    $donor_name = $_POST['donor_name'];
    $donor_add = $_POST['donor_add'];
    $donor_mess = $_POST['donor_mess'];
    $donor_items = $_POST['donor_items'];
    $donor_upload = $_POST['donor_upload'];
    $donor_option = $_POST['donor_option'];

    // Specify the directory where uploaded files will be stored
    $uploadDir = 'uploads/';

    // Get the uploaded file's name
    $uploadedFile = $uploadDir . basename($_FILES['donor_upload']['name']);

    // Move the uploaded file to the specified directory
    move_uploaded_file($_FILES['donor_upload']['tmp_name'], $uploadedFile);

    // Proceed with database insertion
    $donor_upload = $uploadedFile;
    $execVal = $stmt->execute();

    if ($execVal) {
        // Successful insertion, check the value of donor_option and redirect accordingly
        if ($donor_option === "deliver") {
            // Redirect to a specific page for "deliver" option
            header("Location: book_donation.php");
            exit;
        } elseif ($donor_option === "direct") {
            // Redirect to a specific page for "direct" option
            header("Location: org_address.php");
            exit;
        }
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close prepared statement and database connection
    $stmt->close();
    $conn->close();
}
?>

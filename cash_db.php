<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli('localhost', 'root', '', 'e-donate');
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }

    $donor_name = $_POST['donor_name'];
    $amount = $_POST['amount'];

    $stmt = $conn->prepare("INSERT INTO cash_donations (donor_name, amount) VALUES (?, ?)");
    $stmt->bind_param("si", $donor_name, $amount);

    if ($stmt->execute()) {
        // Donation recorded successfully, redirect to another page
        header("Location: org_accountnum.php");
        exit; // Ensure that the script stops executing after the redirection
 
    } else {
        echo "Error: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
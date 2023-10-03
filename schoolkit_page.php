<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Donate Mo Na</title>
<style>

  body {
      margin: 0;
      padding: 0;
      font-family: "Helvetica", sans-serif;
      background: url('images/bg.jpg') no-repeat center center fixed;
      background-size: cover;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      min-height: 200vh;
      text-align: center;
      position: relative;
      background-color: rgba(0, 0, 0, 0.5);
      color: #333;
     
    }
  .donation {
    background-color: rgba(0, 0, 0, 0.5);
    font-family: "Century Gothic", sans-serif;
    font-size: 18px;
    font-weight: 700;
    justify-content: center;
    height: 90vh;
    position: absolute;
    top: 50%; /* Position it vertically at the center of the screen */
    left: 10%;
    transform: translate(-50%, -50%); /* Center it both vertically and horizontally */
    padding: 20px;
    border-radius: 10px;
    width: 70%;
    flex-direction: column; /* Set flex direction to column */
      align-items: center; /* Center horizontally */
      justify-content: center; 
      display: flex;
      margin: 0px;

  }

  .donation-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 90vh;
      position: fixed;
    top: 50%; /* Position it vertically at the center of the screen */
    left: 50%;
    right: 50%;
    transform: translate(-10%, -50%); /* Center it both vertically and horizontally */
    padding: 40px;
    border-radius: 10px;
    width: 80%;
    color: #ffff;
    margin: 0px;


  }

  .donation input {
      width: 100%; /* Full width */
      max-width: 450px; /* Maximum width */
      padding: 10px; /* Adjust padding for appearance */
      font-size: 12px;
      font-family: "Century Gothic", sans-serif;
  }
  .donation label {
    font-size: 16px;
  }
  .custom-input {
  width: 100%;
  max-width: 450px; /* Maximum width */
  padding: 20px; /* Adjust padding for appearance */
  font-size: 12px;
  height: auto; /* Allow the input to grow vertically as needed */
  white-space: pre-line;
  overflow-wrap: break-word; /* This property ensures that long words break */
  resize: vertical; /* Allow vertical resizing */
  font-family: "Century Gothic", sans-serif;
      
}
.donation button{
  color: #fff;
  background-color: #007bff;
  padding: 20px 40px;
  border-radius: 10px;
  font-family: "Century Gothic", sans-serif;
  font-weight: 800;
  text-decoration: none;
  cursor: pointer;
  height: 60px;
  line-height: 100px;
  margin-right: 10px;
  width: 200px; /* Set a fixed width for both buttons */
  line-height: 1;
  margin: 10px; 
}
.donation a{
  color: #fff;
  background-color: #007bff;
  padding: 20px 40px;
  border-radius: 10px;
  font-family: "Century Gothic", sans-serif;
  font-size: 12px;
  font-weight: 600;
  text-decoration: none;
  cursor: pointer;
  height: 50px;
  margin-right: 10px;
  width: 250px; /* Set a fixed width for both buttons */
  
}

.donation #backButton {
font: 1em "Arial", sans-serif;
font-size: 35px;
font-weight: 1000px;

}
#backButton {
  background-color: transparent;
  position: absolute;
    top: 0;
    left: 0;
    border: transparent;
    color: #fff;
    font-style: Times;
    font-size: 30px;
}
.custom-upload {
  font-size: 15px;
  white-space: nowrap;
  align-items: left;
}

.custom-radio-label {
  font-size: 10px; /* Adjust the font size as needed */
}

.radio-button {
  font-size: 15px;
  display: flex;
  align-items: center;
  white-space: nowrap;
  margin-bottom: 5px;
}

.radio-buttons {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  margin-right: 200px; /* Add space between radio buttons and text */
}

.radio-button input[type="radio"] {
  margin-right: 5px; /* Add space between radio button and text */
}


  

</style>
</head>
<body>

<div class="donation-container">
    <div class="donation">
    <button id="backButton">&larr;</button>

      <h1>Donor's Information</h1>
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
        <label for="username">Donor's Name:</label>
        <input type="text" name="donor_name" placeholder="Name" required ><br>
        
        <label for="address">Address:</label>
        <input type="text" name="donor_add" placeholder="Address" required><br>

        <label for="message">Message:</label>
        <textarea class="custom-input" name="donor_mess" placeholder="Any Message?" rows="4"></textarea><br>

        <label for="address">Total Items:</label>
        <input type="number" name="donor_items" placeholder="How many items would you like to donate?" required><br>
        
        
      <div class="file-upload">
        <label class="custom-upload">
          Upload Photo of donation:
        <input type="file" name="donor_upload">
        </label>
      </div>

    <div class="radio-buttons" >
          <!-- Add a radio button before the CONFIRM button -->
       <label class="radio-button" >
        <input type="radio" id="deliver" name="donor_option" value="deliver" >
        I'll book it for deliver
        </label>
        <label class="radio-button">
      <input type="radio" id="direct" name="donor_option" value="direct">
      I'll come to the organization site
      </label>
    </div>

<button type="submit" onclick="myalert()">CONFIRM</button>
<a href="index.php">CANCEL</a>

      </form>
    </div>
  </div>
  
  <script>
            
<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'e-donate');
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }

    // Prepare and bind the INSERT statement
    $stmt = $conn->prepare("INSERT INTO schoolkit_db (donor_name, donor_add, donor_mess, donor_items, donor_upload, donor_option) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $donor_name, $donor_add, $donor_mess, $donor_items, $donor_upload, $donor_option);

    // Sanitize and retrieve form data
    $donor_name = $_POST['donor_name'];
    $donor_add = $_POST['donor_add'];
    $donor_mess = $_POST['donor_mess'];
    $donor_items = $_POST['donor_items'];
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
            echo 'window.location.href = "book_donation.php";';
        } elseif ($donor_option === "direct") {
            // Redirect to a specific page for "direct" option
            echo 'window.location.href = "org_address.php";';
        }
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close prepared statement and database connection
    $stmt->close();
    $conn->close();
}
?>
</script>
</body>
</html>

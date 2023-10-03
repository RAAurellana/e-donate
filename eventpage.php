<?php
// Connect to your database here (replace with your database credentials)
$conn = new mysqli('localhost', 'root', '', 'e-donate');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve content data from the database (replace 'content_table' with your actual table name)
$query = "SELECT * FROM content_table ORDER BY upload_timestamp DESC";
$result = $conn->query($query);

// Create an array to store content data
$contentData = [];

if ($result) {
    while ($row = $result->fetch_assoc()) {
        $contentData[] = $row;
    }
} else {
    echo "Error: " . $conn->error;
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your HTML head content here -->
    <style>
        /* Add CSS styles for the timeline display */
    .navbar {
      display: flex;
      font-family: "Helvetica", sans-serif;
      justify-content: space-between;
      align-items: center;
      background-color: #333;
      color: #fff;
      padding: 10px;
      position: fixed; /* Add this line to make the navbar fixed */
      top: 0; /* Position the navbar at the top of the screen */
      width: 100%; /* Make the navbar take up the full width */
      margin-left: -20px;
      margin-top:0px;
      z-index: 1;
    }
    .nav-links {
      display: flex;
      align-items: center;
    }
    .nav-links a {
      text-decoration: none;
      color: #fff;
      margin: 0 10px;
      font-size: 15px
    }.logo {
      display: flex;
      align-items: center;
      margin-left: 10px;
    }
    
    .logo img {
      height: 50px;
      margin-right: 10px;
      font-size: 5px
    }

    .logo h2 {
    font-size: 18px;
    }
    .dropdown {
  position: relative;
  display: inline-block;
  
}

/* Style the button that will be the dropdown trigger */
.dropbtn {
  background-color: #333;
  color: white;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
  font-size: 14px;
}


/* Style the dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  
  
}

/* Style the links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  font-size: 14px;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown content when the button is hovered over */
.dropdown:hover .dropdown-content {
  display: block;
}
.donationpage-donate {
      display: flex;
      align-items: center;
      margin-right: 10px;
  }
    
    
    .donationpage-donate a {
      margin: 0 10px;
      color: #fff;
      background-color: transparent;
      padding: 8px 16px;
      border-radius: 1px;
      text-decoration: none;
      border: 1px solid #fff;
      transition: 0.3s;
      cursor: pointer;
    }
    .donatepage-donate a:hover {
    background-color: #f5fffa; /* Set the background color to white on hover */
    color: #FFFFFF; 
    }
    .floating-donate {
      position: absolute;
      top: 50%;
      left: 10%;
      right: 40%;
      transform: translate(-50%, -50%);
      background-color: #C0C0C0;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
      display: none;
    position: absolute;
    z-index: 2;
    }
    .floating-donate #donateForm {
      z-index: 2;
    }
    .floating-donate button {
      position: absolute;
      margin-left: 250px;
    }
      
    .floating-donate a {
    display: inline-block;
    padding: 15px 20px; /* Adjust padding for button size */
    background-color: #3498db;
    color: #fff;
    text-decoration: none;
    border: 2px solid #3498db; /* Add a border */
    border-radius: 8px;
    font-size: 20px; /* Adjust font size for buttons */
    width: 180px; /* Set a fixed width for all buttons */
    height: 30px;
    line-height: 1;
    margin: 10px; /* Add margin between buttons */
    text-align: center;
    
  }
  .floating-donate h1 {
    font-size: 36px; /* Adjust the font size */
    font-family: "Arial", sans-serif; /* Adjust the font family */
    color: #333; /* Adjust the font color */
  }
  .floating-donate h2 {
    font-size: 17px; /* Adjust the font size */
    font-family: "Arial", sans-serif; /* Adjust the font family */
    color: #333; /* Adjust the font color */
  }
        .timeline {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .timeline-item {
            margin: 20px;
            padding: 100px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            max-width: 600px;
            text-align: left;
        }

        .timeline-item img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
<body>
  <div class="navbar">
  
  <div class="logo">
  <img src="images\e-donate.png" alt="Logo">
  <img src="images\youthnited.png" alt="Logo">
  <h2>POLANGUI YOUTH-NITED ORGANIZATION </h2>
</div>

<div class="nav-links">
  <a href="index.php">Home</a>
  <a href="#program">Programs</a>
  <a href="eventpage.php">Events</a>
  <div class="dropdown">
    <button class="dropbtn">Package Donation &#9662;</button>
    <div class="dropdown-content">
      <a href="book_donation.php">Book Donation</a>
   
      <a href="track_donation.php">Track Donation</a>
    </div>
  </div>
  <a href="index.php #contact">Contact Us</a>
  <a href="#">About Us</a>
</div>
    <div class="donationpage-donate">
    <a id="donateButton" href="index.php #floating-donate">Donate</a>
    </div>
 
    <!-- Floating form -->
    <div id="donateForm" class="floating-donate">
    <h1>DONATIONS</h1>
    <h2>What do you want to donate?</h2>
  <form method="POST">
    
    <a href="food_page.php" class="custom-button">FOOD</a>
    <a href="clothes_page.php" class="custom-button">CLOTHES</a>
    <a href="toys_page.php" class="custom-button">TOYS</a>
    <a href="schoolkit_page.php" class="custom-button">SCHOOL KIT</a>
    <a href="cashdonation.php" class="custom-button">CASH</a>
  
    <button class="close-button" id="closeButton">&times;</button>
  </form>
  
</div>
</div>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
    
    <div class="timeline">
    <h1>Timeline</h1>
        <?php foreach ($contentData as $content): ?>
            <div class="timeline-item">
                <p><?php echo $content['text_content']; ?></p>
                <img src="admin/contents-upload/<?php echo $content['image_filename']; ?>" alt="Uploaded Image">
                <p>Uploaded on: <?php echo $content['upload_timestamp']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>

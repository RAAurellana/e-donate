<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <title>Book Donation</title>
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
      position: fixed;
      background-color: rgba(0, 0, 0, 0.5);
      color: #333;
      height: 50px;
    }
  .donation-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 80vh;
      position: fixed;
    top: 50%; /* Position it vertically at the center of the screen */
    left: 50%;
    right: 50%;
    transform: translate(-10%, -50%); /* Center it both vertically and horizontally */
    padding: 40px;
    border-radius: 10px;
    width: 80%;
    color: #ffff;
    
  }
  .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #333;
      color: #fff;
      padding: 10px;
      position: fixed; /* Add this line to make the navbar fixed */
      top: 0; /* Position the navbar at the top of the screen */
      width: 116%; /* Make the navbar take up the full width */
      margin-left: -940px;
      margin-top:-30px;
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
  .donation {
    background-color: rgba(0, 0, 0, 0.5);
    font-family: "Century Gothic", sans-serif;
    font-size: 18px;
    font-weight: 700;
    justify-content: center;
    height: 70vh;
    position: fixed ;
    top: 50%; /* Position it vertically at the center of the screen */
    left: 50%;
    bottom: 50%;
    transform: translate(-50%, -50%); /* Center it both vertically and horizontally */
    padding: 10px;
    border-radius: 10px;
    width: 80%;
    flex-direction: column; /* Set flex direction to column */
    align-items: center; /* Center horizontally */
    display: flex;
    margin-top: 30px;
    z-index: 0;
    
  }
  .donation a{
    display: inline-block;
    padding: 15px 30px; /* Adjust padding for button size */
    background-color: #333;
    color: #fff;
    text-decoration: none;
    border: 2px solid #fff; /* Add a border */
    border-radius: 8px;
    font-size: 20px; /* Adjust font size for buttons */
    width: 190px; /* Set a fixed width for all buttons */
    height: 30px;
    margin: 10px; /* Add margin between buttons */
    text-align: center;
  }
  .donation h2{
    color: #ffff;
    font-size: 20px;
  }
  .donation p{
    color: #ffff;
    font-size: 16px;
  }
  .no-margin {
  margin-top: 0;
  margin-bottom: 0;
  text-decoration: underline;
}


</style>
</head>
<body>

<div class="donation-container">
    
    <div class="navbar">
  
  <div class="logo">
  <img src="images\e-donate.png" alt="Logo">
  <img src="images\youthnited.png" alt="Logo">
  <h2>POLANGUI YOUTH-NITED ORGANIZATION </h2>
</div>

<div class="nav-links">
  <a href="index.php">Home</a>
  <a href="index.php #program">Programs</a>
  <a href="registration.php">Events</a>
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
    <a id="donateButton" href="#floating-donate">Donate</a>
    </div>
  </div>
<!-- Floating form -->
<div id="donateForm" class="floating-donate">
    <button class="close-button" id="closeButton">&times;</button>
    <h1>DONATIONS</h1>
    <h2>What do you want to donate?</h2>
    <form method="POST">
        <a href="food_page.php" class="custom-button">FOOD</a>
        <a href="clothes_page.php" class="custom-button">CLOTHES</a>
        <a href="toys_page.php" class="custom-button">TOYS</a>
        <a href="schoolkit_page.php" class="custom-button">SCHOOL KIT</a>
        <a href="cashdonation.php" class="custom-button">CASH</a>
    </form>
</div>

</div>
    
    
    <div class="donation">
    <h2 id="text">BOOK YOUR DONATION ONLINE</h2>
    <p>Please take note of the Address:</p>
      <p class="no-margin" id="myInput">Purok 1, Santol Street - Alnay, Polangui, Albay </p>
    <p>Select your courier:</p>
    <a href="https://lbconline.lbcexpress.com/booknow?" class="custom-button2">LBC Express</a> 
    <a href="https://www.jtexpress.ph/index/index/ordernew.html" class="custom-button2">J&T Express</a>
    <a href="https://www.flashexpress.ph/fle/booking" class="custom-button2">Flash Express</a>
    </div>

    <script>
    const donateForm = document.getElementById("donateForm");
    const donateButton = document.getElementById("donateButton");
    const closeButton = document.getElementById("closeButton");

    donateButton.addEventListener("click", function(e) {
        e.preventDefault(); // Prevent the default link behavior
        donateForm.style.display = "block";
    });

    closeButton.addEventListener("click", function() {
        donateForm.style.display = "none";
    });

    

</script>
</body>
</html>

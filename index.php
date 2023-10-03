<!DOCTYPE html>
<html lang="en">
<head>
  <title>E-Donate Mo Na</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- Start of Async Drift Code -->
<script>
"use strict";

!function() {
  var t = window.driftt = window.drift = window.driftt || [];
  if (!t.init) {
    if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
    t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
    t.factory = function(e) {
      return function() {
        var n = Array.prototype.slice.call(arguments);
        return n.unshift(e), t.push(n), t;
      };
    }, t.methods.forEach(function(e) {
      t[e] = t.factory(e);
    }), t.load = function(t) {
      var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
      o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
      var i = document.getElementsByTagName("script")[0];
      i.parentNode.insertBefore(o, i);
    };
  }
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('fapgridt935p');
</script>
<!-- End of Async Drift Code -->
  
  <style>
    body {
      margin: -20px;
      padding: 0;
      font-family: "Helvetica", sans-serif;
      background: url('images/bg.jpg') no-repeat center center fixed;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      min-height: 200vh;
      color: #fff;
      text-align: center;
      position: relative;
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
      width: 100%; /* Make the navbar take up the full width */
      z-index: 1000;
    }
    .logo {
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
    .nav-links {
      display: flex;
      align-items: center;
    }
    .nav-links a {
      text-decoration: none;
      color: #fff;
      margin: 0 10px;
      font-size: 15px
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
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #C0C0C0;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
      display: none;
      
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
  .close-button {
      position: absolute;
      top: 10px;
      right: 10px;
      cursor: pointer;
  }
  .background-photo {
      position: relative ;
    }
  .homepage {
    background-color: rgba(0, 0, 0, 0.5);
    font-family: "Century Gothic", sans-serif;
    font-size: 18px;
    font-weight: 700;
    justify-content: center;
    height: 100vh;
    position: absolute;
    top: 28%; /* Position it vertically at the center of the screen */
    left: 50%;
    transform: translate(-50%, -50%); /* Center it both vertically and horizontally */
    padding: 20px;
    border-radius: 0px;
    width: 97.1%;
  }
  .homepage a {
       margin: 0 10px;
      color: #fff;
      border-radius: 1px;
      font-family: "Century Gothic", sans-serif;
      font-weight: 800;
      text-decoration: none;
      cursor: pointer;
      transform: translateX(-90%);
      height: 80px;
      line-height: 100px;
      margin-right: 10px;
      width: 200px; /* Set a fixed width for both buttons */
      height: auto;
      line-height: 1; 
      background-color: transparent;
      border: 1px solid #fff;
      padding: 20px 20px;
      transition: 0.3s;
  }
  .homepage a:hover {
    background-color: #f5fffa; /* Set the background color to white on hover */
    color: #333;
  }
  .homepage h1 {
    font-family: "Brush script MT", sans-serif;
    font-size: 65px;
  }
  .contact h1{
    font-family: "Arial", sans-serif;
    font-size: 17px;
  }
  .contact{
    background-color: rgba(0, 0, 0, 0.5);
    height: 100vh;
    padding: 20px;
    justify-content: center;
    margin-left: -20px;
    margin-right: 0px;
    width: 100%
  }
.contactcontanner {
    width: 70%;
    margin: 0 auto;
    box-sizing: border-box;
    display: flex;
    align-items: center;
}
.contactcontanner .contanner {
    width: 30%;
}
.contactcontanner .contanner .heading {
    width: 100%;
    display: flex;
    align-items: center;
    border: 2px solid white;
    margin-bottom: 8px;
    box-shadow: 0px 4px 8px rgba(0,0,0,.07);
}
.heading .icon {
    padding: 0 0 0 20px;
    font-size: 20px;
    color: rgb(3, 180, 3);
}
.heading .info {
    width: 70%;
    margin: 25px auto;
    color: white;
}
.heading .info #contactinfo {
    color: rgba(255, 255, 255, 0.7);
    font-weight: 500;
}
/* message form */
.messageform {
    width: 70%;
    box-sizing: border-box;
    box-shadow: 0px 4px 8px rgba(0,0,0,.07);
    margin-left: 20px;
    background-color: rgba(0, 0, 0, 0.2);
}
.messageform .form {
    width: 80%;
    margin: 50px auto;
}
.messageform input , .messageform #inputbox {
    width: 100%;
    color: white;
    box-sizing: border-box;
    padding: 10px;
    margin-top: 10px;
    border: 2px solid white;
    outline: none;
    background-color: transparent;
}
.messageform button {
    padding: 10px 50px;
    margin-top: 20px;
    font-size: 14px;
    color: white;
    letter-spacing: 1px;
    background: linear-gradient(to right , transparent 50% , rgb(3, 180, 3) 50%);
    background-size: 200%;
    background-position: left;
    border: 2px solid white;
    cursor: pointer;
    transition: .3s;
}
.messageform button:hover {
    background-position: right;
    background-color: #f5fffa;
}
.heading .icon {
    padding: 0 0 0 20px;
    font-size: 20px;
    color: rgb(3, 180, 3);
}
.heading .info {
    width: 70%;
    margin: 25px auto;
    color: white;
}
.heading .info #contactinfo {
    color: rgba(255, 255, 255, 0.7);
    font-weight: 500;
}
.email{
  font-size: 13px;
}
.program {
    padding: 250px 0;
    position: relative;
    text-align: center;
    margin-left: -50px;
    margin-right: -20px;
    margin-top: -16px;
    display: flex;
    background-color: rgba(0, 0, 0, 0.7);

}
.program a {
    text-decoration: none; /* Remove default underline style for links */
    color: inherit; /* Inherit color from parent */
    display: block; /* Make links block-level elements */
    margin-top: 0px;
    margin-left: 350px; /* Add space between image and text */
  
}
.program a:hover {
background-color: #5F5F5F;
}
#program img {
    width: 241px;
    height: 180px;
    display: block; /* To remove any spacing issues */
    margin-top: 20px;
    margin-left: -21px;
    background-color: #ffff;      
}
.image #image-feeding{
  height: 100px;
}
.feeding{
  margin-top: -150px;
  height: 50px;
}
.literacy{
  margin-top: -150px;
  margin-left: -250px;
}
.clean-green{
  margin-top: -150px;
  margin-left: -250px;
  font-size: 16px;
}
.program-info{
  position: absolute;
  transform: translate(20%, -30%); /* Center it both vertically and horizontally */ 
  margin-top: 220px;
  margin-left: -30px;
  font-size: 16px;
  justify-content: left;
  left: -10%;
  text-align: left;
}
/* Style the dropdown container */
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
  z-index: 1;
  
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

  </style>
</head>

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
  <a href="#contact">Contact Us</a>
  <a href="#about-us">About Us</a>
</div>
    <div class="donationpage-donate">
    <a id="donateButton" href="#floating-donate">Donate</a>
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


  <!-- JavaScript to toggle the floating donate form -->
  <script>
   // JavaScript to toggle the floating forms
const donateButton = document.getElementById("donateButton");
const donateButton2 = document.getElementById("donateButton");
const cashFormLink = document.getElementById("cashForm"); // Add this line
const donateForm = document.getElementById("donateForm");
const donateForm2 = document.getElementById("donateForm2");
const closeButton = document.getElementById("closeButton");

donateButton.addEventListener("click", function() {
  donateForm.style.display = "block";
});

donateButton2.addEventListener("click", function() {
  donateForm2.style.display = "block";
});

cashFormLink.addEventListener("click", function(event) {
  event.preventDefault();
 
});

closeButton.addEventListener("click", function() {
  donateForm.style.display = "none";
});

function showFloatingForm() {
      const donateForm = document.getElementById("donateForm");
      donateForm.style.display = "block";
}

</script>

 <!-- Text to be displayed over the background and overlay -->
 <div class = "homepage">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <h1>Let us be Youth-nited  </h1>
    <p>Helping the youth to uplift themselves and make their lives meaningful </p>
    <p> and worth living for.</p>
    <p>&nbsp;</p>
    <a id="donateButton2" href="#donateForm" onclick="showFloatingForm()">DONATE NOW</a>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    
    <!-- Program form here -->
  <div class="program" id="program">
    <div class="feeding">
        <a class="image" href="your-image-link-here">
            <img id="img-feeding" src="images/Feeding.jpg" alt="Feeding Program">
        </a>
        <a href="your-text-link-here" >Feeding Program</a>
    </div>
    <div class="literacy">
        <a href="your-image-link-here">
            <img src="images/LiteracyP.jpg" alt="Literacy Program">
        </a>
        <a href="your-text-link-here" >Literacy Program</a>
    </div>
    <div class="clean-green">
        <a href="your-image-link-here">
            <img src="images/CleanGreen.jpg" alt="Clean & Green Program">
        </a>
        <a href="your-text-link-here" >Clean & Green Program</a>
    </div>
      <div class="program-info">
          <p>Feeding Program <br>
          Polangui Youth-Nited Organization promotes food security among the population's nutritionally vulnerable groups, particularly the underprivileged pre- and primary-school<br>
           pupils and those at risk of malnutrition and other related nutritional deficiencies.<br></p>
          <p>Literacy Program <br>
          Polangui Youth- Nited encourages at-risk students to read and pursue academic learning while combating low literacy rates.<br></p>
          <p>Clean and Green Program<br>
          Polangui Youth-Nited aims to foster an ecologically conscious lifestyle within the community,  this initiative strives to conserve and care for the environment.<br> </p>
      </div>
</div>



    <!-- Add the contact form here -->
    <div class="contact" id="contact">
        <h1>CONTACT ME</h1>
        
        <div class="contactcontanner">
            
            <div class="contanner">
                <div class="heading">
                    <div class="icon"><i class="far fa-map"></i></div>
                    <div class="info">
                        <p>Address : </p>
                        <p id="contactinfo">Purok 1, Santol Street - Alnay, Polangui, Albay, Philippines, 4506</p>
                    </div>
                </div>
                
                <div class="heading">
                    <div class="icon"><i class="fas fa-phone-alt"></i></div>
                    <div class="info">
                        <p>Phone : </p>
                        <p id="contactinfo">+639307032288</p>
                    </div>
                </div>
                
                <div class="heading">
                    <div class="icon"><i class="far fa-envelope"></i></div>
                    <div class="info">
                        <p>Email : </p>
                        <p class=email id="contactinfo">polanguiyouthnited@gmail.com</p>
                    </div>
                </div>
            </div>
            
            <div class="messageform">
                <div class="form">
                    <form action="" method="POST">
                        
                        <style>
                            ::placeholder {color: rgba(255, 255, 255, 0.7);}
                        </style>
    
                        <input type="text" name="name" placeholder="NAME" required>
                        <input type="email" name="email" placeholder="EMAIL" required>
                        <input type="text" name="subject" placeholder="SUBJECT" required>
                        <textarea type="message" name="message" id="inputbox"  cols="30" rows="5" placeholder="MESSAGE" required></textarea>
                        <button type="submit">SEND MESSAGE</button>
    
                    </form>
                </div>
            </div>
        </div> 
                 
    </div>
    <style>

        
        .about-us {
          background-color: rgba(0, 0, 0, 0.5);
            max-width: 1700px;
            height: 500px;
            padding: 50px;
            margin: -18px;
            margin-top:0px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            font-size: 24px;
        }
        .about-us section {
          margin-left: 170px;
          margin-right: 170px;
        }

    
    </style>

  <div class = "about-us" id="about-us">
        <h1>About Us</h1>
    </header>
        <section id="mission">
            <h2>Mission</h2>
            <p>
                Our mission is to assist and help potential individuals and mold their talents and skills            </p>
        </section>

        <section id="vision">
            <h2>Vision</h2>
            <p>
                An organization that is dedicated towards the youth, to uplift and make their life meaningful and worth living for.            </p>
        </section>
    </div>
  </div>
  

  </div>

</div>

</div>


</body>
</html>

 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
    font-size: 15px;
    font-weight: 700;
    justify-content: center;
    height: 90vh;
    position: absolute;
    top: 50%; /* Position it vertically at the center of the screen */
    left: 10%;
    transform: translate(-50%, -50%); /* Center it both vertically and horizontally */
    padding: 20px;
    border-radius: 10px;
    width: 90%;
    flex-direction: column; /* Set flex direction to column */
      align-items: center; /* Center horizontally */
      justify-content: center; 
      display: flex;
      margin-top:0px;
      

  }
  .donation-container {
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    top: 50%; /* Position it vertically at the center of the screen */
    left: 50%;
    right: 50%;
    transform: translate(-10%, -50%); /* Center it both vertically and horizontally */
    padding: 40px;
    border-radius: 7px;
    width: 40%;
    color: #ffff;
      
  }
  .donation-form #main-text{
    margin-top: 10px;
    margin-left: 60px;
  }

  .donation input {
    margin: 15%;
      width: 100%; /* Full width */
      max-width: 300px; /* Maximum width */
      padding: 10px; /* Adjust padding for appearance */
      font-size: 16px;
      margin-right: 70px;
  }
  .custom-input {
    width: 100%; /* Full width */
      max-width: 400px; /* Maximum width */
      padding: 20px; /* Adjust padding for appearance */
      font-size: 16px;
      height: 60px;
}

.donation-form label {
  display: block;
  margin-bottom: 10px;
  margin-top: 0px;
  margin-left: 50px;
}
.donation-form{
  margin-left: -40px;
}

.donation-form select,
.donation-form input[type="number"] {
  width: 70%;
  padding: 10px;
  margin-bottom: 15px;
  margin-top: 5px;
}
.donation-form #donor_name {
margin-bottom: 70px;
}
.donation-form #donation-amount{
  width:320px;
  margin-top: 0px;
  margin-left: 20px;
  margin-bottom: 30px;
}
.donation-form #custom-amount{
  width:320px;
  margin-right: 70px;
  margin-top: 0px;
  }

.donation-form button {
  background-color: #007bff;
  color: #fff;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  border-radius: 10px;
  margin: 10px;
  width: 130px;
  font-size: 16px;
   margin-left: 50px;
}
.donation-form button:hover {
  color: #fff;
}
.donation-form #username {
  margin-bottom: -55px;
  margin-top: 30px;
}
.donation-form .amount{
margin-top: -50px;
}

</style>
</head>
<body>

<div class="donation-container">
    <div class="donation">
    
    <div class="donation-form">
      <h2 id="main-text">Make a Donation</h2>
      <form action="cash_db.php" method="post">
          <label id="username" for="username">Donor's Name:</label>
          <input id ="donor_name" type="text" name="donor_name" placeholder="Name"  ><br>
          <label class="amount" for="donation-amount">Select an Amount:</label>
          <div required>
            <select id="donation-amount" name="amount">
              <option value="0">₱0</option>
              <option value="50">₱50</option>
              <option value="100">₱100</option>
              <option value="200">₱200</option>
              <option value="300">₱300</option>
              <option value="500">₱500</option>
              <option value="1000">₱1000</option>
            </select>
          </div>
          <label for="custom-amount">Or Enter a Custom Amount:</label>
          <input type="number" id="custom-amount" name="amount" placeholder="Custom Amount" step="10">
          <button href="" type="submit">Donate</button>
          <button  onclick="goBack()">Cancel</button>
      </form>
  </div>
  <script>
        function goBack() {
            window.history.back();
        }
        
    </script>
</body>
</html>
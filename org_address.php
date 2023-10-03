<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
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
    height: 80vh;
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

  .donation input {
      width: 100%; /* Full width */
      max-width: 300px; /* Maximum width */
      padding: 10px; /* Adjust padding for appearance */
      font-size: 16px;
  }
  .custom-input {
    width: 100%; /* Full width */
      max-width: 400px; /* Maximum width */
      padding: 20px; /* Adjust padding for appearance */
      font-size: 16px;
      height: 60px;
}
.donation button{
  margin: 0 10px;
      color: #333;
      background-color: #fff;
      padding: 20px 40px;
      border-radius: 10px;
      font-family: "Century Gothic", sans-serif;
      font-weight: 800;
      text-decoration: none;
      cursor: pointer;
      transform: translateX(-90%)
      height: 80px;
      line-height: 100px;
      margin-right: 10px;
      width: 200px; /* Set a fixed width for both buttons */
  height: auto;
  line-height: 1;
  margin: 10px; 
}
.donation p{
  font-size: 30px;
}

  

</style>
</head>
<body>

<div class="donation-container">
    <div class="donation">
    
      <h1>ORGANIZATION DETAILS</h1>
      <label for="username">Where to deliver ?</label>
      <p>Purok 1, Santol Street - Alnay, Polangui, Albay</p>
      
      <label for="accountNumber">SEC. Reg. No.:2022070060022-13</label>
      <p>Region V (Bicol Region), 4506.</p>
    
      
      <button id="okButton">OK</button>
    </div>
  </div>

<script>
  // Get a reference to the "OK" button
  
  const okButton = document.getElementById("okButton");

  

  okButton.addEventListener("click", function() {
    // Redirect to the index.php page
    window.location.href = "index.php";
  });
</script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
    height: 90vh;
    position: absolute;
    top: 50%; /* Position it vertically at the center of the screen */
    left: 10%;
    transform: translate(-50%, -50%); /* Center it both vertically and horizontally */
    padding: 20px;
    border-radius: 10px;
    width: 65%;
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
.donation button{
  margin: 0 10px;
  background-color: #007bff;
  color: #fff;
      padding: 20px 40px;
      border-radius: 10px;
      font-family: "Century Gothic", sans-serif;
      font-weight: 800;
      text-decoration: none;
      cursor: pointer;
      transform: translateX(-90%)
      line-height: 100px;
      margin-right: 10px;
      width: 200px; /* Set a fixed width for both buttons */
  height: auto;
  line-height: 1;
  margin: 10px; 
}
.gcash{
   margin-top: 40px;
   margin-bottom: 20px;
}
.gcash #myInput {
  width: 200px;
  height: 40px;
  margin-top: 0px;
  margin-bottom: 0px;
  font-size: 20px;
  font-weight: bold;
  margin-left: 10px;
}
.gcash span{
  height: 40px;
  margin-right: 0px;
  width: 5px;
}
.far {
 margin-left: 5px; 
}
.donation h1{
  margin-bottom: 40px;
  margin-top: -40px; 
}
.donation p{
  font-size: 25px;
  margin-bottom: 45px;
}
.donation label{
    margin-bottom: 0px; 
    margin-top: 10px;
}
.gcash{
    margin-top: 10px;  
}
.gcash #text{
    font-size: 14px; 
}

</style>
</head>
<body>

<div class="donation-container">
    <div class="donation">
    
      <h1>ACCOUNT DETAILS</h1>
      <label for="org_name">ACCOUNT NAME:</label>
      <p>POLANGUI YOUTH-NITED ORGANIZATION</p>
      <label for="org_num">GCash Number:</label>
      <div class= "gcash"><input type="text" value="09123456789" id="myInput">
            <span onclick="copyText()">
               <i class="far fa-clipboard"></i>
            </span> <br>
            <label id="text" for="text">Please copy the account number before confirming *</label>
      </div>

      <button id="okButton">OK</button>
    </div>
  </div>

<script>
  // Get a reference to the "OK" button
  
  const okButton = document.getElementById("okButton");

  okButton.addEventListener("click", function() {
    // Redirect to the index.php page
    window.location.href = "https://m.gcash.com/gcash-login-web/index.html#/";
  });

  function copyText() {
            /* Get the text field */
            var copyText = document.getElementById("myInput");

            /* Select the text field */
            copyText.select();
            copyText.setSelectionRange(0, 99999); /* For mobile devices */

            /* Copy the text inside the text field to the clipboard */
            document.execCommand("copy");

            /* Alert the copied text */
            alert("Copied the text: " + copyText.value);
        }
</script>

</body>
</html>

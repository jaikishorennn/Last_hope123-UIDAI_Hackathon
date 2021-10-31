<!DOCTYPE html>
<html>
  <head>
    <title>Firebase Phone Verification</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="main.css" rel="stylesheet">
  </head>
  <body>
    <form action="verification.php">
      <h2>LANDLORD <span>MOBILE NUMBER</span> VERIFICATION</h1>
      <div class="formcontainer">
      <hr/>
      <div class="container">
      <label><strong>LANDLORD Name:</strong></label>
      <input id="name" name="name" placeholder='Your Name' type='text'>
      <label> <strong>Landlord Address:</strong></label>
       <input id="address" name="address" placeholder='Enter landlord address' type='text' value="">
      <label><strong>Phone number:</strong></label>
      <input id="number" name="number" placeholder='Enter phone number' type='text'>
</div>
<div class="container">
      
      <label for="uname"><strong>AADHAAR NUMBER</strong></label>
        <input type="number" id="number" placeholder="Valid aadhar number" name="uname" required>
      </div>
      <div id="recaptcha-container"></div>
      
      <button type="button" onclick="phoneAuth();">Send Otp</button>
      <div class="formcontainer">
      
      <hr/>
      <div class="container">
      <input type="text" id="verificationCode" placeholder="Enter verification code">
      
      </div>
      <button type="button" onclick="codeverify();">Verify code</button>
    
    </form>
    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase.js"></script>
    <script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
    appId: "1:99446038979:web:6876f093329352b3c71d76",
    apiKey: "AIzaSyDqoyvnqM44fvu4Gvlfc_Dj1Di2VztJxK4",
    authDomain: "phone-auth-76a5e.firebaseapp.com",
    projectId: "phone-auth-76a5e",
    storageBucket: "phone-auth-76a5e.appspot.com",
    messagingSenderId: "99446038979",
    measurementId: "G-CCJ2B0YHR3"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
     firebase.analytics();
</script>
    <script src="sec.js" type="text/javascript"></script>
  </body>
</html>
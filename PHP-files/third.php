<html>

<head>

<title>AddressUpdateControl</title>

<link rel="stylesheet" href="cssFile.css">

</head>

<body>
<style>
            body{
                background-color: whitesmoke;
            }
            input{
                width: 40%;
                height: 5%;
                border: 1px;
                border-radius: 05px;
                padding: 8px 15px 8px 15px;
                margin: 10px 0px 15px 0px;
                box-shadow: 1px 1px 2px 1px grey;
            }
            
        </style>
    


<div id="login-box">
	<div>
        <center>
		<h1>AADHAAR ADDRESS UPDATE</h1>
		<input type="number" id="Aadhaar_number" name="Aadhaar_number" placeholder="Aadhaar number"/><br>
		<input type="text" id="Name" name="Name" placeholder="Name" /><br>
		<input type="number" id="Phonenumber" name="Phonenumber" placeholder="Phonenumber" /> <br>
		<input type="text" id="Address" name="Address" placeholder="Address" /><br>

		<input type="submit" id="saveData" name="signup_submit" value="Update Address" />
</center>
	</div>


</div>

</body>
<script type="module">
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/9.2.0/firebase-app.js";
    import {getDatabase, ref, set } from "https://www.gstatic.com/firebasejs/9.2.0/firebase-database.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries
  
    // Your web app's Firebase configuration
    const firebaseConfig = {
      apiKey: "AIzaSyAYf8Aq6wYtfa8jmL6Rixgmvjzl8taOVZg",
      authDomain: "attempt-c31c2.firebaseapp.com",
      databaseURL: "https://attempt-c31c2-default-rtdb.firebaseio.com",
      projectId: "attempt-c31c2",
      storageBucket: "attempt-c31c2.appspot.com",
      messagingSenderId: "135928485530",
      appId: "1:135928485530:web:d9f75a37466bb1a9643123"
    };
  
    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const database = getDatabase(app);

    saveData.addEventListener('click',(e) => {
        var Aadhaar_number = document.getElementById('Aadhaar_number').value;
        var Name = document.getElementById('Name').value;
        var Phonenumber = document.getElementById('Phonenumber').value;
        var Address = document.getElementById('Address').value;
        
        set(ref(database, 'user/' + Aadhaar_number),{
            Aadhaar_number: Aadhaar_number,
            Name: Name,
            Phonenumber :Phonenumber,
            Address :Address
        });
        

        alert('Address Updated');
       
    });
  </script>

</html>
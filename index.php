<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>OTP Verification</title>
  </head>
  <body>
    
        
            <div class="jumbotron" style="background-color: black;">
<center style="color: white;"><h4>Mobile Number Verification</h4></center>
<br>
<h6 style="color: red;">* Write Mobile Number In the form of +(Country code)Mobile Number</h6>
<h6 style="color: red;">* For Example For India User write Like +917991052312</h6>
<br>
        <form>
            <div class="form-group">
              <label for="exampleFormControlInput1" style="color: white;">Mobile Number For Verification</label>
              <input type="email" class="form-control"  id="number" placeholder="+917991072342">
              <br>
              
              <div id="recaptcha-container" ></div>
              <br>
              <button type="button" class="btn btn-success btn-lg btn-block" onclick="phoneAuth();">Send OTP</button>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1" style="color: white;">Enter Your Code Here</label>
                <input type="email" class="form-control" id="verificationCode">
                <br>
               
                <br>
                <button type="button" class="btn btn-success btn-lg btn-block" onclick="codeverify();">Verify OTP</button>
              </div>
</form>
        </div>
        </div>
        
    
    <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->

<script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyD4vUiQgZJSjjZ_u0OL0dTgEezJXD6UYoo",
        authDomain: "resumebuild-cfadb.firebaseapp.com",
        databaseURL: "https://resumebuild-cfadb.firebaseio.com",
        projectId: "resumebuild-cfadb",
        storageBucket: "resumebuild-cfadb.appspot.com",
        messagingSenderId: "661623934481",
        appId: "1:661623934481:web:3320538ec6e3074aa1ebb0"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
</script>
<script src="NumberAuthentication.js" type="text/javascript"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
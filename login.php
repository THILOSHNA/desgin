<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/hstyle.css">
   

</head>
<body>

<header class="header">     

   <input type="checkbox" name="" id="toggler">
   <label for="toggler" class="fas fa-bars"></label>
     <a href="#" class="logo" ><img src="images/title.png"  style=" width: 90px; height: 70px;" alt=" "><span>SRI VIDYA VEDIK</span></a>
     <nav class="navbar">
       <a href="home.html">home</a>
       <a href="about.html">about</a>
       <a href="courses.html">courses</a>
       <!-- <a href="teachers.html" id="teachers"><button><span>Teachers</span></button></a> -->
       <a href="contact.html">contact</a>
     </nav>
     
</header>   








<div class="containers" id="signup" style="display:none;">
        <h1 class="form-title">Register</h1>
        <form method="post" action="register.php">
          <div class="input-group">
             <i class="fas fa-user"></i>
             <input type="text" name="fName" id="fName" placeholder="First Name" required>
             <label for="fname">First Name</label>
          </div>
          <div class="input-group">
              <i class="fas fa-user"></i>
              <input type="text" name="lName" id="lName" placeholder="Last Name" required>
              <label for="lName">Last Name</label>
          </div>
          <div class="input-group">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email" required>
              <label for="email">Email</label>
          </div>
          <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" required>
              <label for="password">Password</label>
          </div>
         <input type="submit" class="btn" value="Sign Up" name="signUp">
        </form>
        <p class="or">
          ----------or--------
        </p>
        <!-- <div class="icons">
          <i class="fab fa-google"></i>
          <i class="fab fa-facebook"></i>
        </div> -->
        <div class="links">
          <p>Already Have Account ?</p>
          <button id="signInButton">Sign In</button>
        </div>
</div>
  
      <div class="containers" id="signIn">
          <h1 class="form-title">Sign In</h1>
          <form method="post" action="register.php">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <p class="recover">
              <a href="#">Recover Password</a>
            </p>
           <input type="submit" class="btn" value="Sign In" name="signIn">
          </form>
          <p class="or">
            ----------or--------
          </p>
          <!-- <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
          </div> -->
          <div class="links">
            <p>Don't have account yet?</p>
            <button id="signUpButton">Sign Up</button>
          </div>
      </div>
        <script src="js/regscript.js"></script>

   
</body>
</html>
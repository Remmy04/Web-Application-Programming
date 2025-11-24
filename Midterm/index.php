<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
      /* Background styling */
      body {
        height: 100vh;
        background-color: #f2f2f2;
        background-image: url("Images/background_1.png");
        background-size: cover;
        margin: 0;
        overflow: hidden;
        font-family: 'Poppins', sans-serif;
      }

      /* Falling leaves container */
      .leaves-container {
        position: fixed;
        width: 100%;
        height: 100vh;
        top: 0;
        left: 0;
        overflow: hidden;
        pointer-events: none;
      }

      /* Leaf styling */
      .leaf {
        position: absolute;
        width: 30px;
        height: 30px;
        animation: falling 8s ease-in-out infinite;
      }

      /* Falling animation */
      @keyframes falling {
        0% { transform: translateY(-10%); }
        100% { transform: translateY(100vh); }
      }

      /* Position each leaf at different locations and delays */
      .leaf:nth-child(1) { left: 5%; top: -5%; animation-delay: 0.5s; }
      .leaf:nth-child(2) { left: 25%; top: -10%; animation-delay: 2s; }
      .leaf:nth-child(3) { left: 45%; top: -15%; animation-delay: 3.5s; }
      .leaf:nth-child(4) { left: 65%; top: -20%; animation-delay: 1s; }
      .leaf:nth-child(5) { left: 85%; top: -25%; animation-delay: 2.5s; }
      .leaf:nth-child(6) { left: 95%; top: -15%; animation-delay: 2.5s; }
      .leaf:nth-child(7) { left: 55%; top: -15%; animation-delay: 1.5s; }
      .leaf:nth-child(8) { left: 20%; top: -15%; animation-delay: 1.0s; }
    </style>
</head>
<body>
    <!-- Falling leaves container -->
    <div class="leaves-container">
      <div class="leaf"><img src="Images/leave2.png" alt="Leaf"></div>
      <div class="leaf"><img src="Images/leave2.png" alt="Leaf"></div>
      <div class="leaf"><img src="Images/leave2.png" alt="Leaf"></div>
      <div class="leaf"><img src="Images/leave2.png" alt="Leaf"></div>
      <div class="leaf"><img src="Images/leave1.png" alt="Leaf"></div>
      <div class="leaf"><img src="Images/leave1.png" alt="Leaf"></div>
      <div class="leaf"><img src="Images/leave1.png" alt="Leaf"></div>
      <div class="leaf"><img src="Images/leave1.png" alt="Leaf"></div>
      <div class="leaf"><img src="Images/leave1.png" alt="Leaf"></div>
    </div>

    <!-- Register Form -->
    <div class="container" id="signup" style="display:none;">
      <h1 class="form-title">Register</h1>
      <form method="post" action="register.php">
        <div class="input-group">
           <i class="fas fa-user"></i>
           <input type="text" name="firstName" id="firstName" placeholder="First Name" required>
           <label for="firstName">First Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lastName" id="lastName" placeholder="Last Name" required>
            <label for="lastName">Last Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="phoneNumber" name="phoneNumber" id="phoneNumber" placeholder="Phone Number" required>
            <label for="phoneNumber">Phone Number</label>
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
      <p class="or">----------or----------</p>
      <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
      </div>
      <div class="links">
        <p>Already Have Account?</p>
        <button id="signInButton">Sign In</button>
      </div>
    </div>

    <!-- Sign In Form -->
    <div class="container" id="signIn">
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
        <p class="or">----------or----------</p>
        <div class="icons">
          <i class="fab fa-google"></i>
          <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
          <p>Don't have an account yet?</p>
          <button id="signUpButton">Sign Up</button>
        </div>
      </div>
      
      <script src="script.js"></script>
</body>
</html>
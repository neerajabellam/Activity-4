<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
    <link rel="stylesheet" href="styles.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
</head>
<body style="
      background-image: url('smoke1.jpg');
      background-repeat: no-repeat;
      background-size: 100% 140%;
    ">
    <h1 style="color: wheat;" class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1>
    <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
      <div class="card p-4">
        <div
          class="image d-flex flex-column justify-content-center align-items-center"
        >
          <button class="btn btn-secondary">
            <img src="smoke.jpg" height="100" width="100" />
          </button>
          <span class="name mt-3"><?php echo htmlspecialchars($_SESSION["username"]); ?></span>
          <span class="idd">@<?php echo htmlspecialchars($_SESSION["username"]); ?></span>
          <div
            class="d-flex flex-row justify-content-center align-items-center gap-2"
          >
            <span class="idd1"><?php echo htmlspecialchars($_SESSION["username"]); ?></span>
            <span><i class="fa fa-copy"></i></span>
          </div>
          <div
            class="d-flex flex-row justify-content-center align-items-center mt-3"
          >
            <span class="number"
              >100 <span class="follow">Followers</span></span
            >
            <span class="number"
              >&emsp; &emsp; 200 <span class="follow">Following</span></span
            >
          </div>
          <div class="d-flex mt-2">
            <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
          </div>
          <div class="text mt-3">
            <span
              >Front End Developer <br />
              Works at icrewsystems LLP since 2021
            </span>
          </div>
          <div
            class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"
          >
            <span><i class="fa fa-twitter"></i></span>
            <span><i class="fa fa-facebook-f"></i></span>
            <span><i class="fa fa-instagram"></i></span>
            <span><i class="fa fa-linkedin"></i></span>
          </div>
          <div class="px-2 rounded mt-4 date">
            <span class="join">joined Dec 2021</span><br><br>
            <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
          </div>
        </div>
      </div>
    </div>
    
</body>
</html>
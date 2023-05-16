<?php
  ob_start();
  session_start();

  if (isset($_SESSION["username"])) {
    header("Location: FAFGiveaway.php");
    exit();
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $username = $_POST["username"];
      $password = $_POST["password"];

      $found = false;
      $file = fopen("login1.txt", "r") or die("Unable to open file!");

      while (!feof($file)) {
          $line = fgets($file);
          list($stored_username, $stored_password) = explode(':', trim($line));
          if ($username === $stored_username && $password === $stored_password) {
              $found = true;
              break;
          }
      }

      fclose($file);

      if ($found) {
          $_SESSION["username"] = $username;
          header("Location: FAFGiveaway.php");
          exit();
      } else {
          echo '<script> alert("Invalid username or password. Please try again.");</script>';
      }
  }

  ob_end_flush();
?>

<!DOCTYPE html>
<html lang = "en">
  <head>
    <title>Find-a-Friend</title>
    <link rel="stylesheet" href="FindAFriend.css">
    <script>
      window.onload = function() {
        setInterval(function() {
        getCurrentDate()
        }, 1000);
      }
    </script>
    <meta charset="UTF-8">
  </head>
  <body>
    <?php 
      include 'Header.php';
    ?>
    <nav id="Menu">
      <ul>
        <li><a href="FAFHome.php">Home</a></li>
        <li><a href="CreateAccount.php">Create an Account</a></li>
        <li><a href="FAFFindPet.php">Find A Dog/Cat</a></li>
        <li><a href="FAFDogCare.php">Dog Care</a></li>
        <li><a href="FAFCatCare.php">Cat Care</a></li>
        <li><a href="FAFGiveaway.php">Have A Pet To Give Away?</a></li>
        <li><a href="FAFContactUs.php">Contact Us!</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
      </nav>
      <img src="https://static.vecteezy.com/system/resources/previews/005/424/878/original/default-avatar-profile-account-username-display-picture-with-add-icon-free-vector.jpg" alt="Home.logo" style= "width:20%; height:20%">
      <!--image source: https://www.google.ca/url?sa=i&url=https%3A%2F%2Fwww.vecteezy.com%2Ffree-vector%2Faccount-icon&psig=AOvVaw14mbS2_4-BmzgU7ygAGX-T&ust=1681447899674000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCKjlnNiHpv4CFQAAAAAdAAAAABAE-->
    
    <main id="Content">
      <div>
        <p>LOGIN</p>
        <fieldset>
          <legend><b>Login here before creating a new entry for a pet to giveaway</b></legend>
          <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="username">Username:</label>
            <input type="text" name="username" required>
            <br><br>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
            <br><br>
            <input type="submit" value="Login">
            <a href="CreateAccount.php">Don't have an account yet? Create one here.</a>
          </form>
        </fieldset>
      </div>
      
    </main>
    <?php 
      include 'Footer.php';
    ?>
    <script src="FindAFriend.js"></script>
  </body>
</html>
<?php
  ob_start();
  session_start();
  $fileName = "login1.txt";
  $filePath = realpath($fileName);
  function validate_input($username, $password) {
    if (!ctype_alnum($username)) {
      return "Username can only contain letters and digits.";
    }
        
    if (!ctype_alnum($password) || strlen($password) < 4 || !preg_match('/[a-zA-Z]/', $password) || !preg_match('/\d/', $password)) {
      return "Password must be at least 4 characters long and contain at least one letter and one digit.";
    }
        
    return "";
  }
        
        function check_username($username, $filePath) {
            $file = fopen($filePath, "r");

            while (!feof($file)) {
              $line = trim(fgets($file));
              if ($line == "") {
                continue;
              }
              $parts = explode(":", $line);
              if ($parts[0] == $username) {
                return true;
              }
            }
        
          fclose($file);
          return false;
        }
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $username = trim($_POST['username']);
          $password = trim($_POST['password']);
      
          $error = validate_input($username, $password);
      
          if ($error != "") {
            echo '<script>alert("' . $error . '");</script>';
          } else if (check_username($username, $filePath)) {
              echo '<script> alert("Username already in use. Please choose a different username.");</script>';  
          } else {
            $file = fopen($filePath, "a");
              if ($file === false) {
                  echo '<script> alert("Failed to open file");</script>';
              }

              if (fwrite($file, "$username:$password\n") === false) {
                  echo '<script> alert("Failed to write to file");</script>';
              }

              if (fclose($file) === false) {
                  echo '<script> alert("Failed to close file");</script>';
              }

              echo '<script> alert("Account created successfully. You can now log in."); window.location.href = "FAFHome.php";</script>';
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
        <li><a href="login.php">Have A Pet To Give Away?</a></li>
        <li><a href="FAFContactUs.php">Contact Us!</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
      </nav>
      <img src="https://static.vecteezy.com/system/resources/previews/005/424/878/original/default-avatar-profile-account-username-display-picture-with-add-icon-free-vector.jpg" alt="Home.logo" style= "width:20%; height:20%">
      <!--image source: https://www.google.ca/url?sa=i&url=https%3A%2F%2Fwww.vecteezy.com%2Ffree-vector%2Faccount-icon&psig=AOvVaw14mbS2_4-BmzgU7ygAGX-T&ust=1681447899674000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCKjlnNiHpv4CFQAAAAAdAAAAABAE-->
    
    <main id="Content">
      <div>
        <p>CREATE AN ACCOUNT</p>
        <fieldset>
          <legend><b>Create a free account here in order to access more features!</b></legend>
          <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="username">Username:</label>
            <input type="text" name="username" required>
            <br>
            <ul>
              <li>A username can contain letters (both upper and lower case) and digits only</li>
            </ul>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
            <br>
            <ul>
              <li>A password must be at least 4 characters long (characters are to be letters and digits only), and have at least one letter and at least one digit.</li>
            </ul>
            <input type="submit" value="Create Account">
            <a href="login.php">Already have an account? Login here.</a>
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
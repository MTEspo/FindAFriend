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
      <img src="https://img.freepik.com/free-vector/doghouse-cartoon-style_1308-116981.jpg" alt="Home.logo" style= "width:20%; height:20%">
      <!--image source: https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.freepik.com%2Ffree-photos-vectors%2Fdog-house&psig=AOvVaw2_YAkiCoAEnW8EfNuI_Qg-&ust=1675586929827000&source=images&cd=vfe&ved=0CAwQjRxqFwoTCLjYpe-9-_wCFQAAAAAdAAAAABAE-->
    
    <main id="Content">
      Any information given and stored on this website by the user follows
      our privacy policy and will not be shared or sold with anyone. All data
      is protected and secure.
    </main>
    <?php 
      include 'Footer.php';
    ?>
    <script src="FindAFriend.js"></script>
  </body>
</html>
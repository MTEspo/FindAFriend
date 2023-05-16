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
      <img src="https://media.istockphoto.com/id/839178340/vector/cartoon-character-jack-russell-terrier-dog-and-smartphone.jpg?s=612x612&w=0&k=20&c=CSRtTccTiRcnds_iE3SsSddgs6qYvDVyo404zvi5pkw=" alt="Contact.logo" style= "width:20%; height:20%">
      <!--image source: https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.istockphoto.com%2Fillustrations%2Fdog-phone&psig=AOvVaw0_TGE2OZs-Fk7aqHVSX5Mn&ust=1675837562405000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCPDP4sbjgv0CFQAAAAAdAAAAABAE-->
    
    <main id="Content">
      <h2><b><u>Contact Us</u><br></b></h2>
      <p>You can contact our manager, Mario Thomas Esposito (40205337) by:</p>
      <ul>
        <li><i>Phone:</i>&ensp;514-848-2424</li>
        <li><i>Email:</i>&ensp;mariothomasesposito@gmail.com</li>
      </ul>
    </main>
    <?php 
      include 'Footer.php';
    ?>
    <script src="FindAFriend.js"></script>
  </body>
</html>
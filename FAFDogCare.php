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
      <img src="https://media.istockphoto.com/id/531544854/vector/dog-icons-flat-set-with-dung-kennel-leash-food-bowl.jpg?s=612x612&w=0&k=20&c=ZAja8_SYTGbLycRR5IpKVsG8jNIvtA11NvuczXfOKMs=" alt="DogC.logo" style= "width:20%; height:20%">
      <!--image source: https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.istockphoto.com%2Fillustrations%2Fpet-care&psig=AOvVaw3Xky4g_YeiOB2NGzEQE7W7&ust=1675833877969000&source=images&cd=vfe&ved=0CA8QjRxqFwoTCJj3runVgv0CFQAAAAAdAAAAABAE-->
    
    <main id="Content">
      
      <div id="First">
        <a href="https://www.aspca.org/pet-care/dog-care/general-dog-care">
          <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/labrador-puppy-royalty-free-image-1626252338.jpg?crop=0.667xw:1.00xh;0.173xw,0&resize=640:*" alt="DogCa.logo" style= "width:100%; height:100%"><br>
          <!--image source: https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.countryliving.com%2Fuk%2Fwildlife%2Fdog-breeds%2Fa37019720%2Flabrador-retrievers-higher-risk-health-problems%2F&psig=AOvVaw0YAqjo-8XQs9Q5UalcYPWn&ust=1676089313734000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCIi-iLONiv0CFQAAAAAdAAAAABAU-->
          <h3>General Dog Care</h3>
          Read Here For General Care Tips For Dogs (Source: aspca.org)
        </a>
      </div>

      <div id="Second">
        <a href="https://www.aspca.org/pet-care/dog-care/dog-nutrition-tips">
          <img src="https://www.dogingtonpost.com/wp-content/uploads/2019/07/eatfast1-min-1000x600.jpg" alt="DogCar.logo" style= "width:100%; height:100%"><br>
          <!--image source: https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.dogingtonpost.com%2Fslow-down-dog-eats-too-fast%2F&psig=AOvVaw3qkH8FQuBL0lepsiASFfoK&ust=1676089771789000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCMDBxY2Piv0CFQAAAAAdAAAAABAE-->
          <h3>Dog Diet</h3>
          Read Here For Information On A Dog's Diet (Source: aspca.org)
        </a>
      </div>
      
      <div id="Third">
        <a href="https://www.aspca.org/pet-care/dog-care/dog-grooming-tips">
          <img src="https://thumbs.dreamstime.com/b/funny-portrait-welsh-corgi-pembroke-dog-showering-shampoo-dog-taking-bubble-bath-grooming-salon-funny-portrait-165396182.jpg" alt="DogCare.logo" style= "width:100%; height:100%"><br>
          <!--image source: https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.dreamstime.com%2Fphotos-images%2Fdog-grooming.html&psig=AOvVaw2azFwe6EwgGK-2lBHIxyff&ust=1676089705335000&source=images&cd=vfe&ved=0CA8QjRxqFwoTCMCpsO2Oiv0CFQAAAAAdAAAAABAJ-->
          <h3>Dog Grooming</h3>
          Read Here For Information On How To Groom Your Dog (Source: aspca.org)
        </a>
      </div>
      <p style="text-align: center;">CREDIT TO ASPCA.ORG FOR THE INFO PROVIDED ABOVE</p>
    </main>
    <?php 
      include 'Footer.php';
    ?>
    <script src="FindAFriend.js"></script>
  </body>
</html>
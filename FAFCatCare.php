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
      <img src="https://us.123rf.com/450wm/alexutemov/alexutemov1604/alexutemov160401992/alexutemov160401992.jpg?ver=6" alt="CatC.logo" style= "width:20%; height:20%">
      <!--image source: https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.123rf.com%2Fclipart-vector%2Fcat_grooming.html&psig=AOvVaw1FGaHinEA0KAQ_VHlsG5oI&ust=1675837685657000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCPiWzoHkgv0CFQAAAAAdAAAAABAO-->
    
    <main id="Content">

      <div id="First">
        <a href="https://www.aspca.org/pet-care/cat-care/general-cat-care">
          <img src="https://i.natgeofe.com/n/548467d8-c5f1-4551-9f58-6817a8d2c45e/NationalGeographic_2572187_square.jpg" alt="CatCa.logo" style= "width:100%; height:100%"><br>
          <!--image source: https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.nationalgeographic.com%2Fanimals%2Fmammals%2Ffacts%2Fdomestic-cat&psig=AOvVaw28ejNrxmQIJDdf0O283P9v&ust=1676081866795000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCPCHj9Txif0CFQAAAAAdAAAAABAE-->
          <h3>General Cat Care</h3>
          Read Here For General Care Tips For Cats (Source: aspca.org)
        </a>
      </div>

      <div id="Second">
        <a href="https://www.vet.cornell.edu/departments-centers-and-institutes/cornell-feline-health-center/health-information/feline-health-topics/feeding-your-cat">
          <img src="https://image.petmd.com/files/styles/863x625/public/petmd-eating-quirks.jpg" alt="CatCar.logo" style= "width:100%; height:100%"><br>
          <!--image source: https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.petmd.com%2Fcat%2Fnutrition%2F5-unusual-cat-eating-habits&psig=AOvVaw2OTAFMQUG_GAprFkV1vHqd&ust=1676083148360000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCMjCjrf2if0CFQAAAAAdAAAAABAJ-->
          <h3>Cat Diet</h3>
          Read Here For Information On A Cat's Diet (Source: vet.cornell.edu)
        </a>
      </div>
      
      <div id="Third">
        <a href="https://www.aspca.org/pet-care/cat-care/cat-grooming-tips">
          <img src="https://unionlakepetservices.com/wp-content/uploads/2020/07/ULPS-Cat-grooming-AdobeStock_313891439-1080x675.jpg" alt="CatCare.logo" style= "width:100%; height:100%"><br>
          <!--image source: https://www.google.com/url?sa=i&url=https%3A%2F%2Funionlakepetservices.com%2Fblog%2Fyes-its-possible-6-tips-for-cat-grooming-at-home&psig=AOvVaw0UBmadcASuENWS3iaW1V-v&ust=1676083717257000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCJiCvcb4if0CFQAAAAAdAAAAABAE-->
          <h3>Cat Grooming</h3>
          Read Here For Information On How To Groom Your Cat (Source: aspca.org)
        </a>
      </div>
      <p style="text-align: center;">CREDIT TO ASPCA.ORG AND VET.CORNELL.EDU FOR THE INFO PROVIDED ABOVE</p>
    </main>
    <?php 
      include 'Footer.php';
    ?>
    <script src="FindAFriend.js"></script>
  </body>
</html>
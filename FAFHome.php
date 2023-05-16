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
      <h3>About Us: </h3>Since 2023, Find-a-Friend has been helping dogs and cats of any breed, age,
      and gender find their forever home. We pair up our pets with the best matched future owners. We
      are very transparent with the information about our pets we sell and we do not want any surprising
      information about any dog or cat hidden from the buyer, and the same for information about the buyer
      for the seller. At Find-a-Friend, we ALWAYS prioritize our pets, and always want to make sure whatever
      is being done will be the best for them. We believe all pets should have a loving home, and 
      we want to reduce the amount of pets that do not have homes.<p>If you have a dog or cat that 
      you can not take care of for whatever the reason may be, you can fill out the <a href="FAFGiveaway.php">
      Have A Pet To Give Away?</a> form and we will make sure that your pet gets rehomed to a loving and 
      caring home.</p><p>Feel free to navigate our website and let us help you find your next best friend!
      &#128513;</p>
      &emsp;&emsp;&emsp;
      <img src="https://people.com/thmb/0nN_p-1sSabqWWhm3ExIxBKoR7s=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc():focal(689x509:691x511)/happy-couple-petting-dog-100622-aba23ecfa8804ba9b88afb50ec9e7567.jpg" alt="Dog.logo" style= "width:30%; height:30%">
      <!--image source: https://www.google.ca/url?sa=i&url=https%3A%2F%2Fpeople.com%2Fpets%2Fdogs-help-people-feel-more-sociable-and-less-stressed-study-finds%2F&psig=AOvVaw0aW-m3IR6x09ihjtx-0_x6&ust=1676013603488000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCPDc4q3zh_0CFQAAAAAdAAAAABAE-->
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
      <img src="https://thumbs.dreamstime.com/b/child-playing-cat-home-kids-pets-little-boy-feeding-petting-cute-ginger-color-cats-tree-scratcher-living-room-148898085.jpg" alt="Cat.logo" style= "width:30%; height:30%">
      <!--image source: https://www.google.ca/url?sa=i&url=https%3A%2F%2Fwww.dreamstime.com%2Fchild-playing-cat-home-kids-pets-little-boy-feeding-petting-cute-ginger-color-cats-tree-scratcher-living-room-image148898085&psig=AOvVaw03Zj2T2rJLPy0hxvHReji8&ust=1676013930158000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCLiLwsn0h_0CFQAAAAAdAAAAABAu-->
      
    </main>
    <?php 
      include 'Footer.php';
    ?>
    <script src="FindAFriend.js"></script>
  </body>
</html>
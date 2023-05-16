<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $petType = $_POST["petType"];
    $petBreed = $_POST["petBreed"];
    $ageRange = $_POST["ageRange"];
    $gender = $_POST["gender"];
    $otherDogs = $_POST["otherDogs"];
    $otherCats = $_POST["otherCats"];
    $otherChildren = $_POST["otherChildren"];
    $freeForm = $_POST["freeForm"];
    $name = $_POST["name"];
    $email = $_POST["email"];

    $file = fopen("AvailablePet.txt", "a");

    $counter = file_exists("counter.txt") ? intval(file_get_contents("counter.txt")) : 0;

    $counter++;

    fwrite($file, "$counter:$name:$petType:$petBreed:$ageRange:$gender:$otherDogs:$otherCats:$otherChildren:$freeForm:$email\n");

    file_put_contents("counter.txt", $counter);

    fclose($file);

    echo '<script> alert("Thank you for submitting the form!");</script>';
          
  }
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
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzrE8P5kXlXeSyYnqFrkDv8qJn4O8QyllwcQ&usqp=CAU" alt="Give.logo" style= "width:20%; height:20%">
      <!--image source: https://www.google.com/url?sa=i&url=http%3A%2F%2Fclipart-library.com%2Fclipart%2Fanimal-shelter-clipart_13.htm&psig=AOvVaw159W9UDaOUPYRT2lWO_lyq&ust=1675838190704000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCKCIsvLlgv0CFQAAAAAdAAAAABAF-->
    
    <main id="Content">
      <fieldset>
        <legend>Answer This Form About Your Pet That You Want To Give Away &#128054;&#128049;&#128075;</legend>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <b>Is Your Pet A Dog Or A Cat?</b><br>
          <label>
            Dog&#128054;<input type="radio" name="petType" value="Dog">  
          </label>
          <label>
            Cat&#128049;<input type="radio" name="petType" value="Cat">
          </label><br><br>

          <b>Which Breed Is Your Dog/Cat?</b><br>
          <label>
            Labrador Retriever&#128054;<input type="radio" name="petBreed" value="Labrador Retriever">
          </label>
          <label>
            Dalmation&#128054;<input type="radio" name="petBreed" value="Dalmation">
          </label>
          <label>
            German Shepherd&#128054;<input type="radio" name="petBreed" value="German Shepherd">
          </label>
          <label>
            Tabby Cat&#128049;<input type="radio" name="petBreed" value="Tabby Cat">
          </label>
          <label>
            Himalayan Cat&#128049;<input type="radio" name="petBreed" value="Himalayan Cat">
          </label>
          <label>
            Siamese Cat&#128049;<input type="radio" name="petBreed" value="Siamese Cat">
          </label>
          <label>
            Mixed Breed &#128054;/&#128049;<input type="radio" name="petBreed" value="Mixed">
          </label><br><br>

          <b>What Age Range Is Your Pet?</b><br>
          <label>
            Puppy/Kitten (8 Weeks - 2 Years Old)<input type="radio" name="ageRange" value="02">
          </label>
          <label>
            3 - 5 Years Old<input type="radio" name="ageRange" value="35">
          </label>
          <label>
            6 - 8 Years Old<input type="radio" name="ageRange" value="68">
          </label>
          <label>
            Nine Years Old Or More<input type="radio" name="ageRange" value="9+">
          </label><br><br>

          <label>
            <b>What Is Your Pet's Gender?</b><br>  Male<input type="radio" name="gender" value="Male">  
          </label>
          <label>
            Female<input type="radio" name="gender" value="Female">
          </label><br><br>

          <b>Does Your Pet Get Along With Other Dogs?</b><br>
          <label>
            Yes<input type="radio" name="otherDogs" value="Yes">
          </label>
          <label>
            No<input type="radio" name="otherDogs" value="No">
          </label><br><br>

          <b>Does Your Pet Get Along With Other Cats?</b><br>
          <label>
            Yes<input type="radio" name="otherCats" value="Yes">
          </label>
          <label>
            No<input type="radio" name="otherCats" value="No">
          </label><br><br>

          <b>Is Your Pet Suitable For A Family With Small Children?</b><br>
          <label>
            Yes<input type="radio" name="otherChildren" value="Yes">
          </label>
          <label>
            No<input type="radio" name="otherChildren" value="No">
          </label><br><br>

          <label for="freeform"><b>Tell Us A Little Bit About Your Pet, Along With Any Necessary Information About Him/Her:</b></label><br>
          <textarea id="freeform" name="freeForm" rows="4" cols="50"></textarea><br><br>

          What Is Your Full Name?<br>
          <input type="text" name="name"><br><br>

          What Is Your Email?<br>
          <input type="text" name="email" id="email"><br>

          <p>Thank You For Filling Out This Form. Your Pet's Data Will Be Added To The Server.</p>
          <input type="Submit" name="submit" value="Submit Form" onclick="return submitGive()">
          <input type="reset" name="reset" value="Reset Form">
        </form>
      </fieldset>
      
    </main>
    <?php 
      include 'Footer.php';
    ?>
    <script src="FindAFriend.js"></script>
  </body>
</html>
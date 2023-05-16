<?php
if(isset($_POST['submit'])) {

    $petType = $_POST['petType'];
    $petBreed = $_POST['petBreed'];
    $ageRange = $_POST['ageRange'];
    $gender = $_POST['gender'];
    $otherPets = $_POST['otherPets'];

    $file = fopen("AvailablePet.txt", "r");
    $matchFound = false;
    $output = "";

    while(!feof($file)) {
        $line = fgets($file);
        $values = explode(":", $line);
        if (count($values) < 11) {
          continue;
        }
        $petTypeMatch = ($petType == $values[2] || $petType == "Other");
        $petBreedMatch = ($petBreed == $values[3] || $petBreed == "Either");
        $ageRangeMatch = ($ageRange == $values[4] || $ageRange == "NoMatter");
        $genderMatch = ($gender == $values[5] || $gender == "Either");
        $otherPetsMatch = ($otherPets == $values[6] || $otherPets == $values[7] || $otherPets == $values[8] || $otherPets == "Either");
        if ($petTypeMatch && $petBreedMatch && $ageRangeMatch && $genderMatch && $otherPetsMatch) {
            $output .= "We found a pet that matches your criteria! Here are the details: <br>";
            $output .= "Owner Name: " . $values[1] . "<br>";
            $output .= "Pet type: " . $values[2] . "<br>";
            $output .= "Pet breed: " . $values[3] . "<br>";
            $output .= "Age range: " . $values[4] . "<br>";
            $output .= "Gender: " . $values[5] . "<br>";
            $output .= "Gets along with other dogs, cats, and children: " . $values[6] . ", " . $values[7] . ", " . $values[8] . "<br>";
            $output .= "Info: " . $values[9] . "<br>";
            $output .= "Contact email: " . $values[10] . "<br>";
            $output .= "Note down this information if you are interested or click the back arrow to go back to the form<br><br>";
            $matchFound = true;
        }
    }

    if (!$matchFound) {
        $output = "Sorry, we could not find a pet that matches your criteria. Please click the back arrow and try again.";
    }
    fclose($file);
    header("Location: search_results.php?output=" . urlencode($output));
    exit();
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
      <img src="https://img.freepik.com/premium-vector/dog-with-magnifying-glass_11460-5655.jpg?w=2000" alt="Find.logo" style= "width:20%; height:20%">
      <!--image source: https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.freepik.com%2Fpremium-vector%2Fdog-with-magnifying-glass_1724556.htm&psig=AOvVaw2TmM4UCl1zl8J7hbosUMpt&ust=1675587968422000&source=images&cd=vfe&ved=0CA0QjRxqFwoTCOjCsODB-_wCFQAAAAAdAAAAABAD-->
    
    <main id="Content">
      <fieldset>
        <legend>Fill this form out to find your future best friend!&#128064;&#10084;&#128054;&#128049;</legend>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <b>Which Pet Are You Looking For?</b><br>
          <label>
            Dog&#128054;<input type="radio" name="petType" value="Dog">  
          </label>
          <label>
            Cat&#128049;<input type="radio" name="petType" value="Cat">
          </label><br><br>

          <b>Which Breed Of Dog/Cat Would You Like?</b><br>
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
            Doesn't Matter&#128054;&#128049;<input type="radio" name="petBreed" value="Other">
          </label><br><br>

          <b>What Age Range Would You Prefer Your Pet To Be Within?</b><br>
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
          </label>
          <label>
            Doesn't Matter<input type="radio" name="ageRange" value="NoMatter">
          </label><br><br>

          <label>
            <b>Preffered Gender Of Your Pet?</b><br>  Male<input type="radio" name="gender" value="Male">  
          </label>
          <label>
            Female<input type="radio" name="gender" value="Female">
          </label>
          <label>
            Doesn't Matter<input type="radio" name="gender" value="Other">
          </label><br><br>

          <b>Does Your New Pet Need To Get Along With Any Other Dogs, Cats, Or Small Children?</b><br>
          <label>
            Yes<input type="radio" name="otherPets" value="Yes">
          </label>
          <label>
            No<input type="radio" name="otherPets" value="No">
          </label><br><br>

          <p>Thank You For Taking The Time To Fill Out Our Form!</p>
          <input type="submit" name="submit" value="Submit Form" onclick="return submitFind()">
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
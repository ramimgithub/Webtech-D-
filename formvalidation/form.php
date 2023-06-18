<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

 

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = $dateErr = $degreeErr= $bloodErr= "";
$name = $email = $gender = $comment = $website = $date = $degree= $blood= "";

 

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  }elseif (str_word_count($_POST["name"])<2) 
  {
    $nameErr = "at least two words";

 

  }else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

 if (empty($_POST["degree1"]) && empty($_POST["degree2"]) || empty($_POST["degree1"]) && empty($_POST["degree3"]) || empty($_POST["degree2"]) && empty($_POST["degree3"]) )
   {
    $degreeErr = "at least two Degree is required";
   }

 

  else 

  {
      if(isset($_POST["degree1"]) && isset($_POST["degree2"]) )
      { 
          $degree="SSC HSC";
      }
      if(isset($_POST["degree1"]) && isset($_POST["degree3"]))
      {
          $degree="SSC BSc";

      }
      if(isset($_POST["degree2"]) && isset($_POST["degree3"]))
      {
         $degree="HSC BSc"; 

      }

 

    
  }

  
 

  if (empty($_POST["dateofbirth"])) {
    $dateErr = "Date is required";
  }else
  {
  $date = test_input($_POST["dateofbirth"]);
  }

 

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);

 

   if (empty($_POST["degree"])) {
    $degreeErr = "Degree is required";
  } else {
    $degree = test_input($_POST["degree"]);
  }
  }
  if (empty($_POST["blood"])) {
    $bloodErr = "select your blood group";
  } else {
    $blood= test_input($_POST["blood"]);
  }
}

 

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

 

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>

 


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
<span class="error">* <?php echo $nameErr;?></span>
<br><br>

 

  E-mail: <input type="text" name="email" placeholder="anything@example.com" value="<?php echo $email;?>">
<span class="error">* <?php echo $emailErr;?></span>
<br><br>

 

  Website: <input type="text" name="website" value="<?php echo $website;?>">
<span class="error"><?php echo $websiteErr;?></span>
<br><br>

 

  

 


  Date_Of_Birth: <input type="date" name="dateofbirth" placeholder="dd/mm/yyyy" value="<?php echo $date;?>" min="1953-01-01" max="1998-12-31">
<span class="error">* <?php echo $dateErr;?></span>
<br><br>

 


  Gender:
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
<span class="error">* <?php echo $genderErr;?></span>
<br><br>

 

  <b>Degree :</b><br>
<input type="checkbox" name="degree1" value="SSC">SSC
<input type="checkbox" name="degree2" value="HSC">HSC
<input type="checkbox" name="degree3" value="BSc">BSc
<span class="error">* <?php echo $degreeErr;?></span><br><br><br>

 

  Choose blood group:
<select name="blood" id="blood">
<option value="">select your blood group</option>
<option value="A+">A+</option>
<option value="B+">B+</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
</select>
<span class="error">* <?php echo $bloodErr;?></span>
<br><br>

 


<input type="submit" name="submit" value="Submit">  
</form>

 

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $date;
echo "<br>";
echo $gender;
echo "<br>";
echo $degree;
echo "<br>";
echo $blood;
?>

 

</body>
</html>
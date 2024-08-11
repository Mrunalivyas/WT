<!DOCTYPE HTML>
<html>
<head>
  <title>Registration Form</title>
  <style>
    .error {color: #FF0000;}
  </style>
</head>
<body>  

<?php
// Define variables and set to empty values
$nameErr = $passwordErr = $confirmPasswordErr = $genderErr = "";
$name = $password = $confirmPassword = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Name validation
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  // Password validation
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }

  // Confirm password validation
  if (empty($_POST["confirm_password"])) {
    $confirmPasswordErr = "Confirm Password is required";
  } else {
    $confirmPassword = test_input($_POST["confirm_password"]);
    if ($password !== $confirmPassword) {
      $confirmPasswordErr = "Passwords do not match";
    }
  }

  // Gender validation
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Registration Form</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Password: <input type="password" name="password" value="<?php echo $password;?>">
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>
  Confirm Password: <input type="password" name="confirm_password" value="<?php echo $confirmPassword;?>">
  <span class="error">* <?php echo $confirmPasswordErr;?></span>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($nameErr) && empty($passwordErr) && empty($confirmPasswordErr) && empty($genderErr)) {
  echo "<h2>Your Input:</h2>";
  echo "Name: " . $name;
  echo "<br>";
  echo "Password: " . str_repeat("*", strlen($password)); // Mask the password
  echo "<br>";
  echo "Gender: " . $gender;
}
?>

</body>
</html>

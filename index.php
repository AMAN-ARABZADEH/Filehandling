<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <link rel="stylesheet" href="style.css">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Form Handling PHP & HTML</title>
</head>
<body>
<br>

<div class="container">
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 <label for="name">Name:</label>
 <input type="text" name="name">
 <br><br><br>
 <label for="message">Message:</label>
 <textarea name="message" id="message" cols="70" rows="13"></textarea>
 <input type="submit" value="Submit" name="submit">
 
</form>
</div>
<br><br><br>


<?php

// https://www.w3schools.com/php/php_file_open.asp¨

// Created by: Aman Arabzadeh
// https://amanarab.netlify.app/
// https://github.com/AMAN-ARABZADEH
// 

include("functions.php");
?>

 
</body>
</html>

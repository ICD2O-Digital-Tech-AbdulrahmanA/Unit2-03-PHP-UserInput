<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="My first webpage with user input">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Abdul">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>User Input with PHP</title>
  </head>
  <body>
    <?php echo "<h1>User Input in PHP</h1>" ?>
    <form action="./welcome.php" method="post" target="result">
      <label for="street-name">Street Name</label>
      <input type="text" id="street-name" placeholder="Your Street Name" name="street-name"><br><br>
      <label for="street-number">Street Number</label>
      <input type="text" id="street-number" placeholder="Your Street Number" name="street-number"><br><br>
      <input type="submit" value="Enter">
			<br><br>	
    </form>
<div id="result"></div>
    <center>
      <iframe id="result" name="result">
				Your street name is <?php echo $_POST["street-name"]; ?> and your street number is <?php echo $_POST["street-number"]; ?>.
      </iframe>
    </center>
  </body>
</html>
<?php require_once "controllerUserData.php"; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PRESIBOT Home Navigation Bar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navigationStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo"> <a href="home.php">PRESIBOT</a></label>
      <ul>
        <li><a class="active" href="home.php"><?php echo $fetch_info['name']?></a></li>
        <li><a class="button" href="login-user.php">Logout</a></li>
      </ul>
    </nav>
    <section></section>
  </body>
</html>
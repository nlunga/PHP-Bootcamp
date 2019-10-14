<?php
  session_start();
  if ($_SESSION['login'] != $_GET['login'] && $_GET['login'])
    $_SESSION['login'] = $_GET['login'];
  if ($_SESSION['password'] != $_GET['passwd'] && $_GET['passwd'])
    $_SESSION['password'] = $_GET['passwd'];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="./index.php" method="get">
      <label>Enter your username: </label>
      <input type="text" name="login" value="<?php echo $_SESSION['login'];?>">
      <br>
      <label>Enter your password: </label>
      <input type="password" name="passwd" value="<?php echo $_SESSION['password'];?>">
      <br>
      <input type="submit" name="submit" value="OK">
    </form>
  </body>
</html>
https://www.youtube.com/watch?v=pkxqlfLioCk

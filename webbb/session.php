<?php 
session_start();
if(!isset($_SESSION['views']))
{
  $_SESSION['views']=1;
}else{
  $_SESSION['views']++;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Page Views Counter</title>
  </head>
  <body>
    <h2>Page Views Counter</h2>
    <p>This page has been viewed<?php echo $_SESSION['views']; ?>times.</p>
    <p>Refresh the page to see count increase</p>
  </body>
</html>

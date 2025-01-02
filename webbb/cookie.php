<?php
$expiration=time()+(60*60*24*30);
if(!isset($_COOKIE['last_visited']))
{
  setcookie('last_visited',date('Y-m-d H:i:s'),$expiration);
}
$lastVisitedDateTime=$_COOKIE['last_visited']??'Unknown';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Last visited Date-Time</title>
  </head>
  <body>
    <h2>Last visited Date-Time</h2>
    <?php
    if($_COOKIE['last_visited']!=='Unknown')
    {
      echo 'Last visited on:'.$lastVisitedDateTime;
    }
    echo 'Welcome!this is ur first visit';
    ?>
  </body>
</html>
<?php
date_default_timezone_set('Europe/Bratislava');
include 'dbh.inc.php';
include 'comments.inc.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">     
</head>

<body>
   



<?php
 echo"<form method='POST' action='".setComments($conn)."'>
     <input type='hidden' name='uid' value='Anonymous'>
     <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
     <textarea name='message'></textarea><br>
     <button type='submit' name='commentSubmit'>Comment</button>
 </form>";

 getComments($conn);
?>
</body>

</html>
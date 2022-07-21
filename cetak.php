<?php
echo "<head><tittle>URBAN KITCHEN</tittle></head>";
$nama=$_POST['mangga'];
$fp  = fopen ("guestbook.txt","a+");
fputs($fp,"$nama");
fclose ($fp);
?>
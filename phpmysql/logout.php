<?php 

session_start();

//menghapus session
session_destroy();
session_unset();
$_SESSION=[];


//hapus cookie
setcookie('id','',time()-3600);
setcookie('key','',time()-3600);

header("Location:login.php");
exit;

?>
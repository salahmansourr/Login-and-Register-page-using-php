<?php 
$email=$_REQUEST['email'];
$pw=$_REQUEST['password1'];
$pw2=$_REQUEST['password2'];
if($pw!=$pw2){
    header("Location: register.php?error=Confirm password -_-");
}
elseif($pw==$pw2){
extract($_REQUEST);
$file=fopen("form.lst" , "a");

fwrite($file ,"");
fwrite($file , $email . "\n");
fwrite($file ,"");
fwrite($file , $password2 . "\n");
header("Location: register.php?succes=Succes Register^_^");
}

?>
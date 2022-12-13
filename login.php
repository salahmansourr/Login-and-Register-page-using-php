<?php
$email=$_POST['email'];
$pw=$_POST['password'];
$countt=0;

if(empty($email) && !empty($pw)){
    header("Location: index.php?error=Email is required");
}
elseif(empty($pw) && !empty($email)){
    header("Location: index.php?error=Password is required");
}
elseif(empty($email) && empty($pw)){
    header("Location: index.php?error=Email and Password are required");
}
else{
    $lines=file("form.lst");
    foreach($lines as $line){
        if(trim($line)==$email){
            $countt++;
        }
        elseif(trim($line)==$pw){
            $countt++;
        }
    }
    if($countt==1 or $countt==0){
        header("Location: index.php?erroremail=error in email or password".$countt);
    }
    elseif($countt==2){
        header("Location: home.php");
    }
}
?>
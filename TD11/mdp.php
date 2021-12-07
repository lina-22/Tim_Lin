<?php
$mdp="azerty";

echo" Algo = md5 mdp = $mdp <br>";

$mdpMd5=hash("md5","qsdfghjkl");
echo "$mdpMd5 <br>";

$mdpMd5=hash("md5",$mdp);
echo "$mdpMd5 <br>";

echo strlen($mdpMd5)."<br>";

$mdpSha1=hash("sha1",$mdp);
echo "$mdpSha1 <br>";

echo strlen($mdpSha1)."<br>";

$mdpSha256=hash("sha256",$mdp);
echo "$mdpSha256 <br>";

echo strlen($mdpSha256)."<br>";

$mdpSha512=hash("md5",$mdp);
echo "$mdpSha512 <br>";
$mdpSha512=hash("md5",$mdp);
echo "$mdpSha512 <br>";
echo strlen($mdpSha512)."<br>";


echo "password hash <br>";
$mdpBcrypt=password_hash($mdp,PASSWORD_DEFAULT);
echo "$mdpBcrypt <br>";
$mdpBcrypt=password_hash($mdp,PASSWORD_DEFAULT);
echo "$mdpBcrypt <br>";
$mdpBcrypt=password_hash($mdp,PASSWORD_DEFAULT);
echo "$mdpBcrypt <br>";

var_dump(password_verify("azerty",$mdpBcrypt));//true
var_dump(password_verify("truc",$mdpBcrypt));//false

//var_dump(hash_algos());
?>
<?php 
echo "hello";
$password = "palace123";

$hash = VALIDATE_PASSWORD($password, PASSWORD_DEFAULT);
echo $hash
?>

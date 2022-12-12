<?php
$baseDonnee=new mysqli('localhost','root','','bonbagay',3307);

if(!$baseDonnee){
    die(mysqli_error($baseDonnee));
}
?>
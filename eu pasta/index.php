<?php
session_start();
?>

<?php

if(isset($_SESSION['logado'])){

  if($_SESSION['logado']==0){
    
    header('location:login.php');
}
}else{
  header('location:login.php');
}
?>

<?php
include_once('./partials/header.php');
?>

<?php
include_once('./components/navbar.php');
?>

<?php
include_once('./components/carousel.php');
?>

<?php
include_once('./partials/footer.php');
?>

<?php 
if($_SESSION['loggedin'] == false){
    header("Location: ./login.php");
}
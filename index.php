<?php


// if / else logic located on here



$section = $_GET['section'] ?? 'home';

if($section=='about-us'){
    include 'controller/about-us.php';
}else if($section == 'contact-us'){
    include 'controller/contact-us.php';
}else{
    include 'controller/homepage.php';
}





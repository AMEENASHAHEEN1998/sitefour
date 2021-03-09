<?php
    

    // rout
    $tpl        = "template/"; // template path
    
    $func       ="function/";
    $css        = "layout/css/"; // css admin path
    $jsAdmin    = "layout/js/"; // js admin path
    
    

    // inclued file important
    
    include $func . 'function.php';
    include "connect.php"; // db connect file 
    include  $tpl . 'header.php'; // include header file 
    if(!isset($noNavbar)){include $tpl . 'navbar.php';}
    
    
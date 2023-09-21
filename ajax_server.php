<?php
    $gods=array();
    $gods[]="purushottam";
    $gods[]="ram";
    $gods[]="laxman";
    $gods[]="sita";
    $gods[]="krishna";
    $gods[]="balram";
    $gods[]="radha";

    // print_r($gods);
    $searchString = strtolower($_GET['search']);
    // echo $_GET['search'].'searching.....';
    // print_r($gods);
    $hint='';
    $len= strlen($searchString);
    if($len == 0){
        exit(0);
    }
    foreach($gods as $god){
        if($searchString == strtolower(substr($god, 0, $len))){
            $hint .= $god.",";
        }
        // euta matrw selection lyaunw ko lagi ho
        // if($hint != ''){
        //     break;
        // }
    }
    echo $hint;
?>
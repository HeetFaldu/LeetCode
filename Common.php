<?php

function dd(...$val){
    echo "<pre>";
    if(is_array($val)){
        print_r($val);
    }
    else{
        echo "$val";
    }
    // exit;
}
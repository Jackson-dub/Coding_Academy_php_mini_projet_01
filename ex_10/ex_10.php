<?php
function my_get_args(...$args){

    $my_args = [];
        foreach ($args as $arg) {
           array_push($my_args,$arg);
        }

    return $my_args;
};
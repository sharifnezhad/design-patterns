<?php

$action1 = 'randomNumber';
$action2 = 'message';

$input = readline('enter action: ');
 if ($input == $action1){
     echo rand();
 }else{
     echo 'hello';
 }
<?php
function autoload_controllers($name){
    include 'controllers/'.$name.'.php';
}
spl_autoload_register('autoload_controllers');
?>
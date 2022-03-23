<?php
spl_autoload_register('auto');
function auto($class){
    include($class . '.php');
}

?>
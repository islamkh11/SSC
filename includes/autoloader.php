<?php
// autoloader
function autoloader($classname) {
    $dirs = array('',  'models/', '../models/', '../models/','./model/','../../models/');
    $formats = array('%s.php.inc', '%s.php', '%s.class.php', 'class.%s.php');

    foreach ($dirs as $dir) {
        foreach ($formats as $format) {
             $path = $dir.sprintf($format, $classname);//echo '---';
            if(file_exists($path))
            {         
                include $path;
                return;
            }
        }
    }
}

spl_autoload_register('autoloader');


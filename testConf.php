<?php
    require_once('conf.php');
    echo Conf::getLogin();
    echo Conf::getPassword();
    echo Conf::gethostname(); 
    echo Conf::getDatabase();   

?>
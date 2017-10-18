<?php
/**
 *  {$action_name}.php
 *
 *  @author     {$author}
 *  @package    Ethnamtest
 */
chdir(dirname(__FILE__));
require_once '{$dir_app}/Ethnamtest_Controller.php';

ini_set('max_execution_time', 0);

Ethnamtest_Controller::main_CLI('Ethnamtest_Controller', '{$action_name}');

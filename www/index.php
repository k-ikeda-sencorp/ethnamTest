<?php

require_once dirname(__FILE__) . '/../app/Ethnamtest_Controller.php';

/**
 * If you want to enable the UrlHandler, comment in following line,
 * and then you have to modify $action_map on app/Ethnamtest_UrlHandler.php .
 *
 */
// $_SERVER['URL_HANDLER'] = 'index';

/**
 * Run application.
 */
Ethnamtest_Controller::main('Ethnamtest_Controller', 'index');


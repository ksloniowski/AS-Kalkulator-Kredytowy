<?php
require_once dirname(__FILE__).'/../config.php';


$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

switch($action){
    default:
        include_once $config->root_path.'/app/calc/CalcCtrl.class.php';
        $ctrl = new CalcCtrl();
        $ctrl->generateView();
    break;
    case 'calcCredit' :
        include_once $config->root_path.'/app/calc/CalcCtrl.class.php';
        $ctrl = new CalcCtrl();
        $ctrl->process();
    break;  
}

?>
<?php
require_once 'init.php';


switch($action){
    default:
        include_once 'app/controllers/CalcCtrl.class.php';
        $ctrl = new CalcCtrl();
        $ctrl->generateView();
    break;
    case 'calcCredit' :
        include_once 'app/controllers/CalcCtrl.class.php';
        $ctrl = new CalcCtrl();
        $ctrl->process();
    break;  
}

?>
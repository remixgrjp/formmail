<?php
error_reporting(E_ALL);
require_once dirname(__FILE__) . '/../app/Formmail_Controller.php';

Formmail_Controller::main('Formmail_Controller', array(
    '__ethna_unittest__',
    )
);
?>

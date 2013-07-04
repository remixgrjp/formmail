<?php
/**	ＵＴＦ８
*	{$action_name}.php
*
*	@author		{$author}
*	@package	Formmail
*	@version	$Id$
*/
chdir(dirname(__FILE__));
require_once '{$dir_app}/Formmail_Controller.php';

ini_set('max_execution_time', 0);

Formmail_Controller::main_CLI('Formmail_Controller', '{$action_name}');
?>

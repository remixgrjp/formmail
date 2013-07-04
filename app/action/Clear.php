<?php
/**	ＵＴＦ８
*	Clear.php
*
*	@author		remix.asia
*	@package	Formmail
*	@version	$Id$
*/

/**
*	Clear Form implementation.
*
*	@author		remix.asia
*	@access		public
*	@package	Formmail
*/
class Formmail_Form_Clear extends Formmail_ActionForm
{
	/**
	*	@access private
	*	@var	array   form definition.
	*/
	var $form = array(
		'email'		=>	array(),
		'comment'	=>	array(),
		'priority'	=>	array(),
	);

	/**
	*	Form input value convert filter : sample
	*
	*	@access protected
	*	@param  mixed   $value  Form Input Value
	*	@return mixed			  Converted result.
	*/
	/*
	function _filter_sample($value)
	{
		//  convert to upper case.
		return strtoupper($value);
	}
	*/
}

/**
*	Clear action implementation.
*
*	@author		remix.asia
*	@access		public
*	@package	Formmail
*/
class Formmail_Action_Clear extends Formmail_ActionClass
{
	var $view			= 'Form';
///	var $viewAuth		= 'Index';
///	var $viewError		= 'Index';
	var $viewDefault	= 'Form';

	/**
	*	preprocess of Clear Action.
	*
	*	@access public
	*	@return string	forward name(null: success.
	*								false: in case you want to exit.)
	*/
	function prepare()
	{
		return null;
	}

	/**
	*	Clear action implementation.
	*
	*	@access public
	*	@return string  forward name.
	*/
	function perform()
	{
		$this->af->clearFormVars();
		return $this->view;
	}
}
?>

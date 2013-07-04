<?php
/**	ＵＴＦ８
*	Confirm.php
*
*	@author		remix.asia
*	@package	Formmail
*	@version	$Id$
*/

/**
*	Confirm Form implementation.
*
*	@author		remix.asia
*	@access		public
*	@package	Formmail
*/
class Formmail_Form_Confirm extends Formmail_ActionForm
{
	/**
	*	@access private
	*	@var	array   form definition.
	*/
	var $form = array(
		'email'	=>	array(
			'required'	=>	true,
			'custom'	=> 'checkMailaddress',
		),
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
*	Confirm action implementation.
*
*	@author		remix.asia
*	@access		public
*	@package	Formmail
*/
class Formmail_Action_Confirm extends Formmail_ActionClass
{
	var $view			= 'Confirm';
///	var $viewAuth		= 'Index';
///	var $viewError		= 'Index';
	var $viewDefault	= 'Form';

	/**
	*	preprocess of Confirm Action.
	*
	*	@access public
	*	@return string	forward name(null: success.
	*								false: in case you want to exit.)
	*/
	function prepare()
	{
		if( ! Ethna_Util::isCsrfSafe() ){
			$this->af->setApp( 'warn', $this->msgRejectOperation );
			return $this->viewDefault;
		}
		if( 0 < $this->af->validate() ){
			$this->af->setApp( 'warn', $this->msgValidateError );
			return $this->viewDefault;
		}
		return null;
	}

	/**
	*	Confirm action implementation.
	*
	*	@access public
	*	@return string  forward name.
	*/
	function perform()
	{
		return $this->view;
	}
}
?>

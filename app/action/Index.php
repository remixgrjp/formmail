<?php
/**	ＵＴＦ８
*	Index.php
*
*	@author		remix.asia
*	@package	Formmail
*	@version	$Id$
*/

/**
*	Index Form implementation.
*
*	@author		remix.asia
*	@access		public
*	@package	Formmail
*/
class Formmail_Form_Index extends Formmail_ActionForm
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
*	Index action implementation.
*
*	@author		remix.asia
*	@access		public
*	@package	Formmail
*/
class Formmail_Action_Index extends Formmail_ActionClass
{
	var $view			= 'Form';
///	var $viewAuth		= 'Index';
///	var $viewError		= 'Index';
	var $viewDefault	= 'Form';

	/**
	*	preprocess of Index Action.
	*
	*	@access public
	*	@return string	forward name(null: success.
	*								false: in case you want to exit.)
	*/
	function prepare()
	{
///		if( ! Ethna_Util::isCsrfSafe() ){
///			$this->af->setApp( 'warn', $this->msgRejectOperation );
///			return $this->viewDefault;
///		}
		if( 0 < $this->af->validate() ){
			$this->af->setApp( 'warn', $this->msgValidateError );
			return $this->viewDefault;
		}
		return null;
	}

	/**
	*	Index action implementation.
	*
	*	@access public
	*	@return string  forward name.
	*/
	function perform()
	{
		Ethna_Util::purgeTmp( 'sess_', 60*60*24*10 );	///	10日以上のセッションクリア
		return $this->view;
	}
}
?>

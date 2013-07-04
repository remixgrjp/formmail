<?php
/**	ＵＴＦ８
*	Send.php
*
*	@author		remix.asia
*	@package	Formmail
*	@version	$Id$
*/

/**
*	Send Form implementation.
*
*	@author		remix.asia
*	@access		public
*	@package	Formmail
*/
class Formmail_Form_Send extends Formmail_ActionForm
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
*	Send action implementation.
*
*	@author		remix.asia
*	@access		public
*	@package	Formmail
*/
class Formmail_Action_Send extends Formmail_ActionClass
{
	var $view			= 'Complete';
///	var $viewAuth		= 'Index';
///	var $viewError		= 'Index';
	var $viewDefault	= 'Form';

	/**
	*	preprocess of Send Action.
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
	*	Send action implementation.
	*
	*	@access public
	*	@return string  forward name.
	*/
	function perform()
	{
		$mailSender =& new Ethna_MailSender( $this->backend );
		$mailSender->send(
			$this->config->get('EMAIL')
		,	'Mail.tpl'
		,	array(
				'config'	=>$this->config->get(),
				'form'		=>$this->af->getArray( false ),
				'priority'	=>$this->af->form['priority']['option'][$this->af->get('priority')],	///	priority表示名の引当
				'headers'	=>$_SERVER,
			)
		);
		$this->logger->log( LOG_INFO, 'From[%s]', $this->af->get( 'email' ) );
		$this->af->setApp( 'info', '送信しました。' );
		return $this->view;
	}
}
?>

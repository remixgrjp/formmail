<?php
// vim: foldmethod=marker
/**
*	Formmail_ActionForm.php
*
*	@author		remix.asia
*	@package	Formmail
*	@version	$Id$
*/

// {{{ Formmail_ActionForm
/**
*	ActionForm class.
*
*	@author		remix.asia
*	@package	Formmail
*	@access		public
*/
class Formmail_ActionForm extends Ethna_ActionForm
{
	/**#@+
	*	@access private
	*/

	/** @var	array   form definition (default)*/
	var $form_template = array(
		'email'	=>	array(
			'name'		=>	'メールアドレス',
			'required'	=>	false,
			'form_type'	=>	FORM_TYPE_TEXT,
			'type'		=>	VAR_TYPE_STRING,
			'max'		=>	256,
		),
		'priority'	=>	array(
			'name'		=>	'重要度',
			'required'	=>	false,
			'form_type'	=>	FORM_TYPE_RADIO,
			'type'		=>	VAR_TYPE_INT,
			'option'	=>	array( 5=>'低', 3=>'中', 1=>'高' ),
			'default'	=>	3,
		),
		'comment'	=>	array(
			'name'		=>	'コメント',
			'required'	=>	false,
			'form_type'	=>	FORM_TYPE_TEXTAREA,
			'type'		=>	VAR_TYPE_STRING,
		),
	);

	/**#@-*/

	/**
	*	Error handling of form input validation.
	*
	*	@access public
	*	@param  string	 $name   form item name.
	*	@param  int		 $code   error code.
	*/
	function handleError($name, $code)
	{
		return parent::handleError($name, $code);
	}

	/**
	*	setter method for form template.
	*
	*	@access protected
	*	@param  array   $form_template  form template
	*	@return array   form template after setting.
	*/
	function _setFormTemplate($form_template)
	{
		$config = $this->backend->getConfig();
		$form_template['comment']['max'] = $config->get('MAXCOMMENT');

		return parent::_setFormTemplate($form_template);
	}

	/**
	*	setter method for form definition.
	*
	*	@access protected
	*/
	function _setFormDef()
	{
		return parent::_setFormDef();
	}
}
// }}}
?>

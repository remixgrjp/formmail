<?php
/**
*	Formmail_UrlHandler.php
*
*	@author		remix.asia
*	@package	Formmail
*	@version	$Id$
*/

/**
*	URLHandler class.
*
*	@author		remix.asia
*	@access		public
*	@package	Formmail
*/
class Formmail_UrlHandler extends Ethna_UrlHandler
{
	/** @var	array   Action Mapping*/
	var $action_map = array(
		/*
		'user'  => array(
			'user_login' => array(
				'path'		  => 'login',
				'path_regexp'   => false,
				'path_ext'	  => false,
				'option'		=> array(),
			),
		),
		*/
	);

	/**
	*	get Formmail_UrlHandler class instance.
	*
	*	@access public
	*/
	function &getInstance($class_name = null)
	{
		$instance =& parent::getInstance(__CLASS__);
		return $instance;
	}

	// {{{ normalize gateway request method.
	/**
	*	normalize request(via user defined gateway)
	*
	*	@access private
	*/
	/*
	function _normalizeRequest_User($http_vars)
	{
		return $http_vars;
	}
	*/
	// }}}

	// {{{ generate gateway path method.
	/**
	*	generate path(via user defined gateway)
	*
	*	@access private
	*/
	/*
	function _getPath_User($action, $param)
	{
		return array("/user", array());
	}
	*/
	// }}}

	// {{{ filter 
	// }}}
}

// vim: foldmethod=marker tabstop=4 shiftwidth=4 autoindent
?>

<?php
// vim: foldmethod=marker
/**
*	Formmail_ActionClass.php
*
*	@author		remix.asia
*	@package	Formmail
*	@version	$Id$
*/

// {{{ Formmail_ActionClass
/**
*	action execution class
*
*	@author	 remix.asia
*	@package	Formmail
*	@access	 public
*/
class Formmail_ActionClass extends Ethna_ActionClass
{
	var $view			= 'Index';
	var $viewAuth		= 'Index';
	var $viewError		= 'Index';
	var $viewDefault	= 'Index';

	var	$msgSystemError		= 'システム障害です。';
	var	$msgValidateError	= '入力内容を確認してください。';
	var	$msgInvalidIDPass	= 'ログインできませんでした。';
	var	$msgInvalidSession	= 'ログインしてください。';
	var $msgNoPermission	= '権限がありません。';
	var $msgDemo			= 'デモの為 制限されます。';
	var	$msgNotFound		= '該当データが見つかりません。';
	var	$msgNoActive		= '該当データは無効です。';
	var $msgRejectOperation	= '無効なリクエストです。';

	/**
	*	カスタマイズ・オーバーライド
	*	Ps_ActionClassのコンストラクタ
	*
	*	@access public
	*	@param  object  Ethna_Backend   $backend    backendオブジェクト
	*/
	function Formmail_ActionClass( &$backend )
	{	///	親クラスのコンストラクタのコールを忘れずに
		parent::Ethna_ActionClass( $backend );
	}

	/**
	*	authenticate before executing action.
	*
	*	@access public
	*	@return string  Forward name.
	*				  (null if no errors. false if we have something wrong.)
	*/
	function authenticate()
	{
		return parent::authenticate();
	}

	/**
	*	Preparation for executing action. (Form input check, etc.)
	*
	*	@access public
	*	@return string  Forward name.
	*				  (null if no errors. false if we have something wrong.)
	*/
	function prepare()
	{
		return parent::prepare();
	}

	/**
	*	execute action.
	*
	*	@access public
	*	@return string  Forward name.
	*				  (we does not forward if returns null.)
	*/
	function perform()
	{
		return parent::perform();
	}
}
// }}}
?>

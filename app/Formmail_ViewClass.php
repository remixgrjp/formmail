<?php
// vim: foldmethod=marker
/**	ＵＴＦ８
*	Formmail_ViewClass.php
*
*	@author		remix.asia
*	@package	Formmail
*	@version	$Id$
*/

// {{{ Formmail_ViewClass
/**
*	View class.
*
*	@author		remix.asia
*	@package	Formmail
*	@access		public
*/
class Formmail_ViewClass extends Ethna_ViewClass
{
	/**
	*	コンストラクタ
	*
	*	@access	public
	*	@param	object	Ethna_Backend	$backend    backendオブジェクト
	*	@param	string	$forward_name	ビューに関連付けられている遷移名
	*	@param	string	$forward_path	ビューに関連付けられているテンプレートファイル名
	*/
	function Formmail_ViewClass( &$backend, $forward_name, $forward_path )
	{	///	親クラスのコンストラクタ
		parent::Ethna_ViewClass( $backend, $forward_name, $forward_path );

		///	CSRF対策
		Ethna_Util::setCsrfID();
		$this->af->setAppNE( 'banner', $this->getBanner() );
	}

	/**
	*	set common default value.
	*
	*	@access protected
	*	@param  object  Formmail_Renderer  Renderer object.
	*/
	function _setDefault(&$renderer)
	{
		///	templateでアクション名をで参照可能に（デバック）
		$controller	=& $this->backend->getController();
		$renderer->setPropByRef( 'actionName', $controller->getCurrentActionName() );

		///	templateでビュー名をで参照可能に（デバック）{$smarty.template}ではなくて
		$renderer->setPropByRef( 'viewName', $this->forward_name );
	}

	/**
	*	広告枠html取得
	*		googleAdsense.php
	*
	*	@access	public
	*	@return	&string	
	*/
	function &getBanner(){
		$s = '';
		if( $this->config->get('debug') ){
			return $s;
		}

		$agent = $_SERVER['HTTP_USER_AGENT'];
		if(preg_match("/^DoCoMo/i", $agent) or preg_match("/^(J\-PHONE|Vodafone|MOT\-[CV]|SoftBank)/i", $agent) or preg_match("/^KDDI\-/i", $agent) || preg_match("/UP\.Browser/i", $agent)){
			$userAgent = 'mobile';
		}else{
			$userAgent = 'pc';
		}

		if( 0 == strcmp( $userAgent, 'mobile' ) ){
			$google_ad_handle = @fopen( google_get_ad_url(), 'r' );
			if( $google_ad_handle ){
				while( !feof( $google_ad_handle ) ){
					$s .= fread( $google_ad_handle, 8192 );
				}
				$s = mb_convert_encoding( $s, 'EUC-JP', 'UTF-8' );
				fclose( $google_ad_handle );
			}else{
				$this->logger->log( LOG_WARNING, "広告取得失敗" );
			}
		}else{
			$s = googleAdsPC();
		}
		return $s;
	}
}
// }}}
?>

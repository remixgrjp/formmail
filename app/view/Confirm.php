<?php
/**	ＵＴＦ８
*	Confirm.php
*
*	@author		remix.asia
*	@package	Formmail
*	@version	$Id$
*/

/**
*	Confirm view implementation.
*
*	@author		remix.asia
*	@access		public
*	@package	Formmail
*/
class Formmail_View_Confirm extends Formmail_ViewClass
{
	/**
	*	preprocess before forwarding.
	*
	*	@access public
	*/
	function preforward()
	{
		///	priority表示名の引当
		$this->af->setApp( 'priority', $this->af->form['priority']['option'][$this->af->get('priority')] );
	}
}
?>

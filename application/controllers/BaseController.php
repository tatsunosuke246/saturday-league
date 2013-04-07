<?php
/**
 * コントローラ基底クラス
 */

require_once 'Zend/Controller/Action.php';
require_once 'Zend/Session.php';

class BaseController extends Zend_Controller_Action
{
	//!
	//! @brief 画面表示用エラーメッセージ
	//!
	protected $_display_error_message = '';

	//!
	//! @brief セッション名称
	//!
	private $_app_session_name = 'saturday-league';

	protected function GetAppSession()
	{
		$session = new Zend_Session_Namespace( $this->_app_session_name );
		return $session;
	}

	protected function ClearAppSession()
	{
		$this->GetAppSession();
		if( Zend_Session::namespaceIsset( $this->_app_session_name ) )
		{
			Zend_Session::namespaceUnset( $this->_app_session_name );
		}
	}

	protected function getAppSmaty()
	{
		$smarty = Zend_Registry::get('smarty');
		return $smarty;
	}

	protected function addErrorMessage( $error_mesaage )
	{
		$this->_display_error_message .= $error_mesaage;
	}

	protected function clearErrorMessage()
	{
		$this->_display_error_message = "";
	}
}


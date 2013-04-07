<?php
/**
 * トップ画面コントローラ
 */

require_once 'BaseController.php';

class ToppageController extends BaseController
{
	//!
	//! @brief indexアクション
	//!
	//! @note 最初のアクセス時に実行されます
	//!
	public function indexAction()
	{
		$this->displayLoginPage();
	}


	//!
	//! @brief ページ表示を行います
	//!
	private function displayLoginPage()
	{
		// エラーメッセージを設定
		$smarty = $this->getAppSmaty();
		$smarty->assign( "error_message", $this->_display_error_message );

		// テンプレートを設定
		$html = $smarty->fetch( 'index.tpl' );
		$this->getResponse()->setBody( $html );
	}

}

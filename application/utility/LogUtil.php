<?php
/**
 * ログ出力ユーティリティクラス
 */

require_once 'Zend/Config/Ini.php';
require_once 'Zend/Log.php';
require_once 'Zend/Log/Writer/Stream.php';

class LogUtil
{
	static public function LogSqlError( $log )
	{
		$log_filename = "error_sql.log";
		$logger = LogUtil::getLogger( $log_filename );
		$logger->log( $log, Zend_Log::ALERT );
	}

	static public function LogControllerError( $log )
	{
		$log_filename = "error_controller.log";
		$logger = LogUtil::getLogger( $log_filename );
		$logger->log( $log, Zend_Log::ALERT );
	}

	static private function getLogger( $log_filename )
	{
		$ini = new Zend_Config_Ini( APPLICATION_PATH . '/configs/application.ini', 'log' );
		$log_path = $ini->logoutpath;

		$log_path .= $log_filename;
		$writer = new Zend_Log_Writer_Stream( $log_path );
		$logger = new Zend_Log();
		$logger->addWriter( $writer );

		return $logger;
	}
}


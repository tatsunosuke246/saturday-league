<?php
/**
 * データベースアクセス基底クラス
 */

require_once 'Zend/Db.php';
//require_once 'LogUtil.php';

class BaseDao
{
	protected static $_db = null;

	public function __construct()
	{
		$this->getDb();
	}

	protected function GetDB()
	{
		if( self::$_db == null )
		{
			$ini = new Zend_Config_Ini( APPLICATION_PATH . '/configs/application.ini', 'database' );

			$database_config = array (
					'host'		=> $ini->host,
					'username'	=> $ini->username,
					'password'	=> $ini->password,
					'dbname'	=> $ini->dbname);

			self::$_db = Zend_Db::factory( 'Pdo_Mysql', $database_config );
			self::$_db->setFetchMode( Zend_db::FETCH_ASSOC );
		}
		return self::$_db;
	}

	protected function GetLastInsertIdImpl( $table_name )
	{
		$result = null;
		try
		{
			$db = $this->GetDB();
			$result = $db->lastInsertId( $table_name );
		}
		catch (Exception $e)
		{
			// throw $e;
		}
		return $result;
	}

	// ユーザーの削除(論理削除)
	protected function DeleteById( $table_name, $id_name, $id )
	{
		$current_time = date('Y-m-d H:i:s');

		$update_data = array(
						'DELETE_FLG' => 1,
						'UPDATE_DATE' => $current_time );
		$update_target_data = array( $id_name.' = '.$id );

		$result = null;
		try
		{
			$db = $this->GetDB();
			$result = $db->update( $table_name, $update_data, $update_target_data );
		}
		catch (Exception $e)
		{
			$this->SqlError( 'BaseDao::deleteById : table_name = '.$table_name.' id = '.$id.' : mes = '.$e->getMessage() );
		}
		return $result;
	}

	public function BeginTransaction()
	{
		$result = null;
		try
		{
			$db = $this->GetDB();
			$result = $db->beginTransaction();
		}
		catch (Exception $e)
		{
			//throw $e;
		}
		return $result;
	}

	public function Commit()
	{
		$result = null;
		try
		{
			$db = $this->GetDB();
			$result = $db->commit();
		}
		catch (Exception $e)
		{
			//throw $e;
		}
		return $result;
	}

	public function RollBack()
	{
		$result = null;
		try
		{
			$db = $this->GetDB();
			$result = $db->rollBack();
		}
		catch (Exception $e)
		{
			//throw $e;
		}
		return $result;
	}

	protected function SqlError( $log )
	{
		//LogUtil::LogSqlError( $log );
	}


}


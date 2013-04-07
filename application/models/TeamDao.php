<?php

require_once 'BaseDao.php';

/**
 * チームクラス
 */
class TeamDao extends BaseDao
{
	private $_table_name = 'TEAM';
	private $_primary_id_name = 'TEAM_ID';

	/**
	 * チームを挿入
	 *
	 * @param string 	$name 			チーム名称
	 * @param int 		$belong_number 	所属の部
	 * 
	 * @retval null以外 処理成功
	 * @retval null 	処理失敗
	 */
	public function Insert( $name, $belong_number )
	{
		$current_date = date('Y-m-d H:i:s');

		$result = null;
		$data = array(
						'NAME' => 			$name,
						'BELONG_NUMBER' => 	$belong_number,
						'CREATE_DATE' => 	$current_date,
						'UPDATE_DATE' => 	$current_date,
						'DELETE_FLG'  => 	(int)0
						 );
		try
		{
			$db = parent::GetDB();
			$result = $db->insert( $this->_table_name, $data );
		}
		catch( Exception $e )
		{
			parent::SqlError( 'TeamDao::insert : '.$name.' , '.$belong_number.': mes '.$e->getMessage() );
		}
		return $result;
	}

	/**
	 * 全チームデータを配列で取得
	 *
	 * @retval null以外 チーム配列(smarty向け形式)
	 * @retval null 	処理失敗
	 */
	public function GetArray()
	{
		$query = 'SELECT * FROM '.$this->_table_name.' WHERE DELETE_FLG = 0';
		$team_array = null;
		try
		{
			$db = parent::GetDB();
		 	$record = $db->fetchAll( $query );

		 	for( $cnt = 0; $cnt < count( $record ) ; $cnt++ )
		 	{
				$key = $record[ $cnt ]['TEAM_ID'];
				$value = $record[ $cnt ]['NAME'];
				$team_array[ $key ] = $value;
			}
		}
		catch( Exception $e )
		{
			parent::SqlError( 'TeamDao::GetArray failed : query '.$query.' : message '.$e->getMessage() );
		}
		return $team_array;
	}


	/**
	 * チームを取得(ID指定)
	 *
	 * @param int 		$id		取得対象のチームID
	 * 
	 * @retval null以外 チームデータ(連想配列 key:カラム名 value:データ )
	 * @retval null 	処理失敗
	 */
	public function GetDataFromId( $id )
	{
		$query = 'SELECT * FROM '.$this->_table_name.' WHERE TEAM_ID = '.$id.' AND DELETE_FLG = 0';
		$record = null;
		try
		{
			$db = parent::GetDB();
		 	$fetch_data = $db->fetchAll( $query );
		 	if( 0 < count( $fetch_data ) )
		 	{
		 		$record = $fetch_data[0];
		 	}
		}
		catch( Exception $e )
		{
			parent::SqlError( 'TeamDao::GetDataFromId failed : query '.$query.' : message '.$e->getMessage() );
		}
		return $record;
	}

	/**
	 * チームを削除
	 *
	 * @param int 		$id		削除対象のチームID
	 * 
	 * @retval null以外 処理成功
	 * @retval null 	処理失敗
	 */
	public function Delete( $id )
	{
		$result = $this->DeleteById( $this->_table_name, $this->_primary_id_name. $id );
		return $result;
	}
}


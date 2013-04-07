<?php

/**
 * スケジュールクラス
 */

require_once 'BaseDao.php';

define( "GAME_LIST_TYPE_ALL", 0);//全て
define( "GAME_LIST_TYPE_1", 1);//試合予定( 募集中 + 対戦決定)
define( "GAME_LIST_TYPE_2", 2);//試合予定( 募集中のみ )
define( "GAME_LIST_TYPE_3", 3);//試合予定( 対戦決定のみ )
define( "GAME_LIST_TYPE_4", 4);//終了( 消化 + 中止 )
define( "GAME_LIST_TYPE_5", 5);//終了( 消化のみ )
define( "GAME_LIST_TYPE_6", 6);//終了( 中止のみ )
define( "GAME_LIST_TYPE_7", 7);//未設定( 譲渡 + 募集終了 )
define( "GAME_LIST_TYPE_8", 8);//未設定( 譲渡のみ )
define( "GAME_LIST_TYPE_9", 9);//未設定( 募集終了のみ )

define( "BELONG_LIST_TYPE_ALL", 0);//全ての部
define( "BELONG_LIST_TYPE_1", 1);//１部
define( "BELONG_LIST_TYPE_2", 2);//２部
define( "BELONG_LIST_TYPE_3", 3);//３部
define( "BELONG_LIST_TYPE_4", 4);//４部
define( "BELONG_LIST_TYPE_5", 5);//５部
define( "BELONG_LIST_TYPE_OTHER", 6);//その他

define( "GAME_SCHEDULE_STATUS_1", 1);//募集中
define( "GAME_SCHEDULE_STATUS_2", 2);//対戦決定
define( "GAME_SCHEDULE_STATUS_3", 3);//消化
define( "GAME_SCHEDULE_STATUS_4", 4);//中止
define( "GAME_SCHEDULE_STATUS_5", 5);//譲渡
define( "GAME_SCHEDULE_STATUS_6", 6);//募集終了


class ScheduleDao extends BaseDao
{
	private $_table_name = 'GAME_SCHEDULE';
	private $_primary_id_name = 'GAME_SCHEDULE_ID';

	/**
	 * スケジュールを挿入
	 *
	 * @param date 		$game_date 				試合日
	 * @param time 		$game_start_time 		試合開始時間
	 * @param time 		$game_start_time 		試合終了時間
	 * @param string 	$ground 				グラウンド
	 * @param string 	$comment 				コメント
	 * @param int 		$team_id_1 				チーム1(主催チーム)
	 * @param int 		$team_id_2 				チーム2(対戦チーム)
	 * @param int 		$belong_number 			試合が行われる部
	 * @param int 		$game_schedule_status	スケジュールの状態
	 * @param int 		$umpire_type 			審判種別
	 * 
	 * @retval null以外 処理成功
	 * @retval null 	処理失敗
	 */
	public function Insert( $game_date, $game_start_time, $game_end_time, $ground, $comment, 
							$team_id_1, $team_id_2,
							$belong_number, $game_schedule_status, $umpire_type )
	{
		$result = null;
		$current_date = date('Y-m-d H:i:s');
		$data = array(
						'GAME_DATE' => 			$game_date,
						'GAME_START_TIME' => 	$game_start_time,
						'GAME_END_TIME' => 		$game_end_time,
						'GRAUND' => 			$ground,
						'COMMENT' => 			$comment,
						'TEAM_ID_1' => 			$team_id_1,
						'TEAM_ID_2' => 			$team_id_2,
						'BELONG_NUMBER' => 		$belong_number,
						'GAME_SCHEDULE_STATUS' => $game_schedule_status,
						'UMPIRE_TYPE' => 		$umpire_type,
						'CREATE_DATE' => 		$current_date,
						'UPDATE_DATE' => 		$current_date
						 );
		try
		{
			$db = parent::GetDB();
			$result = $db->insert( $this->_table_name, $data );
		}
		catch( Exception $e )
		{
			parent::SqlError( 'ScheduleDao::insert : '.$team_id_1.', '.$team_id_2.','.$belong_number.', : mes '.$e->getMessage() );
		}
		return $result;
	}

	/**
	 * スケジュールを更新
	 *
	 * @param int 		$schedule_id			スケジュールID
	 * @param date 		$game_date 				試合日
	 * @param time 		$game_start_time 		試合開始時間
	 * @param time 		$game_start_time 		試合終了時間
	 * @param string 	$ground 				グラウンド
	 * @param string 	$comment 				コメント
	 * @param int 		$team_id_1 				チーム1(主催チーム)
	 * @param int 		$team_id_2 				チーム2(対戦チーム)
	 * @param int 		$belong_number 			試合が行われる部
	 * @param int 		$game_schedule_status	スケジュールの状態
	 * @param int 		$batting_first_flg		先攻後攻フラグ
	 * @param int 		$game_result_type		試合結果種別(不戦敗の有無)
	 * @param int 		$game_complate_flg		イニング完了フラグ
	 * @param mixed 	$inning_data			イニングデータ
	 * 
	 * @retval null以外 処理成功
	 * @retval null 	処理失敗
	 */
	public function Update( $schedule_id, $game_date, $game_start_time, $game_end_time, $ground, $comment, 
							$team_id_1, $team_id_2,
							$belong_number, $game_schedule_status, $umpire_type, 
							$batting_first_flg, $game_result_type, $game_complate_flg, $inning_data )
	{
		$update_data['GAME_DATE'] 				= $game_date;
		$update_data['GAME_START_TIME'] 		= $game_start_time;
		$update_data['GAME_END_TIME'] 			= $game_end_time;
		$update_data['GRAUND'] 					= $ground;
		$update_data['COMMENT'] 				= $comment;
		$update_data['TEAM_ID_1'] 				= $team_id_1;
		$update_data['TEAM_ID_2'] 				= $team_id_2;
		$update_data['BELONG_NUMBER'] 			= $belong_number;
		$update_data['GAME_SCHEDULE_STATUS'] 	= $game_schedule_status;
		$update_data['UMPIRE_TYPE'] 			= $umpire_type;
		$update_data['BATTING_FIRST_FLG'] 		= $batting_first_flg;
		$update_data['GAME_RESULT_TYPE'] 		= $game_result_type;
		$update_data['GAME_COMPLATE_FLG'] 		= $game_complate_flg;

		//チーム1 イニングデータ
		$update_data['SCORE_TEAM_1_TOTAL'] = $inning_data['game_result_team1_score_total'];
		$update_data['SCORE_TEAM_1_INN1']  = $inning_data['game_result_team1_inn1'];
		$update_data['SCORE_TEAM_1_INN2']  = $inning_data['game_result_team1_inn2'];
		$update_data['SCORE_TEAM_1_INN3']  = $inning_data['game_result_team1_inn3'];
		$update_data['SCORE_TEAM_1_INN4']  = $inning_data['game_result_team1_inn4'];
		$update_data['SCORE_TEAM_1_INN5']  = $inning_data['game_result_team1_inn5'];
		$update_data['SCORE_TEAM_1_INN6']  = $inning_data['game_result_team1_inn6'];
		$update_data['SCORE_TEAM_1_INN7']  = $inning_data['game_result_team1_inn7'];
		$update_data['SCORE_TEAM_1_INN8']  = $inning_data['game_result_team1_inn8'];
		$update_data['SCORE_TEAM_1_INN9']  = $inning_data['game_result_team1_inn9'];

		$update_data['SCORE_TEAM_1_INN1_E'] = $inning_data['game_result_team1_inn1_e'];
		$update_data['SCORE_TEAM_1_INN2_E'] = $inning_data['game_result_team1_inn2_e'];
		$update_data['SCORE_TEAM_1_INN3_E'] = $inning_data['game_result_team1_inn3_e'];
		$update_data['SCORE_TEAM_1_INN4_E'] = $inning_data['game_result_team1_inn4_e'];
		$update_data['SCORE_TEAM_1_INN5_E'] = $inning_data['game_result_team1_inn5_e'];
		$update_data['SCORE_TEAM_1_INN6_E'] = $inning_data['game_result_team1_inn6_e'];
		$update_data['SCORE_TEAM_1_INN7_E'] = $inning_data['game_result_team1_inn7_e'];
		$update_data['SCORE_TEAM_1_INN8_E'] = $inning_data['game_result_team1_inn8_e'];
		$update_data['SCORE_TEAM_1_INN9_E'] = $inning_data['game_result_team1_inn9_e'];

		//チーム2 イニングデータ
		$update_data['SCORE_TEAM_2_TOTAL'] = $inning_data['game_result_team2_score_total'];
		$update_data['SCORE_TEAM_2_INN1']  = $inning_data['game_result_team2_inn1'];
		$update_data['SCORE_TEAM_2_INN2']  = $inning_data['game_result_team2_inn2'];
		$update_data['SCORE_TEAM_2_INN3']  = $inning_data['game_result_team2_inn3'];
		$update_data['SCORE_TEAM_2_INN4']  = $inning_data['game_result_team2_inn4'];
		$update_data['SCORE_TEAM_2_INN5']  = $inning_data['game_result_team2_inn5'];
		$update_data['SCORE_TEAM_2_INN6']  = $inning_data['game_result_team2_inn6'];
		$update_data['SCORE_TEAM_2_INN7']  = $inning_data['game_result_team2_inn7'];
		$update_data['SCORE_TEAM_2_INN8']  = $inning_data['game_result_team2_inn8'];
		$update_data['SCORE_TEAM_2_INN9']  = $inning_data['game_result_team2_inn9'];

		$update_data['SCORE_TEAM_2_INN1_E'] = $inning_data['game_result_team2_inn1_e'];
		$update_data['SCORE_TEAM_2_INN2_E'] = $inning_data['game_result_team2_inn2_e'];
		$update_data['SCORE_TEAM_2_INN3_E'] = $inning_data['game_result_team2_inn3_e'];
		$update_data['SCORE_TEAM_2_INN4_E'] = $inning_data['game_result_team2_inn4_e'];
		$update_data['SCORE_TEAM_2_INN5_E'] = $inning_data['game_result_team2_inn5_e'];
		$update_data['SCORE_TEAM_2_INN6_E'] = $inning_data['game_result_team2_inn6_e'];
		$update_data['SCORE_TEAM_2_INN7_E'] = $inning_data['game_result_team2_inn7_e'];
		$update_data['SCORE_TEAM_2_INN8_E'] = $inning_data['game_result_team2_inn8_e'];
		$update_data['SCORE_TEAM_2_INN9_E'] = $inning_data['game_result_team2_inn9_e'];

		//更新日時
		$current_date = date('Y-m-d H:i:s');
		$update_data['UPDATE_DATE'] = $current_date;

		$update_target_data = array( $this->_primary_id_name.' = '.$schedule_id );
		$result = null;
		try
		{
			$db = parent::GetDB();
			$result = $db->update( $this->_table_name, $update_data, $update_target_data );
		}
		catch( Exception $e )
		{
			parent::SqlError( 'TeamDao	::insert : '.$name,' , '.$belong_number.': mes '.$e->getMessage() );
		}
		return $result;
	}

	/**
	 * スケジュールを検索(部で検索)
	 *
	 * @param int 		$game_list_type		検索種別(GAME_LIST_TYPE_X)
	 * @param date 		$belong_list_type 	検索対象の部(BELONG_LIST_TYPE_X)
	 * 
	 * @retval null以外 スケジュール配列(smarty向け形式)
	 * @retval null 	処理失敗
	 */
	public function GetGameList( $game_list_type, $belong_list_type )
	{
		if( $belong_list_type == BELONG_LIST_TYPE_ALL )
		{
			if( $game_list_type == GAME_LIST_TYPE_ALL )
			{
				$query = 'SELECT * FROM '.$this->_table_name.
				' WHERE DELETE_FLG = 0 ORDER BY GAME_DATE DESC';
			}
			else if( $game_list_type == GAME_LIST_TYPE_1 )//試合予定( 募集中 + 対戦決定)
			{
				$query = 'SELECT * FROM '.$this->_table_name.
				' WHERE ( GAME_SCHEDULE_STATUS = '.GAME_SCHEDULE_STATUS_1.' OR GAME_SCHEDULE_STATUS = '.GAME_SCHEDULE_STATUS_2.
				' ) AND DELETE_FLG = 0 ORDER BY GAME_DATE DESC';
			}
			else if( $game_list_type == GAME_LIST_TYPE_2 )//試合予定( 募集中のみ )
			{
				$query = 'SELECT * FROM '.$this->_table_name.' WHERE GAME_SCHEDULE_STATUS = '.GAME_SCHEDULE_STATUS_1.' AND DELETE_FLG = 0 ORDER BY GAME_DATE DESC';
			}
			else if( $game_list_type == GAME_LIST_TYPE_3 )//試合予定( 対戦決定のみ )
			{
				$query = 'SELECT * FROM '.$this->_table_name.' WHERE GAME_SCHEDULE_STATUS = '.GAME_SCHEDULE_STATUS_2.' AND DELETE_FLG = 0 ORDER BY GAME_DATE DESC';
			}
			else if( $game_list_type == GAME_LIST_TYPE_4 )//終了( 消化 + 中止 )
			{
				$query = 'SELECT * FROM '.$this->_table_name.
				' WHERE ( GAME_SCHEDULE_STATUS = '.GAME_SCHEDULE_STATUS_3.' OR GAME_SCHEDULE_STATUS = '.GAME_SCHEDULE_STATUS_4.
				' ) AND DELETE_FLG = 0 ORDER BY GAME_DATE DESC';
			}
			else if( $game_list_type == GAME_LIST_TYPE_5 )//終了( 消化のみ )
			{
				$query = 'SELECT * FROM '.$this->_table_name.' WHERE GAME_SCHEDULE_STATUS = '.GAME_SCHEDULE_STATUS_3.' AND DELETE_FLG = 0 ORDER BY GAME_DATE DESC';
			}
			else if( $game_list_type == GAME_LIST_TYPE_6 )//終了( 中止のみ )
			{
				$query = 'SELECT * FROM '.$this->_table_name.' WHERE GAME_SCHEDULE_STATUS = '.GAME_SCHEDULE_STATUS_4.' AND DELETE_FLG = 0 ORDER BY GAME_DATE DESC';
			}
			else if( $game_list_type == GAME_LIST_TYPE_7 )//未設定( 譲渡 + 募集終了 )
			{
				$query = 'SELECT * FROM '.$this->_table_name.
				' WHERE ( GAME_SCHEDULE_STATUS = '.GAME_SCHEDULE_STATUS_5.' OR GAME_SCHEDULE_STATUS = '.GAME_SCHEDULE_STATUS_6.
				' ) AND DELETE_FLG = 0 ORDER BY GAME_DATE DESC';
			}
			else if( $game_list_type == GAME_LIST_TYPE_8 )//未設定( 譲渡のみ )
			{
				$query = 'SELECT * FROM '.$this->_table_name.' WHERE GAME_SCHEDULE_STATUS = '.GAME_SCHEDULE_STATUS_5.' AND DELETE_FLG = 0 ORDER BY GAME_DATE DESC';
			}
			else if( $game_list_type == GAME_LIST_TYPE_9 )//未設定( 募集終了のみ )
			{
				$query = 'SELECT * FROM '.$this->_table_name.' WHERE GAME_SCHEDULE_STATUS = '.GAME_SCHEDULE_STATUS_6.' AND DELETE_FLG = 0 ORDER BY GAME_DATE DESC';
			}
		}
		else
		{
			if( $game_list_type == GAME_LIST_TYPE_ALL )
			{
				$query = 'SELECT * FROM '.$this->_table_name.
				' WHERE BELONG_NUMBER = '.$belong_list_type.' AND DELETE_FLG = 0 ORDER BY GAME_DATE DESC';
			}
			else if( $game_list_type == GAME_LIST_TYPE_1 )//試合予定( 募集中 + 対戦決定)
			{
				$query = 'SELECT * FROM '.$this->_table_name.
				' WHERE BELONG_NUMBER = '.$belong_list_type.' AND ( GAME_SCHEDULE_STATUS = '.GAME_SCHEDULE_STATUS_1.' OR GAME_SCHEDULE_STATUS = '.GAME_SCHEDULE_STATUS_2.
				' ) AND DELETE_FLG = 0 ORDER BY GAME_DATE DESC';
			}
			else if( $game_list_type == GAME_LIST_TYPE_2 )//試合予定( 募集中のみ )
			{
				$query = 'SELECT * FROM '.$this->_table_name.' WHERE BELONG_NUMBER = '.$belong_list_type.' AND GAME_SCHEDULE_STATUS = '.GAME_SCHEDULE_STATUS_1.' AND DELETE_FLG = 0 ORDER BY GAME_DATE DESC';
			}
			else if( $game_list_type == GAME_LIST_TYPE_3 )//試合予定( 対戦決定のみ )
			{
				$query = 'SELECT * FROM '.$this->_table_name.' WHERE BELONG_NUMBER = '.$belong_list_type.' AND GAME_SCHEDULE_STATUS = '.GAME_SCHEDULE_STATUS_2.' AND DELETE_FLG = 0 ORDER BY GAME_DATE DESC';
			}
			else if( $game_list_type == GAME_LIST_TYPE_4 )//終了( 消化 + 中止 )
			{
				$query = 'SELECT * FROM '.$this->_table_name.
				' WHERE BELONG_NUMBER = '.$belong_list_type.' AND ( GAME_SCHEDULE_STATUS = '.GAME_SCHEDULE_STATUS_3.' OR GAME_SCHEDULE_STATUS = '.GAME_SCHEDULE_STATUS_4.
				' ) AND DELETE_FLG = 0 ORDER BY GAME_DATE DESC';
			}
			else if( $game_list_type == GAME_LIST_TYPE_5 )//終了( 消化のみ )
			{
				$query = 'SELECT * FROM '.$this->_table_name.' WHERE BELONG_NUMBER = '.$belong_list_type.' AND GAME_SCHEDULE_STATUS = '.GAME_SCHEDULE_STATUS_3.' AND DELETE_FLG = 0 ORDER BY GAME_DATE DESC';
			}
			else if( $game_list_type == GAME_LIST_TYPE_6 )//終了( 中止のみ )
			{
				$query = 'SELECT * FROM '.$this->_table_name.' WHERE BELONG_NUMBER = '.$belong_list_type.' AND GAME_SCHEDULE_STATUS = '.GAME_SCHEDULE_STATUS_4.' AND DELETE_FLG = 0 ORDER BY GAME_DATE DESC';
			}
			else if( $game_list_type == GAME_LIST_TYPE_7 )//未設定( 譲渡 + 募集終了 )
			{
				$query = 'SELECT * FROM '.$this->_table_name.
				' WHERE BELONG_NUMBER = '.$belong_list_type.' AND ( GAME_SCHEDULE_STATUS = '.GAME_SCHEDULE_STATUS_5.' OR GAME_SCHEDULE_STATUS = '.GAME_SCHEDULE_STATUS_6.
				' ) AND DELETE_FLG = 0 ORDER BY GAME_DATE DESC';
			}
			else if( $game_list_type == GAME_LIST_TYPE_8 )//未設定( 譲渡のみ )
			{
				$query = 'SELECT * FROM '.$this->_table_name.' WHERE BELONG_NUMBER = '.$belong_list_type.' AND GAME_SCHEDULE_STATUS = '.GAME_SCHEDULE_STATUS_5.' AND DELETE_FLG = 0 ORDER BY GAME_DATE DESC';
			}
			else if( $game_list_type == GAME_LIST_TYPE_9 )//未設定( 募集終了のみ )
			{
				$query = 'SELECT * FROM '.$this->_table_name.' WHERE BELONG_NUMBER = '.$belong_list_type.' AND GAME_SCHEDULE_STATUS = '.GAME_SCHEDULE_STATUS_6.' AND DELETE_FLG = 0 ORDER BY GAME_DATE DESC';
			}
		}

		$durning_offser_game = null;
		try
		{
			$db = parent::GetDB();
		 	$record = $db->fetchAll( $query );

		 	for( $cnt = 0; $cnt < count( $record ) ; $cnt++ )
		 	{
		 		$durning_offser_game['id'][] = 						$record[ $cnt ]['GAME_SCHEDULE_ID'];
		 		$durning_offser_game['date'][] = 					$record[ $cnt ]['GAME_DATE'];
		 		$durning_offser_game['game_start_time'][] = 		$record[ $cnt ]['GAME_START_TIME'];
		 		$durning_offser_game['game_end_time'][] = 			$record[ $cnt ]['GAME_END_TIME'];
		 		$durning_offser_game['team_id_1'][] = 				$record[ $cnt ]['TEAM_ID_1'];
		 		$durning_offser_game['team_id_2'][] = 				$record[ $cnt ]['TEAM_ID_2'];

		 		$durning_offser_game['ground'][] = 					$record[ $cnt ]['GRAUND'];
				$durning_offser_game['game_comment'][] = 			$record[ $cnt ]['COMMENT'];
		 		$durning_offser_game['belong_number'][] = 			$record[ $cnt ]['BELONG_NUMBER'];
				$durning_offser_game['game_schedule_status'][] = 	$record[ $cnt ]['GAME_SCHEDULE_STATUS'];
				$durning_offser_game['batting_first_flg'][] = 		$record[ $cnt ]['BATTING_FIRST_FLG'];
				$durning_offser_game['game_result_type'][] = 		$record[ $cnt ]['GAME_RESULT_TYPE'];
				$durning_offser_game['game_complate_flg'][] = 		$record[ $cnt ]['GAME_COMPLATE_FLG'];

				//チーム1 イニングデータ
				$durning_offser_game['team1_inn1'][] = $record[ $cnt ]['SCORE_TEAM_1_INN1'];
				$durning_offser_game['team1_inn2'][] = $record[ $cnt ]['SCORE_TEAM_1_INN2'];
				$durning_offser_game['team1_inn3'][] = $record[ $cnt ]['SCORE_TEAM_1_INN3'];
				$durning_offser_game['team1_inn4'][] = $record[ $cnt ]['SCORE_TEAM_1_INN4'];
				$durning_offser_game['team1_inn5'][] = $record[ $cnt ]['SCORE_TEAM_1_INN5'];
				$durning_offser_game['team1_inn6'][] = $record[ $cnt ]['SCORE_TEAM_1_INN6'];
				$durning_offser_game['team1_inn7'][] = $record[ $cnt ]['SCORE_TEAM_1_INN7'];
				$durning_offser_game['team1_inn8'][] = $record[ $cnt ]['SCORE_TEAM_1_INN8'];
				$durning_offser_game['team1_inn9'][] = $record[ $cnt ]['SCORE_TEAM_1_INN9'];

				$durning_offser_game['team1_inn1_e'][] = $record[ $cnt ]['SCORE_TEAM_1_INN1_E'];
				$durning_offser_game['team1_inn2_e'][] = $record[ $cnt ]['SCORE_TEAM_1_INN2_E'];
				$durning_offser_game['team1_inn3_e'][] = $record[ $cnt ]['SCORE_TEAM_1_INN3_E'];
				$durning_offser_game['team1_inn4_e'][] = $record[ $cnt ]['SCORE_TEAM_1_INN4_E'];
				$durning_offser_game['team1_inn5_e'][] = $record[ $cnt ]['SCORE_TEAM_1_INN5_E'];
				$durning_offser_game['team1_inn6_e'][] = $record[ $cnt ]['SCORE_TEAM_1_INN6_E'];
				$durning_offser_game['team1_inn7_e'][] = $record[ $cnt ]['SCORE_TEAM_1_INN7_E'];
				$durning_offser_game['team1_inn8_e'][] = $record[ $cnt ]['SCORE_TEAM_1_INN8_E'];
				$durning_offser_game['team1_inn9_e'][] = $record[ $cnt ]['SCORE_TEAM_1_INN9_E'];

				$durning_offser_game['team1_total'][] = $record[ $cnt ]['SCORE_TEAM_1_TOTAL'];

				//チーム2 イニングデータ
				$durning_offser_game['team2_inn1'][] = $record[ $cnt ]['SCORE_TEAM_2_INN1'];
				$durning_offser_game['team2_inn2'][] = $record[ $cnt ]['SCORE_TEAM_2_INN2'];
				$durning_offser_game['team2_inn3'][] = $record[ $cnt ]['SCORE_TEAM_2_INN3'];
				$durning_offser_game['team2_inn4'][] = $record[ $cnt ]['SCORE_TEAM_2_INN4'];
				$durning_offser_game['team2_inn5'][] = $record[ $cnt ]['SCORE_TEAM_2_INN5'];
				$durning_offser_game['team2_inn6'][] = $record[ $cnt ]['SCORE_TEAM_2_INN6'];
				$durning_offser_game['team2_inn7'][] = $record[ $cnt ]['SCORE_TEAM_2_INN7'];
				$durning_offser_game['team2_inn8'][] = $record[ $cnt ]['SCORE_TEAM_2_INN8'];
				$durning_offser_game['team2_inn9'][] = $record[ $cnt ]['SCORE_TEAM_2_INN9'];

				$durning_offser_game['team2_inn1_e'][] = $record[ $cnt ]['SCORE_TEAM_2_INN1_E'];
				$durning_offser_game['team2_inn2_e'][] = $record[ $cnt ]['SCORE_TEAM_2_INN2_E'];
				$durning_offser_game['team2_inn3_e'][] = $record[ $cnt ]['SCORE_TEAM_2_INN3_E'];
				$durning_offser_game['team2_inn4_e'][] = $record[ $cnt ]['SCORE_TEAM_2_INN4_E'];
				$durning_offser_game['team2_inn5_e'][] = $record[ $cnt ]['SCORE_TEAM_2_INN5_E'];
				$durning_offser_game['team2_inn6_e'][] = $record[ $cnt ]['SCORE_TEAM_2_INN6_E'];
				$durning_offser_game['team2_inn7_e'][] = $record[ $cnt ]['SCORE_TEAM_2_INN7_E'];
				$durning_offser_game['team2_inn8_e'][] = $record[ $cnt ]['SCORE_TEAM_2_INN8_E'];
				$durning_offser_game['team2_inn9_e'][] = $record[ $cnt ]['SCORE_TEAM_2_INN9_E'];

				$durning_offser_game['team2_total'][] = $record[ $cnt ]['SCORE_TEAM_2_TOTAL'];
		 	}
		}
		catch( Exception $e )
		{
			parent::SqlError( 'ScheduleDao::GetDurningOffserGame failed : query '.$query.' : message '.$e->getMessage() );
		}
		return $durning_offser_game;
	}

	/**
	 * スケジュールを取得(チームで検索)
	 *
	 * @param int 		$game_list_type		検索種別(GAME_LIST_TYPE_X)
	 * @param int 		$team_id 			検索対象のチームID
	 * 
	 * @retval null以外 スケジュール配列(smarty向け形式)
	 * @retval null 	処理失敗
	 */
	public function GetGameListFromTeamid( $game_list_type, $team_id )
	{
		$query = '';

		if( $game_list_type == GAME_LIST_TYPE_ALL )
		{
			$query = 'SELECT * FROM '.$this->_table_name.
			' WHERE ( TEAM_ID_1 = '.$team_id.' OR TEAM_ID_2 = '.$team_id.
			' ) AND DELETE_FLG = 0 ORDER BY GAME_DATE DESC';
		}
		else if( $game_list_type == GAME_LIST_TYPE_1 )//試合予定( 募集中 + 対戦決定)
		{
			$query = 'SELECT * FROM '.$this->_table_name.
			' WHERE ( GAME_SCHEDULE_STATUS = '.GAME_SCHEDULE_STATUS_1.' OR GAME_SCHEDULE_STATUS = '.GAME_SCHEDULE_STATUS_2.
			' ) AND ( TEAM_ID_1 = '.$team_id.' OR TEAM_ID_2 = '.$team_id.
			' ) AND DELETE_FLG = 0 ORDER BY GAME_DATE DESC';
		}
		else if( $game_list_type == GAME_LIST_TYPE_2 )//試合予定( 募集中のみ )
		{
			$query = 'SELECT * FROM '.$this->_table_name.' WHERE GAME_SCHEDULE_STATUS = '.GAME_SCHEDULE_STATUS_1.
			' AND ( TEAM_ID_1 = '.$team_id.' OR TEAM_ID_2 = '.$team_id.
			' ) AND DELETE_FLG = 0 ORDER BY GAME_DATE DESC';
		}
		else if( $game_list_type == GAME_LIST_TYPE_3 )//試合予定( 対戦決定のみ )
		{
			$query = 'SELECT * FROM '.$this->_table_name.' WHERE GAME_SCHEDULE_STATUS = '.GAME_SCHEDULE_STATUS_2.
			' AND ( TEAM_ID_1 = '.$team_id.' OR TEAM_ID_2 = '.$team_id.
			' ) AND DELETE_FLG = 0 ORDER BY GAME_DATE DESC';
		}
		else if( $game_list_type == GAME_LIST_TYPE_4 )//終了( 消化 + 中止 )
		{
			$query = 'SELECT * FROM '.$this->_table_name.
			' WHERE ( GAME_SCHEDULE_STATUS = '.GAME_SCHEDULE_STATUS_3.' OR GAME_SCHEDULE_STATUS = '.GAME_SCHEDULE_STATUS_4.
			' ) AND ( TEAM_ID_1 = '.$team_id.' OR TEAM_ID_2 = '.$team_id.
			' ) AND DELETE_FLG = 0 ORDER BY GAME_DATE DESC';
		}
		else if( $game_list_type == GAME_LIST_TYPE_5 )//終了( 消化のみ )
		{
			$query = 'SELECT * FROM '.$this->_table_name.' WHERE GAME_SCHEDULE_STATUS = '.GAME_SCHEDULE_STATUS_3.
			' AND ( TEAM_ID_1 = '.$team_id.' OR TEAM_ID_2 = '.$team_id.
			') AND DELETE_FLG = 0 ORDER BY GAME_DATE DESC';
		}
		else if( $game_list_type == GAME_LIST_TYPE_6 )//終了( 中止のみ )
		{
			$query = 'SELECT * FROM '.$this->_table_name.' WHERE GAME_SCHEDULE_STATUS = '.GAME_SCHEDULE_STATUS_4.
			' AND ( TEAM_ID_1 = '.$team_id.' OR TEAM_ID_2 = '.$team_id.
			') AND DELETE_FLG = 0 ORDER BY GAME_DATE DESC';
		}
		else if( $game_list_type == GAME_LIST_TYPE_7 )//未設定( 譲渡 + 募集終了 )
		{
			$query = 'SELECT * FROM '.$this->_table_name.
			' WHERE ( GAME_SCHEDULE_STATUS = '.GAME_SCHEDULE_STATUS_5.' OR GAME_SCHEDULE_STATUS = '.GAME_SCHEDULE_STATUS_6.
			' ) AND ( TEAM_ID_1 = '.$team_id.' OR TEAM_ID_2 = '.$team_id.
			' ) AND DELETE_FLG = 0 ORDER BY GAME_DATE DESC';
		}
		else if( $game_list_type == GAME_LIST_TYPE_8 )//未設定( 譲渡のみ )
		{
			$query = 'SELECT * FROM '.$this->_table_name.' WHERE GAME_SCHEDULE_STATUS = '.GAME_SCHEDULE_STATUS_5.
			' AND ( TEAM_ID_1 = '.$team_id.' OR TEAM_ID_2 = '.$team_id.
			') AND DELETE_FLG = 0 ORDER BY GAME_DATE DESC';
		}
		else if( $game_list_type == GAME_LIST_TYPE_9 )//未設定( 募集終了のみ )
		{
			$query = 'SELECT * FROM '.$this->_table_name.' WHERE GAME_SCHEDULE_STATUS = '.GAME_SCHEDULE_STATUS_6.
			' AND ( TEAM_ID_1 = '.$team_id.' OR TEAM_ID_2 = '.$team_id.
			') AND DELETE_FLG = 0 ORDER BY GAME_DATE DESC';
		}

		$durning_offser_game = null;
		try
		{
			$db = parent::GetDB();
		 	$record = $db->fetchAll( $query );

		 	for( $cnt = 0; $cnt < count( $record ) ; $cnt++ )
		 	{
		 		$durning_offser_game['id'][] = 						$record[ $cnt ]['GAME_SCHEDULE_ID'];
		 		$durning_offser_game['date'][] = 					$record[ $cnt ]['GAME_DATE'];
		 		$durning_offser_game['game_start_time'][] = 		$record[ $cnt ]['GAME_START_TIME'];
		 		$durning_offser_game['game_end_time'][] = 			$record[ $cnt ]['GAME_END_TIME'];
		 		$durning_offser_game['team_id_1'][] = 				$record[ $cnt ]['TEAM_ID_1'];
		 		$durning_offser_game['team_id_2'][] = 				$record[ $cnt ]['TEAM_ID_2'];

		 		$durning_offser_game['ground'][] = 					$record[ $cnt ]['GRAUND'];
				$durning_offser_game['game_comment'][] = 			$record[ $cnt ]['COMMENT'];
		 		$durning_offser_game['belong_number'][] = 			$record[ $cnt ]['BELONG_NUMBER'];
				$durning_offser_game['game_schedule_status'][] = 	$record[ $cnt ]['GAME_SCHEDULE_STATUS'];
				$durning_offser_game['batting_first_flg'][] = 		$record[ $cnt ]['BATTING_FIRST_FLG'];
				$durning_offser_game['game_result_type'][] = 		$record[ $cnt ]['GAME_RESULT_TYPE'];
				$durning_offser_game['game_complate_flg'][] = 		$record[ $cnt ]['GAME_COMPLATE_FLG'];

				//チーム1 イニングデータ
				$durning_offser_game['team1_inn1'][] = $record[ $cnt ]['SCORE_TEAM_1_INN1'];
				$durning_offser_game['team1_inn2'][] = $record[ $cnt ]['SCORE_TEAM_1_INN2'];
				$durning_offser_game['team1_inn3'][] = $record[ $cnt ]['SCORE_TEAM_1_INN3'];
				$durning_offser_game['team1_inn4'][] = $record[ $cnt ]['SCORE_TEAM_1_INN4'];
				$durning_offser_game['team1_inn5'][] = $record[ $cnt ]['SCORE_TEAM_1_INN5'];
				$durning_offser_game['team1_inn6'][] = $record[ $cnt ]['SCORE_TEAM_1_INN6'];
				$durning_offser_game['team1_inn7'][] = $record[ $cnt ]['SCORE_TEAM_1_INN7'];
				$durning_offser_game['team1_inn8'][] = $record[ $cnt ]['SCORE_TEAM_1_INN8'];
				$durning_offser_game['team1_inn9'][] = $record[ $cnt ]['SCORE_TEAM_1_INN9'];

				$durning_offser_game['team1_inn1_e'][] = $record[ $cnt ]['SCORE_TEAM_1_INN1_E'];
				$durning_offser_game['team1_inn2_e'][] = $record[ $cnt ]['SCORE_TEAM_1_INN2_E'];
				$durning_offser_game['team1_inn3_e'][] = $record[ $cnt ]['SCORE_TEAM_1_INN3_E'];
				$durning_offser_game['team1_inn4_e'][] = $record[ $cnt ]['SCORE_TEAM_1_INN4_E'];
				$durning_offser_game['team1_inn5_e'][] = $record[ $cnt ]['SCORE_TEAM_1_INN5_E'];
				$durning_offser_game['team1_inn6_e'][] = $record[ $cnt ]['SCORE_TEAM_1_INN6_E'];
				$durning_offser_game['team1_inn7_e'][] = $record[ $cnt ]['SCORE_TEAM_1_INN7_E'];
				$durning_offser_game['team1_inn8_e'][] = $record[ $cnt ]['SCORE_TEAM_1_INN8_E'];
				$durning_offser_game['team1_inn9_e'][] = $record[ $cnt ]['SCORE_TEAM_1_INN9_E'];

				$durning_offser_game['team1_total'][] = $record[ $cnt ]['SCORE_TEAM_1_TOTAL'];

				//チーム2 イニングデータ
				$durning_offser_game['team2_inn1'][] = $record[ $cnt ]['SCORE_TEAM_2_INN1'];
				$durning_offser_game['team2_inn2'][] = $record[ $cnt ]['SCORE_TEAM_2_INN2'];
				$durning_offser_game['team2_inn3'][] = $record[ $cnt ]['SCORE_TEAM_2_INN3'];
				$durning_offser_game['team2_inn4'][] = $record[ $cnt ]['SCORE_TEAM_2_INN4'];
				$durning_offser_game['team2_inn5'][] = $record[ $cnt ]['SCORE_TEAM_2_INN5'];
				$durning_offser_game['team2_inn6'][] = $record[ $cnt ]['SCORE_TEAM_2_INN6'];
				$durning_offser_game['team2_inn7'][] = $record[ $cnt ]['SCORE_TEAM_2_INN7'];
				$durning_offser_game['team2_inn8'][] = $record[ $cnt ]['SCORE_TEAM_2_INN8'];
				$durning_offser_game['team2_inn9'][] = $record[ $cnt ]['SCORE_TEAM_2_INN9'];

				$durning_offser_game['team2_inn1_e'][] = $record[ $cnt ]['SCORE_TEAM_2_INN1_E'];
				$durning_offser_game['team2_inn2_e'][] = $record[ $cnt ]['SCORE_TEAM_2_INN2_E'];
				$durning_offser_game['team2_inn3_e'][] = $record[ $cnt ]['SCORE_TEAM_2_INN3_E'];
				$durning_offser_game['team2_inn4_e'][] = $record[ $cnt ]['SCORE_TEAM_2_INN4_E'];
				$durning_offser_game['team2_inn5_e'][] = $record[ $cnt ]['SCORE_TEAM_2_INN5_E'];
				$durning_offser_game['team2_inn6_e'][] = $record[ $cnt ]['SCORE_TEAM_2_INN6_E'];
				$durning_offser_game['team2_inn7_e'][] = $record[ $cnt ]['SCORE_TEAM_2_INN7_E'];
				$durning_offser_game['team2_inn8_e'][] = $record[ $cnt ]['SCORE_TEAM_2_INN8_E'];
				$durning_offser_game['team2_inn9_e'][] = $record[ $cnt ]['SCORE_TEAM_2_INN9_E'];

				$durning_offser_game['team2_total'][] = $record[ $cnt ]['SCORE_TEAM_2_TOTAL'];
		 	}
		}
		catch( Exception $e )
		{
			parent::SqlError( 'ScheduleDao::GetGameListFromTeamid failed : query '.$query.' : message '.$e->getMessage() );
		}
		return $durning_offser_game;
	}

	/**
	 * スケジュールを取得(ID指定)
	 *
	 * @param int 		$schedule_id	取得対象のスケジュールID
	 * 
	 * @retval null以外 スケジュール(連想配列 key:カラム名 value:データ )
	 * @retval null 	処理失敗
	 */
	public function GetDataFromId( $schedule_id )
	{
		$query = 'SELECT * FROM '.$this->_table_name.' WHERE '.$this->_primary_id_name.' = '.$schedule_id.' AND DELETE_FLG = 0';
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
			parent::SqlError( 'ScheduleDao::GetDataFromId failed : query '.$query.' : message '.$e->getMessage() );
		}
		return $record;
	}

	/**
	 * スケジュールを取得(チームID指定。成績表用)
	 *
	 * @param int 		$team_id	取得対象のチームID
	 * 
	 * @retval null以外 スケジュール配列(smarty向け形式)
	 * @retval null 	処理失敗
	 */
	public function GetGameDataByTeamID( $team_id )
	{
		$query = 'SELECT * FROM '.$this->_table_name.
		' WHERE ( TEAM_ID_1 = '.$team_id.' OR TEAM_ID_2 = '.$team_id.
		' ) AND ( GAME_SCHEDULE_STATUS = '.GAME_SCHEDULE_STATUS_2.' OR GAME_SCHEDULE_STATUS = '.GAME_SCHEDULE_STATUS_3.
		' ) AND DELETE_FLG = 0';

		$record = null;
		try
		{
			$db = parent::GetDB();
		 	$fetch_data = $db->fetchAll( $query );

		 	if( 0 < count( $fetch_data ) )
		 	{
		 		$record = $fetch_data;
		 	}
		}
		catch( Exception $e )
		{
			parent::SqlError( 'ScheduleDao::GetDataFromId failed : query '.$query.' : message '.$e->getMessage() );
		}
		return $record;
	}

	/**
	 * スケジュールを削除
	 *
	 * @param int 		$id		削除対象のスケジュールID
	 * 
	 * @retval null以外 処理成功
	 * @retval null 	処理失敗
	 */
	public function Delete( $id )
	{
		$result = $this->DeleteById( $this->_table_name, $this->_primary_id_name, $id );
		return $result;
	}
}


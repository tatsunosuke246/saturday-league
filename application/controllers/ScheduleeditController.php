<?php

require_once 'BaseController.php';
require_once 'ScheduleDao.php';
require_once 'TeamDao.php';
require_once 'FormUtil.php';

/**
 * スケジュール編集画面 コントローラ
 */
class ScheduleeditController extends BaseController
{
	private $_paramname_select_game_belong_type = 'select_belong_type';

	private $_error_update_password = 'パスワードが違うため更新できませんでした。';


	//!
	//! @brief indexアクション
	//!
	//! @note 最初のアクセス時に実行されます
	//!
	public function startAction()
	{
		parent::clearErrorMessage();

		//試合ID:0 (新規作成) をセッション保存
		$session = parent::GetAppSession();
		$session->schedule_id = 0;
/*
		$team_dao = new TeamDao();
		$team_dao->Insert( 'ANAフライヤーズ', 1 );
		$team_dao->Insert( 'ユニティー', 1 );
		$team_dao->Insert( '大和ＢＢＣ', 1 );
		$team_dao->Insert( 'タドポール', 1 );
		$team_dao->Insert( 'モスキート', 1 );
		$team_dao->Insert( 'ボトムナイン', 1 );

		$team_dao->Insert( 'ボムス', 2 );
		$team_dao->Insert( 'ポッポーズ', 2 );
		$team_dao->Insert( 'フェニックス', 2 );
		$team_dao->Insert( 'マリナーズ', 2 );
		$team_dao->Insert( '東深澤学園', 2 );
		$team_dao->Insert( 'ルーマーズ', 2 );

		$team_dao->Insert( 'ダイナマイツ', 3 );
		$team_dao->Insert( 'ＲＩＮＧＳ', 3 );
		$team_dao->Insert( 'ＴＨＬ', 3 );
		$team_dao->Insert( 'ラリーブレーブス', 3 );
		$team_dao->Insert( 'ワイルドフェロー', 3 );
		$team_dao->Insert( 'ＢＢジャンキーズ', 3 );

		$team_dao->Insert( 'トリックス', 4 );
		$team_dao->Insert( 'ＪＢ’Ｓ', 4 );
		$team_dao->Insert( 'ビランズ', 4 );
		$team_dao->Insert( 'マルボロ', 4 );
		$team_dao->Insert( '雪谷ベースボールクラブ', 4 );
		$team_dao->Insert( '千種倶楽部', 4 );

		$team_dao->Insert( 'ドリフターズ', 5 );
		$team_dao->Insert( 'メップス', 5 );
		$team_dao->Insert( '東京ＣＨＡＭＰ', 5 );
		$team_dao->Insert( 'レッドエイリアス', 5 );
		$team_dao->Insert( '東京ゲッツ', 5 );
		$team_dao->Insert( 'ゼロワン', 5 );
*/
		$this->displayLoginPage();
	}

	public function editAction()
	{
		parent::clearErrorMessage();

		//試合IDを取得してセッション保存
		$session = parent::GetAppSession();
		$schedule_id = $this->getRequest()->getParam('schedule_id');
		$session->schedule_id = $schedule_id;

		$this->displayLoginPage();
	}

	public function addAction()
	{
		parent::clearErrorMessage();

		$schedule_dao = new ScheduleDao();

		//開始日と時間の設定
		$game_date_month = $this->getRequest()->getParam('game_date_month');
		$game_date_day = $this->getRequest()->getParam('game_date_day');
		$game_date = sprintf( "2013-%02d-%02d", $game_date_month, $game_date_day );

		$game_start_hour = $this->getRequest()->getParam('game_start_hour');
		$game_start_minutes = $this->getRequest()->getParam('game_start_minutes');
		$game_start_time = sprintf( "%02d:%02d", $game_start_hour, $game_start_minutes );

		$game_end_hour = $this->getRequest()->getParam('game_end_hour');
		$game_end_minutes = $this->getRequest()->getParam('game_end_minutes');
		$game_end_time = sprintf( "%02d:%02d", $game_end_hour, $game_end_minutes );

		//試合情報の設定
		$ground = $this->getRequest()->getParam('game_ground');
		$comment = $this->getRequest()->getParam('game_comment');
		$umpire_type = $this->getRequest()->getParam('select_umpire_type');
		$game_schedule_status = $this->getRequest()->getParam('select_game_type');
		$belong_type = $this->getRequest()->getParam( $this->_paramname_select_game_belong_type );

		//対戦チームの設定
		$team_id_1 = $this->getRequest()->getParam('select_team_1');
		$team_id_2 = $this->getRequest()->getParam('select_team_2');

		if( $this->CheckUpdatePassword() === true )
		{
			// 登録したチームが同じ部かチェック
			$team_dao = new TeamDao();
			$team_data_1 = $team_dao->GetDataFromId( $team_id_1 );
			$team_data_2 = $team_dao->GetDataFromId( $team_id_2 );
			if( ( $team_data_1 != null ) && ( $team_data_2 != null ) )
			{
				if( $belong_type == 1 )
				{
					if( $team_data_1['BELONG_NUMBER'] == $team_data_2['BELONG_NUMBER'] )
					{
						$belong_number = $team_data_1['BELONG_NUMBER'];
						$result = $schedule_dao->Insert( $game_date, $game_start_time, $game_end_time,
											$ground, $comment, $team_id_1, $team_id_2,
											$belong_number, $game_schedule_status, $umpire_type );
						if( $result == null )
						{
							parent::addErrorMessage( '試合予定の追加に失敗しました' );
						}
						else
						{
							parent::addErrorMessage( '試合予定を追加しました' );
						}
					}
					else
					{
						parent::addErrorMessage( '選択したチームが同じ部ではありません' );
					}
				}
				else
				{
					$belong_number = BELONG_LIST_TYPE_OTHER;
					$result = $schedule_dao->Insert( $game_date, $game_start_time, $game_end_time,
										$ground, $comment, $team_id_1, $team_id_2,
										$belong_number, $game_schedule_status, $umpire_type );
					if( $result == null )
					{
						parent::addErrorMessage( '試合予定の追加に失敗しました' );
					}
					else
					{
						parent::addErrorMessage( '試合予定を追加しました' );
					}
				}
			}
			else
			{
				parent::addErrorMessage( 'チームデータの取得に失敗しました' );
			}
		}
		else
		{
			parent::addErrorMessage( $this->_error_update_password );
		}

		$this->displayLoginPage();
	}

	public function updateAction()
	{
		parent::clearErrorMessage();

		$session = parent::GetAppSession();
		$schedule_id = $session->schedule_id;

		$schedule_dao = new ScheduleDao();

		//開始日と時間の設定
		$game_date_month = $this->getRequest()->getParam('game_date_month');
		$game_date_day = $this->getRequest()->getParam('game_date_day');
		$game_date = sprintf( "2013-%02d-%02d", $game_date_month, $game_date_day );

		$game_start_hour = $this->getRequest()->getParam('game_start_hour');
		$game_start_minutes = $this->getRequest()->getParam('game_start_minutes');
		$game_start_time = sprintf( "%02d:%02d", $game_start_hour, $game_start_minutes );

		$game_end_hour = $this->getRequest()->getParam('game_end_hour');
		$game_end_minutes = $this->getRequest()->getParam('game_end_minutes');
		$game_end_time = sprintf( "%02d:%02d", $game_end_hour, $game_end_minutes );

		//試合情報の設定
		$ground = $this->getRequest()->getParam('game_ground');
		$comment = $this->getRequest()->getParam('game_comment');
		$umpire_type = $this->getRequest()->getParam('select_umpire_type');
		$game_schedule_status = $this->getRequest()->getParam('select_game_type');
		$belong_type = $this->getRequest()->getParam( $this->_paramname_select_game_belong_type );

		$batting_first_flg = $this->getRequest()->getParam('select_batting_first_flg');

		$game_result_type = $this->getRequest()->getParam('select_game_result_type');
		$game_complate_flg = $this->getRequest()->getParam('select_game_complate_flg');

		//対戦チームの設定
		$team_id_1 = $this->getRequest()->getParam('select_team_1');
		$team_id_2 = $this->getRequest()->getParam('select_team_2');

		if( $this->CheckUpdatePassword() === true )
		{
			// 登録したチームが同じ部かチェック
			$team_dao = new TeamDao();
			$team_data_1 = $team_dao->GetDataFromId( $team_id_1 );
			$team_data_2 = $team_dao->GetDataFromId( $team_id_2 );
			if( ( $team_data_1 != null ) && ( $team_data_2 != null ) )
			{
				if( $belong_type == 1 )
				{
					if( $team_data_1['BELONG_NUMBER'] == $team_data_2['BELONG_NUMBER'] )
					{
						$belong_number = $team_data_1['BELONG_NUMBER'];
	
						$inning_data = $this->getInningData( $game_result_type );
						$result = $schedule_dao->Update( $schedule_id, $game_date, $game_start_time, $game_end_time,
											$ground, $comment, $team_id_1, $team_id_2,
											$belong_number, $game_schedule_status, $umpire_type, $batting_first_flg,
											$game_result_type, $game_complate_flg, $inning_data );
						if( $result == null )
						{
							parent::addErrorMessage( '試合予定の追加に失敗しました' );
						}
						else
						{
							parent::addErrorMessage( '更新しました' );
						}
					}
					else
					{
						parent::addErrorMessage( '選択したチームが同じ部ではありません' );
					}
				}
				else
				{
					$belong_number = BELONG_LIST_TYPE_OTHER;
					$inning_data = $this->getInningData( $game_result_type );
					$result = $schedule_dao->Update( $schedule_id, $game_date, $game_start_time, $game_end_time,
										$ground, $comment, $team_id_1, $team_id_2,
										$belong_number, $game_schedule_status, $umpire_type, $batting_first_flg,
										$game_result_type, $game_complate_flg, $inning_data );
					if( $result == null )
					{
						parent::addErrorMessage( '試合予定の追加に失敗しました' );
					}
					else
					{
						parent::addErrorMessage( '更新しました' );
					}
				}
			}
			else
			{
				parent::addErrorMessage( '選択したチームが同じ部ではありません' );
			}
		}
		else
		{
			parent::addErrorMessage( $this->_error_update_password );
		}

		$this->displayLoginPage();
	}

	public function removeAction()
	{
		parent::clearErrorMessage();

		$session = parent::GetAppSession();
		$schedule_id = $session->schedule_id;

		$schedule_dao = new ScheduleDao();
		
		if( $schedule_dao->Delete( $schedule_id ) != null )
		{
			parent::addErrorMessage( '削除しました' );
			$session->schedule_id = 0;
		}
		else
		{
			parent::addErrorMessage( '削除に失敗しました' );
		}
		$this->displayLoginPage();
	}

	private function getInningData( $game_result_type )
	{
		$inning_count = 9;
		if( $game_result_type == 1 )
		{
			// 通常
			$team_1_score_total = 0;
			$team_2_score_total = 0;
			for( $cnt = 1 ; $cnt <= $inning_count ; $cnt++ )
			{
				//チーム1
				$param_name_team1_inn   = 'game_result_team1_inn'.$cnt;
				$param_name_team1_inn_e = 'game_result_team1_inn'.$cnt.'_e';
				$game_result_team1_inn  = $this->getRequest()->getParam( $param_name_team1_inn );

				if( $game_result_team1_inn != "" )
				{
					$game_result_team1_inn_e = 1;
					$team_1_score_total += $game_result_team1_inn;
				}
				else
				{
					$game_result_team1_inn_e = 0;
					$game_result_team1_inn   = 0;
				}
				$inning_data[ $param_name_team1_inn ]   = $game_result_team1_inn;
				$inning_data[ $param_name_team1_inn_e ] = $game_result_team1_inn_e;

				//チーム2
				$param_name_team2_inn   = 'game_result_team2_inn'.$cnt;
				$param_name_team2_inn_e = 'game_result_team2_inn'.$cnt.'_e';
				$game_result_team2_inn  = $this->getRequest()->getParam( $param_name_team2_inn );

				if( $game_result_team2_inn != "" )
				{
					$game_result_team2_inn_e = 1;
					$team_2_score_total += $game_result_team2_inn;
				}
				else
				{
					$game_result_team2_inn_e = 0;
					$game_result_team2_inn   = 0;
				}
				$inning_data[ $param_name_team2_inn ]   = $game_result_team2_inn;
				$inning_data[ $param_name_team2_inn_e ] = $game_result_team2_inn_e;
			}

			//スコア合計
			$inning_data['game_result_team1_score_total'] = $team_1_score_total;
			$inning_data['game_result_team2_score_total'] = $team_2_score_total;
		}
		else
		{
			// 主催チーム不戦勝 or 不戦敗

			for( $cnt = 1 ; $cnt <= $inning_count ; $cnt++ )
			{
				//チーム1
				$param_name_team1_inn   = 'game_result_team1_inn'.$cnt;
				$param_name_team1_inn_e = 'game_result_team1_inn'.$cnt.'_e';

				$inning_data[ $param_name_team1_inn ]   = 0;
				$inning_data[ $param_name_team1_inn_e ] = 0;

				$param_name_team2_inn   = 'game_result_team2_inn'.$cnt;
				$param_name_team2_inn_e = 'game_result_team2_inn'.$cnt.'_e';

				$inning_data[ $param_name_team2_inn ]   = 0;
				$inning_data[ $param_name_team2_inn_e ] = 0;
			}

			if( $game_result_type == 2 )
			{
				// 主催チーム不戦勝
				//スコア合計
				$inning_data['game_result_team1_score_total'] = 7;
				$inning_data['game_result_team2_score_total'] = 0;
			}
			else if( $game_result_type == 3 )
			{
				// 主催チーム不戦敗
				//スコア合計
				$inning_data['game_result_team1_score_total'] = 0;
				$inning_data['game_result_team2_score_total'] = 7;
			}
		}

		return $inning_data;
	}

	//!
	//! @brief ページ表示を行います
	//!
	private function displayLoginPage()
	{
		// エラーメッセージを設定
		$smarty = $this->getAppSmaty();
		$smarty->assign( "page_message", $this->_display_error_message );

		$session = parent::GetAppSession();
		$schedule_id = $session->schedule_id;

		//スケジュールの設定
		$schedule_dao = new ScheduleDao();

		$team_dao = new TeamDao();
		$array_team = $team_dao->GetArray();

		$smarty->assign( "schedule_id", $schedule_id );
		if( $schedule_id == 0 )
		{
			//対戦チームの設定
			$options_team_1 = $this->getTeamOptions( $array_team, 'select_team_1' );
			$options_team_2 = $this->getTeamOptions( $array_team, 'select_team_2' );
			$smarty->assign( "options_game_team1", $options_team_1 );
			$smarty->assign( "options_game_team2", $options_team_2 );

			// 試合情報の設定
			$game_type_options = $this->getGameTypeOptions( 2 );//予定の状態
			$smarty->assign( "options_game_type", $game_type_options );

			$options_game_belong_type = $this->getBelongListOptions( $belong_type );
			$smarty->assign( "options_game_belong_type", $options_game_belong_type );

			$umpire_type_options = $this->getUmpireTypeOptions();//審判の種別
			$smarty->assign( "options_umpire_type", $umpire_type_options );

			$batting_first_flg_options = $this->getBattingFirstFlgOptions();//主催チーム・先攻後攻
			$smarty->assign( "options_batting_first_flg", $batting_first_flg_options );

			$game_result_type = $this->getGameResultTypeOptions();//終了形式(不戦勝ありなし)
			$smarty->assign( "options_game_result_type", $game_result_type );

			//試合完了フラグ
			$game_complate_flg_options = $this->getGameComplateFlgOptions();
			$smarty->assign( "options_game_complate_flg", $game_complate_flg_options );

			//イニング・スコア
			$default_score = 0;
			$smarty->assign( "game_result_team1_total", $default_score );
			$smarty->assign( "game_result_team1_tota2", $default_score );
		}
		else
		{
			$schedule_data = $schedule_dao->GetDataFromID( $schedule_id );

			//開始日と時間の設定
			$game_date = preg_split( "/[-]+/", $schedule_data['GAME_DATE'] );
			$smarty->assign( "game_date_month", $game_date[1] );
			$smarty->assign( "game_date_day", $game_date[2] );

			$game_start_time = preg_split( "/[:]+/", $schedule_data['GAME_START_TIME'] );
			$smarty->assign( "game_start_hour", $game_start_time[0] );
			$smarty->assign( "game_start_minutes", $game_start_time[1] );

			$game_end_time = preg_split( "/[:]+/", $schedule_data['GAME_END_TIME'] );
			$smarty->assign( "game_end_hour", $game_end_time[0] );
			$smarty->assign( "game_end_minutes", $game_end_time[1] );

			// 試合情報の設定
			$game_type_options = $this->getGameTypeOptions( $schedule_data['GAME_SCHEDULE_STATUS'] );//予定の状態
			$smarty->assign( "options_game_type", $game_type_options );

			//公式戦か否か
			if( ( 1 <= $schedule_data['BELONG_NUMBER'] ) && ( $schedule_data['BELONG_NUMBER'] <= 5 ) )
			{
				$belong_type = 1;
			}
			else
			{
				$belong_type = 2;
			}
			$options_game_belong_type = $this->getBelongListOptions( $belong_type );
			$smarty->assign( "options_game_belong_type", $options_game_belong_type );
			
			$umpire_type_options = $this->getUmpireTypeOptions( $schedule_data['UMPIRE_TYPE'] );//審判の種別
			$smarty->assign( "options_umpire_type", $umpire_type_options );

			$smarty->assign( "game_ground",  $schedule_data['GRAUND'] );
			$smarty->assign( "game_comment", $schedule_data['COMMENT'] );

			$batting_first_flg_options = $this->getBattingFirstFlgOptions( $schedule_data['BATTING_FIRST_FLG'] );//主催チーム・先攻後攻
			$smarty->assign( "options_batting_first_flg", $batting_first_flg_options );

			$game_result_type = $this->getGameResultTypeOptions( $schedule_data['GAME_RESULT_TYPE'] );//終了形式(不戦勝ありなし)
			$smarty->assign( "options_game_result_type", $game_result_type );

			$game_complate_flg_options = $this->getGameComplateFlgOptions( $schedule_data['GAME_COMPLATE_FLG'] );//試合完了フラグ
			$smarty->assign( "options_game_complate_flg", $game_complate_flg_options );

			//対戦チームの設定
			$options_team_1 = $this->getTeamOptions( $array_team, 'select_team_1', $schedule_data['TEAM_ID_1'] );
			$options_team_2 = $this->getTeamOptions( $array_team, 'select_team_2', $schedule_data['TEAM_ID_2'] );
			$smarty->assign( "options_game_team1", $options_team_1 );
			$smarty->assign( "options_game_team2", $options_team_2 );

			$team_dao = new TeamDao();
			$team_data_1 = $team_dao->GetDataFromId( $schedule_data['TEAM_ID_1'] );
			$team_data_2 = $team_dao->GetDataFromId( $schedule_data['TEAM_ID_2'] );
			if( ( $team_data_1 != null ) && ( $team_data_2 != null ) )
			{
				//先攻後攻により、チーム名表示を入れ替える
				if( $schedule_data['BATTING_FIRST_FLG'] == 0 )
				{
					$smarty->assign( "team1_name", $team_data_1['NAME'] );
					$smarty->assign( "team2_name", $team_data_2['NAME'] );
				}
				else
				{
					$smarty->assign( "team1_name", $team_data_2['NAME'] );
					$smarty->assign( "team2_name", $team_data_1['NAME'] );
				}
			}

			//イニング・スコア
			$smarty->assign( "game_result_team1_total", $schedule_data['SCORE_TEAM_1_TOTAL'] );
			$smarty->assign( "game_result_team2_total", $schedule_data['SCORE_TEAM_2_TOTAL'] );

			$inning_count = 9;
			for( $cnt = 1 ; $cnt <= $inning_count ; $cnt++ )
			{
				$param_name_team1_inn   = 'game_result_team1_inn'.$cnt;
				$param_name_team1_inn_e = 'game_result_team1_inn'.$cnt.'_e';
				$param_dataname_team1_inn   = 'SCORE_TEAM_1_INN'.$cnt;
				$param_dataname_team1_inn_e = 'SCORE_TEAM_1_INN'.$cnt.'_E';

				$param_name_team1_inn_value = $schedule_data[ $param_dataname_team1_inn ];
				$smarty->assign( $param_name_team1_inn, $param_name_team1_inn_value );
				$param_name_team1_inn_e_value = $schedule_data[ $param_dataname_team1_inn_e ];
				$smarty->assign( $param_name_team1_inn_e, $param_name_team1_inn_e_value );

				$param_name_team2_inn   = 'game_result_team2_inn'.$cnt;
				$param_name_team2_inn_e = 'game_result_team2_inn'.$cnt.'_e';
				$param_dataname_team2_inn   = 'SCORE_TEAM_2_INN'.$cnt;
				$param_dataname_team2_inn_e = 'SCORE_TEAM_2_INN'.$cnt.'_E';

				$param_name_team2_inn_value = $schedule_data[ $param_dataname_team2_inn ];
				$smarty->assign( $param_name_team2_inn, $param_name_team2_inn_value );
				$param_name_team2_inn_e_value = $schedule_data[ $param_dataname_team2_inn_e ];
				$smarty->assign( $param_name_team2_inn_e, $param_name_team2_inn_e_value );
			}
		}

		// テンプレートを設定
		$html = $smarty->fetch( 'schedule_edit.tpl' );
		$this->getResponse()->setBody( $html );
	}

	private function CheckUpdatePassword()
	{
		$is_check_password = false;

		$input_password = $this->getRequest()->getParam('edit_password');

		$ini = new Zend_Config_Ini( APPLICATION_PATH . '/configs/application.ini', 'application' );
		if( $input_password == $ini->schedulepassword )
		{
			$is_check_password = true;
		}
		return $is_check_password;
	}

	public  function getTeamOptions( $team_list, $parameter_name, $selected_team_id = 0 )
	{
		$s = '<SELECT size="0" id = "'.$parameter_name.'" name="'.$parameter_name.'">\n';
		foreach ( $team_list as $key => $value )
		{
			if( $key == $selected_team_id )
			{
				$attr = ' selected="selected"';
			}
			else
			{
				$attr = '';
			}
			$s .= '<option value="'.$key.'"'.$attr.'>'.$value.'</option>';
		}
		$s .= "</SELECT>\n";
		return $s;
	}

	public  function getGameTypeOptions( $selected_game_type = 0 )
	{
		$array_game_type = array(
									1 => "募集中",
									2 => "試合予定",
									3 => "消化",
									4 => "中止",
									5 => "譲渡",
									6 => "募集終了" );

		$s = '<SELECT size="0" name="select_game_type">\n';
		foreach ( $array_game_type as $key => $value )
		{
			if( $key == $selected_game_type )
			{
				$attr = ' selected="selected"';
			}
			else
			{
				$attr = '';
			}
			$s .= '<option value="'.$key.'"'.$attr.'>'.$value.'</option>';
		}
		$s .= "</SELECT>\n";
		return $s;
	}

	public  function getUmpireTypeOptions( $select_umpire_type = 0 )
	{
		$array_game_type = array(
									1 => "首都圏審判協会",
									2 => "その他" );

		$s = '<SELECT size="0" name="select_umpire_type">\n';
		foreach ( $array_game_type as $key => $value )
		{
			if( $key == $select_umpire_type )
			{
				$attr = ' selected="selected"';
			}
			else
			{
				$attr = '';
			}
			$s .= '<option value="'.$key.'"'.$attr.'>'.$value.'</option>';
		}
		$s .= "</SELECT>\n";
		return $s;
	}

	public  function getBattingFirstFlgOptions( $batting_first_flg = 0 )
	{
		$array_game_type = array(
									0 => "主催チーム先攻",
									1 => "主催チーム後攻" );

		$s = '<SELECT size="0" name="select_batting_first_flg" onChange="selectBattingFirstFlg(this)">\n';
		foreach ( $array_game_type as $key => $value )
		{
			if( $key == $batting_first_flg )
			{
				$attr = ' selected="selected"';
			}
			else
			{
				$attr = '';
			}
			$s .= '<option value="'.$key.'"'.$attr.'>'.$value.'</option>';
		}
		$s .= "</SELECT>\n";
		return $s;
	}

	public  function getGameResultTypeOptions( $game_result_type = 0 )
	{
		$array_game_type = array(
									1 => "通常",
									2 => "主催チーム不戦勝",
									3 => "主催チーム不戦敗" );

		$s = '<SELECT size="0" name="select_game_result_type">\n';
		foreach ( $array_game_type as $key => $value )
		{
			if( $key == $game_result_type )
			{
				$attr = ' selected="selected"';
			}
			else
			{
				$attr = '';
			}
			$s .= '<option value="'.$key.'"'.$attr.'>'.$value.'</option>';
		}
		$s .= "</SELECT>\n";
		return $s;
	}

	public  function getGameComplateFlgOptions( $game_complate_flg = 0 )
	{
		$array_game_type = array(
									0 => "イニング完了",
									1 => "イニング途中" );

		$s = '<SELECT size="0" name="select_game_complate_flg">\n';
		foreach ( $array_game_type as $key => $value )
		{
			if( $key == $game_complate_flg )
			{
				$attr = ' selected="selected"';
			}
			else
			{
				$attr = '';
			}
			$s .= '<option value="'.$key.'"'.$attr.'>'.$value.'</option>';
		}
		$s .= "</SELECT>\n";
		return $s;
	}

	public function getBelongListOptions( $selected = 0 )
	{
		$array_game_type = array(
									1 => "公式戦",
									2 => "その他" );
		return FormUtil::getSelectOptions( $this->_paramname_select_game_belong_type, $array_game_type, $selected );
	}
}


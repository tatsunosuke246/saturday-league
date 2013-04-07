<?php

require_once 'BaseController.php';
require_once 'ScheduleDao.php';
require_once 'TeamDao.php';
require_once 'FormUtil.php';

/**
 * スケジュール一覧画面 コントローラ
 */
class SchedulelistController extends BaseController
{
	private $_paramname_select_game_list_type = 'select_game_list_type';
	private $_paramname_select_belong_type = 'select_belong_type';
	private $_paramname_select_game_list_search_type = 'select_game_list_search_type';
	private $_paramname_select_game_list_team = 'select_game_list_team';

	//!
	//! @brief indexアクション
	//!
	//! @note 最初のアクセス時に実行されます
	//!
	public function indexAction()
	{
		$session = parent::GetAppSession();

		$session->game_list_type = GAME_LIST_TYPE_1;
		$session->belong_list_type = BELONG_LIST_TYPE_ALL;
		$session->game_list_search_type = 1;
		$session->game_list_team_id = 1;

		$this->displayLoginPage();
	}

	public function displayAction()
	{
		$this->displayLoginPage();
	}

	public function searchAction()
	{
		$session = parent::GetAppSession();

		$session->game_list_type = $this->getRequest()->getParam( $this->_paramname_select_game_list_type );
		$session->belong_list_type = $this->getRequest()->getParam( $this->_paramname_select_belong_type );
		$session->game_list_search_type = $this->getRequest()->getParam( $this->_paramname_select_game_list_search_type );
		$session->game_list_team_id = $this->getRequest()->getParam( $this->_paramname_select_game_list_team );

		$this->displayLoginPage();
	}

	//!
	//! @brief ページ表示を行います
	//!
	private function displayLoginPage()
	{
		$session = parent::GetAppSession();

		// エラーメッセージを設定
		$smarty = $this->getAppSmaty();
		$smarty->assign( "error_message", $this->_display_error_message );

		//試合表示形式選択
		$game_list_type = $session->game_list_type;
		$smarty->assign( "game_list_type", $game_list_type );
		$game_list_options = $this->getGameListOptions( $game_list_type );
		$smarty->assign( "game_list_options", $game_list_options );

		//部形式orチーム形式選択
		$game_list_search_type = $session->game_list_search_type;
		$smarty->assign( "game_list_search_type", $game_list_search_type );
		$game_list_search_type_radio = $this->getGameListSearchRadio( $game_list_search_type );
		$smarty->assign( "game_list_search_type_radio", $game_list_search_type_radio );

		//部選択
		$belong_list_type = $session->belong_list_type;
		$smarty->assign( "belong_list_type", $belong_list_type );
		$belong_list_options = $this->getBelongListOptions( $belong_list_type );
		$smarty->assign( "belong_list_options", $belong_list_options );

		//チーム選択
		$game_list_team_id = $session->game_list_team_id;
		$smarty->assign( "game_list_team_id", $game_list_team_id );
		$game_list_team_id_options = $this->getTeamListOptions( $game_list_team_id );
		$smarty->assign( "game_list_team__options", $game_list_team_id_options );

		//スケジュールの検索
		$schedule_dao = new ScheduleDao();
		if( $session->game_list_search_type == 1 )
		{
			//部単位で検索
			$game_list = $schedule_dao->GetGameList( $game_list_type, $belong_list_type );
		}
		else
		{
			//チーム単位で検索
			$team_id = $this->getRequest()->getParam( $this->_paramname_select_game_list_team );
			$game_list = $schedule_dao->GetGameListFromTeamid( $game_list_type, $team_id );
		}

		if( 0 < count( $game_list['id'] ) )
		{
			$smarty->assign( "array_game_id", $game_list['id'] );

			//日付の先頭の0を削除したいが、とりあえず保留
/*
			for( $cnt = 0 ; $cnt < count( $game_list['date'] ) ; $cnt++ )
			{
				$game_date = preg_split( "/[\/]+/", $game_list['date'][ $cnt ] );
				$game_month = ltrim( $game_date[1], '0');
				$game_day   = ltrim( $game_date[2], '0');
				$array_game_date[] = $game_date[0].'/'.$game_month.'/'.$game_day;
			}
			$smarty->assign( "array_game_date", $array_game_date );
*/
			$smarty->assign( "array_game_date", $game_list['date'] );
			
			//開始時間・終了時間
			for( $cnt = 0 ; $cnt < count( $game_list['game_start_time'] ) ; $cnt++ )
			{
				$game_start_time = preg_split( "/[:]+/", $game_list['game_start_time'][ $cnt ] );
				$game_end_time   = preg_split( "/[:]+/", $game_list['game_end_time'][ $cnt ] );
				$array_game_time[] = $game_start_time[0].':'.$game_start_time[1].' - '.$game_end_time[0].':'.$game_end_time[1];
			}
			$smarty->assign( "array_game_time", 		$array_game_time );

			// その他
			$smarty->assign( "array_game_ground", 			$game_list['ground'] );//グラウンド
			$smarty->assign( "array_game_belong_number",	$game_list['belong_number'] );//部
			$smarty->assign( "array_game_schedule_status",	$game_list['game_schedule_status'] );//スケジュール状態
			$smarty->assign( "array_game_comment", 			$game_list['game_comment'] );//コメント

			//対象チーム
			$team_dao = new TeamDao();
			foreach( $game_list['team_id_1'] as $team_id_1 )
			{
				$team_data_1 = $team_dao->GetDataFromId( $team_id_1 );

				$array_team_1[] = $team_data_1['NAME'];
			}
			foreach( $game_list['team_id_2'] as $team_id_2 )
			{
				$team_data_2 = $team_dao->GetDataFromId( $team_id_2 );
				$array_team_2[] = $team_data_2['NAME'];
			}
			$smarty->assign( "array_game_team_1", $array_team_1 );
			$smarty->assign( "array_game_team_2", $array_team_2 );

			//試合結果を表示
			if( $game_list_type == GAME_LIST_TYPE_ALL || $game_list_type == GAME_LIST_TYPE_4 || $game_list_type == GAME_LIST_TYPE_5 )
			{
				for( $cnt = 0 ; $cnt < count( $game_list['team_id_1'] ) ; $cnt++ )
				{
					$winner_maek = '○ ';
					$loser_maek  = '● ';
					if( $game_list['game_result_type'][ $cnt ] != 1 )
					{
						$winner_maek = '□ ';
						$loser_maek = '■ ';
					}

					$team_data_1 = $team_dao->GetDataFromId( $game_list['team_id_1'][ $cnt ] );
					$team_data_2 = $team_dao->GetDataFromId( $game_list['team_id_2'][ $cnt ] );
					if( ( $team_data_1 != null ) && ( $team_data_2 != null ) )
					{
						//先攻後攻により、チーム名表示を入れ替える
						if( $game_list['batting_first_flg'][ $cnt ] == 0 )
						{
							$array_display_team_1[] = $team_data_1['NAME'];
							$array_display_team_2[] = $team_data_2['NAME'];

							if( $game_list['team1_total'][ $cnt ] < $game_list['team2_total'][ $cnt ] )
							{
								//主催先攻負け
								$array_game_team_score1[] = $loser_maek.$game_list['team1_total'][ $cnt ];
								$array_game_team_score2[] = $game_list['team2_total'][ $cnt ];
							}
							else if( $game_list['team1_total'][ $cnt ] > $game_list['team2_total'][ $cnt ] )
							{
								//主催先攻勝ち
								$array_game_team_score1[] = $winner_maek.$game_list['team1_total'][ $cnt ];
								$array_game_team_score2[] = $game_list['team2_total'][ $cnt ];
							}
							else if( $game_list['team1_total'][ $cnt ] == $game_list['team2_total'][ $cnt ] )
							{
								//引き分け
								$array_game_team_score1[] = '△ '.$game_list['team1_total'][ $cnt ];
								$array_game_team_score2[] = $game_list['team2_total'][ $cnt ];
							}
						}
						else
						{
							$array_display_team_1[] = $team_data_2['NAME'];
							$array_display_team_2[] = $team_data_1['NAME'];

							if( $game_list['team1_total'][ $cnt ] < $game_list['team2_total'][ $cnt ] )
							{
								//主催後攻勝ち
								$array_game_team_score1[] = $winner_maek.$game_list['team2_total'][ $cnt ];
								$array_game_team_score2[] = $game_list['team1_total'][ $cnt ];
							}
							else if( $game_list['team1_total'][ $cnt ] > $game_list['team2_total'][ $cnt ] )
							{
								//主催後攻負け
								$array_game_team_score1[] = $loser_maek.$game_list['team2_total'][ $cnt ];
								$array_game_team_score2[] = $game_list['team1_total'][ $cnt ];
							}
							else if( $game_list['team1_total'][ $cnt ] == $game_list['team2_total'][ $cnt ] )
							{
								//引き分け
								$array_game_team_score1[] = '▲ '.$game_list['team1_total'][ $cnt ];
								$array_game_team_score2[] = $game_list['team2_total'][ $cnt ];
							}
						}
					}
				}
				$smarty->assign( "array_display_team_1", $array_display_team_1 );
				$smarty->assign( "array_display_team_2", $array_display_team_2 );

				$smarty->assign( "array_game_team_score1", $array_game_team_score1 );
				$smarty->assign( "array_game_team_score2", $array_game_team_score2 );

				$smarty->assign( "game_result_team1_inn1", $game_list['team1_inn1'] );
				$smarty->assign( "game_result_team1_inn2", $game_list['team1_inn2'] );
				$smarty->assign( "game_result_team1_inn3", $game_list['team1_inn3'] );
				$smarty->assign( "game_result_team1_inn4", $game_list['team1_inn4'] );
				$smarty->assign( "game_result_team1_inn5", $game_list['team1_inn5'] );
				$smarty->assign( "game_result_team1_inn6", $game_list['team1_inn6'] );
				$smarty->assign( "game_result_team1_inn7", $game_list['team1_inn7'] );
				$smarty->assign( "game_result_team1_inn8", $game_list['team1_inn8'] );
				$smarty->assign( "game_result_team1_inn9", $game_list['team1_inn9'] );

				$smarty->assign( "game_result_team1_inn1_e", $game_list['team1_inn1_e'] );
				$smarty->assign( "game_result_team1_inn2_e", $game_list['team1_inn2_e'] );
				$smarty->assign( "game_result_team1_inn3_e", $game_list['team1_inn3_e'] );
				$smarty->assign( "game_result_team1_inn4_e", $game_list['team1_inn4_e'] );
				$smarty->assign( "game_result_team1_inn5_e", $game_list['team1_inn5_e'] );
				$smarty->assign( "game_result_team1_inn6_e", $game_list['team1_inn6_e'] );
				$smarty->assign( "game_result_team1_inn7_e", $game_list['team1_inn7_e'] );
				$smarty->assign( "game_result_team1_inn8_e", $game_list['team1_inn8_e'] );
				$smarty->assign( "game_result_team1_inn9_e", $game_list['team1_inn9_e'] );

				$smarty->assign( "game_result_team1_total", $game_list['team1_total'] );

				$smarty->assign( "game_result_team2_inn1", $game_list['team2_inn1'] );
				$smarty->assign( "game_result_team2_inn2", $game_list['team2_inn2'] );
				$smarty->assign( "game_result_team2_inn3", $game_list['team2_inn3'] );
				$smarty->assign( "game_result_team2_inn4", $game_list['team2_inn4'] );
				$smarty->assign( "game_result_team2_inn5", $game_list['team2_inn5'] );
				$smarty->assign( "game_result_team2_inn6", $game_list['team2_inn6'] );
				$smarty->assign( "game_result_team2_inn7", $game_list['team2_inn7'] );
				$smarty->assign( "game_result_team2_inn8", $game_list['team2_inn8'] );
				$smarty->assign( "game_result_team2_inn9", $game_list['team2_inn9'] );

				$smarty->assign( "game_result_team2_inn1_e", $game_list['team2_inn1_e'] );
				$smarty->assign( "game_result_team2_inn2_e", $game_list['team2_inn2_e'] );
				$smarty->assign( "game_result_team2_inn3_e", $game_list['team2_inn3_e'] );
				$smarty->assign( "game_result_team2_inn4_e", $game_list['team2_inn4_e'] );
				$smarty->assign( "game_result_team2_inn5_e", $game_list['team2_inn5_e'] );
				$smarty->assign( "game_result_team2_inn6_e", $game_list['team2_inn6_e'] );
				$smarty->assign( "game_result_team2_inn7_e", $game_list['team2_inn7_e'] );
				$smarty->assign( "game_result_team2_inn8_e", $game_list['team2_inn8_e'] );
				$smarty->assign( "game_result_team2_inn9_e", $game_list['team2_inn9_e'] );

				$smarty->assign( "game_result_team2_total", $game_list['team2_total'] );
			}
		}

		// テンプレートを設定
		$html = $smarty->fetch( 'schedule_list.tpl' );
		$this->getResponse()->setBody( $html );
	}

	public function getGameListOptions( $selected = 0 )
	{
		$array_game_type = array(
									GAME_LIST_TYPE_ALL => "全て表示",
									GAME_LIST_TYPE_1 => "試合予定( 募集中 + 対戦決定 )",
									GAME_LIST_TYPE_2 => "試合予定( 募集中のみ )",
									GAME_LIST_TYPE_3 => "試合予定( 対戦決定のみ )",
									GAME_LIST_TYPE_4 => "終了( 消化 + 中止 )",
									GAME_LIST_TYPE_5 => "終了( 消化のみ )",
									GAME_LIST_TYPE_6 => "終了( 中止のみ )",
									GAME_LIST_TYPE_7 => "未設定( 譲渡 + 募集終了 )",
									GAME_LIST_TYPE_8 => "未設定( 譲渡のみ )",
									GAME_LIST_TYPE_9 => "未設定( 募集終了のみ )" );

		return FormUtil::getSelectOptions( $this->_paramname_select_game_list_type, $array_game_type, $selected );
	}

	public function getBelongListOptions( $selected = 0 )
	{
		$array_game_type = array(
									BELONG_LIST_TYPE_ALL => "全ての部",
									BELONG_LIST_TYPE_1 => "１部",
									BELONG_LIST_TYPE_2 => "２部",
									BELONG_LIST_TYPE_3 => "３部",
									BELONG_LIST_TYPE_4 => "４部",
									BELONG_LIST_TYPE_5 => "５部",
									BELONG_LIST_TYPE_OTHER => "その他" );

		return FormUtil::getSelectOptions( $this->_paramname_select_belong_type, $array_game_type, $selected );
	}

	public function getGameListSearchRadio( $selected = 0 )
	{
		$array_game_list_search_type = array(
									1 => "部で検索",
									2 => "チームで検索" );

		return FormUtil::getRadioOptions( $this->_paramname_select_game_list_search_type, $array_game_list_search_type, $selected );
	}

	public function getTeamListOptions( $selected = 0 )
	{
		$team_dao = new TeamDao();
		$array_team_list = $team_dao->GetArray();
		return FormUtil::getSelectOptions( $this->_paramname_select_game_list_team, $array_team_list, $selected );
	}


}

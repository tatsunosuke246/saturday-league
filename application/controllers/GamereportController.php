<?php

require_once 'BaseController.php';
require_once 'ScheduleDao.php';
require_once 'TeamDao.php';
require_once 'FormUtil.php';

/**
 * 成績表画面 コントローラ
 */
class GamereportController extends BaseController
{
	private $_paramname_select_belong_type = 'select_belong_type';

	//!
	//! @brief indexアクション
	//!
	//! @note 最初のアクセス時に呼ばれます
	//!
	public function indexAction()
	{
		$session = parent::GetAppSession();

		//成績表は「その他」はないので「全て」に変更
		if( $session->belong_list_type == BELONG_LIST_TYPE_OTHER )
		{
			$session->belong_list_type = BELONG_LIST_TYPE_ALL;
		}
		$this->displayLoginPage();
	}

	//!
	//! @brief searchアクション
	//!
	//! @note 敬作ボタン押下時に呼ばれます
	//!
	public function searchAction()
	{
		$session = parent::GetAppSession();
		$session->belong_list_type = $this->getRequest()->getParam( $this->_paramname_select_belong_type );

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

		$belong_list_type = $session->belong_list_type;
		$smarty->assign( "belong_list_type", $belong_list_type );
		$belong_list_options = $this->getReportBelongListOptions( $belong_list_type );
		$smarty->assign( "belong_list_options", $belong_list_options );

		if( $belong_list_type == 0 )
		{
			//全ての部
			$this->AssignBelongNUmberReport( &$smarty, 1 );
			$this->AssignBelongNUmberReport( &$smarty, 2 );
			$this->AssignBelongNUmberReport( &$smarty, 3 );
			$this->AssignBelongNUmberReport( &$smarty, 4 );
			$this->AssignBelongNUmberReport( &$smarty, 5 );
		}
		else
		{
			//指定された部
			$this->AssignBelongNUmberReport( &$smarty, $belong_list_type );
		}
		// テンプレートを設定
		$html = $smarty->fetch( 'game_report.tpl' );
		$this->getResponse()->setBody( $html );
	}

	/**
	 * 部単位の成績表作成を行う
	 *
	 * @param mixed 	$smarty 		smartyオブジェクト
	 * @param int 		$belong_number 	対象の部
	 */
	private function AssignBelongNUmberReport( $smarty, $belong_number )
	{
		$schedule_dao = new ScheduleDao();
		$team_dao = new TeamDao();

		$team_display_cnt = array(
			0 => 0 ,
			1 => 0 ,
			2 => 0 ,
			3 => 0 ,
			4 => 0 ,
			5 => 0 ,
			6 => 0
		);

		$param_belong_enable = 'belong_'.$belong_number.'_enable';
		$value_belong_enable = 1;
		$smarty->assign( $param_belong_enable, $value_belong_enable );

		for( $team_cnt = 1 ; $team_cnt <= 6 ; $team_cnt++ )
		{
			$team_display_cnt[0] = 0;
			$team_display_cnt[1] = 0;
			$team_display_cnt[2] = 0;
			$team_display_cnt[3] = 0;
			$team_display_cnt[4] = 0;
			$team_display_cnt[5] = 0;
			$team_display_cnt[6] = 0;

			$team_id = ( ( $belong_number - 1 ) * 6 ) + $team_cnt;
			$team_index = ( $team_id % 6 ) ;//1スタート
			if( $team_index == 0 )
			{
				$team_index = 6;
			}

			// チーム名設定
			$team_param_name = 'team'.$belong_number.'_'.$team_index;
			$team_data = $team_dao->GetDataFromId( $team_id );
			$smarty->assign( $team_param_name, $team_data['NAME'] );

			// 対象チームの試合予定を取得
			$team_game_data    =  $schedule_dao->GetGameDataByTeamID( $team_id );
			$team_point_total  = 0;//勝ち点合計
			$team_score_offset = 0;//得失点合計

			$team_win_total  = 0;//勝ち
			$team_draw_total = 0;//引き分け
			$team_lose_total = 0;//負け

			for( $cnt = 0 ; $cnt < count( $team_game_data ); $cnt++ )
			{
				//試合予定。日程を入れる

				$is_home_game = false;
				if( $team_game_data[ $cnt ]['TEAM_ID_1'] == $team_id )
				{
					$vs_team_id = $team_game_data[ $cnt ]['TEAM_ID_2'];
					$is_home_game = true;
				}
				else if( $team_game_data[ $cnt ]['TEAM_ID_2'] == $team_id )
				{
					$vs_team_id = $team_game_data[ $cnt ]['TEAM_ID_1'];
				}
				$vs_team_index = ( $vs_team_id % 6 ) ;//1スタート
				if( $vs_team_index == 0 )
				{
					$vs_team_index = 6;
				}

				$is_game_set = false;
				$vs_team_data = $team_dao->GetDataFromId( $vs_team_id );
				if( $vs_team_data['BELONG_NUMBER'] == $team_data['BELONG_NUMBER'] )
				{
					if( $team_display_cnt[ $vs_team_index ] == 0 )
					{
						$param_name = 'team'.$belong_number.'_'.$team_index.'vs'.$belong_number.'_'.$vs_team_index.'_game1';
						$team_display_cnt[ $vs_team_index ] = 1;
						$is_game_set = true;
					}
					else if( $team_display_cnt[ $vs_team_index ] == 1 )
					{
						$param_name = 'team'.$belong_number.'_'.$team_index.'vs'.$belong_number.'_'.$vs_team_index.'_game2';
						$team_display_cnt[ $vs_team_index ] = 2;
						$is_game_set = true;
					}
				}

				if( $is_game_set === true )
				{
					//試合予定IDをセット
					$id_param_name  = $param_name.'_id';
					$id_param_value = $team_game_data[ $cnt ]['GAME_SCHEDULE_ID'];
					$smarty->assign( $id_param_name, $id_param_value );

					if( $team_game_data[ $cnt ]['GAME_SCHEDULE_STATUS'] == 2 )
					{
						//試合予定
						$game_date   = preg_split( "/[-]+/", $team_game_data[ $cnt ]['GAME_DATE'] );
						$game_month  = ltrim( $game_date[1], '0');
						$game_day    = ltrim( $game_date[2], '0');
						$param_value = $game_month.'/'.$game_day;
						$smarty->assign( $param_name, $param_value );
					}
					else if( $team_game_data[ $cnt ]['GAME_SCHEDULE_STATUS'] == 3 )
					{
						//消化

						$team_win_point = 2;//勝ち点 勝ち2・引き分け1・負け0
						$team_score = 0;//実際のチーム1の点数
						$team_vs_score = 0;//相手のチームの点数

						if( $team_game_data[ $cnt ]['BATTING_FIRST_FLG'] == 0 )
						{
							//主催側先攻
							if( $is_home_game === true )
							{
								//対象のチームが主催側
								$team_score    = $team_game_data[ $cnt ]['SCORE_TEAM_1_TOTAL'];
								$team_vs_score = $team_game_data[ $cnt ]['SCORE_TEAM_2_TOTAL'];
							}
							else
							{
								//対象のチームがビジター側
								$team_score    = $team_game_data[ $cnt ]['SCORE_TEAM_2_TOTAL'];
								$team_vs_score = $team_game_data[ $cnt ]['SCORE_TEAM_1_TOTAL'];
							}
						}
						else
						{
							//主催側後攻
							if( $is_home_game === true )
							{
								//対象のチームが主催側
								$team_score    = $team_game_data[ $cnt ]['SCORE_TEAM_2_TOTAL'];
								$team_vs_score = $team_game_data[ $cnt ]['SCORE_TEAM_1_TOTAL'];
							}
							else
							{
								//対象のチームがビジター側
								$team_score    = $team_game_data[ $cnt ]['SCORE_TEAM_1_TOTAL'];
								$team_vs_score = $team_game_data[ $cnt ]['SCORE_TEAM_2_TOTAL'];
							}
						}
						//勝敗判定
						$winner_maek = '○ ';
						$loser_maek = '● ';
						if( $team_game_data[ $cnt ]['GAME_RESULT_TYPE'] != 1 )
						{
							$winner_maek = '□ ';
							$loser_maek  = '■ ';
						}

						if( $team_score > $team_vs_score )
						{
							$param_value = $winner_maek.$team_score.'-'.$team_vs_score;
							$team_win_point = 2;
							$team_win_total++;
						}
						else if( $team_score == $team_vs_score )
						{
							$param_value = '△ '.$team_score.'-'.$team_vs_score;
							$team_win_point = 1;
							$team_draw_total++;
						}
						else if( $team_score < $team_vs_score )
						{
							$param_value = $loser_maek.$team_score.'-'.$team_vs_score;
							$team_lose_total++;

							if( $team_game_data[ $cnt ]['GAME_RESULT_TYPE'] == 1 )
							{
								$team_win_point = 0;
							}
							else
							{
								$team_win_point = -3;
							}
						}
						$smarty->assign( $param_name, $param_value );

						//勝ち点
						$team_point_total += $team_win_point;

						//得失点差
						$game_point_offset = $team_score - $team_vs_score;
						$team_score_offset += $game_point_offset;
					}
				}
			}
			//勝敗
			$value_team_result = '';
			if( 0 < $team_win_total )
			{
				$value_team_result .= $team_win_total.'勝';
			}
			if( 0 < $team_draw_total )
			{
				$value_team_result .= $team_draw_total.'分';
			}
			if( 0 < $team_lose_total )
			{
				$value_team_result .= $team_lose_total.'敗';
			}
			$param_team_result = 'team'.$belong_number.'_'.$team_index.'_result';
			$smarty->assign( $param_team_result, $value_team_result );

			//勝ち点
			$param_team_point_total = 'team'.$belong_number.'_'.$team_index.'_point';
			$smarty->assign( $param_team_point_total, $team_point_total );

			//勝率
			$param_team_winningrate = 'team'.$belong_number.'_'.$team_index.'_winningrate';
			if( ( $team_win_total + $team_lose_total ) == 0 )
			{
				$value_team_winningrate = '.000';
			}
			else
			{
				$winningrate_tmp = $team_win_total / ( $team_win_total + $team_lose_total );
				if( $winningrate_tmp == 1.0 )
				{
					$value_team_winningrate = '1.000';
				}
				else
				{
					$value_team_winningrate = sprintf( "%.3lf", $winningrate_tmp );
					$value_team_winningrate = ltrim( $value_team_winningrate, '0');
				}
			}
			$smarty->assign( $param_team_winningrate, $value_team_winningrate );

			//得失点差
			$param_team_offset_total = 'team'.$belong_number.'_'.$team_index.'_offset';
			$smarty->assign( $param_team_offset_total, $team_score_offset );

			//TODO チームの順位
		}
	}

	public function getReportBelongListOptions( $selected = 0 )
	{
		$array_game_type = array(
									BELONG_LIST_TYPE_ALL => "全ての部",
									BELONG_LIST_TYPE_1 => "１部",
									BELONG_LIST_TYPE_2 => "２部",
									BELONG_LIST_TYPE_3 => "３部",
									BELONG_LIST_TYPE_4 => "４部",
									BELONG_LIST_TYPE_5 => "５部"
									 );

		return FormUtil::getSelectOptions( $this->_paramname_select_belong_type, $array_game_type, $selected );
	}

}

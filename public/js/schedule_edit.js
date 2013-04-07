
function checkAddScheduleParam() 
{
	var inputGameDateMonth = document.schedule_edit.game_date_month.value;
	if( inputGameDateMonth.length == 0 )
	{
		alert("試合日を入力して下さい。");
		return(0);
	}
	if( inputGameDateMonth.match(/[^0-9]/) )
	{
		alert("試合日には数値を入力して下さい");
		return(0);
	}

	var inputGameDateDay = document.schedule_edit.game_date_day.value;
	if( inputGameDateDay.length == 0 )
	{
		alert("試合日を入力して下さい。");
		return(0);
	}
	if( inputGameDateDay.match(/[^0-9]/) )
	{
		alert("試合日には数値を入力して下さい");
		return(0);
	}

	var inputGameStartHour = document.schedule_edit.game_start_hour.value;
	if( inputGameStartHour.length == 0 )
	{
		alert("開始時間を入力して下さい。");
		return(0);
	}
	if( inputGameStartHour.match(/[^0-9]/) )
	{
		alert("開始時間には数値を入力して下さい");
		return(0);
	}

	var inputGameStartMinutes = document.schedule_edit.game_start_minutes.value;
	if( inputGameStartMinutes.length == 0 )
	{
		alert("開始時間を入力して下さい。");
		return(0);
	}
	if( inputGameStartMinutes.match(/[^0-9]/) )
	{
		alert("開始時間には数値を入力して下さい");
		return(0);
	}

	var inputGameEndHour = document.schedule_edit.game_end_hour.value;
	if( inputGameEndHour.length == 0 )
	{
		alert("終了時間を入力して下さい。");
		return(0);
	}
	if( inputGameEndHour.match(/[^0-9]/) )
	{
		alert("終了時間には数値を入力して下さい");
		return(0);
	}

	var inputGameEndMinutes = document.schedule_edit.game_end_minutes.value;
	if( inputGameEndMinutes.length == 0 )
	{
		alert("終了時間を入力して下さい。");
		return(0);
	}
	if( inputGameEndMinutes.match(/[^0-9]/) )
	{
		alert("終了時間には数値を入力して下さい");
		return(0);
	}

	var inputGameGround = document.schedule_edit.game_ground.value;
	if( inputGameGround.length == 0 )
	{
		alert("グラウンドを入力して下さい。");
		return(0);
	}

	return(1);
}

function funcAddSchedule() 
{
	var checkParam = checkAddScheduleParam();
	if( checkParam == 1 )
	{
		document.schedule_edit.action = "/Scheduleedit/add/";
		document.schedule_edit.submit();
	}
}

function funcUpdateSchedule() 
{
	//alert("実行されました");
	var checkParam = checkAddScheduleParam();
	if( checkParam == 1 )
	{
		document.schedule_edit.action = "/Scheduleedit/update/";
		document.schedule_edit.submit();
	}
}

function funcRemoveSchedule() 
{
	var msg = "予定を削除します。削除した予定は復元できません。\nよろしければOKボタンを押してください。\n\n";
	if( confirm( msg ) )
	{
		document.schedule_edit.action = "/Scheduleedit/remove/";
		document.schedule_edit.submit();
	}
}

function selectBattingFirstFlg( radio_obj )
{
	// 主催チーム攻撃順が変更された場合、先攻・後攻チームを動的に切り替える

	var team1_object = document.getElementById("game_result_team1_name");
	var team2_object = document.getElementById("game_result_team2_name");

	var select_team_1 = document.schedule_edit.hidden_select_team1_name.value;
	var select_team_2 = document.schedule_edit.hidden_select_team2_name.value;

	if( radio_obj.value == 0 )
	{
		team1_object.innerHTML = select_team_1;
		team2_object.innerHTML = select_team_2;
	}
	else
	{
		team1_object.innerHTML = select_team_2;
		team2_object.innerHTML = select_team_1;
	}
}

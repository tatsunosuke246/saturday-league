{{include file='schedule_header.tpl' title='サタデーリーグ 成績表' javascriptfile='/js/game_report.js' }}

<center>
<h3>成績表</h3>

<table border="0" cellspacing="0" cellpadding="8">
<tr>
<td valign="top"></br>ポイント換算方法</td>
<td>
○ 勝利  ＝ ２ポイント</br>
△ 引分  ＝ １ポイント</br>
● 敗戦  ＝ ０ポイント</br>
</td>
<td align="left" valign="top">
□ 不戦勝 ＝ ２ポイント</br>
■ 不戦敗 ＝ －３ポイント</br>
</td>
</tr>
</table>
</br>

<hr class="sub_contents">
</br>

<form name="game_report" id="game_report" method="post" >

{{$belong_list_options}}
<input type="button" name = "update" id="update" value="更新" onclick="funcSearchSchedule()"/>
</br></br>

{{ if $belong_1_enable == 1 }}
<table class="content_table">
<tr>
<td><b>１部リーグ</b></td>
</tr>
<tr>
<td>
<table class="inner_table">
<tr>
<td class="team_name">チーム名</td>
<td class="team_name"><b>{{$team1_1}}</b></td>
<td class="team_name"><b>{{$team1_2}}</b></td>
<td class="team_name"><b>{{$team1_3}}</b></td>
<td class="team_name"><b>{{$team1_4}}</b></td>
<td class="team_name"><b>{{$team1_5}}</b></td>
<td class="team_name"><b>{{$team1_6}}</b></td>
<td class="team_data"><b>ポイント</br>勝率</br>得失点差</b></td>
<td class="team_data"><b>順位</b></td>
</tr>
<tr>
<td class="team_name"><b>{{$team1_1}}</b>
</td>
<td class="team_result_winlose">{{$team1_1_result}}</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_1vs1_2_game1_id}}">{{$team1_1vs1_2_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_1vs1_2_game2_id}}">{{$team1_1vs1_2_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_1vs1_3_game1_id}}">{{$team1_1vs1_3_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_1vs1_3_game2_id}}">{{$team1_1vs1_3_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_1vs1_4_game1_id}}">{{$team1_1vs1_4_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_1vs1_4_game2_id}}">{{$team1_1vs1_4_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_1vs1_5_game1_id}}">{{$team1_1vs1_5_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_1vs1_5_game2_id}}">{{$team1_1vs1_5_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_1vs1_6_game1_id}}">{{$team1_1vs1_6_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_1vs1_6_game2_id}}">{{$team1_1vs1_6_game2}}</a>
</td>
<td class="team_data">{{$team1_1_point}}</br>{{$team1_1_winningrate}}</br>{{$team1_1_offset}}</td>
<td class="team_data">{{$team1_1_order}}</td>
</tr>
<tr>
<td class="team_name"><b>{{$team1_2}}</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_2vs1_1_game1_id}}">{{$team1_2vs1_1_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_2vs1_1_game2_id}}">{{$team1_2vs1_1_game2}}</a>
</td>
<td class="team_result_winlose">{{$team1_2_result}}</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_2vs1_3_game1_id}}">{{$team1_2vs1_3_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_2vs1_3_game2_id}}">{{$team1_2vs1_3_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_2vs1_4_game1_id}}">{{$team1_2vs1_4_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_2vs1_4_game2_id}}">{{$team1_2vs1_4_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_2vs1_5_game1_id}}">{{$team1_2vs1_5_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_2vs1_5_game2_id}}">{{$team1_2vs1_5_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_2vs1_6_game1_id}}">{{$team1_2vs1_6_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_2vs1_6_game2_id}}">{{$team1_2vs1_6_game2}}</a>
</td>
<td class="team_data">{{$team1_2_point}}</br>{{$team1_2_winningrate}}</br>{{$team1_2_offset}}</td>
<td class="team_data">{{$team1_2_order}}</td>
</tr>
<tr>
<td class="team_name"><b>{{$team1_3}}</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_3vs1_1_game1_id}}">{{$team1_3vs1_1_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_3vs1_1_game2_id}}">{{$team1_3vs1_1_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_3vs1_2_game1_id}}">{{$team1_3vs1_2_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_3vs1_2_game2_id}}">{{$team1_3vs1_2_game2}}</a>
</td>
<td class="team_result_winlose">{{$team1_3_result}}</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_3vs1_4_game1_id}}">{{$team1_3vs1_4_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_3vs1_4_game2_id}}">{{$team1_3vs1_4_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_3vs1_5_game1_id}}">{{$team1_3vs1_5_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_3vs1_5_game2_id}}">{{$team1_3vs1_5_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_3vs1_6_game1_id}}">{{$team1_3vs1_6_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_3vs1_6_game2_id}}">{{$team1_3vs1_6_game2}}</a>
</td>
<td class="team_data">{{$team1_3_point}}</br>{{$team1_3_winningrate}}</br>{{$team1_3_offset}}</td>
<td class="team_data">{{$team1_3_order}}</td>
</tr>
<tr>
<td class="team_name"><b>{{$team1_4}}</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_4vs1_1_game1_id}}">{{$team1_4vs1_1_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_4vs1_1_game2_id}}">{{$team1_4vs1_1_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_4vs1_2_game1_id}}">{{$team1_4vs1_2_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_4vs1_2_game2_id}}">{{$team1_4vs1_2_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_4vs1_3_game1_id}}">{{$team1_4vs1_3_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_4vs1_3_game2_id}}">{{$team1_4vs1_3_game2}}</a>
</td>
<td class="team_result_winlose">{{$team1_4_result}}</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_4vs1_5_game1_id}}">{{$team1_4vs1_5_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_4vs1_5_game2_id}}">{{$team1_4vs1_5_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_4vs1_6_game1_id}}">{{$team1_4vs1_6_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_4vs1_6_game2_id}}">{{$team1_4vs1_6_game2}}</a>
</td>
<td class="team_data">{{$team1_4_point}}</br>{{$team1_4_winningrate}}</br>{{$team1_4_offset}}</td>
<td class="team_data">{{$team1_4_order}}</td>
</tr>
<tr>
<td class="team_name"><b>{{$team1_5}}</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_5vs1_1_game1_id}}">{{$team1_5vs1_1_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_5vs1_1_game2_id}}">{{$team1_5vs1_1_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_5vs1_2_game1_id}}">{{$team1_5vs1_2_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_5vs1_2_game2_id}}">{{$team1_5vs1_2_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_5vs1_3_game1_id}}">{{$team1_5vs1_3_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_5vs1_3_game2_id}}">{{$team1_5vs1_3_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_5vs1_4_game1_id}}">{{$team1_5vs1_4_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_5vs1_4_game2_id}}">{{$team1_5vs1_4_game2}}</a>
</td>
<td class="team_result_winlose">{{$team1_5_result}}</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_5vs1_6_game1_id}}">{{$team1_5vs1_6_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_5vs1_6_game2_id}}">{{$team1_5vs1_6_game2}}</a>
</td>
<td class="team_data">{{$team1_5_point}}</br>{{$team1_5_winningrate}}</br>{{$team1_5_offset}}</td>
<td class="team_data">{{$team1_5_order}}</td>
</tr>
<tr>
<td class="team_name"><b>{{$team1_6}}</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_6vs1_1_game1_id}}">{{$team1_6vs1_1_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_6vs1_1_game2_id}}">{{$team1_6vs1_1_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_6vs1_2_game1_id}}">{{$team1_6vs1_2_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_6vs1_2_game2_id}}">{{$team1_6vs1_2_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_6vs1_3_game1_id}}">{{$team1_6vs1_3_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_6vs1_3_game2_id}}">{{$team1_6vs1_3_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_6vs1_4_game1_id}}">{{$team1_6vs1_4_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_6vs1_4_game2_id}}">{{$team1_6vs1_4_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_6vs1_5_game1_id}}">{{$team1_6vs1_5_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team1_6vs1_5_game2_id}}">{{$team1_6vs1_5_game2}}</a>
</td>
<td class="team_result_winlose">{{$team1_6_result}}</td>
<td class="team_data">{{$team1_6_point}}</br>{{$team1_6_winningrate}}</br>{{$team1_6_offset}}</td>
<td class="team_data">{{$team1_6_order}}</td>
</tr>
</table>
</td>
</tr>
</table>
</br></br>
{{/if}}


{{ if $belong_2_enable == 1 }}
<table class="content_table">
<tr>
<td><b>２部リーグ</b></td>
</tr>
<tr>
<td>
<table class="inner_table">
<tr>
<td class="team_name">チーム名</td>
<td class="team_name"><b>{{$team2_1}}</b></td>
<td class="team_name"><b>{{$team2_2}}</b></td>
<td class="team_name"><b>{{$team2_3}}</b></td>
<td class="team_name"><b>{{$team2_4}}</b></td>
<td class="team_name"><b>{{$team2_5}}</b></td>
<td class="team_name"><b>{{$team2_6}}</b></td>
<td class="team_data"><b>ポイント</br>勝率</br>得失点差</b></td>
<td class="team_data"><b>順位</b></td>
</tr>
<tr>
<td class="team_name"><b>{{$team2_1}}</b>
</td>
<td class="team_result_winlose">{{$team2_1_result}}</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_1vs2_2_game1_id}}">{{$team2_1vs2_2_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_1vs2_2_game2_id}}">{{$team2_1vs2_2_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_1vs2_3_game1_id}}">{{$team2_1vs2_3_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_1vs2_3_game2_id}}">{{$team2_1vs2_3_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_1vs2_4_game1_id}}">{{$team2_1vs2_4_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_1vs2_4_game2_id}}">{{$team2_1vs2_4_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_1vs2_5_game1_id}}">{{$team2_1vs2_5_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_1vs2_5_game2_id}}">{{$team2_1vs2_5_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_1vs2_6_game1_id}}">{{$team2_1vs2_6_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_1vs2_6_game2_id}}">{{$team2_1vs2_6_game2}}</a>
</td>
<td class="team_data">{{$team2_1_point}}</br>{{$team2_1_winningrate}}</br>{{$team2_1_offset}}</td>
<td class="team_data">{{$team2_1_order}}</td>
</tr>
<tr>
<td class="team_name"><b>{{$team2_2}}</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_2vs2_1_game1_id}}">{{$team2_2vs2_1_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_2vs2_1_game2_id}}">{{$team2_2vs2_1_game2}}</a>
</td>
<td class="team_result_winlose">{{$team2_2_result}}</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_2vs2_3_game1_id}}">{{$team2_2vs2_3_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_2vs2_3_game2_id}}">{{$team2_2vs2_3_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_2vs2_4_game1_id}}">{{$team2_2vs2_4_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_2vs2_4_game2_id}}">{{$team2_2vs2_4_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_2vs2_5_game1_id}}">{{$team2_2vs2_5_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_2vs2_5_game2_id}}">{{$team2_2vs2_5_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_2vs2_6_game1_id}}">{{$team2_2vs2_6_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_2vs2_6_game2_id}}">{{$team2_2vs2_6_game2}}</a>
</td>
<td class="team_data">{{$team2_2_point}}</br>{{$team2_2_winningrate}}</br>{{$team2_2_offset}}</td>
<td class="team_data">{{$team2_2_order}}</td>
</tr>
<tr>
<td class="team_name"><b>{{$team2_3}}</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_3vs2_1_game1_id}}">{{$team2_3vs2_1_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_3vs2_1_game2_id}}">{{$team2_3vs2_1_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_3vs2_2_game1_id}}">{{$team2_3vs2_2_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_3vs2_2_game2_id}}">{{$team2_3vs2_2_game2}}</a>
</td>
<td class="team_result_winlose">{{$team2_3_result}}</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_3vs2_4_game1_id}}">{{$team2_3vs2_4_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_3vs2_4_game2_id}}">{{$team2_3vs2_4_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_3vs2_5_game1_id}}">{{$team2_3vs2_5_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_3vs2_5_game2_id}}">{{$team2_3vs2_5_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_3vs2_6_game1_id}}">{{$team2_3vs2_6_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_3vs2_6_game2_id}}">{{$team2_3vs2_6_game2}}</a>
</td>
<td class="team_data">{{$team2_3_point}}</br>{{$team2_3_winningrate}}</br>{{$team2_3_offset}}</td>
<td class="team_data">{{$team2_3_order}}</td>
</tr>
<tr>
<td class="team_name"><b>{{$team2_4}}</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_4vs2_1_game1_id}}">{{$team2_4vs2_1_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_4vs2_1_game2_id}}">{{$team2_4vs2_1_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_4vs2_2_game1_id}}">{{$team2_4vs2_2_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_4vs2_2_game2_id}}">{{$team2_4vs2_2_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_4vs2_3_game1_id}}">{{$team2_4vs2_3_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_4vs2_3_game2_id}}">{{$team2_4vs2_3_game2}}</a>
</td>
<td class="team_result_winlose">{{$team2_4_result}}</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_4vs2_5_game1_id}}">{{$team2_4vs2_5_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_4vs2_5_game2_id}}">{{$team2_4vs2_5_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_4vs2_6_game1_id}}">{{$team2_4vs2_6_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_4vs2_6_game2_id}}">{{$team2_4vs2_6_game2}}</a>
</td>
<td class="team_data">{{$team2_4_point}}</br>{{$team2_4_winningrate}}</br>{{$team2_4_offset}}</td>
<td class="team_data">{{$team2_4_order}}</td>
</tr>
<tr>
<td class="team_name"><b>{{$team2_5}}</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_5vs2_1_game1_id}}">{{$team2_5vs2_1_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_5vs2_1_game2_id}}">{{$team2_5vs2_1_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_5vs2_2_game1_id}}">{{$team2_5vs2_2_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_5vs2_2_game2_id}}">{{$team2_5vs2_2_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_5vs2_3_game1_id}}">{{$team2_5vs2_3_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_5vs2_3_game2_id}}">{{$team2_5vs2_3_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_5vs2_4_game1_id}}">{{$team2_5vs2_4_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_5vs2_4_game2_id}}">{{$team2_5vs2_4_game2}}</a>
</td>
<td class="team_result_winlose">{{$team2_5_result}}</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_5vs2_6_game1_id}}">{{$team2_5vs2_6_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_5vs2_6_game2_id}}">{{$team2_5vs2_6_game2}}</a>
</td>
<td class="team_data">{{$team2_5_point}}</br>{{$team2_5_winningrate}}</br>{{$team2_5_offset}}</td>
<td class="team_data">{{$team2_5_order}}</td>
</tr>
<tr>
<td class="team_name"><b>{{$team2_6}}</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_6vs2_1_game1_id}}">{{$team2_6vs2_1_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_6vs2_1_game2_id}}">{{$team2_6vs2_1_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_6vs2_2_game1_id}}">{{$team2_6vs2_2_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_6vs2_2_game2_id}}">{{$team2_6vs2_2_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_6vs2_3_game1_id}}">{{$team2_6vs2_3_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_6vs2_3_game2_id}}">{{$team2_6vs2_3_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_6vs2_4_game1_id}}">{{$team2_6vs2_4_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_6vs2_4_game2_id}}">{{$team2_6vs2_4_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_6vs2_5_game1_id}}">{{$team2_6vs2_5_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team2_6vs2_5_game2_id}}">{{$team2_6vs2_5_game2}}</a>
</td>
<td class="team_result_winlose">{{$team2_6_result}}</td>
<td class="team_data">{{$team2_6_point}}</br>{{$team2_6_winningrate}}</br>{{$team2_6_offset}}</td>
<td class="team_data">{{$team2_6_order}}</td>
</tr>
</table>
</td>
</tr>
</table>
</br></br>
{{/if}}


{{ if $belong_3_enable == 1 }}
<table class="content_table">
<tr>
<td><b>３部リーグ</b></td>
</tr>
<tr>
<td>
<table class="inner_table">
<tr>
<td class="team_name">チーム名</td>
<td class="team_name"><b>{{$team3_1}}</b></td>
<td class="team_name"><b>{{$team3_2}}</b></td>
<td class="team_name"><b>{{$team3_3}}</b></td>
<td class="team_name"><b>{{$team3_4}}</b></td>
<td class="team_name"><b>{{$team3_5}}</b></td>
<td class="team_name"><b>{{$team3_6}}</b></td>
<td class="team_data"><b>ポイント</br>勝率</br>得失点差</b></td>
<td class="team_data"><b>順位</b></td>
</tr>
<tr>
<td class="team_name"><b>{{$team3_1}}</b>
</td>
<td class="team_result_winlose">{{$team3_1_result}}</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_1vs3_2_game1_id}}">{{$team3_1vs3_2_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_1vs3_2_game2_id}}">{{$team3_1vs3_2_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_1vs3_3_game1_id}}">{{$team3_1vs3_3_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_1vs3_3_game2_id}}">{{$team3_1vs3_3_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_1vs3_4_game1_id}}">{{$team3_1vs3_4_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_1vs3_4_game2_id}}">{{$team3_1vs3_4_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_1vs3_5_game1_id}}">{{$team3_1vs3_5_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_1vs3_5_game2_id}}">{{$team3_1vs3_5_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_1vs3_6_game1_id}}">{{$team3_1vs3_6_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_1vs3_6_game2_id}}">{{$team3_1vs3_6_game2}}</a>
</td>
<td class="team_data">{{$team3_1_point}}</br>{{$team3_1_winningrate}}</br>{{$team3_1_offset}}</td>
<td class="team_data">{{$team3_1_order}}</td>
</tr>
<tr>
<td class="team_name"><b>{{$team3_2}}</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_2vs3_1_game1_id}}">{{$team3_2vs3_1_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_2vs3_1_game2_id}}">{{$team3_2vs3_1_game2}}</a>
</td>
<td class="team_result_winlose">{{$team3_2_result}}</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_2vs3_3_game1_id}}">{{$team3_2vs3_3_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_2vs3_3_game2_id}}">{{$team3_2vs3_3_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_2vs3_4_game1_id}}">{{$team3_2vs3_4_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_2vs3_4_game2_id}}">{{$team3_2vs3_4_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_2vs3_5_game1_id}}">{{$team3_2vs3_5_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_2vs3_5_game2_id}}">{{$team3_2vs3_5_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_2vs3_6_game1_id}}">{{$team3_2vs3_6_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_2vs3_6_game2_id}}">{{$team3_2vs3_6_game2}}</a>
</td>
<td class="team_data">{{$team3_2_point}}</br>{{$team3_2_winningrate}}</br>{{$team3_2_offset}}</td>
<td class="team_data">{{$team3_2_order}}</td>
</tr>
<tr>
<td class="team_name"><b>{{$team3_3}}</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_3vs3_1_game1_id}}">{{$team3_3vs3_1_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_3vs3_1_game2_id}}">{{$team3_3vs3_1_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_3vs3_2_game1_id}}">{{$team3_3vs3_2_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_3vs3_2_game2_id}}">{{$team3_3vs3_2_game2}}</a>
</td>
<td class="team_result_winlose">{{$team3_3_result}}</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_3vs3_4_game1_id}}">{{$team3_3vs3_4_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_3vs3_4_game2_id}}">{{$team3_3vs3_4_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_3vs3_5_game1_id}}">{{$team3_3vs3_5_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_3vs3_5_game2_id}}">{{$team3_3vs3_5_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_3vs3_6_game1_id}}">{{$team3_3vs3_6_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_3vs3_6_game2_id}}">{{$team3_3vs3_6_game2}}</a>
</td>
<td class="team_data">{{$team3_3_point}}</br>{{$team3_3_winningrate}}</br>{{$team3_3_offset}}</td>
<td class="team_data">{{$team3_3_order}}</td>
</tr>
<tr>
<td class="team_name"><b>{{$team3_4}}</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_4vs3_1_game1_id}}">{{$team3_4vs3_1_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_4vs3_1_game2_id}}">{{$team3_4vs3_1_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_4vs3_2_game1_id}}">{{$team3_4vs3_2_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_4vs3_2_game2_id}}">{{$team3_4vs3_2_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_4vs3_3_game1_id}}">{{$team3_4vs3_3_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_4vs3_3_game2_id}}">{{$team3_4vs3_3_game2}}</a>
</td>
<td class="team_result_winlose">{{$team3_4_result}}</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_4vs3_5_game1_id}}">{{$team3_4vs3_5_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_4vs3_5_game2_id}}">{{$team3_4vs3_5_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_4vs3_6_game1_id}}">{{$team3_4vs3_6_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_4vs3_6_game2_id}}">{{$team3_4vs3_6_game2}}</a>
</td>
<td class="team_data">{{$team3_4_point}}</br>{{$team3_4_winningrate}}</br>{{$team3_4_offset}}</td>
<td class="team_data">{{$team3_4_order}}</td>
</tr>
<tr>
<td class="team_name"><b>{{$team3_5}}</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_5vs3_1_game1_id}}">{{$team3_5vs3_1_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_5vs3_1_game2_id}}">{{$team3_5vs3_1_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_5vs3_2_game1_id}}">{{$team3_5vs3_2_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_5vs3_2_game2_id}}">{{$team3_5vs3_2_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_5vs3_3_game1_id}}">{{$team3_5vs3_3_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_5vs3_3_game2_id}}">{{$team3_5vs3_3_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_5vs3_4_game1_id}}">{{$team3_5vs3_4_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_5vs3_4_game2_id}}">{{$team3_5vs3_4_game2}}</a>
</td>
<td class="team_result_winlose">{{$team3_5_result}}</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_5vs3_6_game1_id}}">{{$team3_5vs3_6_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_5vs3_6_game2_id}}">{{$team3_5vs3_6_game2}}</a>
</td>
<td class="team_data">{{$team3_5_point}}</br>{{$team3_5_winningrate}}</br>{{$team3_5_offset}}</td>
<td class="team_data">{{$team3_5_order}}</td>
</tr>
<tr>
<td class="team_name"><b>{{$team3_6}}</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_6vs3_1_game1_id}}">{{$team3_6vs3_1_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_6vs3_1_game2_id}}">{{$team3_6vs3_1_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_6vs3_2_game1_id}}">{{$team3_6vs3_2_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_6vs3_2_game2_id}}">{{$team3_6vs3_2_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_6vs3_3_game1_id}}">{{$team3_6vs3_3_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_6vs3_3_game2_id}}">{{$team3_6vs3_3_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_6vs3_4_game1_id}}">{{$team3_6vs3_4_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_6vs3_4_game2_id}}">{{$team3_6vs3_4_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_6vs3_5_game1_id}}">{{$team3_6vs3_5_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team3_6vs3_5_game2_id}}">{{$team3_6vs3_5_game2}}</a>
</td>
<td class="team_result_winlose">{{$team3_6_result}}</td>
<td class="team_data">{{$team3_6_point}}</br>{{$team3_6_winningrate}}</br>{{$team3_6_offset}}</td>
<td class="team_data">{{$team3_6_order}}</td>
</tr>
</table>
</td>
</tr>
</table>
</br></br>
{{/if}}



{{ if $belong_4_enable == 1 }}
<table class="content_table">
<tr>
<td><b>４部リーグ</b></td>
</tr>
<tr>
<td>
<table class="inner_table">
<tr>
<td class="team_name">チーム名</td>
<td class="team_name"><b>{{$team4_1}}</b></td>
<td class="team_name"><b>{{$team4_2}}</b></td>
<td class="team_name"><b>{{$team4_3}}</b></td>
<td class="team_name"><b>{{$team4_4}}</b></td>
<td class="team_name"><b>{{$team4_5}}</b></td>
<td class="team_name"><b>{{$team4_6}}</b></td>
<td class="team_data"><b>ポイント</br>勝率</br>得失点差</b></td>
<td class="team_data"><b>順位</b></td>
</tr>
<tr>
<td class="team_name"><b>{{$team4_1}}</b>
</td>
<td class="team_result_winlose">{{$team4_1_result}}</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_1vs4_2_game1_id}}">{{$team4_1vs4_2_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_1vs4_2_game2_id}}">{{$team4_1vs4_2_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_1vs4_3_game1_id}}">{{$team4_1vs4_3_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_1vs4_3_game2_id}}">{{$team4_1vs4_3_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_1vs4_4_game1_id}}">{{$team4_1vs4_4_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_1vs4_4_game2_id}}">{{$team4_1vs4_4_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_1vs4_5_game1_id}}">{{$team4_1vs4_5_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_1vs4_5_game2_id}}">{{$team4_1vs4_5_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_1vs4_6_game1_id}}">{{$team4_1vs4_6_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_1vs4_6_game2_id}}">{{$team4_1vs4_6_game2}}</a>
</td>
<td class="team_data">{{$team4_1_point}}</br>{{$team4_1_winningrate}}</br>{{$team4_1_offset}}</td>
<td class="team_data">{{$team4_1_order}}</td>
</tr>
<tr>
<td class="team_name"><b>{{$team4_2}}</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_2vs4_1_game1_id}}">{{$team4_2vs4_1_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_2vs4_1_game2_id}}">{{$team4_2vs4_1_game2}}</a>
</td>
<td class="team_result_winlose">{{$team4_2_result}}</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_2vs4_3_game1_id}}">{{$team4_2vs4_3_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_2vs4_3_game2_id}}">{{$team4_2vs4_3_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_2vs4_4_game1_id}}">{{$team4_2vs4_4_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_2vs4_4_game2_id}}">{{$team4_2vs4_4_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_2vs4_5_game1_id}}">{{$team4_2vs4_5_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_2vs4_5_game2_id}}">{{$team4_2vs4_5_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_2vs4_6_game1_id}}">{{$team4_2vs4_6_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_2vs4_6_game2_id}}">{{$team4_2vs4_6_game2}}</a>
</td>
<td class="team_data">{{$team4_2_point}}</br>{{$team4_2_winningrate}}</br>{{$team4_2_offset}}</td>
<td class="team_data">{{$team4_2_order}}</td>
</tr>
<tr>
<td class="team_name"><b>{{$team4_3}}</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_3vs4_1_game1_id}}">{{$team4_3vs4_1_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_3vs4_1_game2_id}}">{{$team4_3vs4_1_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_3vs4_2_game1_id}}">{{$team4_3vs4_2_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_3vs4_2_game2_id}}">{{$team4_3vs4_2_game2}}</a>
</td>
<td class="team_result_winlose">{{$team4_3_result}}</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_3vs4_4_game1_id}}">{{$team4_3vs4_4_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_3vs4_4_game2_id}}">{{$team4_3vs4_4_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_3vs4_5_game1_id}}">{{$team4_3vs4_5_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_3vs4_5_game2_id}}">{{$team4_3vs4_5_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_3vs4_6_game1_id}}">{{$team4_3vs4_6_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_3vs4_6_game2_id}}">{{$team4_3vs4_6_game2}}</a>
</td>
<td class="team_data">{{$team4_3_point}}</br>{{$team4_3_winningrate}}</br>{{$team4_3_offset}}</td>
<td class="team_data">{{$team4_3_order}}</td>
</tr>
<tr>
<td class="team_name"><b>{{$team4_4}}</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_4vs4_1_game1_id}}">{{$team4_4vs4_1_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_4vs4_1_game2_id}}">{{$team4_4vs4_1_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_4vs4_2_game1_id}}">{{$team4_4vs4_2_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_4vs4_2_game2_id}}">{{$team4_4vs4_2_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_4vs4_3_game1_id}}">{{$team4_4vs4_3_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_4vs4_3_game2_id}}">{{$team4_4vs4_3_game2}}</a>
</td>
<td class="team_result_winlose">{{$team4_4_result}}</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_4vs4_5_game1_id}}">{{$team4_4vs4_5_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_4vs4_5_game2_id}}">{{$team4_4vs4_5_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_4vs4_6_game1_id}}">{{$team4_4vs4_6_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_4vs4_6_game2_id}}">{{$team4_4vs4_6_game2}}</a>
</td>
<td class="team_data">{{$team4_4_point}}</br>{{$team4_4_winningrate}}</br>{{$team4_4_offset}}</td>
<td class="team_data">{{$team4_4_order}}</td>
</tr>
<tr>
<td class="team_name"><b>{{$team4_5}}</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_5vs4_1_game1_id}}">{{$team4_5vs4_1_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_5vs4_1_game2_id}}">{{$team4_5vs4_1_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_5vs4_2_game1_id}}">{{$team4_5vs4_2_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_5vs4_2_game2_id}}">{{$team4_5vs4_2_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_5vs4_3_game1_id}}">{{$team4_5vs4_3_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_5vs4_3_game2_id}}">{{$team4_5vs4_3_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_5vs4_4_game1_id}}">{{$team4_5vs4_4_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_5vs4_4_game2_id}}">{{$team4_5vs4_4_game2}}</a>
</td>
<td class="team_result_winlose">{{$team4_5_result}}</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_5vs4_6_game1_id}}">{{$team4_5vs4_6_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_5vs4_6_game2_id}}">{{$team4_5vs4_6_game2}}</a>
</td>
<td class="team_data">{{$team4_5_point}}</br>{{$team4_5_winningrate}}</br>{{$team4_5_offset}}</td>
<td class="team_data">{{$team4_5_order}}</td>
</tr>
<tr>
<td class="team_name"><b>{{$team4_6}}</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_6vs4_1_game1_id}}">{{$team4_6vs4_1_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_6vs4_1_game2_id}}">{{$team4_6vs4_1_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_6vs4_2_game1_id}}">{{$team4_6vs4_2_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_6vs4_2_game2_id}}">{{$team4_6vs4_2_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_6vs4_3_game1_id}}">{{$team4_6vs4_3_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_6vs4_3_game2_id}}">{{$team4_6vs4_3_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_6vs4_4_game1_id}}">{{$team4_6vs4_4_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_6vs4_4_game2_id}}">{{$team4_6vs4_4_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_6vs4_5_game1_id}}">{{$team4_6vs4_5_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team4_6vs4_5_game2_id}}">{{$team4_6vs4_5_game2}}</a>
</td>
<td class="team_result_winlose">{{$team4_6_result}}</td>
<td class="team_data">{{$team4_6_point}}</br>{{$team4_6_winningrate}}</br>{{$team4_6_offset}}</td>
<td class="team_data">{{$team4_6_order}}</td>
</tr>
</table>
</td>
</tr>
</table>
</br></br>
{{/if}}

{{ if $belong_5_enable == 1 }}
<table class="content_table">
<tr>
<td><b>５部リーグ</b></td>
</tr>
<tr>
<td>
<table class="inner_table">
<tr>
<td class="team_name">チーム名</td>
<td class="team_name"><b>{{$team5_1}}</b></td>
<td class="team_name"><b>{{$team5_2}}</b></td>
<td class="team_name"><b>{{$team5_3}}</b></td>
<td class="team_name"><b>{{$team5_4}}</b></td>
<td class="team_name"><b>{{$team5_5}}</b></td>
<td class="team_name"><b>{{$team5_6}}</b></td>
<td class="team_data"><b>ポイント</br>勝率</br>得失点差</b></td>
<td class="team_data"><b>順位</b></td>
</tr>
<tr>
<td class="team_name"><b>{{$team5_1}}</b>
</td>
<td class="team_result_winlose">{{$team5_1_result}}</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_1vs5_2_game1_id}}">{{$team5_1vs5_2_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_1vs5_2_game2_id}}">{{$team5_1vs5_2_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_1vs5_3_game1_id}}">{{$team5_1vs5_3_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_1vs5_3_game2_id}}">{{$team5_1vs5_3_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_1vs5_4_game1_id}}">{{$team5_1vs5_4_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_1vs5_4_game2_id}}">{{$team5_1vs5_4_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_1vs5_5_game1_id}}">{{$team5_1vs5_5_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_1vs5_5_game2_id}}">{{$team5_1vs5_5_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_1vs5_6_game1_id}}">{{$team5_1vs5_6_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_1vs5_6_game2_id}}">{{$team5_1vs5_6_game2}}</a>
</td>
<td class="team_data">{{$team5_1_point}}</br>{{$team5_1_winningrate}}</br>{{$team5_1_offset}}</td>
<td class="team_data">{{$team5_1_order}}</td>
</tr>
<tr>
<td class="team_name"><b>{{$team5_2}}</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_2vs5_1_game1_id}}">{{$team5_2vs5_1_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_2vs5_1_game2_id}}">{{$team5_2vs5_1_game2}}</a>
</td>
<td class="team_result_winlose">{{$team5_2_result}}</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_2vs5_3_game1_id}}">{{$team5_2vs5_3_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_2vs5_3_game2_id}}">{{$team5_2vs5_3_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_2vs5_4_game1_id}}">{{$team5_2vs5_4_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_2vs5_4_game2_id}}">{{$team5_2vs5_4_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_2vs5_5_game1_id}}">{{$team5_2vs5_5_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_2vs5_5_game2_id}}">{{$team5_2vs5_5_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_2vs5_6_game1_id}}">{{$team5_2vs5_6_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_2vs5_6_game2_id}}">{{$team5_2vs5_6_game2}}</a>
</td>
<td class="team_data">{{$team5_2_point}}</br>{{$team5_2_winningrate}}</br>{{$team5_2_offset}}</td>
<td class="team_data">{{$team5_2_order}}</td>
</tr>
<tr>
<td class="team_name"><b>{{$team5_3}}</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_3vs5_1_game1_id}}">{{$team5_3vs5_1_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_3vs5_1_game2_id}}">{{$team5_3vs5_1_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_3vs5_2_game1_id}}">{{$team5_3vs5_2_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_3vs5_2_game2_id}}">{{$team5_3vs5_2_game2}}</a>
</td>
<td class="team_result_winlose">{{$team5_3_result}}</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_3vs5_4_game1_id}}">{{$team5_3vs5_4_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_3vs5_4_game2_id}}">{{$team5_3vs5_4_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_3vs5_5_game1_id}}">{{$team5_3vs5_5_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_3vs5_5_game2_id}}">{{$team5_3vs5_5_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_3vs5_6_game1_id}}">{{$team5_3vs5_6_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_3vs5_6_game2_id}}">{{$team5_3vs5_6_game2}}</a>
</td>
<td class="team_data">{{$team5_3_point}}</br>{{$team5_3_winningrate}}</br>{{$team5_3_offset}}</td>
<td class="team_data">{{$team5_3_order}}</td>
</tr>
<tr>
<td class="team_name"><b>{{$team5_4}}</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_4vs5_1_game1_id}}">{{$team5_4vs5_1_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_4vs5_1_game2_id}}">{{$team5_4vs5_1_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_4vs5_2_game1_id}}">{{$team5_4vs5_2_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_4vs5_2_game2_id}}">{{$team5_4vs5_2_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_4vs5_3_game1_id}}">{{$team5_4vs5_3_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_4vs5_3_game2_id}}">{{$team5_4vs5_3_game2}}</a>
</td>
<td class="team_result_winlose">{{$team5_4_result}}</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_4vs5_5_game1_id}}">{{$team5_4vs5_5_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_4vs5_5_game2_id}}">{{$team5_4vs5_5_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_4vs5_6_game1_id}}">{{$team5_4vs5_6_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_4vs5_6_game2_id}}">{{$team5_4vs5_6_game2}}</a>
</td>
<td class="team_data">{{$team5_4_point}}</br>{{$team5_4_winningrate}}</br>{{$team5_4_offset}}</td>
<td class="team_data">{{$team5_4_order}}</td>
</tr>
<tr>
<td class="team_name"><b>{{$team5_5}}</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_5vs5_1_game1_id}}">{{$team5_5vs5_1_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_5vs5_1_game2_id}}">{{$team5_5vs5_1_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_5vs5_2_game1_id}}">{{$team5_5vs5_2_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_5vs5_2_game2_id}}">{{$team5_5vs5_2_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_5vs5_3_game1_id}}">{{$team5_5vs5_3_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_5vs5_3_game2_id}}">{{$team5_5vs5_3_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_5vs5_4_game1_id}}">{{$team5_5vs5_4_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_5vs5_4_game2_id}}">{{$team5_5vs5_4_game2}}</a>
</td>
<td class="team_result_winlose">{{$team5_5_result}}</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_5vs5_6_game1_id}}">{{$team5_5vs5_6_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_5vs5_6_game2_id}}">{{$team5_5vs5_6_game2}}</a>
</td>
<td class="team_data">{{$team5_5_point}}</br>{{$team5_5_winningrate}}</br>{{$team5_5_offset}}</td>
<td class="team_data">{{$team5_5_order}}</td>
</tr>
<tr>
<td class="team_name"><b>{{$team5_6}}</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_6vs5_1_game1_id}}">{{$team5_6vs5_1_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_6vs5_1_game2_id}}">{{$team5_6vs5_1_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_6vs5_2_game1_id}}">{{$team5_6vs5_2_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_6vs5_2_game2_id}}">{{$team5_6vs5_2_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_6vs5_3_game1_id}}">{{$team5_6vs5_3_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_6vs5_3_game2_id}}">{{$team5_6vs5_3_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_6vs5_4_game1_id}}">{{$team5_6vs5_4_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_6vs5_4_game2_id}}">{{$team5_6vs5_4_game2}}</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_6vs5_5_game1_id}}">{{$team5_6vs5_5_game1}}</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id={{$team5_6vs5_5_game2_id}}">{{$team5_6vs5_5_game2}}</a>
</td>
<td class="team_result_winlose">{{$team5_6_result}}</td>
<td class="team_data">{{$team5_6_point}}</br>{{$team5_6_winningrate}}</br>{{$team5_6_offset}}</td>
<td class="team_data">{{$team5_6_order}}</td>
</tr>
</table>
</td>
</tr>
</table>
</br></br>
{{/if}}


</form>
</center>
</br>

{{include file='schedule_footer.tpl' }}


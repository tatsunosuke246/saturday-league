{{include file='schedule_header.tpl' title='サタデーリーグ スケジュール管理' javascriptfile='/js/schedule_listt.js' }}

<center>
<h3>スケジュール</h3>
<hr class="sub_contents">
</br>
<a href = "/Scheduleedit/start">スケジュールを追加する</a>
</br></br>

<form name="schedule_list" id="schedule_list" method="post" >

<table class="content_table">
<tr>
<td>検索方式</td>
<td>日付順</td>
<td colspan = "2">
{{$game_list_search_type_radio}}
</td>
</tr>

<tr>
<td>{{$game_list_options}}</td>
<td>{{$game_dateorder_type_options}}</td>
<td>{{$belong_list_options}}</td>
<td>{{$game_list_team__options}}</td>
</tr>
</table>

<input type="button" name = "update" id="update" value="更新" onclick="funcSearchSchedule()"/>
</br></br>

{{ section name="loopName" loop=$array_game_id }}
{{ if $smarty.section.loopName.first }}
<br />
<table class="content_table">
<tr>
<td class="width_20">試合日</td>
<td class="width_20">グラウンド</td>
<td>対戦チーム</td>
</tr>
{{/if}}

<tr>

{{ if $array_game_schedule_status[loopName] == 1 }}
<td class="during_offer">
{{ elseif $array_game_schedule_status[loopName] == 5 }}
<td class="offer_transfer">
{{ elseif $array_game_schedule_status[loopName] == 6 }}
<td class="offer_end">
{{ else }}
<td>
{{ /if }}

{{ $array_game_date[loopName]|date_format:"%Y/%m/%d (%a)"|replace:"Sun":"日"|replace:"Mon":"月"|replace:"Tue":"火"|replace:"Wed":"水"|replace:"Thu":"木"|replace:"Fri":"金"|replace:"Sat":"土" }}
</br>
{{$array_game_time[loopName]}}
</br>
{{ if $array_game_belong_number[loopName] == 6 }}
その他
{{else}}
{{ if $array_game_schedule_status[loopName] == 5 || $array_game_schedule_status[loopName] == 6 }}
{{ $array_game_belong_number[loopName] }}部
{{else}}
{{ $array_game_belong_number[loopName] }}部公式戦
{{/if}}


{{/if}}
</td>

{{ if $array_game_schedule_status[loopName] == 1 }}
<td class="during_offer">
{{ elseif $array_game_schedule_status[loopName] == 5 }}
<td class="offer_transfer">
{{ elseif $array_game_schedule_status[loopName] == 6 }}
<td class="offer_end">
{{ else }}
<td>
{{ /if }}

{{ $array_game_ground[loopName] }}
</td>

{{ if $array_game_schedule_status[loopName] == 1 }}
<td class="during_offer">
{{ elseif $array_game_schedule_status[loopName] == 5 }}
<td class="offer_transfer">
{{ elseif $array_game_schedule_status[loopName] == 6 }}
<td class="offer_end">
{{ else }}
<td>
{{ /if }}

<a href = "/Scheduleedit/edit/?schedule_id={{$array_game_id[loopName]}}">
{{ if $array_game_schedule_status[loopName] == 1 }}
{{ $array_game_team_1[loopName] }} vs (募集中)
{{ elseif $array_game_schedule_status[loopName] == 5 }}
{{ $array_game_team_1[loopName] }} (譲渡中)
{{ elseif $array_game_schedule_status[loopName] == 6 }}
{{ $array_game_team_1[loopName] }} (募集終了)
{{ else }}
{{ $array_game_team_1[loopName] }} vs {{ $array_game_team_2[loopName] }}
{{/if}}

</a>
{{ if $game_list_type == 0 || $game_list_type == 4 || $game_list_type == 5 || $game_list_type == 6}}
</br>
{{ if $array_game_schedule_status[loopName] == 3 }}
{{ $array_game_team_score1[loopName] }} － {{ $array_game_team_score2[loopName] }}
</br></br>
<table class="inner_table">
<tr>
<td class="inning_header"></td>
<td class="inning_header">1</td>
<td class="inning_header">2</td>
<td class="inning_header">3</td>
<td class="inning_header">4</td>
<td class="inning_header">5</td>
<td class="inning_header">6</td>
<td class="inning_header">7</td>
<td class="inning_header">8</td>
<td class="inning_header">9</td>
<td class="inning_header">計</td>
</tr>
<tr>
<td class="inning_team_name">{{$array_display_team_1[loopName]}}</td>
<td class="inning_team_name">{{ if $game_result_team1_inn1_e[loopName] == 1 }}{{$game_result_team1_inn1[loopName]}}{{/if}}</td>
<td class="inning_team_name">{{ if $game_result_team1_inn2_e[loopName] == 1 }}{{$game_result_team1_inn2[loopName]}}{{/if}}</td>
<td class="inning_team_name">{{ if $game_result_team1_inn3_e[loopName] == 1 }}{{$game_result_team1_inn3[loopName]}}{{/if}}</td>
<td class="inning_team_name">{{ if $game_result_team1_inn4_e[loopName] == 1 }}{{$game_result_team1_inn4[loopName]}}{{/if}}</td>
<td class="inning_team_name">{{ if $game_result_team1_inn5_e[loopName] == 1 }}{{$game_result_team1_inn5[loopName]}}{{/if}}</td>
<td class="inning_team_name">{{ if $game_result_team1_inn6_e[loopName] == 1 }}{{$game_result_team1_inn6[loopName]}}{{/if}}</td>
<td class="inning_team_name">{{ if $game_result_team1_inn7_e[loopName] == 1 }}{{$game_result_team1_inn7[loopName]}}{{/if}}</td>
<td class="inning_team_name">{{ if $game_result_team1_inn8_e[loopName] == 1 }}{{$game_result_team1_inn8[loopName]}}{{/if}}</td>
<td class="inning_team_name">{{ if $game_result_team1_inn9_e[loopName] == 1 }}{{$game_result_team1_inn9[loopName]}}{{/if}}</td>
<td class="inning_team_name_15"><b>{{$game_result_team1_total[loopName]}}</b></td>
</tr>
<tr>
<td class="inning_team_name">{{$array_display_team_2[loopName]}}</td>
<td class="inning_team_name">{{ if $game_result_team2_inn1_e[loopName] == 1 }}{{$game_result_team2_inn1[loopName]}}{{/if}}</td>
<td class="inning_team_name">{{ if $game_result_team2_inn2_e[loopName] == 1 }}{{$game_result_team2_inn2[loopName]}}{{/if}}</td>
<td class="inning_team_name">{{ if $game_result_team2_inn3_e[loopName] == 1 }}{{$game_result_team2_inn3[loopName]}}{{/if}}</td>
<td class="inning_team_name">{{ if $game_result_team2_inn4_e[loopName] == 1 }}{{$game_result_team2_inn4[loopName]}}{{/if}}</td>
<td class="inning_team_name">{{ if $game_result_team2_inn5_e[loopName] == 1 }}{{$game_result_team2_inn5[loopName]}}{{/if}}</td>
<td class="inning_team_name">{{ if $game_result_team2_inn6_e[loopName] == 1 }}{{$game_result_team2_inn6[loopName]}}{{/if}}</td>
<td class="inning_team_name">{{ if $game_result_team2_inn7_e[loopName] == 1 }}{{$game_result_team2_inn7[loopName]}}{{/if}}</td>
<td class="inning_team_name">{{ if $game_result_team2_inn8_e[loopName] == 1 }}{{$game_result_team2_inn8[loopName]}}{{/if}}</td>
<td class="inning_team_name">{{ if $game_result_team2_inn9_e[loopName] == 1 }}{{$game_result_team2_inn9[loopName]}}{{/if}}</td>
<td class="inning_team_name_15"><b>{{$game_result_team2_total[loopName]}}</b></td>
</tr>
</table>
</br>
{{ elseif $array_game_schedule_status[loopName] == 4 }}
雨天中止</br>
{{/if}}

{{ else }}
</br></br>
{{/if}}

{{ if $array_game_comment[loopName] != "" }}
{{ $array_game_comment[loopName] }}
{{/if}}

</td>
</tr>

{{ if $smarty.section.loopName.last }}
</table>
{{/if}}
{{ sectionelse }}
<br />
スケジュールが登録されていません
{{ /section }}

</form>
</center>
</br>

{{include file='schedule_footer.tpl' }}


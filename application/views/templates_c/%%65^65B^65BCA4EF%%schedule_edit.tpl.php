<?php /* Smarty version 2.6.27, created on 2013-04-04 15:25:40
         compiled from schedule_edit.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'schedule_header.tpl', 'smarty_include_vars' => array('title' => 'サタデーリーグ スケジュール編集','javascriptfile' => '/js/schedule_edit.js')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<center>
<h3>スケジュールの編集</h3>
<hr class="sub_contents">
</br>

<?php if ($this->_tpl_vars['page_message'] != ""): ?>
<?php echo $this->_tpl_vars['page_message']; ?>

</br></br>
<?php endif; ?>

<form name="schedule_edit" id="schedule_edit" method="post">

<table class="content_table">
<tr>
<td>試合日</td>
<td align=\left\>
<INPUT TYPE=text style="ime-mode: disabled;" NAME="game_date_month" size=3 maxlength=2 value = <?php echo $this->_tpl_vars['game_date_month']; ?>
> 月
<INPUT TYPE=text style="ime-mode: disabled;" NAME="game_date_day" size=3 maxlength=2 value = <?php echo $this->_tpl_vars['game_date_day']; ?>
> 日
</td>
</tr>

<tr>
<td>開始時間</td>
<td>
<INPUT TYPE=text style="ime-mode: disabled;" NAME="game_start_hour" size=3 maxlength=2 value = <?php echo $this->_tpl_vars['game_start_hour']; ?>
> 時
<INPUT TYPE=text style="ime-mode: disabled;" NAME="game_start_minutes" size=3 maxlength=2 value = <?php echo $this->_tpl_vars['game_start_minutes']; ?>
> 分
</td>
</tr>

<tr>
<td>終了時間</td>
<td>
<INPUT TYPE=text style="ime-mode: disabled;" NAME="game_end_hour" size=3 maxlength=2 value = <?php echo $this->_tpl_vars['game_end_hour']; ?>
> 時
<INPUT TYPE=text style="ime-mode: disabled;" NAME="game_end_minutes" size=3 maxlength=2 value = <?php echo $this->_tpl_vars['game_end_minutes']; ?>
> 分
</td>
</tr>

<tr>
<td>グラウンド名</td>
<td>
<INPUT TYPE=text NAME="game_ground" size=50 maxlength=50 value = <?php echo $this->_tpl_vars['game_ground']; ?>
>
</td>
</tr>

<tr>
<td>主催チーム</td>
<td>
<?php echo $this->_tpl_vars['options_game_team1']; ?>

</td>
</tr>

<tr>
<td>相手チーム</td>
<td>
<?php echo $this->_tpl_vars['options_game_team2']; ?>

</td>
</tr>

<tr>
<td>試合の種別</td>
<td>
<?php echo $this->_tpl_vars['options_game_belong_type']; ?>

</td>
</tr>

<tr>
<td>スケジュールの状態</td>
<td>
<?php echo $this->_tpl_vars['options_game_type']; ?>

</td>
</tr>

<tr>
<td>審判</td>
<td>
<?php echo $this->_tpl_vars['options_umpire_type']; ?>

</td>
</tr>

<?php if ($this->_tpl_vars['schedule_id'] != 0): ?>
<tr>
<td>試合結果</td>
<td align="center">

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
<td class="inning_header"></td>
</tr>
<tr>
<td class="inning_team_name"><div id="game_result_team1_name"><?php echo $this->_tpl_vars['team1_name']; ?>
</div></td>
<td class="inning_team_name"><INPUT TYPE=text style="ime-mode: disabled;" NAME="game_result_team1_inn1" size=2 maxlength=2 value = <?php if ($this->_tpl_vars['game_result_team1_inn1_e'] == 1): ?><?php echo $this->_tpl_vars['game_result_team1_inn1']; ?>
<?php endif; ?>></td>
<td class="inning_team_name"><INPUT TYPE=text style="ime-mode: disabled;" NAME="game_result_team1_inn2" size=2 maxlength=2 value = <?php if ($this->_tpl_vars['game_result_team1_inn2_e'] == 1): ?><?php echo $this->_tpl_vars['game_result_team1_inn2']; ?>
<?php endif; ?>></td>
<td class="inning_team_name"><INPUT TYPE=text style="ime-mode: disabled;" NAME="game_result_team1_inn3" size=2 maxlength=2 value = <?php if ($this->_tpl_vars['game_result_team1_inn3_e'] == 1): ?><?php echo $this->_tpl_vars['game_result_team1_inn3']; ?>
<?php endif; ?>></td>
<td class="inning_team_name"><INPUT TYPE=text style="ime-mode: disabled;" NAME="game_result_team1_inn4" size=2 maxlength=2 value = <?php if ($this->_tpl_vars['game_result_team1_inn4_e'] == 1): ?><?php echo $this->_tpl_vars['game_result_team1_inn4']; ?>
<?php endif; ?>></td>
<td class="inning_team_name"><INPUT TYPE=text style="ime-mode: disabled;" NAME="game_result_team1_inn5" size=2 maxlength=2 value = <?php if ($this->_tpl_vars['game_result_team1_inn5_e'] == 1): ?><?php echo $this->_tpl_vars['game_result_team1_inn5']; ?>
<?php endif; ?>></td>
<td class="inning_team_name"><INPUT TYPE=text style="ime-mode: disabled;" NAME="game_result_team1_inn6" size=2 maxlength=2 value = <?php if ($this->_tpl_vars['game_result_team1_inn6_e'] == 1): ?><?php echo $this->_tpl_vars['game_result_team1_inn6']; ?>
<?php endif; ?>></td>
<td class="inning_team_name"><INPUT TYPE=text style="ime-mode: disabled;" NAME="game_result_team1_inn7" size=2 maxlength=2 value = <?php if ($this->_tpl_vars['game_result_team1_inn7_e'] == 1): ?><?php echo $this->_tpl_vars['game_result_team1_inn7']; ?>
<?php endif; ?>></td>
<td class="inning_team_name"><INPUT TYPE=text style="ime-mode: disabled;" NAME="game_result_team1_inn8" size=2 maxlength=2 value = <?php if ($this->_tpl_vars['game_result_team1_inn8_e'] == 1): ?><?php echo $this->_tpl_vars['game_result_team1_inn8']; ?>
<?php endif; ?>></td>
<td class="inning_team_name"><INPUT TYPE=text style="ime-mode: disabled;" NAME="game_result_team1_inn9" size=2 maxlength=2 value = <?php if ($this->_tpl_vars['game_result_team1_inn9_e'] == 1): ?><?php echo $this->_tpl_vars['game_result_team1_inn9']; ?>
<?php endif; ?>></td>
<td class="inning_team_name_15"><?php echo $this->_tpl_vars['game_result_team1_total']; ?>
</td>
</tr>
<tr>
<td class="inning_team_name"><div id="game_result_team2_name"><?php echo $this->_tpl_vars['team2_name']; ?>
</div></td>
<td class="inning_team_name"><INPUT TYPE=text style="ime-mode: disabled;" NAME="game_result_team2_inn1" size=2 maxlength=2 value = <?php if ($this->_tpl_vars['game_result_team2_inn1_e'] == 1): ?><?php echo $this->_tpl_vars['game_result_team2_inn1']; ?>
<?php endif; ?>></td>
<td class="inning_team_name"><INPUT TYPE=text style="ime-mode: disabled;" NAME="game_result_team2_inn2" size=2 maxlength=2 value = <?php if ($this->_tpl_vars['game_result_team2_inn2_e'] == 1): ?><?php echo $this->_tpl_vars['game_result_team2_inn2']; ?>
<?php endif; ?>></td>
<td class="inning_team_name"><INPUT TYPE=text style="ime-mode: disabled;" NAME="game_result_team2_inn3" size=2 maxlength=2 value = <?php if ($this->_tpl_vars['game_result_team2_inn3_e'] == 1): ?><?php echo $this->_tpl_vars['game_result_team2_inn3']; ?>
<?php endif; ?>></td>
<td class="inning_team_name"><INPUT TYPE=text style="ime-mode: disabled;" NAME="game_result_team2_inn4" size=2 maxlength=2 value = <?php if ($this->_tpl_vars['game_result_team2_inn4_e'] == 1): ?><?php echo $this->_tpl_vars['game_result_team2_inn4']; ?>
<?php endif; ?>></td>
<td class="inning_team_name"><INPUT TYPE=text style="ime-mode: disabled;" NAME="game_result_team2_inn5" size=2 maxlength=2 value = <?php if ($this->_tpl_vars['game_result_team2_inn5_e'] == 1): ?><?php echo $this->_tpl_vars['game_result_team2_inn5']; ?>
<?php endif; ?>></td>
<td class="inning_team_name"><INPUT TYPE=text style="ime-mode: disabled;" NAME="game_result_team2_inn6" size=2 maxlength=2 value = <?php if ($this->_tpl_vars['game_result_team2_inn6_e'] == 1): ?><?php echo $this->_tpl_vars['game_result_team2_inn6']; ?>
<?php endif; ?>></td>
<td class="inning_team_name"><INPUT TYPE=text style="ime-mode: disabled;" NAME="game_result_team2_inn7" size=2 maxlength=2 value = <?php if ($this->_tpl_vars['game_result_team2_inn7_e'] == 1): ?><?php echo $this->_tpl_vars['game_result_team2_inn7']; ?>
<?php endif; ?>></td>
<td class="inning_team_name"><INPUT TYPE=text style="ime-mode: disabled;" NAME="game_result_team2_inn8" size=2 maxlength=2 value = <?php if ($this->_tpl_vars['game_result_team2_inn8_e'] == 1): ?><?php echo $this->_tpl_vars['game_result_team2_inn8']; ?>
<?php endif; ?>></td>
<td class="inning_team_name"><INPUT TYPE=text style="ime-mode: disabled;" NAME="game_result_team2_inn9" size=2 maxlength=2 value = <?php if ($this->_tpl_vars['game_result_team2_inn9_e'] == 1): ?><?php echo $this->_tpl_vars['game_result_team2_inn9']; ?>
<?php endif; ?>></td>
<td class="inning_team_name_15"><?php echo $this->_tpl_vars['game_result_team2_total']; ?>
</td>
</tr>
</table>
</td>
</tr>

<tr>
<td>主催チーム攻撃順</td>
<td><?php echo $this->_tpl_vars['options_batting_first_flg']; ?>
</td>
</tr>

<tr>
<td>試合形式(不戦敗の有無)</td>
<td><?php echo $this->_tpl_vars['options_game_result_type']; ?>
</td>
</tr>

<tr>
<td>試合終了時</td>
<td><?php echo $this->_tpl_vars['options_game_complate_flg']; ?>
</td>
</tr>

<?php endif; ?>

<tr>
<td>コメント</td>
<td align=\left\>
<TEXTAREA NAME="game_comment" rows="4" cols="40" maxlength=90 ><?php echo $this->_tpl_vars['game_comment']; ?>
</TEXTAREA>
</td>
</tr>


<tr>
<td>パスワード</td>
<td>
更新にはパスワードが必要です</br>
<INPUT TYPE=password NAME="edit_password" size=20 maxlength=10 >
</td>
</tr>
</table>

<?php if ($this->_tpl_vars['schedule_id'] == 0): ?>
<input type="button" name = "add" id="add" value="追加" onclick="funcAddSchedule()"/>
<?php else: ?>
<input type="button" name = "update" id="update" value="更新" onclick="funcUpdateSchedule()"/>
<input type="button" name = "remove" id="remove" value="削除" onclick="funcRemoveSchedule()"/>
<?php endif; ?>

<input type="hidden" name="hidden_select_team1_name" value="<?php echo $this->_tpl_vars['team1_name']; ?>
"> 
<input type="hidden" name="hidden_select_team2_name" value="<?php echo $this->_tpl_vars['team2_name']; ?>
"> 


</form>
</center>
</br>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'schedule_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
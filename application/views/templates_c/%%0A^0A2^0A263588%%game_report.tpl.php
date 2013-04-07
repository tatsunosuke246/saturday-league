<?php /* Smarty version 2.6.27, created on 2013-04-04 11:31:32
         compiled from game_report.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'schedule_header.tpl', 'smarty_include_vars' => array('title' => 'サタデーリーグ 成績表','javascriptfile' => '/js/game_report.js')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<center>
<h3>成績表</h3>
<hr class="sub_contents">
</br>

<form name="game_report" id="game_report" method="post" >

<?php echo $this->_tpl_vars['belong_list_options']; ?>

<input type="button" name = "update" id="update" value="更新" onclick="funcSearchSchedule()"/>
</br></br>

<?php if ($this->_tpl_vars['belong_1_enable'] == 1): ?>
<table class="content_table">
<tr>
<td><b>１部リーグ</b></td>
</tr>
<tr>
<td>
<table class="inner_table">
<tr>
<td class="team_name">チーム名</td>
<td class="team_name"><b><?php echo $this->_tpl_vars['team1_1']; ?>
</b></td>
<td class="team_name"><b><?php echo $this->_tpl_vars['team1_2']; ?>
</b></td>
<td class="team_name"><b><?php echo $this->_tpl_vars['team1_3']; ?>
</b></td>
<td class="team_name"><b><?php echo $this->_tpl_vars['team1_4']; ?>
</b></td>
<td class="team_name"><b><?php echo $this->_tpl_vars['team1_5']; ?>
</b></td>
<td class="team_name"><b><?php echo $this->_tpl_vars['team1_6']; ?>
</b></td>
<td class="team_data"><b>勝ち点</br>勝率</br>得失点差</b></td>
<td class="team_data"><b>順位</b></td>
</tr>
<tr>
<td class="team_name"><b><?php echo $this->_tpl_vars['team1_1']; ?>
</b>
</td>
<td class="team_result_winlose"><?php echo $this->_tpl_vars['team1_1_result']; ?>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_1vs1_2_game1_id']; ?>
"><?php echo $this->_tpl_vars['team1_1vs1_2_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_1vs1_2_game2_id']; ?>
"><?php echo $this->_tpl_vars['team1_1vs1_2_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_1vs1_3_game1_id']; ?>
"><?php echo $this->_tpl_vars['team1_1vs1_3_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_1vs1_3_game2_id']; ?>
"><?php echo $this->_tpl_vars['team1_1vs1_3_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_1vs1_4_game1_id']; ?>
"><?php echo $this->_tpl_vars['team1_1vs1_4_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_1vs1_4_game2_id']; ?>
"><?php echo $this->_tpl_vars['team1_1vs1_4_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_1vs1_5_game1_id']; ?>
"><?php echo $this->_tpl_vars['team1_1vs1_5_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_1vs1_5_game2_id']; ?>
"><?php echo $this->_tpl_vars['team1_1vs1_5_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_1vs1_6_game1_id']; ?>
"><?php echo $this->_tpl_vars['team1_1vs1_6_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_1vs1_6_game2_id']; ?>
"><?php echo $this->_tpl_vars['team1_1vs1_6_game2']; ?>
</a>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team1_1_point']; ?>
</br><?php echo $this->_tpl_vars['team1_1_winningrate']; ?>
</br><?php echo $this->_tpl_vars['team1_1_offset']; ?>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team1_1_order']; ?>
</td>
</tr>
<tr>
<td class="team_name"><b><?php echo $this->_tpl_vars['team1_2']; ?>
</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_2vs1_1_game1_id']; ?>
"><?php echo $this->_tpl_vars['team1_2vs1_1_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_2vs1_1_game2_id']; ?>
"><?php echo $this->_tpl_vars['team1_2vs1_1_game2']; ?>
</a>
</td>
<td class="team_result_winlose"><?php echo $this->_tpl_vars['team1_2_result']; ?>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_2vs1_3_game1_id']; ?>
"><?php echo $this->_tpl_vars['team1_2vs1_3_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_2vs1_3_game2_id']; ?>
"><?php echo $this->_tpl_vars['team1_2vs1_3_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_2vs1_4_game1_id']; ?>
"><?php echo $this->_tpl_vars['team1_2vs1_4_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_2vs1_4_game2_id']; ?>
"><?php echo $this->_tpl_vars['team1_2vs1_4_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_2vs1_5_game1_id']; ?>
"><?php echo $this->_tpl_vars['team1_2vs1_5_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_2vs1_5_game2_id']; ?>
"><?php echo $this->_tpl_vars['team1_2vs1_5_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_2vs1_6_game1_id']; ?>
"><?php echo $this->_tpl_vars['team1_2vs1_6_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_2vs1_6_game2_id']; ?>
"><?php echo $this->_tpl_vars['team1_2vs1_6_game2']; ?>
</a>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team1_2_point']; ?>
</br><?php echo $this->_tpl_vars['team1_2_winningrate']; ?>
</br><?php echo $this->_tpl_vars['team1_2_offset']; ?>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team1_2_order']; ?>
</td>
</tr>
<tr>
<td class="team_name"><b><?php echo $this->_tpl_vars['team1_3']; ?>
</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_3vs1_1_game1_id']; ?>
"><?php echo $this->_tpl_vars['team1_3vs1_1_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_3vs1_1_game2_id']; ?>
"><?php echo $this->_tpl_vars['team1_3vs1_1_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_3vs1_2_game1_id']; ?>
"><?php echo $this->_tpl_vars['team1_3vs1_2_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_3vs1_2_game2_id']; ?>
"><?php echo $this->_tpl_vars['team1_3vs1_2_game2']; ?>
</a>
</td>
<td class="team_result_winlose"><?php echo $this->_tpl_vars['team1_3_result']; ?>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_3vs1_4_game1_id']; ?>
"><?php echo $this->_tpl_vars['team1_3vs1_4_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_3vs1_4_game2_id']; ?>
"><?php echo $this->_tpl_vars['team1_3vs1_4_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_3vs1_5_game1_id']; ?>
"><?php echo $this->_tpl_vars['team1_3vs1_5_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_3vs1_5_game2_id']; ?>
"><?php echo $this->_tpl_vars['team1_3vs1_5_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_3vs1_6_game1_id']; ?>
"><?php echo $this->_tpl_vars['team1_3vs1_6_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_3vs1_6_game2_id']; ?>
"><?php echo $this->_tpl_vars['team1_3vs1_6_game2']; ?>
</a>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team1_3_point']; ?>
</br><?php echo $this->_tpl_vars['team1_3_winningrate']; ?>
</br><?php echo $this->_tpl_vars['team1_3_offset']; ?>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team1_3_order']; ?>
</td>
</tr>
<tr>
<td class="team_name"><b><?php echo $this->_tpl_vars['team1_4']; ?>
</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_4vs1_1_game1_id']; ?>
"><?php echo $this->_tpl_vars['team1_4vs1_1_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_4vs1_1_game2_id']; ?>
"><?php echo $this->_tpl_vars['team1_4vs1_1_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_4vs1_2_game1_id']; ?>
"><?php echo $this->_tpl_vars['team1_4vs1_2_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_4vs1_2_game2_id']; ?>
"><?php echo $this->_tpl_vars['team1_4vs1_2_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_4vs1_3_game1_id']; ?>
"><?php echo $this->_tpl_vars['team1_4vs1_3_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_4vs1_3_game2_id']; ?>
"><?php echo $this->_tpl_vars['team1_4vs1_3_game2']; ?>
</a>
</td>
<td class="team_result_winlose"><?php echo $this->_tpl_vars['team1_4_result']; ?>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_4vs1_5_game1_id']; ?>
"><?php echo $this->_tpl_vars['team1_4vs1_5_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_4vs1_5_game2_id']; ?>
"><?php echo $this->_tpl_vars['team1_4vs1_5_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_4vs1_6_game1_id']; ?>
"><?php echo $this->_tpl_vars['team1_4vs1_6_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_4vs1_6_game2_id']; ?>
"><?php echo $this->_tpl_vars['team1_4vs1_6_game2']; ?>
</a>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team1_4_point']; ?>
</br><?php echo $this->_tpl_vars['team1_4_winningrate']; ?>
</br><?php echo $this->_tpl_vars['team1_4_offset']; ?>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team1_4_order']; ?>
</td>
</tr>
<tr>
<td class="team_name"><b><?php echo $this->_tpl_vars['team1_5']; ?>
</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_5vs1_1_game1_id']; ?>
"><?php echo $this->_tpl_vars['team1_5vs1_1_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_5vs1_1_game2_id']; ?>
"><?php echo $this->_tpl_vars['team1_5vs1_1_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_5vs1_2_game1_id']; ?>
"><?php echo $this->_tpl_vars['team1_5vs1_2_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_5vs1_2_game2_id']; ?>
"><?php echo $this->_tpl_vars['team1_5vs1_2_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_5vs1_3_game1_id']; ?>
"><?php echo $this->_tpl_vars['team1_5vs1_3_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_5vs1_3_game2_id']; ?>
"><?php echo $this->_tpl_vars['team1_5vs1_3_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_5vs1_4_game1_id']; ?>
"><?php echo $this->_tpl_vars['team1_5vs1_4_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_5vs1_4_game2_id']; ?>
"><?php echo $this->_tpl_vars['team1_5vs1_4_game2']; ?>
</a>
</td>
<td class="team_result_winlose"><?php echo $this->_tpl_vars['team1_5_result']; ?>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_5vs1_6_game1_id']; ?>
"><?php echo $this->_tpl_vars['team1_5vs1_6_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_5vs1_6_game2_id']; ?>
"><?php echo $this->_tpl_vars['team1_5vs1_6_game2']; ?>
</a>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team1_5_point']; ?>
</br><?php echo $this->_tpl_vars['team1_5_winningrate']; ?>
</br><?php echo $this->_tpl_vars['team1_5_offset']; ?>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team1_5_order']; ?>
</td>
</tr>
<tr>
<td class="team_name"><b><?php echo $this->_tpl_vars['team1_6']; ?>
</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_6vs1_1_game1_id']; ?>
"><?php echo $this->_tpl_vars['team1_6vs1_1_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_6vs1_1_game2_id']; ?>
"><?php echo $this->_tpl_vars['team1_6vs1_1_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_6vs1_2_game1_id']; ?>
"><?php echo $this->_tpl_vars['team1_6vs1_2_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_6vs1_2_game2_id']; ?>
"><?php echo $this->_tpl_vars['team1_6vs1_2_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_6vs1_3_game1_id']; ?>
"><?php echo $this->_tpl_vars['team1_6vs1_3_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_6vs1_3_game2_id']; ?>
"><?php echo $this->_tpl_vars['team1_6vs1_3_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_6vs1_4_game1_id']; ?>
"><?php echo $this->_tpl_vars['team1_6vs1_4_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_6vs1_4_game2_id']; ?>
"><?php echo $this->_tpl_vars['team1_6vs1_4_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_6vs1_5_game1_id']; ?>
"><?php echo $this->_tpl_vars['team1_6vs1_5_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team1_6vs1_5_game2_id']; ?>
"><?php echo $this->_tpl_vars['team1_6vs1_5_game2']; ?>
</a>
</td>
<td class="team_result_winlose"><?php echo $this->_tpl_vars['team1_6_result']; ?>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team1_6_point']; ?>
</br><?php echo $this->_tpl_vars['team1_6_winningrate']; ?>
</br><?php echo $this->_tpl_vars['team1_6_offset']; ?>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team1_6_order']; ?>
</td>
</tr>
</table>
</td>
</tr>
</table>
</br></br>
<?php endif; ?>


<?php if ($this->_tpl_vars['belong_2_enable'] == 1): ?>
<table class="content_table">
<tr>
<td><b>２部リーグ</b></td>
</tr>
<tr>
<td>
<table class="inner_table">
<tr>
<td class="team_name">チーム名</td>
<td class="team_name"><b><?php echo $this->_tpl_vars['team2_1']; ?>
</b></td>
<td class="team_name"><b><?php echo $this->_tpl_vars['team2_2']; ?>
</b></td>
<td class="team_name"><b><?php echo $this->_tpl_vars['team2_3']; ?>
</b></td>
<td class="team_name"><b><?php echo $this->_tpl_vars['team2_4']; ?>
</b></td>
<td class="team_name"><b><?php echo $this->_tpl_vars['team2_5']; ?>
</b></td>
<td class="team_name"><b><?php echo $this->_tpl_vars['team2_6']; ?>
</b></td>
<td class="team_data"><b>勝ち点</br>勝率</br>得失点差</b></td>
<td class="team_data"><b>順位</b></td>
</tr>
<tr>
<td class="team_name"><b><?php echo $this->_tpl_vars['team2_1']; ?>
</b>
</td>
<td class="team_result_winlose"><?php echo $this->_tpl_vars['team2_1_result']; ?>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_1vs2_2_game1_id']; ?>
"><?php echo $this->_tpl_vars['team2_1vs2_2_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_1vs2_2_game2_id']; ?>
"><?php echo $this->_tpl_vars['team2_1vs2_2_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_1vs2_3_game1_id']; ?>
"><?php echo $this->_tpl_vars['team2_1vs2_3_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_1vs2_3_game2_id']; ?>
"><?php echo $this->_tpl_vars['team2_1vs2_3_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_1vs2_4_game1_id']; ?>
"><?php echo $this->_tpl_vars['team2_1vs2_4_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_1vs2_4_game2_id']; ?>
"><?php echo $this->_tpl_vars['team2_1vs2_4_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_1vs2_5_game1_id']; ?>
"><?php echo $this->_tpl_vars['team2_1vs2_5_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_1vs2_5_game2_id']; ?>
"><?php echo $this->_tpl_vars['team2_1vs2_5_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_1vs2_6_game1_id']; ?>
"><?php echo $this->_tpl_vars['team2_1vs2_6_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_1vs2_6_game2_id']; ?>
"><?php echo $this->_tpl_vars['team2_1vs2_6_game2']; ?>
</a>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team2_1_point']; ?>
</br><?php echo $this->_tpl_vars['team2_1_winningrate']; ?>
</br><?php echo $this->_tpl_vars['team2_1_offset']; ?>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team2_1_order']; ?>
</td>
</tr>
<tr>
<td class="team_name"><b><?php echo $this->_tpl_vars['team2_2']; ?>
</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_2vs2_1_game1_id']; ?>
"><?php echo $this->_tpl_vars['team2_2vs2_1_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_2vs2_1_game2_id']; ?>
"><?php echo $this->_tpl_vars['team2_2vs2_1_game2']; ?>
</a>
</td>
<td class="team_result_winlose"><?php echo $this->_tpl_vars['team2_2_result']; ?>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_2vs2_3_game1_id']; ?>
"><?php echo $this->_tpl_vars['team2_2vs2_3_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_2vs2_3_game2_id']; ?>
"><?php echo $this->_tpl_vars['team2_2vs2_3_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_2vs2_4_game1_id']; ?>
"><?php echo $this->_tpl_vars['team2_2vs2_4_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_2vs2_4_game2_id']; ?>
"><?php echo $this->_tpl_vars['team2_2vs2_4_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_2vs2_5_game1_id']; ?>
"><?php echo $this->_tpl_vars['team2_2vs2_5_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_2vs2_5_game2_id']; ?>
"><?php echo $this->_tpl_vars['team2_2vs2_5_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_2vs2_6_game1_id']; ?>
"><?php echo $this->_tpl_vars['team2_2vs2_6_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_2vs2_6_game2_id']; ?>
"><?php echo $this->_tpl_vars['team2_2vs2_6_game2']; ?>
</a>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team2_2_point']; ?>
</br><?php echo $this->_tpl_vars['team2_2_winningrate']; ?>
</br><?php echo $this->_tpl_vars['team2_2_offset']; ?>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team2_2_order']; ?>
</td>
</tr>
<tr>
<td class="team_name"><b><?php echo $this->_tpl_vars['team2_3']; ?>
</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_3vs2_1_game1_id']; ?>
"><?php echo $this->_tpl_vars['team2_3vs2_1_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_3vs2_1_game2_id']; ?>
"><?php echo $this->_tpl_vars['team2_3vs2_1_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_3vs2_2_game1_id']; ?>
"><?php echo $this->_tpl_vars['team2_3vs2_2_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_3vs2_2_game2_id']; ?>
"><?php echo $this->_tpl_vars['team2_3vs2_2_game2']; ?>
</a>
</td>
<td class="team_result_winlose"><?php echo $this->_tpl_vars['team2_3_result']; ?>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_3vs2_4_game1_id']; ?>
"><?php echo $this->_tpl_vars['team2_3vs2_4_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_3vs2_4_game2_id']; ?>
"><?php echo $this->_tpl_vars['team2_3vs2_4_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_3vs2_5_game1_id']; ?>
"><?php echo $this->_tpl_vars['team2_3vs2_5_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_3vs2_5_game2_id']; ?>
"><?php echo $this->_tpl_vars['team2_3vs2_5_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_3vs2_6_game1_id']; ?>
"><?php echo $this->_tpl_vars['team2_3vs2_6_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_3vs2_6_game2_id']; ?>
"><?php echo $this->_tpl_vars['team2_3vs2_6_game2']; ?>
</a>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team2_3_point']; ?>
</br><?php echo $this->_tpl_vars['team2_3_winningrate']; ?>
</br><?php echo $this->_tpl_vars['team2_3_offset']; ?>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team2_3_order']; ?>
</td>
</tr>
<tr>
<td class="team_name"><b><?php echo $this->_tpl_vars['team2_4']; ?>
</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_4vs2_1_game1_id']; ?>
"><?php echo $this->_tpl_vars['team2_4vs2_1_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_4vs2_1_game2_id']; ?>
"><?php echo $this->_tpl_vars['team2_4vs2_1_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_4vs2_2_game1_id']; ?>
"><?php echo $this->_tpl_vars['team2_4vs2_2_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_4vs2_2_game2_id']; ?>
"><?php echo $this->_tpl_vars['team2_4vs2_2_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_4vs2_3_game1_id']; ?>
"><?php echo $this->_tpl_vars['team2_4vs2_3_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_4vs2_3_game2_id']; ?>
"><?php echo $this->_tpl_vars['team2_4vs2_3_game2']; ?>
</a>
</td>
<td class="team_result_winlose"><?php echo $this->_tpl_vars['team2_4_result']; ?>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_4vs2_5_game1_id']; ?>
"><?php echo $this->_tpl_vars['team2_4vs2_5_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_4vs2_5_game2_id']; ?>
"><?php echo $this->_tpl_vars['team2_4vs2_5_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_4vs2_6_game1_id']; ?>
"><?php echo $this->_tpl_vars['team2_4vs2_6_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_4vs2_6_game2_id']; ?>
"><?php echo $this->_tpl_vars['team2_4vs2_6_game2']; ?>
</a>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team2_4_point']; ?>
</br><?php echo $this->_tpl_vars['team2_4_winningrate']; ?>
</br><?php echo $this->_tpl_vars['team2_4_offset']; ?>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team2_4_order']; ?>
</td>
</tr>
<tr>
<td class="team_name"><b><?php echo $this->_tpl_vars['team2_5']; ?>
</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_5vs2_1_game1_id']; ?>
"><?php echo $this->_tpl_vars['team2_5vs2_1_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_5vs2_1_game2_id']; ?>
"><?php echo $this->_tpl_vars['team2_5vs2_1_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_5vs2_2_game1_id']; ?>
"><?php echo $this->_tpl_vars['team2_5vs2_2_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_5vs2_2_game2_id']; ?>
"><?php echo $this->_tpl_vars['team2_5vs2_2_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_5vs2_3_game1_id']; ?>
"><?php echo $this->_tpl_vars['team2_5vs2_3_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_5vs2_3_game2_id']; ?>
"><?php echo $this->_tpl_vars['team2_5vs2_3_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_5vs2_4_game1_id']; ?>
"><?php echo $this->_tpl_vars['team2_5vs2_4_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_5vs2_4_game2_id']; ?>
"><?php echo $this->_tpl_vars['team2_5vs2_4_game2']; ?>
</a>
</td>
<td class="team_result_winlose"><?php echo $this->_tpl_vars['team2_5_result']; ?>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_5vs2_6_game1_id']; ?>
"><?php echo $this->_tpl_vars['team2_5vs2_6_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_5vs2_6_game2_id']; ?>
"><?php echo $this->_tpl_vars['team2_5vs2_6_game2']; ?>
</a>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team2_5_point']; ?>
</br><?php echo $this->_tpl_vars['team2_5_winningrate']; ?>
</br><?php echo $this->_tpl_vars['team2_5_offset']; ?>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team2_5_order']; ?>
</td>
</tr>
<tr>
<td class="team_name"><b><?php echo $this->_tpl_vars['team2_6']; ?>
</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_6vs2_1_game1_id']; ?>
"><?php echo $this->_tpl_vars['team2_6vs2_1_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_6vs2_1_game2_id']; ?>
"><?php echo $this->_tpl_vars['team2_6vs2_1_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_6vs2_2_game1_id']; ?>
"><?php echo $this->_tpl_vars['team2_6vs2_2_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_6vs2_2_game2_id']; ?>
"><?php echo $this->_tpl_vars['team2_6vs2_2_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_6vs2_3_game1_id']; ?>
"><?php echo $this->_tpl_vars['team2_6vs2_3_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_6vs2_3_game2_id']; ?>
"><?php echo $this->_tpl_vars['team2_6vs2_3_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_6vs2_4_game1_id']; ?>
"><?php echo $this->_tpl_vars['team2_6vs2_4_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_6vs2_4_game2_id']; ?>
"><?php echo $this->_tpl_vars['team2_6vs2_4_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_6vs2_5_game1_id']; ?>
"><?php echo $this->_tpl_vars['team2_6vs2_5_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team2_6vs2_5_game2_id']; ?>
"><?php echo $this->_tpl_vars['team2_6vs2_5_game2']; ?>
</a>
</td>
<td class="team_result_winlose"><?php echo $this->_tpl_vars['team2_6_result']; ?>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team2_6_point']; ?>
</br><?php echo $this->_tpl_vars['team2_6_winningrate']; ?>
</br><?php echo $this->_tpl_vars['team2_6_offset']; ?>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team2_6_order']; ?>
</td>
</tr>
</table>
</td>
</tr>
</table>
</br></br>
<?php endif; ?>


<?php if ($this->_tpl_vars['belong_3_enable'] == 1): ?>
<table class="content_table">
<tr>
<td><b>３部リーグ</b></td>
</tr>
<tr>
<td>
<table class="inner_table">
<tr>
<td class="team_name">チーム名</td>
<td class="team_name"><b><?php echo $this->_tpl_vars['team3_1']; ?>
</b></td>
<td class="team_name"><b><?php echo $this->_tpl_vars['team3_2']; ?>
</b></td>
<td class="team_name"><b><?php echo $this->_tpl_vars['team3_3']; ?>
</b></td>
<td class="team_name"><b><?php echo $this->_tpl_vars['team3_4']; ?>
</b></td>
<td class="team_name"><b><?php echo $this->_tpl_vars['team3_5']; ?>
</b></td>
<td class="team_name"><b><?php echo $this->_tpl_vars['team3_6']; ?>
</b></td>
<td class="team_data"><b>勝ち点</br>勝率</br>得失点差</b></td>
<td class="team_data"><b>順位</b></td>
</tr>
<tr>
<td class="team_name"><b><?php echo $this->_tpl_vars['team3_1']; ?>
</b>
</td>
<td class="team_result_winlose"><?php echo $this->_tpl_vars['team3_1_result']; ?>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_1vs3_2_game1_id']; ?>
"><?php echo $this->_tpl_vars['team3_1vs3_2_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_1vs3_2_game2_id']; ?>
"><?php echo $this->_tpl_vars['team3_1vs3_2_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_1vs3_3_game1_id']; ?>
"><?php echo $this->_tpl_vars['team3_1vs3_3_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_1vs3_3_game2_id']; ?>
"><?php echo $this->_tpl_vars['team3_1vs3_3_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_1vs3_4_game1_id']; ?>
"><?php echo $this->_tpl_vars['team3_1vs3_4_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_1vs3_4_game2_id']; ?>
"><?php echo $this->_tpl_vars['team3_1vs3_4_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_1vs3_5_game1_id']; ?>
"><?php echo $this->_tpl_vars['team3_1vs3_5_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_1vs3_5_game2_id']; ?>
"><?php echo $this->_tpl_vars['team3_1vs3_5_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_1vs3_6_game1_id']; ?>
"><?php echo $this->_tpl_vars['team3_1vs3_6_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_1vs3_6_game2_id']; ?>
"><?php echo $this->_tpl_vars['team3_1vs3_6_game2']; ?>
</a>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team3_1_point']; ?>
</br><?php echo $this->_tpl_vars['team3_1_winningrate']; ?>
</br><?php echo $this->_tpl_vars['team3_1_offset']; ?>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team3_1_order']; ?>
</td>
</tr>
<tr>
<td class="team_name"><b><?php echo $this->_tpl_vars['team3_2']; ?>
</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_2vs3_1_game1_id']; ?>
"><?php echo $this->_tpl_vars['team3_2vs3_1_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_2vs3_1_game2_id']; ?>
"><?php echo $this->_tpl_vars['team3_2vs3_1_game2']; ?>
</a>
</td>
<td class="team_result_winlose"><?php echo $this->_tpl_vars['team3_2_result']; ?>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_2vs3_3_game1_id']; ?>
"><?php echo $this->_tpl_vars['team3_2vs3_3_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_2vs3_3_game2_id']; ?>
"><?php echo $this->_tpl_vars['team3_2vs3_3_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_2vs3_4_game1_id']; ?>
"><?php echo $this->_tpl_vars['team3_2vs3_4_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_2vs3_4_game2_id']; ?>
"><?php echo $this->_tpl_vars['team3_2vs3_4_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_2vs3_5_game1_id']; ?>
"><?php echo $this->_tpl_vars['team3_2vs3_5_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_2vs3_5_game2_id']; ?>
"><?php echo $this->_tpl_vars['team3_2vs3_5_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_2vs3_6_game1_id']; ?>
"><?php echo $this->_tpl_vars['team3_2vs3_6_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_2vs3_6_game2_id']; ?>
"><?php echo $this->_tpl_vars['team3_2vs3_6_game2']; ?>
</a>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team3_2_point']; ?>
</br><?php echo $this->_tpl_vars['team3_2_winningrate']; ?>
</br><?php echo $this->_tpl_vars['team3_2_offset']; ?>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team3_2_order']; ?>
</td>
</tr>
<tr>
<td class="team_name"><b><?php echo $this->_tpl_vars['team3_3']; ?>
</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_3vs3_1_game1_id']; ?>
"><?php echo $this->_tpl_vars['team3_3vs3_1_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_3vs3_1_game2_id']; ?>
"><?php echo $this->_tpl_vars['team3_3vs3_1_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_3vs3_2_game1_id']; ?>
"><?php echo $this->_tpl_vars['team3_3vs3_2_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_3vs3_2_game2_id']; ?>
"><?php echo $this->_tpl_vars['team3_3vs3_2_game2']; ?>
</a>
</td>
<td class="team_result_winlose"><?php echo $this->_tpl_vars['team3_3_result']; ?>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_3vs3_4_game1_id']; ?>
"><?php echo $this->_tpl_vars['team3_3vs3_4_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_3vs3_4_game2_id']; ?>
"><?php echo $this->_tpl_vars['team3_3vs3_4_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_3vs3_5_game1_id']; ?>
"><?php echo $this->_tpl_vars['team3_3vs3_5_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_3vs3_5_game2_id']; ?>
"><?php echo $this->_tpl_vars['team3_3vs3_5_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_3vs3_6_game1_id']; ?>
"><?php echo $this->_tpl_vars['team3_3vs3_6_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_3vs3_6_game2_id']; ?>
"><?php echo $this->_tpl_vars['team3_3vs3_6_game2']; ?>
</a>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team3_3_point']; ?>
</br><?php echo $this->_tpl_vars['team3_3_winningrate']; ?>
</br><?php echo $this->_tpl_vars['team3_3_offset']; ?>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team3_3_order']; ?>
</td>
</tr>
<tr>
<td class="team_name"><b><?php echo $this->_tpl_vars['team3_4']; ?>
</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_4vs3_1_game1_id']; ?>
"><?php echo $this->_tpl_vars['team3_4vs3_1_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_4vs3_1_game2_id']; ?>
"><?php echo $this->_tpl_vars['team3_4vs3_1_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_4vs3_2_game1_id']; ?>
"><?php echo $this->_tpl_vars['team3_4vs3_2_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_4vs3_2_game2_id']; ?>
"><?php echo $this->_tpl_vars['team3_4vs3_2_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_4vs3_3_game1_id']; ?>
"><?php echo $this->_tpl_vars['team3_4vs3_3_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_4vs3_3_game2_id']; ?>
"><?php echo $this->_tpl_vars['team3_4vs3_3_game2']; ?>
</a>
</td>
<td class="team_result_winlose"><?php echo $this->_tpl_vars['team3_4_result']; ?>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_4vs3_5_game1_id']; ?>
"><?php echo $this->_tpl_vars['team3_4vs3_5_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_4vs3_5_game2_id']; ?>
"><?php echo $this->_tpl_vars['team3_4vs3_5_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_4vs3_6_game1_id']; ?>
"><?php echo $this->_tpl_vars['team3_4vs3_6_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_4vs3_6_game2_id']; ?>
"><?php echo $this->_tpl_vars['team3_4vs3_6_game2']; ?>
</a>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team3_4_point']; ?>
</br><?php echo $this->_tpl_vars['team3_4_winningrate']; ?>
</br><?php echo $this->_tpl_vars['team3_4_offset']; ?>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team3_4_order']; ?>
</td>
</tr>
<tr>
<td class="team_name"><b><?php echo $this->_tpl_vars['team3_5']; ?>
</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_5vs3_1_game1_id']; ?>
"><?php echo $this->_tpl_vars['team3_5vs3_1_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_5vs3_1_game2_id']; ?>
"><?php echo $this->_tpl_vars['team3_5vs3_1_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_5vs3_2_game1_id']; ?>
"><?php echo $this->_tpl_vars['team3_5vs3_2_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_5vs3_2_game2_id']; ?>
"><?php echo $this->_tpl_vars['team3_5vs3_2_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_5vs3_3_game1_id']; ?>
"><?php echo $this->_tpl_vars['team3_5vs3_3_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_5vs3_3_game2_id']; ?>
"><?php echo $this->_tpl_vars['team3_5vs3_3_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_5vs3_4_game1_id']; ?>
"><?php echo $this->_tpl_vars['team3_5vs3_4_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_5vs3_4_game2_id']; ?>
"><?php echo $this->_tpl_vars['team3_5vs3_4_game2']; ?>
</a>
</td>
<td class="team_result_winlose"><?php echo $this->_tpl_vars['team3_5_result']; ?>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_5vs3_6_game1_id']; ?>
"><?php echo $this->_tpl_vars['team3_5vs3_6_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_5vs3_6_game2_id']; ?>
"><?php echo $this->_tpl_vars['team3_5vs3_6_game2']; ?>
</a>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team3_5_point']; ?>
</br><?php echo $this->_tpl_vars['team3_5_winningrate']; ?>
</br><?php echo $this->_tpl_vars['team3_5_offset']; ?>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team3_5_order']; ?>
</td>
</tr>
<tr>
<td class="team_name"><b><?php echo $this->_tpl_vars['team3_6']; ?>
</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_6vs3_1_game1_id']; ?>
"><?php echo $this->_tpl_vars['team3_6vs3_1_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_6vs3_1_game2_id']; ?>
"><?php echo $this->_tpl_vars['team3_6vs3_1_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_6vs3_2_game1_id']; ?>
"><?php echo $this->_tpl_vars['team3_6vs3_2_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_6vs3_2_game2_id']; ?>
"><?php echo $this->_tpl_vars['team3_6vs3_2_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_6vs3_3_game1_id']; ?>
"><?php echo $this->_tpl_vars['team3_6vs3_3_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_6vs3_3_game2_id']; ?>
"><?php echo $this->_tpl_vars['team3_6vs3_3_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_6vs3_4_game1_id']; ?>
"><?php echo $this->_tpl_vars['team3_6vs3_4_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_6vs3_4_game2_id']; ?>
"><?php echo $this->_tpl_vars['team3_6vs3_4_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_6vs3_5_game1_id']; ?>
"><?php echo $this->_tpl_vars['team3_6vs3_5_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team3_6vs3_5_game2_id']; ?>
"><?php echo $this->_tpl_vars['team3_6vs3_5_game2']; ?>
</a>
</td>
<td class="team_result_winlose"><?php echo $this->_tpl_vars['team3_6_result']; ?>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team3_6_point']; ?>
</br><?php echo $this->_tpl_vars['team3_6_winningrate']; ?>
</br><?php echo $this->_tpl_vars['team3_6_offset']; ?>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team3_6_order']; ?>
</td>
</tr>
</table>
</td>
</tr>
</table>
</br></br>
<?php endif; ?>



<?php if ($this->_tpl_vars['belong_4_enable'] == 1): ?>
<table class="content_table">
<tr>
<td><b>４部リーグ</b></td>
</tr>
<tr>
<td>
<table class="inner_table">
<tr>
<td class="team_name">チーム名</td>
<td class="team_name"><b><?php echo $this->_tpl_vars['team4_1']; ?>
</b></td>
<td class="team_name"><b><?php echo $this->_tpl_vars['team4_2']; ?>
</b></td>
<td class="team_name"><b><?php echo $this->_tpl_vars['team4_3']; ?>
</b></td>
<td class="team_name"><b><?php echo $this->_tpl_vars['team4_4']; ?>
</b></td>
<td class="team_name"><b><?php echo $this->_tpl_vars['team4_5']; ?>
</b></td>
<td class="team_name"><b><?php echo $this->_tpl_vars['team4_6']; ?>
</b></td>
<td class="team_data"><b>勝ち点</br>勝率</br>得失点差</b></td>
<td class="team_data"><b>順位</b></td>
</tr>
<tr>
<td class="team_name"><b><?php echo $this->_tpl_vars['team4_1']; ?>
</b>
</td>
<td class="team_result_winlose"><?php echo $this->_tpl_vars['team4_1_result']; ?>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_1vs4_2_game1_id']; ?>
"><?php echo $this->_tpl_vars['team4_1vs4_2_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_1vs4_2_game2_id']; ?>
"><?php echo $this->_tpl_vars['team4_1vs4_2_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_1vs4_3_game1_id']; ?>
"><?php echo $this->_tpl_vars['team4_1vs4_3_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_1vs4_3_game2_id']; ?>
"><?php echo $this->_tpl_vars['team4_1vs4_3_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_1vs4_4_game1_id']; ?>
"><?php echo $this->_tpl_vars['team4_1vs4_4_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_1vs4_4_game2_id']; ?>
"><?php echo $this->_tpl_vars['team4_1vs4_4_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_1vs4_5_game1_id']; ?>
"><?php echo $this->_tpl_vars['team4_1vs4_5_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_1vs4_5_game2_id']; ?>
"><?php echo $this->_tpl_vars['team4_1vs4_5_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_1vs4_6_game1_id']; ?>
"><?php echo $this->_tpl_vars['team4_1vs4_6_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_1vs4_6_game2_id']; ?>
"><?php echo $this->_tpl_vars['team4_1vs4_6_game2']; ?>
</a>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team4_1_point']; ?>
</br><?php echo $this->_tpl_vars['team4_1_winningrate']; ?>
</br><?php echo $this->_tpl_vars['team4_1_offset']; ?>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team4_1_order']; ?>
</td>
</tr>
<tr>
<td class="team_name"><b><?php echo $this->_tpl_vars['team4_2']; ?>
</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_2vs4_1_game1_id']; ?>
"><?php echo $this->_tpl_vars['team4_2vs4_1_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_2vs4_1_game2_id']; ?>
"><?php echo $this->_tpl_vars['team4_2vs4_1_game2']; ?>
</a>
</td>
<td class="team_result_winlose"><?php echo $this->_tpl_vars['team4_2_result']; ?>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_2vs4_3_game1_id']; ?>
"><?php echo $this->_tpl_vars['team4_2vs4_3_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_2vs4_3_game2_id']; ?>
"><?php echo $this->_tpl_vars['team4_2vs4_3_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_2vs4_4_game1_id']; ?>
"><?php echo $this->_tpl_vars['team4_2vs4_4_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_2vs4_4_game2_id']; ?>
"><?php echo $this->_tpl_vars['team4_2vs4_4_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_2vs4_5_game1_id']; ?>
"><?php echo $this->_tpl_vars['team4_2vs4_5_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_2vs4_5_game2_id']; ?>
"><?php echo $this->_tpl_vars['team4_2vs4_5_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_2vs4_6_game1_id']; ?>
"><?php echo $this->_tpl_vars['team4_2vs4_6_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_2vs4_6_game2_id']; ?>
"><?php echo $this->_tpl_vars['team4_2vs4_6_game2']; ?>
</a>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team4_2_point']; ?>
</br><?php echo $this->_tpl_vars['team4_2_winningrate']; ?>
</br><?php echo $this->_tpl_vars['team4_2_offset']; ?>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team4_2_order']; ?>
</td>
</tr>
<tr>
<td class="team_name"><b><?php echo $this->_tpl_vars['team4_3']; ?>
</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_3vs4_1_game1_id']; ?>
"><?php echo $this->_tpl_vars['team4_3vs4_1_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_3vs4_1_game2_id']; ?>
"><?php echo $this->_tpl_vars['team4_3vs4_1_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_3vs4_2_game1_id']; ?>
"><?php echo $this->_tpl_vars['team4_3vs4_2_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_3vs4_2_game2_id']; ?>
"><?php echo $this->_tpl_vars['team4_3vs4_2_game2']; ?>
</a>
</td>
<td class="team_result_winlose"><?php echo $this->_tpl_vars['team4_3_result']; ?>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_3vs4_4_game1_id']; ?>
"><?php echo $this->_tpl_vars['team4_3vs4_4_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_3vs4_4_game2_id']; ?>
"><?php echo $this->_tpl_vars['team4_3vs4_4_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_3vs4_5_game1_id']; ?>
"><?php echo $this->_tpl_vars['team4_3vs4_5_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_3vs4_5_game2_id']; ?>
"><?php echo $this->_tpl_vars['team4_3vs4_5_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_3vs4_6_game1_id']; ?>
"><?php echo $this->_tpl_vars['team4_3vs4_6_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_3vs4_6_game2_id']; ?>
"><?php echo $this->_tpl_vars['team4_3vs4_6_game2']; ?>
</a>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team4_3_point']; ?>
</br><?php echo $this->_tpl_vars['team4_3_winningrate']; ?>
</br><?php echo $this->_tpl_vars['team4_3_offset']; ?>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team4_3_order']; ?>
</td>
</tr>
<tr>
<td class="team_name"><b><?php echo $this->_tpl_vars['team4_4']; ?>
</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_4vs4_1_game1_id']; ?>
"><?php echo $this->_tpl_vars['team4_4vs4_1_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_4vs4_1_game2_id']; ?>
"><?php echo $this->_tpl_vars['team4_4vs4_1_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_4vs4_2_game1_id']; ?>
"><?php echo $this->_tpl_vars['team4_4vs4_2_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_4vs4_2_game2_id']; ?>
"><?php echo $this->_tpl_vars['team4_4vs4_2_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_4vs4_3_game1_id']; ?>
"><?php echo $this->_tpl_vars['team4_4vs4_3_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_4vs4_3_game2_id']; ?>
"><?php echo $this->_tpl_vars['team4_4vs4_3_game2']; ?>
</a>
</td>
<td class="team_result_winlose"><?php echo $this->_tpl_vars['team4_4_result']; ?>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_4vs4_5_game1_id']; ?>
"><?php echo $this->_tpl_vars['team4_4vs4_5_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_4vs4_5_game2_id']; ?>
"><?php echo $this->_tpl_vars['team4_4vs4_5_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_4vs4_6_game1_id']; ?>
"><?php echo $this->_tpl_vars['team4_4vs4_6_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_4vs4_6_game2_id']; ?>
"><?php echo $this->_tpl_vars['team4_4vs4_6_game2']; ?>
</a>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team4_4_point']; ?>
</br><?php echo $this->_tpl_vars['team4_4_winningrate']; ?>
</br><?php echo $this->_tpl_vars['team4_4_offset']; ?>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team4_4_order']; ?>
</td>
</tr>
<tr>
<td class="team_name"><b><?php echo $this->_tpl_vars['team4_5']; ?>
</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_5vs4_1_game1_id']; ?>
"><?php echo $this->_tpl_vars['team4_5vs4_1_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_5vs4_1_game2_id']; ?>
"><?php echo $this->_tpl_vars['team4_5vs4_1_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_5vs4_2_game1_id']; ?>
"><?php echo $this->_tpl_vars['team4_5vs4_2_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_5vs4_2_game2_id']; ?>
"><?php echo $this->_tpl_vars['team4_5vs4_2_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_5vs4_3_game1_id']; ?>
"><?php echo $this->_tpl_vars['team4_5vs4_3_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_5vs4_3_game2_id']; ?>
"><?php echo $this->_tpl_vars['team4_5vs4_3_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_5vs4_4_game1_id']; ?>
"><?php echo $this->_tpl_vars['team4_5vs4_4_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_5vs4_4_game2_id']; ?>
"><?php echo $this->_tpl_vars['team4_5vs4_4_game2']; ?>
</a>
</td>
<td class="team_result_winlose"><?php echo $this->_tpl_vars['team4_5_result']; ?>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_5vs4_6_game1_id']; ?>
"><?php echo $this->_tpl_vars['team4_5vs4_6_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_5vs4_6_game2_id']; ?>
"><?php echo $this->_tpl_vars['team4_5vs4_6_game2']; ?>
</a>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team4_5_point']; ?>
</br><?php echo $this->_tpl_vars['team4_5_winningrate']; ?>
</br><?php echo $this->_tpl_vars['team4_5_offset']; ?>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team4_5_order']; ?>
</td>
</tr>
<tr>
<td class="team_name"><b><?php echo $this->_tpl_vars['team4_6']; ?>
</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_6vs4_1_game1_id']; ?>
"><?php echo $this->_tpl_vars['team4_6vs4_1_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_6vs4_1_game2_id']; ?>
"><?php echo $this->_tpl_vars['team4_6vs4_1_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_6vs4_2_game1_id']; ?>
"><?php echo $this->_tpl_vars['team4_6vs4_2_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_6vs4_2_game2_id']; ?>
"><?php echo $this->_tpl_vars['team4_6vs4_2_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_6vs4_3_game1_id']; ?>
"><?php echo $this->_tpl_vars['team4_6vs4_3_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_6vs4_3_game2_id']; ?>
"><?php echo $this->_tpl_vars['team4_6vs4_3_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_6vs4_4_game1_id']; ?>
"><?php echo $this->_tpl_vars['team4_6vs4_4_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_6vs4_4_game2_id']; ?>
"><?php echo $this->_tpl_vars['team4_6vs4_4_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_6vs4_5_game1_id']; ?>
"><?php echo $this->_tpl_vars['team4_6vs4_5_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team4_6vs4_5_game2_id']; ?>
"><?php echo $this->_tpl_vars['team4_6vs4_5_game2']; ?>
</a>
</td>
<td class="team_result_winlose"><?php echo $this->_tpl_vars['team4_6_result']; ?>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team4_6_point']; ?>
</br><?php echo $this->_tpl_vars['team4_6_winningrate']; ?>
</br><?php echo $this->_tpl_vars['team4_6_offset']; ?>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team4_6_order']; ?>
</td>
</tr>
</table>
</td>
</tr>
</table>
</br></br>
<?php endif; ?>

<?php if ($this->_tpl_vars['belong_5_enable'] == 1): ?>
<table class="content_table">
<tr>
<td><b>５部リーグ</b></td>
</tr>
<tr>
<td>
<table class="inner_table">
<tr>
<td class="team_name">チーム名</td>
<td class="team_name"><b><?php echo $this->_tpl_vars['team5_1']; ?>
</b></td>
<td class="team_name"><b><?php echo $this->_tpl_vars['team5_2']; ?>
</b></td>
<td class="team_name"><b><?php echo $this->_tpl_vars['team5_3']; ?>
</b></td>
<td class="team_name"><b><?php echo $this->_tpl_vars['team5_4']; ?>
</b></td>
<td class="team_name"><b><?php echo $this->_tpl_vars['team5_5']; ?>
</b></td>
<td class="team_name"><b><?php echo $this->_tpl_vars['team5_6']; ?>
</b></td>
<td class="team_data"><b>勝ち点</br>勝率</br>得失点差</b></td>
<td class="team_data"><b>順位</b></td>
</tr>
<tr>
<td class="team_name"><b><?php echo $this->_tpl_vars['team5_1']; ?>
</b>
</td>
<td class="team_result_winlose"><?php echo $this->_tpl_vars['team5_1_result']; ?>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_1vs5_2_game1_id']; ?>
"><?php echo $this->_tpl_vars['team5_1vs5_2_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_1vs5_2_game2_id']; ?>
"><?php echo $this->_tpl_vars['team5_1vs5_2_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_1vs5_3_game1_id']; ?>
"><?php echo $this->_tpl_vars['team5_1vs5_3_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_1vs5_3_game2_id']; ?>
"><?php echo $this->_tpl_vars['team5_1vs5_3_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_1vs5_4_game1_id']; ?>
"><?php echo $this->_tpl_vars['team5_1vs5_4_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_1vs5_4_game2_id']; ?>
"><?php echo $this->_tpl_vars['team5_1vs5_4_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_1vs5_5_game1_id']; ?>
"><?php echo $this->_tpl_vars['team5_1vs5_5_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_1vs5_5_game2_id']; ?>
"><?php echo $this->_tpl_vars['team5_1vs5_5_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_1vs5_6_game1_id']; ?>
"><?php echo $this->_tpl_vars['team5_1vs5_6_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_1vs5_6_game2_id']; ?>
"><?php echo $this->_tpl_vars['team5_1vs5_6_game2']; ?>
</a>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team5_1_point']; ?>
</br><?php echo $this->_tpl_vars['team5_1_winningrate']; ?>
</br><?php echo $this->_tpl_vars['team5_1_offset']; ?>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team5_1_order']; ?>
</td>
</tr>
<tr>
<td class="team_name"><b><?php echo $this->_tpl_vars['team5_2']; ?>
</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_2vs5_1_game1_id']; ?>
"><?php echo $this->_tpl_vars['team5_2vs5_1_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_2vs5_1_game2_id']; ?>
"><?php echo $this->_tpl_vars['team5_2vs5_1_game2']; ?>
</a>
</td>
<td class="team_result_winlose"><?php echo $this->_tpl_vars['team5_2_result']; ?>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_2vs5_3_game1_id']; ?>
"><?php echo $this->_tpl_vars['team5_2vs5_3_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_2vs5_3_game2_id']; ?>
"><?php echo $this->_tpl_vars['team5_2vs5_3_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_2vs5_4_game1_id']; ?>
"><?php echo $this->_tpl_vars['team5_2vs5_4_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_2vs5_4_game2_id']; ?>
"><?php echo $this->_tpl_vars['team5_2vs5_4_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_2vs5_5_game1_id']; ?>
"><?php echo $this->_tpl_vars['team5_2vs5_5_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_2vs5_5_game2_id']; ?>
"><?php echo $this->_tpl_vars['team5_2vs5_5_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_2vs5_6_game1_id']; ?>
"><?php echo $this->_tpl_vars['team5_2vs5_6_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_2vs5_6_game2_id']; ?>
"><?php echo $this->_tpl_vars['team5_2vs5_6_game2']; ?>
</a>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team5_2_point']; ?>
</br><?php echo $this->_tpl_vars['team5_2_winningrate']; ?>
</br><?php echo $this->_tpl_vars['team5_2_offset']; ?>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team5_2_order']; ?>
</td>
</tr>
<tr>
<td class="team_name"><b><?php echo $this->_tpl_vars['team5_3']; ?>
</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_3vs5_1_game1_id']; ?>
"><?php echo $this->_tpl_vars['team5_3vs5_1_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_3vs5_1_game2_id']; ?>
"><?php echo $this->_tpl_vars['team5_3vs5_1_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_3vs5_2_game1_id']; ?>
"><?php echo $this->_tpl_vars['team5_3vs5_2_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_3vs5_2_game2_id']; ?>
"><?php echo $this->_tpl_vars['team5_3vs5_2_game2']; ?>
</a>
</td>
<td class="team_result_winlose"><?php echo $this->_tpl_vars['team5_3_result']; ?>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_3vs5_4_game1_id']; ?>
"><?php echo $this->_tpl_vars['team5_3vs5_4_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_3vs5_4_game2_id']; ?>
"><?php echo $this->_tpl_vars['team5_3vs5_4_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_3vs5_5_game1_id']; ?>
"><?php echo $this->_tpl_vars['team5_3vs5_5_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_3vs5_5_game2_id']; ?>
"><?php echo $this->_tpl_vars['team5_3vs5_5_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_3vs5_6_game1_id']; ?>
"><?php echo $this->_tpl_vars['team5_3vs5_6_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_3vs5_6_game2_id']; ?>
"><?php echo $this->_tpl_vars['team5_3vs5_6_game2']; ?>
</a>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team5_3_point']; ?>
</br><?php echo $this->_tpl_vars['team5_3_winningrate']; ?>
</br><?php echo $this->_tpl_vars['team5_3_offset']; ?>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team5_3_order']; ?>
</td>
</tr>
<tr>
<td class="team_name"><b><?php echo $this->_tpl_vars['team5_4']; ?>
</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_4vs5_1_game1_id']; ?>
"><?php echo $this->_tpl_vars['team5_4vs5_1_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_4vs5_1_game2_id']; ?>
"><?php echo $this->_tpl_vars['team5_4vs5_1_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_4vs5_2_game1_id']; ?>
"><?php echo $this->_tpl_vars['team5_4vs5_2_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_4vs5_2_game2_id']; ?>
"><?php echo $this->_tpl_vars['team5_4vs5_2_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_4vs5_3_game1_id']; ?>
"><?php echo $this->_tpl_vars['team5_4vs5_3_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_4vs5_3_game2_id']; ?>
"><?php echo $this->_tpl_vars['team5_4vs5_3_game2']; ?>
</a>
</td>
<td class="team_result_winlose"><?php echo $this->_tpl_vars['team5_4_result']; ?>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_4vs5_5_game1_id']; ?>
"><?php echo $this->_tpl_vars['team5_4vs5_5_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_4vs5_5_game2_id']; ?>
"><?php echo $this->_tpl_vars['team5_4vs5_5_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_4vs5_6_game1_id']; ?>
"><?php echo $this->_tpl_vars['team5_4vs5_6_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_4vs5_6_game2_id']; ?>
"><?php echo $this->_tpl_vars['team5_4vs5_6_game2']; ?>
</a>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team5_4_point']; ?>
</br><?php echo $this->_tpl_vars['team5_4_winningrate']; ?>
</br><?php echo $this->_tpl_vars['team5_4_offset']; ?>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team5_4_order']; ?>
</td>
</tr>
<tr>
<td class="team_name"><b><?php echo $this->_tpl_vars['team5_5']; ?>
</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_5vs5_1_game1_id']; ?>
"><?php echo $this->_tpl_vars['team5_5vs5_1_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_5vs5_1_game2_id']; ?>
"><?php echo $this->_tpl_vars['team5_5vs5_1_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_5vs5_2_game1_id']; ?>
"><?php echo $this->_tpl_vars['team5_5vs5_2_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_5vs5_2_game2_id']; ?>
"><?php echo $this->_tpl_vars['team5_5vs5_2_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_5vs5_3_game1_id']; ?>
"><?php echo $this->_tpl_vars['team5_5vs5_3_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_5vs5_3_game2_id']; ?>
"><?php echo $this->_tpl_vars['team5_5vs5_3_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_5vs5_4_game1_id']; ?>
"><?php echo $this->_tpl_vars['team5_5vs5_4_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_5vs5_4_game2_id']; ?>
"><?php echo $this->_tpl_vars['team5_5vs5_4_game2']; ?>
</a>
</td>
<td class="team_result_winlose"><?php echo $this->_tpl_vars['team5_5_result']; ?>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_5vs5_6_game1_id']; ?>
"><?php echo $this->_tpl_vars['team5_5vs5_6_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_5vs5_6_game2_id']; ?>
"><?php echo $this->_tpl_vars['team5_5vs5_6_game2']; ?>
</a>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team5_5_point']; ?>
</br><?php echo $this->_tpl_vars['team5_5_winningrate']; ?>
</br><?php echo $this->_tpl_vars['team5_5_offset']; ?>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team5_5_order']; ?>
</td>
</tr>
<tr>
<td class="team_name"><b><?php echo $this->_tpl_vars['team5_6']; ?>
</b></td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_6vs5_1_game1_id']; ?>
"><?php echo $this->_tpl_vars['team5_6vs5_1_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_6vs5_1_game2_id']; ?>
"><?php echo $this->_tpl_vars['team5_6vs5_1_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_6vs5_2_game1_id']; ?>
"><?php echo $this->_tpl_vars['team5_6vs5_2_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_6vs5_2_game2_id']; ?>
"><?php echo $this->_tpl_vars['team5_6vs5_2_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_6vs5_3_game1_id']; ?>
"><?php echo $this->_tpl_vars['team5_6vs5_3_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_6vs5_3_game2_id']; ?>
"><?php echo $this->_tpl_vars['team5_6vs5_3_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_6vs5_4_game1_id']; ?>
"><?php echo $this->_tpl_vars['team5_6vs5_4_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_6vs5_4_game2_id']; ?>
"><?php echo $this->_tpl_vars['team5_6vs5_4_game2']; ?>
</a>
</td>
<td>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_6vs5_5_game1_id']; ?>
"><?php echo $this->_tpl_vars['team5_6vs5_5_game1']; ?>
</a>
<br>
<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['team5_6vs5_5_game2_id']; ?>
"><?php echo $this->_tpl_vars['team5_6vs5_5_game2']; ?>
</a>
</td>
<td class="team_result_winlose"><?php echo $this->_tpl_vars['team5_6_result']; ?>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team5_6_point']; ?>
</br><?php echo $this->_tpl_vars['team5_6_winningrate']; ?>
</br><?php echo $this->_tpl_vars['team5_6_offset']; ?>
</td>
<td class="team_data"><?php echo $this->_tpl_vars['team5_6_order']; ?>
</td>
</tr>
</table>
</td>
</tr>
</table>
</br></br>
<?php endif; ?>


</form>
</center>
</br>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'schedule_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

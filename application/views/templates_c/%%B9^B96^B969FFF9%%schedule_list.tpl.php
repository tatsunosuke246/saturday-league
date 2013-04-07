<?php /* Smarty version 2.6.27, created on 2013-04-04 18:12:35
         compiled from schedule_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'schedule_list.tpl', 49, false),array('modifier', 'replace', 'schedule_list.tpl', 49, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'schedule_header.tpl', 'smarty_include_vars' => array('title' => 'サタデーリーグ スケジュール管理','javascriptfile' => '/js/schedule_listt.js')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<center>
<h3>スケジュール</h3>
<hr class="sub_contents">
</br>
<a href = "/Scheduleedit/start">スケジュールを追加する</a>
</br></br>

<form name="schedule_list" id="schedule_list" method="post" >

<table class="content_table">
<tr>
<td>--</td>
<td colspan = "2">
<?php echo $this->_tpl_vars['game_list_search_type_radio']; ?>

</td>
</tr>

<tr>
<td><?php echo $this->_tpl_vars['game_list_options']; ?>
</td>
<td><?php echo $this->_tpl_vars['belong_list_options']; ?>
</td>
<td><?php echo $this->_tpl_vars['game_list_team__options']; ?>
</td>
</tr>
</table>

<input type="button" name = "update" id="update" value="更新" onclick="funcSearchSchedule()"/>
</br></br>

<?php unset($this->_sections['loopName']);
$this->_sections['loopName']['name'] = 'loopName';
$this->_sections['loopName']['loop'] = is_array($_loop=$this->_tpl_vars['array_game_id']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['loopName']['show'] = true;
$this->_sections['loopName']['max'] = $this->_sections['loopName']['loop'];
$this->_sections['loopName']['step'] = 1;
$this->_sections['loopName']['start'] = $this->_sections['loopName']['step'] > 0 ? 0 : $this->_sections['loopName']['loop']-1;
if ($this->_sections['loopName']['show']) {
    $this->_sections['loopName']['total'] = $this->_sections['loopName']['loop'];
    if ($this->_sections['loopName']['total'] == 0)
        $this->_sections['loopName']['show'] = false;
} else
    $this->_sections['loopName']['total'] = 0;
if ($this->_sections['loopName']['show']):

            for ($this->_sections['loopName']['index'] = $this->_sections['loopName']['start'], $this->_sections['loopName']['iteration'] = 1;
                 $this->_sections['loopName']['iteration'] <= $this->_sections['loopName']['total'];
                 $this->_sections['loopName']['index'] += $this->_sections['loopName']['step'], $this->_sections['loopName']['iteration']++):
$this->_sections['loopName']['rownum'] = $this->_sections['loopName']['iteration'];
$this->_sections['loopName']['index_prev'] = $this->_sections['loopName']['index'] - $this->_sections['loopName']['step'];
$this->_sections['loopName']['index_next'] = $this->_sections['loopName']['index'] + $this->_sections['loopName']['step'];
$this->_sections['loopName']['first']      = ($this->_sections['loopName']['iteration'] == 1);
$this->_sections['loopName']['last']       = ($this->_sections['loopName']['iteration'] == $this->_sections['loopName']['total']);
?>
<?php if ($this->_sections['loopName']['first']): ?>
<br />
<table class="content_table">
<tr>
<td class="width_20">試合日</td>
<td class="width_20">グラウンド</td>
<td>対戦チーム</td>
</tr>
<?php endif; ?>

<tr>

<?php if ($this->_tpl_vars['array_game_schedule_status'][$this->_sections['loopName']['index']] == 1): ?>
<td class="during_offer">
<?php else: ?>
<td>
<?php endif; ?>

<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['array_game_date'][$this->_sections['loopName']['index']])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y/%m/%d (%a)") : smarty_modifier_date_format($_tmp, "%Y/%m/%d (%a)")))) ? $this->_run_mod_handler('replace', true, $_tmp, 'Sun', "日") : smarty_modifier_replace($_tmp, 'Sun', "日")))) ? $this->_run_mod_handler('replace', true, $_tmp, 'Mon', "月") : smarty_modifier_replace($_tmp, 'Mon', "月")))) ? $this->_run_mod_handler('replace', true, $_tmp, 'Tue', "火") : smarty_modifier_replace($_tmp, 'Tue', "火")))) ? $this->_run_mod_handler('replace', true, $_tmp, 'Wed', "水") : smarty_modifier_replace($_tmp, 'Wed', "水")))) ? $this->_run_mod_handler('replace', true, $_tmp, 'Thu', "木") : smarty_modifier_replace($_tmp, 'Thu', "木")))) ? $this->_run_mod_handler('replace', true, $_tmp, 'Fri', "金") : smarty_modifier_replace($_tmp, 'Fri', "金")))) ? $this->_run_mod_handler('replace', true, $_tmp, 'Sat', "土") : smarty_modifier_replace($_tmp, 'Sat', "土")); ?>

</br>
<?php echo $this->_tpl_vars['array_game_time'][$this->_sections['loopName']['index']]; ?>

</br>
<?php if ($this->_tpl_vars['array_game_belong_number'][$this->_sections['loopName']['index']] == 6): ?>
その他
<?php else: ?>
<?php echo $this->_tpl_vars['array_game_belong_number'][$this->_sections['loopName']['index']]; ?>
部公式戦
<?php endif; ?>
</td>

<?php if ($this->_tpl_vars['array_game_schedule_status'][$this->_sections['loopName']['index']] == 1): ?>
<td class="during_offer">
<?php else: ?>
<td>
<?php endif; ?>

<?php echo $this->_tpl_vars['array_game_ground'][$this->_sections['loopName']['index']]; ?>

</td>

<?php if ($this->_tpl_vars['array_game_schedule_status'][$this->_sections['loopName']['index']] == 1): ?>
<td class="during_offer">
<?php else: ?>
<td>
<?php endif; ?>

<a href = "/Scheduleedit/edit/?schedule_id=<?php echo $this->_tpl_vars['array_game_id'][$this->_sections['loopName']['index']]; ?>
">
<?php if ($this->_tpl_vars['array_game_schedule_status'][$this->_sections['loopName']['index']] == 1): ?>
<?php echo $this->_tpl_vars['array_game_team_1'][$this->_sections['loopName']['index']]; ?>
 vs (募集中)
<?php elseif ($this->_tpl_vars['array_game_schedule_status'][$this->_sections['loopName']['index']] == 5): ?>
<?php echo $this->_tpl_vars['array_game_team_1'][$this->_sections['loopName']['index']]; ?>
 vs (譲渡中)
<?php elseif ($this->_tpl_vars['array_game_schedule_status'][$this->_sections['loopName']['index']] == 6): ?>
<?php echo $this->_tpl_vars['array_game_team_1'][$this->_sections['loopName']['index']]; ?>
 vs (募集終了)
<?php else: ?>
<?php echo $this->_tpl_vars['array_game_team_1'][$this->_sections['loopName']['index']]; ?>
 vs <?php echo $this->_tpl_vars['array_game_team_2'][$this->_sections['loopName']['index']]; ?>

<?php endif; ?>

</a>
<?php if ($this->_tpl_vars['game_list_type'] == 4 || $this->_tpl_vars['game_list_type'] == 5 || $this->_tpl_vars['game_list_type'] == 6): ?>
</br>
<?php if ($this->_tpl_vars['array_game_schedule_status'][$this->_sections['loopName']['index']] == 3): ?>
<?php echo $this->_tpl_vars['array_game_team_score1'][$this->_sections['loopName']['index']]; ?>
 － <?php echo $this->_tpl_vars['array_game_team_score2'][$this->_sections['loopName']['index']]; ?>

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
<td class="inning_team_name"><?php echo $this->_tpl_vars['array_display_team_1'][$this->_sections['loopName']['index']]; ?>
</td>
<td class="inning_team_name"><?php if ($this->_tpl_vars['game_result_team1_inn1_e'][$this->_sections['loopName']['index']] == 1): ?><?php echo $this->_tpl_vars['game_result_team1_inn1'][$this->_sections['loopName']['index']]; ?>
<?php endif; ?></td>
<td class="inning_team_name"><?php if ($this->_tpl_vars['game_result_team1_inn2_e'][$this->_sections['loopName']['index']] == 1): ?><?php echo $this->_tpl_vars['game_result_team1_inn2'][$this->_sections['loopName']['index']]; ?>
<?php endif; ?></td>
<td class="inning_team_name"><?php if ($this->_tpl_vars['game_result_team1_inn3_e'][$this->_sections['loopName']['index']] == 1): ?><?php echo $this->_tpl_vars['game_result_team1_inn3'][$this->_sections['loopName']['index']]; ?>
<?php endif; ?></td>
<td class="inning_team_name"><?php if ($this->_tpl_vars['game_result_team1_inn4_e'][$this->_sections['loopName']['index']] == 1): ?><?php echo $this->_tpl_vars['game_result_team1_inn4'][$this->_sections['loopName']['index']]; ?>
<?php endif; ?></td>
<td class="inning_team_name"><?php if ($this->_tpl_vars['game_result_team1_inn5_e'][$this->_sections['loopName']['index']] == 1): ?><?php echo $this->_tpl_vars['game_result_team1_inn5'][$this->_sections['loopName']['index']]; ?>
<?php endif; ?></td>
<td class="inning_team_name"><?php if ($this->_tpl_vars['game_result_team1_inn6_e'][$this->_sections['loopName']['index']] == 1): ?><?php echo $this->_tpl_vars['game_result_team1_inn6'][$this->_sections['loopName']['index']]; ?>
<?php endif; ?></td>
<td class="inning_team_name"><?php if ($this->_tpl_vars['game_result_team1_inn7_e'][$this->_sections['loopName']['index']] == 1): ?><?php echo $this->_tpl_vars['game_result_team1_inn7'][$this->_sections['loopName']['index']]; ?>
<?php endif; ?></td>
<td class="inning_team_name"><?php if ($this->_tpl_vars['game_result_team1_inn8_e'][$this->_sections['loopName']['index']] == 1): ?><?php echo $this->_tpl_vars['game_result_team1_inn8'][$this->_sections['loopName']['index']]; ?>
<?php endif; ?></td>
<td class="inning_team_name"><?php if ($this->_tpl_vars['game_result_team1_inn9_e'][$this->_sections['loopName']['index']] == 1): ?><?php echo $this->_tpl_vars['game_result_team1_inn9'][$this->_sections['loopName']['index']]; ?>
<?php endif; ?></td>
<td class="inning_team_name_15"><b><?php echo $this->_tpl_vars['game_result_team1_total'][$this->_sections['loopName']['index']]; ?>
</b></td>
</tr>
<tr>
<td class="inning_team_name"><?php echo $this->_tpl_vars['array_display_team_2'][$this->_sections['loopName']['index']]; ?>
</td>
<td class="inning_team_name"><?php if ($this->_tpl_vars['game_result_team2_inn1_e'][$this->_sections['loopName']['index']] == 1): ?><?php echo $this->_tpl_vars['game_result_team2_inn1'][$this->_sections['loopName']['index']]; ?>
<?php endif; ?></td>
<td class="inning_team_name"><?php if ($this->_tpl_vars['game_result_team2_inn2_e'][$this->_sections['loopName']['index']] == 1): ?><?php echo $this->_tpl_vars['game_result_team2_inn2'][$this->_sections['loopName']['index']]; ?>
<?php endif; ?></td>
<td class="inning_team_name"><?php if ($this->_tpl_vars['game_result_team2_inn3_e'][$this->_sections['loopName']['index']] == 1): ?><?php echo $this->_tpl_vars['game_result_team2_inn3'][$this->_sections['loopName']['index']]; ?>
<?php endif; ?></td>
<td class="inning_team_name"><?php if ($this->_tpl_vars['game_result_team2_inn4_e'][$this->_sections['loopName']['index']] == 1): ?><?php echo $this->_tpl_vars['game_result_team2_inn4'][$this->_sections['loopName']['index']]; ?>
<?php endif; ?></td>
<td class="inning_team_name"><?php if ($this->_tpl_vars['game_result_team2_inn5_e'][$this->_sections['loopName']['index']] == 1): ?><?php echo $this->_tpl_vars['game_result_team2_inn5'][$this->_sections['loopName']['index']]; ?>
<?php endif; ?></td>
<td class="inning_team_name"><?php if ($this->_tpl_vars['game_result_team2_inn6_e'][$this->_sections['loopName']['index']] == 1): ?><?php echo $this->_tpl_vars['game_result_team2_inn6'][$this->_sections['loopName']['index']]; ?>
<?php endif; ?></td>
<td class="inning_team_name"><?php if ($this->_tpl_vars['game_result_team2_inn7_e'][$this->_sections['loopName']['index']] == 1): ?><?php echo $this->_tpl_vars['game_result_team2_inn7'][$this->_sections['loopName']['index']]; ?>
<?php endif; ?></td>
<td class="inning_team_name"><?php if ($this->_tpl_vars['game_result_team2_inn8_e'][$this->_sections['loopName']['index']] == 1): ?><?php echo $this->_tpl_vars['game_result_team2_inn8'][$this->_sections['loopName']['index']]; ?>
<?php endif; ?></td>
<td class="inning_team_name"><?php if ($this->_tpl_vars['game_result_team2_inn9_e'][$this->_sections['loopName']['index']] == 1): ?><?php echo $this->_tpl_vars['game_result_team2_inn9'][$this->_sections['loopName']['index']]; ?>
<?php endif; ?></td>
<td class="inning_team_name_15"><b><?php echo $this->_tpl_vars['game_result_team2_total'][$this->_sections['loopName']['index']]; ?>
</b></td>
</tr>
</table>
</br>
<?php elseif ($this->_tpl_vars['array_game_schedule_status'][$this->_sections['loopName']['index']] == 4): ?>
雨天中止</br>
<?php endif; ?>

<?php else: ?>
</br></br>
<?php endif; ?>

<?php if ($this->_tpl_vars['array_game_comment'][$this->_sections['loopName']['index']] != ""): ?>
<?php echo $this->_tpl_vars['array_game_comment'][$this->_sections['loopName']['index']]; ?>

<?php endif; ?>

</td>
</tr>

<?php if ($this->_sections['loopName']['last']): ?>
</table>
<?php endif; ?>
<?php endfor; else: ?>
<br />
スケジュールが登録されていません
<?php endif; ?>

</form>
</center>
</br>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'schedule_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

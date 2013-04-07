<?php /* Smarty version 2.6.27, created on 2013-03-16 12:38:36
         compiled from schedule_main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'schedule_main.tpl', 27, false),array('modifier', 'replace', 'schedule_main.tpl', 27, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'schedule_header.tpl', 'smarty_include_vars' => array('title' => 'サタデーリーグ スケジュール管理トップ','javascriptfile' => '/js/schedule_main.js')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<center>
<h3>試合予定一覧</h3>
<hr class="sub_contents">
</br>
<a href = "/Scheduleedit/start">試合予定を追加する</a>
</br>


対戦募集中の予定

<?php unset($this->_sections['loopName']);
$this->_sections['loopName']['name'] = 'loopName';
$this->_sections['loopName']['loop'] = is_array($_loop=$this->_tpl_vars['array_durning_offer_game']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<td>試合日</td>
<td>時間</td>
<td>グラウンド</td>
<td>対戦チーム</td>
<td>部</td>
</tr>
<?php endif; ?>

<tr>
<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['array_durning_offer_game_date'][$this->_sections['loopName']['index']])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y/%m/%d (%a)") : smarty_modifier_date_format($_tmp, "%Y/%m/%d (%a)")))) ? $this->_run_mod_handler('replace', true, $_tmp, 'Sun', "日") : smarty_modifier_replace($_tmp, 'Sun', "日")))) ? $this->_run_mod_handler('replace', true, $_tmp, 'Mon', "月") : smarty_modifier_replace($_tmp, 'Mon', "月")))) ? $this->_run_mod_handler('replace', true, $_tmp, 'Tue', "火") : smarty_modifier_replace($_tmp, 'Tue', "火")))) ? $this->_run_mod_handler('replace', true, $_tmp, 'Wed', "水") : smarty_modifier_replace($_tmp, 'Wed', "水")))) ? $this->_run_mod_handler('replace', true, $_tmp, 'Thu', "木") : smarty_modifier_replace($_tmp, 'Thu', "木")))) ? $this->_run_mod_handler('replace', true, $_tmp, 'Fri', "金") : smarty_modifier_replace($_tmp, 'Fri', "金")))) ? $this->_run_mod_handler('replace', true, $_tmp, 'Sat', "土") : smarty_modifier_replace($_tmp, 'Sat', "土")); ?>

</td>
<td>
<td><?php echo $this->_tpl_vars['array_durning_offer_game_time'][$this->_sections['loopName']['index']]; ?>
 
</td>
<td>
<?php echo $this->_tpl_vars['array_durning_offer_game_ground'][$this->_sections['loopName']['index']]; ?>

</td>
<td>
<?php echo $this->_tpl_vars['array_durning_offer_game_team'][$this->_sections['loopName']['index']]; ?>

</td>
<td>
<?php echo $this->_tpl_vars['array_durning_offer_game_belong_number'][$this->_sections['loopName']['index']]; ?>

</td>
<td>

</td>
</tr>

<?php if ($this->_sections['loopName']['last']): ?> 
</table>
<?php endif; ?>
<?php endfor; else: ?>
<br />
試合予定が登録されていません
<?php endif; ?>

</center>
</br>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'schedule_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

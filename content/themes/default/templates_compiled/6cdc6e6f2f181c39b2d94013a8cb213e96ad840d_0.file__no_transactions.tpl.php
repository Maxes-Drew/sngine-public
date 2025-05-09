<?php
/* Smarty version 5.4.1, created on 2025-03-15 03:02:53
  from 'file:_no_transactions.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67d4eddd48b3b4_18666451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cdc6e6f2f181c39b2d94013a8cb213e96ad840d' => 
    array (
      0 => '_no_transactions.tpl',
      1 => 1685426028,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
))) {
function content_67d4eddd48b3b4_18666451 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/drew44/public_html/content/themes/default/templates';
?><!-- no transaction -->
<div class="text-center text-muted">
  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"transaction",'class'=>"mb20",'width'=>"56px",'height'=>"56px"), (int) 0, $_smarty_current_dir);
?>
  <div class="text-md">
    <span class="no-data"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Looks like you don't have any transaction yet");?>
</span>
  </div>
</div>
<!-- no transaction --><?php }
}

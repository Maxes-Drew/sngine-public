<?php
/* Smarty version 5.4.1, created on 2025-04-23 05:24:05
  from 'file:settings.addresses.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68087975d13c69_57549428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '495ac1f825f7cc56720dff407055f0f82fda4956' => 
    array (
      0 => 'settings.addresses.tpl',
      1 => 1688862834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
    'file:_addresses.tpl' => 1,
  ),
))) {
function content_68087975d13c69_57549428 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/drew44/public_html/content/themes/default/templates';
?><div class="card-header with-icon">
  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"map",'class'=>"main-icon mr15",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your Addresses");?>

</div>
<div class="card-body">
  <?php $_smarty_tpl->renderSubTemplate('file:_addresses.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
</div><?php }
}

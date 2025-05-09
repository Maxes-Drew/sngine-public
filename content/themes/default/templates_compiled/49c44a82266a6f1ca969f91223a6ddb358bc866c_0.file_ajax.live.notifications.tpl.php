<?php
/* Smarty version 5.4.1, created on 2025-03-02 19:31:54
  from 'file:ajax.live.notifications.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67c4b22a8107d3_90065692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49c44a82266a6f1ca969f91223a6ddb358bc866c' => 
    array (
      0 => 'ajax.live.notifications.tpl',
      1 => 1647993802,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_notification.tpl' => 1,
  ),
))) {
function content_67c4b22a8107d3_90065692 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/drew44/public_html/content/themes/default/templates';
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('notifications'), 'notification');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('notification')->value) {
$foreach0DoElse = false;
?>
  <?php $_smarty_tpl->renderSubTemplate('file:__feeds_notification.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}

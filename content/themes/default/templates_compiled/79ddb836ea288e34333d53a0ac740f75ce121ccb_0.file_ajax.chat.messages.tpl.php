<?php
/* Smarty version 5.4.1, created on 2025-03-02 18:08:21
  from 'file:ajax.chat.messages.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67c49e950c9874_28502985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79ddb836ea288e34333d53a0ac740f75ce121ccb' => 
    array (
      0 => 'ajax.chat.messages.tpl',
      1 => 1647993786,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_message.tpl' => 1,
  ),
))) {
function content_67c49e950c9874_28502985 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/drew44/public_html/content/themes/default/templates';
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages'), 'message');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('message')->value) {
$foreach0DoElse = false;
?>
  <?php $_smarty_tpl->renderSubTemplate('file:__feeds_message.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}

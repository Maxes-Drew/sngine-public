<?php
/* Smarty version 5.4.1, created on 2025-03-02 22:20:36
  from 'file:ajax.live.conversations.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67c4d9b400ff24_48430823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62ad686b90578bcc055c5c457534b63cf28402d0' => 
    array (
      0 => 'ajax.live.conversations.tpl',
      1 => 1647993802,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_conversation.tpl' => 1,
  ),
))) {
function content_67c4d9b400ff24_48430823 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/drew44/public_html/content/themes/default/templates';
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('conversations'), 'conversation');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('conversation')->value) {
$foreach0DoElse = false;
?>
  <?php $_smarty_tpl->renderSubTemplate('file:__feeds_conversation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}

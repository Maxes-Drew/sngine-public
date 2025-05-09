<?php
/* Smarty version 5.4.1, created on 2025-02-28 21:57:33
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67c2314d4ba0e1_34889898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a07948273ea22743c22f9d05e3ab3bcb3b32efbc' => 
    array (
      0 => 'index.tpl',
      1 => 1710786816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.landing.tpl' => 1,
    'file:index.newsfeed.tpl' => 1,
  ),
))) {
function content_67c2314d4ba0e1_34889898 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/drew44/public_html/content/themes/default/templates';
if (!$_smarty_tpl->getValue('user')->_logged_in && !$_smarty_tpl->getValue('system')['newsfeed_public']) {?>
  <?php $_smarty_tpl->renderSubTemplate('file:index.landing.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
} else { ?>
  <?php $_smarty_tpl->renderSubTemplate('file:index.newsfeed.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
}

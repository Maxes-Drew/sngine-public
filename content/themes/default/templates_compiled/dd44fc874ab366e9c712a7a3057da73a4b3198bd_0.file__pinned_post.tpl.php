<?php
/* Smarty version 5.4.1, created on 2025-03-02 18:39:00
  from 'file:_pinned_post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67c4a5c4094bd6_42017195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd44fc874ab366e9c712a7a3057da73a4b3198bd' => 
    array (
      0 => '_pinned_post.tpl',
      1 => 1647993698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post.tpl' => 1,
  ),
))) {
function content_67c4a5c4094bd6_42017195 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/drew44/public_html/content/themes/default/templates';
?><!-- posts-filter -->
<div class="posts-filter">
  <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pinned Post");?>
</span>
</div>
<!-- posts-filter -->

<?php $_smarty_tpl->renderSubTemplate('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('standalone'=>true,'pinned'=>true), (int) 0, $_smarty_current_dir);
}
}

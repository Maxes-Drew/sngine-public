<?php
/* Smarty version 5.4.1, created on 2025-03-02 18:36:03
  from 'file:ajax.posts.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67c4a51373c700_56173273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a1237c6a958bf3f2122b2ee592992c6f7d7972c' => 
    array (
      0 => 'ajax.posts.tpl',
      1 => 1647993820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post.tpl' => 2,
    'file:_no_data.tpl' => 1,
  ),
))) {
function content_67c4a51373c700_56173273 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/drew44/public_html/content/themes/default/templates';
if ($_smarty_tpl->getValue('_get')) {?>
  <?php if ($_smarty_tpl->getValue('posts')) {?>
    <ul>
      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('posts'), 'post');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('post')->value) {
$foreach0DoElse = false;
?>
        <?php $_smarty_tpl->renderSubTemplate('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ul>

    <!-- see-more -->
    <div class="alert alert-post see-more mb20 js_see-more <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>js_see-more-infinite<?php }?>" data-get="<?php echo $_smarty_tpl->getValue('_get');?>
" data-filter="<?php echo $_smarty_tpl->getValue('_filter');?>
" <?php if ($_smarty_tpl->getValue('_id')) {?>data-id="<?php echo $_smarty_tpl->getValue('_id');?>
" <?php }?>>
      <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("More Stories");?>
</span>
      <div class="loader loader_small x-hidden"></div>
    </div>
    <!-- see-more -->
  <?php } else { ?>
    <?php $_smarty_tpl->renderSubTemplate('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
  <?php }
} else { ?>
  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('posts'), 'post');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('post')->value) {
$foreach1DoElse = false;
?>
    <?php $_smarty_tpl->renderSubTemplate('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}
}

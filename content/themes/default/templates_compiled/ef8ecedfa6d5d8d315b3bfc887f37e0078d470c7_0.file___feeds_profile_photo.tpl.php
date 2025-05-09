<?php
/* Smarty version 5.4.1, created on 2025-03-13 15:03:34
  from 'file:__feeds_profile_photo.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67d2f3c6947517_49089106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef8ecedfa6d5d8d315b3bfc887f37e0078d470c7' => 
    array (
      0 => '__feeds_profile_photo.tpl',
      1 => 1690177848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d2f3c6947517_49089106 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/drew44/public_html/content/themes/default/templates';
?><div class="col-4 mb10">
  <div class="pg_photo pointer <?php if ($_smarty_tpl->getValue('_filter') == "avatar") {?>js_profile-picture-change<?php } else { ?>js_profile-cover-change<?php }?>" data-id=<?php echo $_smarty_tpl->getValue('id');?>
 data-type=<?php echo $_smarty_tpl->getValue('type');?>
 data-image="<?php echo $_smarty_tpl->getValue('photo')['source'];?>
" style="background-image:url(<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('photo')['source'];?>
);">
  </div>
</div><?php }
}

<?php
/* Smarty version 5.4.1, created on 2025-02-28 23:54:06
  from 'file:_announcements.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67c24c9e6e5232_30888807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af1bf95044cfb45bd677379a3a7d1becf0822c4d' => 
    array (
      0 => '_announcements.tpl',
      1 => 1684889014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67c24c9e6e5232_30888807 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/drew44/public_html/content/themes/default/templates';
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('announcements'), 'announcement');
$foreach12DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('announcement')->value) {
$foreach12DoElse = false;
?>
  <div class="alert alert-<?php echo $_smarty_tpl->getValue('announcement')['type'];?>
 text-with-list">
    <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
      <button type="button" class="btn-close float-end js_announcment-remover" data-id="<?php echo $_smarty_tpl->getValue('announcement')['announcement_id'];?>
"></button>
    <?php }?>
    <?php if ($_smarty_tpl->getValue('announcement')['title']) {?><div class="title"><?php echo $_smarty_tpl->getValue('announcement')['title'];?>
</div><?php }?>
    <?php echo $_smarty_tpl->getValue('announcement')['code'];?>

  </div>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}

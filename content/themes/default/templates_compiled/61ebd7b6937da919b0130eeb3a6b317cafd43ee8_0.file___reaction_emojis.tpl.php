<?php
/* Smarty version 5.4.1, created on 2025-03-02 00:15:22
  from 'file:__reaction_emojis.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67c3a31a64d8b2_04903776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61ebd7b6937da919b0130eeb3a6b317cafd43ee8' => 
    array (
      0 => '__reaction_emojis.tpl',
      1 => 1667442618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67c3a31a64d8b2_04903776 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/drew44/public_html/content/themes/default/templates';
?><!-- reaction -->
<div class="emoji">
  <img src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('reactions')[$_smarty_tpl->getValue('_reaction')]['image'];?>
" alt="<?php echo $_smarty_tpl->getValue('reactions')[$_smarty_tpl->getValue('_reaction')]['title'];?>
" />
</div>
<!-- reaction --><?php }
}

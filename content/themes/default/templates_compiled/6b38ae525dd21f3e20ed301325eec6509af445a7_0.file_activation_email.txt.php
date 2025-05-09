<?php
/* Smarty version 5.4.1, created on 2025-04-15 11:06:10
  from 'file:emails/activation_email.txt' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67fe3da2f01884_79735104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b38ae525dd21f3e20ed301325eec6509af445a7' => 
    array (
      0 => 'emails/activation_email.txt',
      1 => 1693758336,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67fe3da2f01884_79735104 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/drew44/public_html/content/themes/default/templates/emails';
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Hi");?>
 <?php echo $_smarty_tpl->getValue('name');?>
,

<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("To complete the activation process, please follow this link");?>
:
<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/activation/<?php echo $_smarty_tpl->getValue('email_verification_code');?>


<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Activiation Code");?>
: <?php echo $_smarty_tpl->getValue('email_verification_code');?>


<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Welcome to");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_title']);?>


<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_title']);?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Team");
}
}

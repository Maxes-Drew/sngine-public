<?php
/* Smarty version 5.4.1, created on 2025-02-28 21:57:33
  from 'file:_head.css.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67c2314d574ab2_32181684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4b7000e18aae83079d187eeef9d8c84a354063f' => 
    array (
      0 => '_head.css.tpl',
      1 => 1698949910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67c2314d574ab2_32181684 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/drew44/public_html/content/themes/default/templates';
if ($_smarty_tpl->getValue('system')['css_customized']) {?><style type="text/css"><?php if ($_smarty_tpl->getValue('system')['css_background']) {?>body {background: <?php echo $_smarty_tpl->getValue('system')['css_background'];?>
;}<?php }
if ($_smarty_tpl->getValue('system')['css_link_color']) {?>a,.data-content .name a,.text-link,.post-stats-alt,.post-stats .fa,.side-nav>li.active>a,.navbar-container .data-content .name a {color: <?php echo $_smarty_tpl->getValue('system')['css_link_color'];?>
;}<?php }
if ($_smarty_tpl->getValue('system')['css_btn_primary']) {?>.btn-primary,.btn-primary:focus,.btn-primary:hover {background: <?php echo $_smarty_tpl->getValue('system')['css_btn_primary'];?>
!important;border-color: <?php echo $_smarty_tpl->getValue('system')['css_btn_primary'];?>
!important;}<?php }
if ($_smarty_tpl->getValue('system')['css_header']) {?>.main-header {background: <?php echo $_smarty_tpl->getValue('system')['css_header'];?>
;}.main-header .user-menu {border-left-color: <?php echo $_smarty_tpl->getValue('system')['css_header'];?>
;}<?php }
if ($_smarty_tpl->getValue('system')['css_header_search']) {?>.main-header .search-wrapper .form-control {background: <?php echo $_smarty_tpl->getValue('system')['css_header_search'];?>
;}<?php }
if ($_smarty_tpl->getValue('system')['css_header_search_color']) {?>.main-header .search-wrapper .form-control {color: <?php echo $_smarty_tpl->getValue('system')['css_header_search_color'];?>
;}.main-header .search-wrapper .form-control::placeholder {color: <?php echo $_smarty_tpl->getValue('system')['css_header_search_color'];?>
;}.main-header .search-wrapper .form-control::-webkit-input-placeholder {color: <?php echo $_smarty_tpl->getValue('system')['css_header_search_color'];?>
;}.main-header .search-wrapper .form-control:-moz-placeholder {color: <?php echo $_smarty_tpl->getValue('system')['css_header_search_color'];?>
;opacity: 1;}.main-header .search-wrapper .form-control:-ms-input-placeholder {color: <?php echo $_smarty_tpl->getValue('system')['css_header_search_color'];?>
;}<?php }
if ($_smarty_tpl->getValue('system')['css_header_icons']) {?>.header-icon,.header-icon * {color: <?php echo $_smarty_tpl->getValue('system')['css_header_icons'];?>
 ! important;fill: <?php echo $_smarty_tpl->getValue('system')['css_header_icons'];?>
 ! important;}<?php }
if ($_smarty_tpl->getValue('system')['css_header_icons_night']) {?>body.night-mode .header-icon,body.night-mode .header-icon * {color: <?php echo $_smarty_tpl->getValue('system')['css_header_icons_night'];?>
 ! important;fill: <?php echo $_smarty_tpl->getValue('system')['css_header_icons_night'];?>
 ! important;}<?php }
if ($_smarty_tpl->getValue('system')['css_main_icons']) {?>.main-icon,.main-icon *,.x-form-tools {color: <?php echo $_smarty_tpl->getValue('system')['css_main_icons'];?>
 ! important;fill: <?php echo $_smarty_tpl->getValue('system')['css_main_icons'];?>
 ! important;}<?php }
if ($_smarty_tpl->getValue('system')['css_main_icons_night']) {?>body.night-mode .main-icon,body.night-mode .main-icon *,body.night-mode .x-form-tools {color: <?php echo $_smarty_tpl->getValue('system')['css_main_icons_night'];?>
 ! important;fill: <?php echo $_smarty_tpl->getValue('system')['css_main_icons_night'];?>
 ! important;}<?php }
if ($_smarty_tpl->getValue('system')['css_action_icons']) {?>.action-icon,.action-icon * {color: <?php echo $_smarty_tpl->getValue('system')['css_action_icons'];?>
 ! important;fill: <?php echo $_smarty_tpl->getValue('system')['css_action_icons'];?>
 ! important;}<?php }
if ($_smarty_tpl->getValue('system')['css_action_icons_night']) {?>body.night-mode .action-icon,body.night-mode .action-icon * {color: <?php echo $_smarty_tpl->getValue('system')['css_action_icons_night'];?>
 ! important;fill: <?php echo $_smarty_tpl->getValue('system')['css_action_icons_night'];?>
 ! important;}<?php }
echo $_smarty_tpl->getSmarty()->getModifierCallback('html_entity_decode')($_smarty_tpl->getValue('system')['css_custome_css'],ENT_QUOTES);?>
</style><?php }
}
}

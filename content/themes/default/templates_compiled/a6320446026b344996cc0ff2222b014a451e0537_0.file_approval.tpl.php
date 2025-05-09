<?php
/* Smarty version 5.4.1, created on 2025-05-01 11:19:30
  from 'file:approval.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_681358c29ac733_26446589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6320446026b344996cc0ff2222b014a451e0537' => 
    array (
      0 => 'approval.tpl',
      1 => 1714170706,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
))) {
function content_681358c29ac733_26446589 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/drew44/public_html/content/themes/default/templates';
$_smarty_tpl->renderSubTemplate('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<!-- page header -->
<div class="page-header">
  <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->getValue('system')['theme'];?>
/images/headers/undraw_check_boxes_re_v40f.svg">
  <div class="circle-2"></div>
  <div class="circle-3"></div>
  <div class="inner">
    <h2><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Approval Required");?>
</h2>
    <p class="text-xlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your account is pending approval");?>
</p>
  </div>
</div>
<!-- page header -->

<!-- page content -->
<div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?>" style="margin-top: -25px;">
  <div class="row">
    <div class="col-12 col-md-10 mx-md-auto">
      <div class="card shadow">
        <div class="card-body text-center">
          <p class="text-xlg mt10 mb30">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your account is pending approval. You will receive an email once your account is approved.");?>

          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->renderSubTemplate('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}

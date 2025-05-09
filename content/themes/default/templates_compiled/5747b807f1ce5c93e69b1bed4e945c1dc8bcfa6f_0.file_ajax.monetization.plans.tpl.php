<?php
/* Smarty version 5.4.1, created on 2025-03-02 19:24:17
  from 'file:ajax.monetization.plans.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67c4b061dae930_18185394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5747b807f1ce5c93e69b1bed4e945c1dc8bcfa6f' => 
    array (
      0 => 'ajax.monetization.plans.tpl',
      1 => 1706654052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
))) {
function content_67c4b061dae930_18185394 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/drew44/public_html/content/themes/default/templates';
?><div class="modal-header">
  <h6 class="modal-title">
    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"monetization",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Monetization Plans");?>

  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
  <div class="payment-plans">
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('monetization_plans'), 'plan');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('plan')->value) {
$foreach0DoElse = false;
?>
      <div class="payment-plan">
        <div class="text-xxlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('plan')['title']);?>
</div>
        <div class="text-xlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('plan')['price']);?>
 / <?php if ($_smarty_tpl->getValue('plan')['period_num'] != '1') {
echo $_smarty_tpl->getValue('plan')['period_num'];
}?> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getValue('plan')['period']));?>
</div>
        <?php ob_start();
echo $_smarty_tpl->getValue('plan')['custom_description'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?>
          <div><?php echo $_smarty_tpl->getValue('plan')['custom_description'];?>
</div>
        <?php }?>
        <div class="d-grid mt10">
          <?php if ($_smarty_tpl->getValue('plan')['price'] == 0) {?>
            <button class="btn btn-warning rounded rounded-pill mt20 js_sneak-peak" data-id="<?php echo $_smarty_tpl->getValue('plan')['plan_id'];?>
">
              <i class="fa fa-eye mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sneak Peak");?>

            </button>
          <?php } else { ?>
            <button class="btn btn-info rounded rounded-pill mt20" data-toggle="modal" data-url="#payment" data-options='{ "handle": "subscribe", "subscribe": "true", "id": <?php echo $_smarty_tpl->getValue('plan')['plan_id'];?>
, "price": <?php echo $_smarty_tpl->getValue('plan')['price'];?>
, "vat": "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_payment_vat_value')($_smarty_tpl->getValue('plan')['price']);?>
", "fees": "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_payment_fees_value')($_smarty_tpl->getValue('plan')['price']);?>
", "total": "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_payment_total_value')($_smarty_tpl->getValue('plan')['price']);?>
", "total_printed": "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_payment_total_value')($_smarty_tpl->getValue('plan')['price'],true);?>
" }'>
              <i class="fa fa-money-check-alt mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Subscribe");?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('plan')['price'],2));?>
)
            </button>
          <?php }?>
        </div>
      </div>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
  </div>
</div><?php }
}

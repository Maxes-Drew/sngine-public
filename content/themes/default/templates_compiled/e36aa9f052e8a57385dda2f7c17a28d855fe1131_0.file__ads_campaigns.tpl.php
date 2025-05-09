<?php
/* Smarty version 5.4.1, created on 2025-02-28 23:54:06
  from 'file:_ads_campaigns.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67c24c9e7d19c1_84699787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e36aa9f052e8a57385dda2f7c17a28d855fe1131' => 
    array (
      0 => '_ads_campaigns.tpl',
      1 => 1647993602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67c24c9e7d19c1_84699787 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/drew44/public_html/content/themes/default/templates';
if ($_smarty_tpl->getValue('ads_campaigns')) {?>
  <!-- ads campaigns -->
  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ads_campaigns'), 'campaign');
$foreach20DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('campaign')->value) {
$foreach20DoElse = false;
?>
    <div class="card">
      <div class="card-header bg-transparent">
        <i class="fa fa-bullhorn fa-fw mr5 yellow"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sponsored");?>

      </div>
      <div class="card-body <?php if ($_smarty_tpl->getValue('campaign')['campaign_bidding'] == 'click') {?>js_ads-click-campaign<?php }?>" data-id="<?php echo $_smarty_tpl->getValue('campaign')['campaign_id'];?>
">
        <a href="<?php echo $_smarty_tpl->getValue('campaign')['ads_url'];?>
" target="_blank">
          <img class="img-fluid" src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('campaign')['ads_image'];?>
">
        </a>
        <?php if ($_smarty_tpl->getValue('campaign')['ads_title'] || $_smarty_tpl->getValue('campaign')['ads_description']) {?>
          <div class="ptb5 plr10">
            <p class="ads-title">
              <a href="<?php echo $_smarty_tpl->getValue('campaign')['ads_url'];?>
" target="_blank"><?php echo $_smarty_tpl->getValue('campaign')['ads_title'];?>
</a>
            </p>
            <p class="ads-descrition">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('campaign')['ads_description'],200);?>

            </p>
          </div>
        <?php }?>
      </div>
    </div>
  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
  <!-- ads campaigns -->
<?php }
}
}

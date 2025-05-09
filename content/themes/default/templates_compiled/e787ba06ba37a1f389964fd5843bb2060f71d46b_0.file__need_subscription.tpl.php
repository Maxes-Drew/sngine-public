<?php
/* Smarty version 5.4.1, created on 2025-03-02 19:17:01
  from 'file:_need_subscription.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67c4aeadd535e0_85836382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e787ba06ba37a1f389964fd5843bb2060f71d46b' => 
    array (
      0 => '_need_subscription.tpl',
      1 => 1718241274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
))) {
function content_67c4aeadd535e0_85836382 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/drew44/public_html/content/themes/default/templates';
?><!-- need subscription -->
<div class="ptb20 plr20" <?php if ($_smarty_tpl->getValue('subscriptions_image')) {?> style="background-image: url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('subscriptions_image');?>
'); background-size: cover; background-position: center; min-height: 500px; position: relative;" <?php }?>>
  <div class="text-center text-muted" <?php if ($_smarty_tpl->getValue('subscriptions_image')) {?> style="background: rgba(0, 0, 0, 0.5); padding: 20px; border-radius: 10px; position: absolute; bottom: 20px; left: 50%; transform: translateX(-50%); width: 90%;" <?php }?>>
    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"locked",'class'=>"main-icon mb20",'width'=>"56px",'height'=>"56px"), (int) 0, $_smarty_current_dir);
?>
    <div class="text-md">
      <span style="padding: 8px 20px; background: #ececec; border-radius: 18px; font-weight: bold; font-size: 13px;">
        <?php if ((null !== ($_smarty_tpl->getValue('price') ?? null))) {?>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("SUBSCRIBE TO SEE THIS");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')(mb_strtoupper((string) $_smarty_tpl->getValue('node_type') ?? '', 'UTF-8'));?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("CONTENT");?>

        <?php } else { ?>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("SUBSCRIPTIONS CONTENT");?>

        <?php }?>
      </span>
    </div>
    <?php if ((null !== ($_smarty_tpl->getValue('price') ?? null))) {?>
      <div class="d-grid">
        <button class="btn btn-info rounded rounded-pill mt20" data-toggle="modal" data-url="monetization/controller.php?do=get_plans&node_id=<?php echo $_smarty_tpl->getValue('node_id');?>
&node_type=<?php echo $_smarty_tpl->getValue('node_type');?>
" data-size="large">
          <i class="fa fa-money-check-alt mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("SUBSCRIBE");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("STARTING FROM");?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('price'),2));?>
)
        </button>
      </div>
    <?php }?>
  </div>
</div>
<!-- need subscription --><?php }
}

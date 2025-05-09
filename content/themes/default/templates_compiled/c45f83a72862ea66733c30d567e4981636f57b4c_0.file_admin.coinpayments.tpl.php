<?php
/* Smarty version 5.4.1, created on 2025-03-15 03:20:42
  from 'file:admin.coinpayments.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67d4f20ad0fb99_11380374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c45f83a72862ea66733c30d567e4981636f57b4c' => 
    array (
      0 => 'admin.coinpayments.tpl',
      1 => 1684889014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d4f20ad0fb99_11380374 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/drew44/public_html/content/themes/default/templates';
?><div class="card">
  <div class="card-header with-icon">
    <i class="fab fa-bitcoin mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("CoinPayments Transactions");?>

  </div>

  <div class="card-body">

    <?php if (!$_smarty_tpl->getValue('system')['coinpayments_enabled']) {?>
      <div class="alert alert-warning">
        <div class="icon">
          <i class="fa fa-exclamation-triangle fa-2x"></i>
        </div>
        <div class="text pt5">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("CoinPayments is disabled");?>
, <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Make sure you have configured");?>
 <a class="alert-link" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/settings/payments"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Payments Settings");?>
</a>
        </div>
      </div>
    <?php }?>

    <div class="alert alert-info">
      <div class="icon">
        <i class="fa fa-info-circle fa-2x"></i>
      </div>
      <div class="text pt5">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("You can visit your CoinPayments account to see the transactions in more details");?>

      </div>
    </div>

    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover js_dataTable">
        <thead>
          <tr>
            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("TXN_ID");?>
</th>
            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("User");?>
</th>
            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Product");?>
</th>
            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Amount");?>
</th>
            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Created");?>
</th>
            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Updated");?>
</th>
            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Status");?>
</th>
            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Status Message");?>
</th>
          </tr>
        </thead>
        <tbody>
          <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('coinpayments_transactions'), 'transaction');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('transaction')->value) {
$foreach0DoElse = false;
?>
            <tr>
              <td><?php echo $_smarty_tpl->getValue('transaction')['transaction_txn_id'];?>
</td>
              <td>
                <a target="_blank" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('transaction')['user_name'];?>
">
                  <img class="tbl-image" src="<?php echo $_smarty_tpl->getValue('transaction')['user_picture'];?>
">
                  <br>
                  <span class="badge rounded-pill badge-lg bg-secondary">
                    <?php if ($_smarty_tpl->getValue('system')['show_usernames_enabled']) {
echo $_smarty_tpl->getValue('transaction')['user_name'];
} else {
echo $_smarty_tpl->getValue('transaction')['user_firstname'];?>
 <?php echo $_smarty_tpl->getValue('transaction')['user_lastname'];
}?>
                  </span>
                </a>
              </td>
              <td><?php echo $_smarty_tpl->getValue('transaction')['product'];?>
</td>
              <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('transaction')['amount']);?>
</td>
              <td>
                <span class="js_moment" data-time="<?php echo $_smarty_tpl->getValue('transaction')['created_at'];?>
"><?php echo $_smarty_tpl->getValue('transaction')['created_at'];?>
</span>
              </td>
              <td>
                <span class="js_moment" data-time="<?php echo $_smarty_tpl->getValue('transaction')['last_update'];?>
"><?php echo $_smarty_tpl->getValue('transaction')['last_update'];?>
</span>
              </td>
              <td>
                <?php if ($_smarty_tpl->getValue('transaction')['status'] == '-1') {?>
                  <span class="badge rounded-pill badge-lg bg-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Error");?>
</span>
                <?php } elseif ($_smarty_tpl->getValue('transaction')['status'] == '0') {?>
                  <span class="badge rounded-pill badge-lg bg-info"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Processing");?>
</span>
                <?php } elseif ($_smarty_tpl->getValue('transaction')['status'] == '1') {?>
                  <span class="badge rounded-pill badge-lg bg-warning"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pending");?>
</span>
                <?php } elseif ($_smarty_tpl->getValue('transaction')['status'] == '2') {?>
                  <span class="badge rounded-pill badge-lg bg-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Complete");?>
</span>
                <?php }?>
              </td>
              <td>
                <?php echo $_smarty_tpl->getValue('transaction')['status_message'];?>

              </td>
            </tr>
          <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </tbody>
      </table>
    </div>
  </div>

</div><?php }
}

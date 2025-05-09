<?php
/* Smarty version 5.4.1, created on 2025-03-13 15:42:57
  from 'file:admin.earnings.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67d2fd01808268_87058206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00187533133115e480855b1b96779fae68c6a346' => 
    array (
      0 => 'admin.earnings.tpl',
      1 => 1729275848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d2fd01808268_87058206 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/drew44/public_html/content/themes/default/templates';
?><div class="card">
  <div class="card-header with-icon">
    <?php if ($_smarty_tpl->getValue('sub_view') == '') {?>
      <div class="float-end">
        <!-- Export CSV -->
        <button type="button" class="btn btn-md btn-success" data-toggle="modal" data-url="#export-csv" data-options='{ "handle": "earnings" }'>
          <i class="fa-solid fa-file-csv"></i><span class="ml5 d-none d-lg-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Export CSV");?>
</span>
        </button>
        <!-- Export CSV -->
      </div>
    <?php } elseif ($_smarty_tpl->getValue('sub_view') == "commissions") {?>
      <div class="float-end">
        <!-- Export CSV -->
        <button type="button" class="btn btn-md btn-success" data-toggle="modal" data-url="#export-csv" data-options='{ "handle": "commissions" }'>
          <i class="fa-solid fa-file-csv"></i><span class="ml5 d-none d-lg-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Export CSV");?>
</span>
        </button>
        <!-- Export CSV -->
      </div>
    <?php } elseif ($_smarty_tpl->getValue('sub_view') == "movies") {?>
      <div class="float-end">
        <!-- Export CSV -->
        <button type="button" class="btn btn-md btn-success" data-toggle="modal" data-url="#export-csv" data-options='{ "handle": "movies" }'>
          <i class="fa-solid fa-file-csv"></i><span class="ml5 d-none d-lg-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Export CSV");?>
</span>
        </button>
        <!-- Export CSV -->
      </div>
    <?php }?>
    <i class="fa fa-chart-line mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Earnings");?>

    <?php if ($_smarty_tpl->getValue('sub_view') == '') {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Payments");
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "commissions") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Commissions");
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "packages") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Packages");
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "movies") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Movies");
}?>
  </div>

  <?php if ($_smarty_tpl->getValue('sub_view') == '') {?>

    <div class="card-body">
      <div class="row">
        <div class="col-lg-6">
          <div id="payment-methods-chart" class="admin-chart mb20"></div>
        </div>
        <div class="col-lg-6">
          <div id="payment-handles-chart" class="admin-chart mb20"></div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6">
          <div class="stat-panel bg-gradient-primary">
            <div class="stat-cell narrow">
              <i class="fa fa-donate bg-icon"></i>
              <span class="text-xxlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('total_payin'),2));?>
</span><br>
              <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Total PayIn");?>
</span><br>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="stat-panel bg-gradient-info">
            <div class="stat-cell narrow">
              <i class="fa fa-donate bg-icon"></i>
              <span class="text-xxlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('month_payin'),2));?>
</span><br>
              <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("This Month PayIn");?>
</span><br>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6">
          <div class="stat-panel bg-gradient-red">
            <div class="stat-cell narrow">
              <i class="fa fa-hourglass-half bg-icon"></i>
              <span class="text-xxlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('total_pending_payout'),2));?>
</span><br>
              <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Total Pending PayOut");?>
</span><br>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="stat-panel bg-gradient-warning">
            <div class="stat-cell narrow">
              <i class="fa fa-hourglass-half bg-icon"></i>
              <span class="text-xxlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('month_pending_payout'),2));?>
</span><br>
              <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("This Month Pending PayOut");?>
</span><br>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6">
          <div class="stat-panel bg-gradient-cyan">
            <div class="stat-cell narrow">
              <i class="fa fa-money-bill-trend-up bg-icon"></i>
              <span class="text-xxlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('total_approved_payout'),2));?>
</span><br>
              <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Total Approved PayOut");?>
</span><br>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="stat-panel bg-gradient-success">
            <div class="stat-cell narrow">
              <i class="fa fa-money-bill-trend-up bg-icon"></i>
              <span class="text-xxlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('month_approved_payout'),2));?>
</span><br>
              <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("This Month Approved PayOut");?>
</span><br>
            </div>
          </div>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("ID");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Payer");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Amount");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Via");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Type");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Date");?>
</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($_smarty_tpl->getValue('rows')) {?>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rows'), 'row');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('row')->value) {
$foreach0DoElse = false;
?>
                <tr>
                  <td><?php echo $_smarty_tpl->getValue('row')['payment_id'];?>
</td>
                  <td>
                    <a target="_blank" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('row')['user_name'];?>
">
                      <img class="tbl-image" src="<?php echo $_smarty_tpl->getValue('row')['user_picture'];?>
">
                      <?php echo $_smarty_tpl->getValue('row')['user_firstname'];?>
 <?php echo $_smarty_tpl->getValue('row')['user_lastname'];?>

                    </a>
                  </td>
                  <td>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('row')['amount']));?>

                  </td>
                  <td>
                    <span class="badge rounded-pill badge-lg bg-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('capitalize')($_smarty_tpl->getValue('row')['method']);?>
</span>
                  </td>
                  <td>
                    <span class="badge rounded-pill badge-lg bg-info"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('capitalize')($_smarty_tpl->getValue('row')['handle']);?>
</span>
                  </td>
                  <td>
                    <?php echo $_smarty_tpl->getValue('row')['time'];?>

                  </td>
                </tr>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
              <tr>
                <td colspan="6" class="text-center">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No data to show");?>

                </td>
              </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
      <?php echo $_smarty_tpl->getValue('pager');?>

    </div>

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "commissions") {?>

    <div class="card-body">
      <div id="commissions-chart" class="admin-chart mb20"></div>

      <div class="row">
        <div class="col-sm-6">
          <div class="stat-panel bg-gradient-primary">
            <div class="stat-cell narrow">
              <i class="fa fa-dollar-sign bg-icon"></i>
              <span class="text-xxlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('total_commissions'),2));?>
</span><br>
              <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Total Commissions");?>
</span><br>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="stat-panel bg-gradient-info">
            <div class="stat-cell narrow">
              <i class="fa fa-dollar-sign bg-icon"></i>
              <span class="text-xxlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('month_commissions'),2));?>
</span><br>
              <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("This Month Commissions");?>
</span><br>
            </div>
          </div>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("ID");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("From");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Amount");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Type");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Date");?>
</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($_smarty_tpl->getValue('rows')) {?>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rows'), 'row');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('row')->value) {
$foreach1DoElse = false;
?>
                <tr>
                  <td><?php echo $_smarty_tpl->getValue('row')['payment_id'];?>
</td>
                  <td>
                    <a target="_blank" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('row')['user_name'];?>
">
                      <img class="tbl-image" src="<?php echo $_smarty_tpl->getValue('row')['user_picture'];?>
">
                      <?php echo $_smarty_tpl->getValue('row')['user_firstname'];?>
 <?php echo $_smarty_tpl->getValue('row')['user_lastname'];?>

                    </a>
                  </td>
                  <td>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('row')['amount']));?>

                  </td>
                  <td>
                    <span class="badge rounded-pill badge-lg bg-info"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('capitalize')($_smarty_tpl->getValue('row')['handle']);?>
</span>
                  </td>
                  <td>
                    <?php echo $_smarty_tpl->getValue('row')['time'];?>

                  </td>
                </tr>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
              <tr>
                <td colspan="6" class="text-center">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No data to show");?>

                </td>
              </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
      <?php echo $_smarty_tpl->getValue('pager');?>

    </div>

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "packages") {?>

    <div class="card-body">
      <div id="admin-chart-earnings" class="admin-chart mb20"></div>

      <div class="row">
        <div class="col-sm-6">
          <div class="stat-panel bg-gradient-primary">
            <div class="stat-cell narrow">
              <i class="fa fa-dollar-sign bg-icon"></i>
              <span class="text-xxlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('total_earnings'),2));?>
</span><br>
              <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Total Earnings");?>
</span><br>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="stat-panel bg-gradient-info">
            <div class="stat-cell narrow">
              <i class="fa fa-dollar-sign bg-icon"></i>
              <span class="text-xxlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('month_earnings'),2));?>
</span><br>
              <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("This Month Earnings");?>
</span><br>
            </div>
          </div>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover js_dataTable">
          <thead>
            <tr>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Package");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Total Sales");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Total Earnings");?>
</th>
            </tr>
          </thead>
          <tbody>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rows'), 'value', false, 'key');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach2DoElse = false;
?>
              <tr>
                <td><?php echo $_smarty_tpl->getValue('key');?>
</td>
                <td><?php echo $_smarty_tpl->getValue('value')['sales'];?>
</td>
                <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('value')['earnings'],2));?>
</td>
              </tr>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
          </tbody>
        </table>
      </div>
    </div>

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "movies") {?>

    <div class="card-body">
      <div class="row">
        <div class="col-sm-6">
          <div class="stat-panel bg-gradient-primary">
            <div class="stat-cell narrow">
              <i class="fa fa-dollar-sign bg-icon"></i>
              <span class="text-xxlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('total_earnings'),2));?>
</span><br>
              <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Total Earnings");?>
</span><br>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="stat-panel bg-gradient-info">
            <div class="stat-cell narrow">
              <i class="fa fa-dollar-sign bg-icon"></i>
              <span class="text-xxlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('month_earnings'),2));?>
</span><br>
              <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("This Month Earnings");?>
</span><br>
            </div>
          </div>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("ID");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("User");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Movie");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Price");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Date");?>
</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($_smarty_tpl->getValue('rows')) {?>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rows'), 'row');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('row')->value) {
$foreach3DoElse = false;
?>
                <tr>
                  <td><?php echo $_smarty_tpl->getValue('row')['id'];?>
</td>
                  <td>
                    <a target="_blank" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('row')['user_name'];?>
">
                      <img class="tbl-image" src="<?php echo $_smarty_tpl->getValue('row')['user_picture'];?>
">
                      <?php echo $_smarty_tpl->getValue('row')['user_firstname'];?>
 <?php echo $_smarty_tpl->getValue('row')['user_lastname'];?>

                    </a>
                  </td>
                  <td>
                    <a target="_blank" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/movie/<?php echo $_smarty_tpl->getValue('row')['movie_id'];?>
/<?php echo $_smarty_tpl->getValue('row')['movie_url'];?>
">
                      <img class="tbl-image" src="<?php echo $_smarty_tpl->getValue('row')['poster'];?>
">
                      <?php echo $_smarty_tpl->getValue('row')['title'];?>

                    </a>
                  </td>
                  <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('row')['price']));?>
</td>
                  <td><?php echo $_smarty_tpl->getValue('row')['payment_time'];?>
</td>
                </tr>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
              <tr>
                <td colspan="5" class="text-center">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No data to show");?>

                </td>
              </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
      <?php echo $_smarty_tpl->getValue('pager');?>

    </div>

  <?php }?>
</div><?php }
}

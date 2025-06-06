<?php
/* Smarty version 5.4.1, created on 2025-03-01 07:08:59
  from 'file:offers.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67c2b28b17a1c0_93349466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cffe8586d335386ecdcd1d8570e2517c06fb00b7' => 
    array (
      0 => 'offers.tpl',
      1 => 1726877526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_ads.tpl' => 1,
    'file:_need_subscription.tpl' => 2,
    'file:_no_data.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
))) {
function content_67c2b28b17a1c0_93349466 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/drew44/public_html/content/themes/default/templates';
$_smarty_tpl->renderSubTemplate('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<!-- page header -->
<div class="page-header">
  <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->getValue('system')['theme'];?>
/images/headers/undraw_discount_d4bd.svg">
  <div class="circle-2"></div>
  <div class="circle-3"></div>
  <div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?>">
    <h2><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Offers");?>
</h2>
    <p class="text-xlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_description_offers']);?>
</p>
    <div class="row mt20">
      <div class="col-sm-9 col-lg-6 mx-sm-auto">
        <form class="js_search-form" data-handle="offers">
          <div class="input-group">
            <input type="text" class="form-control" name="query" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search for offers");?>
'>
            <button type="submit" class="btn btn-light"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>
</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- page header -->

<!-- page content -->
<div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> sg-offcanvas" style="margin-top: -25px;">

  <div class="position-relative">
    <!-- tabs -->
    <div class="content-tabs rounded-sm shadow-sm clearfix">
      <ul>
        <li class="active">
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/offers"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Discover");?>
</a>
        </li>
      </ul>
      <?php if ($_smarty_tpl->getValue('user')->_data['can_create_offers']) {?>
        <div class="mt10 float-end">
          <button class="btn btn-md btn-primary d-none d-lg-block" data-toggle="modal" data-url="posts/offer.php?do=create">
            <i class="fa fa-plus-circle mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create Offer");?>

          </button>
          <button class="btn btn-sm btn-icon btn-primary d-block d-lg-none" data-toggle="modal" data-url="posts/offer.php?do=create">
            <i class="fa fa-plus-circle"></i>
          </button>
        </div>
      <?php }?>
    </div>
    <!-- tabs -->
  </div>

  <div class="row">

    <!-- left panel -->
    <div class="col-md-4 col-lg-3 sg-offcanvas-sidebar">
      <!-- categories -->
      <div class="card">
        <div class="card-body with-nav">
          <ul class="side-nav">
            <?php if ($_smarty_tpl->getValue('view') != "category") {?>
              <li class="active">
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/offers">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All");?>

                </a>
              </li>
            <?php } else { ?>
              <li>
                <?php if ($_smarty_tpl->getValue('current_category')['parent']) {?>
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/offers/category/<?php echo $_smarty_tpl->getValue('current_category')['parent']['category_id'];?>
/<?php echo $_smarty_tpl->getValue('current_category')['parent']['category_url'];?>
">
                    <i class="fas fa-arrow-alt-circle-left mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('current_category')['parent']['category_name']);?>

                  </a>
                <?php } else { ?>
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/offers">
                    <?php if ($_smarty_tpl->getValue('current_category')['sub_categories']) {?><i class="fas fa-arrow-alt-circle-left mr5"></i><?php }
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All");?>

                  </a>
                <?php }?>
              </li>
            <?php }?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categories'), 'category');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach0DoElse = false;
?>
              <li <?php if ($_smarty_tpl->getValue('view') == "category" && $_smarty_tpl->getValue('current_category')['category_id'] == $_smarty_tpl->getValue('category')['category_id']) {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/offers/category/<?php echo $_smarty_tpl->getValue('category')['category_id'];?>
/<?php echo $_smarty_tpl->getValue('category')['category_url'];?>
">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('category')['category_name']);?>

                  <?php if ($_smarty_tpl->getValue('category')['sub_categories']) {?>
                    <span class="float-end"><i class="fas fa-angle-right"></i></span>
                  <?php }?>
                </a>
              </li>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
          </ul>
        </div>
      </div>
      <!-- categories -->
    </div>
    <!-- left panel -->

    <!-- right panel -->
    <div class="col-md-8 col-lg-9 sg-offcanvas-mainbar">

      <?php $_smarty_tpl->renderSubTemplate('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

      <?php if ($_smarty_tpl->getValue('view') == "search") {?>
        <div class="bs-callout bs-callout-info mt0">
          <!-- results counter -->
          <span class="badge rounded-pill badge-lg bg-secondary"><?php echo $_smarty_tpl->getValue('total');?>
</span> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("results were found for the search for");?>
 "<strong class="text-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('htmlentities')($_smarty_tpl->getValue('query'),ENT_QUOTES,'utf-8');?>
</strong>"
          <!-- results counter -->
        </div>
      <?php }?>

      <?php if ($_smarty_tpl->getValue('view') == '' && $_smarty_tpl->getValue('promoted_offers')) {?>
        <div class="blogs-widget-header">
          <div class="blogs-widget-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Promoted Offers");?>
</div>
        </div>
        <div class="row mb20">
          <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('promoted_offers'), 'post');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('post')->value) {
$foreach1DoElse = false;
?>
            <div class="col-md-6 col-lg-4">
              <div class="card product boosted">
                <div class="boosted-icon" data-bs-toggle="tooltip" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Promoted");?>
">
                  <i class="fa fa-bullhorn"></i>
                </div>
                <?php if ($_smarty_tpl->getValue('post')['needs_subscription']) {?>
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/posts/<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
">
                    <div class="ptb20 plr20">
                      <?php $_smarty_tpl->renderSubTemplate('file:_need_subscription.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                    </div>
                  </a>
                <?php } else { ?>
                  <div class="product-image">
                    <?php if ($_smarty_tpl->getValue('post')['offer']['end_date']) {?>
                      <div class="product-price with-offer">
                        <i class="far fa-calendar-alt mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Expires");?>
: <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('post')['offer']['end_date'],$_smarty_tpl->getValue('system')['system_date_format']);?>

                      </div>
                    <?php }?>
                    <img src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('post')['offer']['thumbnail'];?>
">
                    <div class="product-overlay">
                      <a class="btn btn-sm btn-outline-secondary rounded-pill" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/posts/<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("More");?>

                      </a>
                    </div>
                  </div>
                  <div class="product-info">
                    <div class="product-meta">
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/posts/<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
" class="title"><?php echo $_smarty_tpl->getValue('post')['offer']['meta_title'];?>
</a>
                    </div>
                    <?php if ($_smarty_tpl->getValue('post')['offer']['price']) {?>
                      <div class="product-meta text-success">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("From");?>
 <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('post')['offer']['price']);?>
</strong>
                      </div>
                    <?php }?>
                  </div>
                <?php }?>
              </div>
            </div>
          <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
      <?php }?>

      <div class="blogs-widget-header clearfix">
        <div class="blogs-widget-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Offers");?>
</div>
        <!-- sort -->
        <div class="float-end">
          <div class="dropdown">
            <button type="button" class="btn btn-sm btn-light dropdown-toggle ml10" data-bs-toggle="dropdown" data-display="static">
              <?php if (!$_smarty_tpl->getValue('sort') || $_smarty_tpl->getValue('sort') == "latest") {?>
                <i class="fas fa-bars fa-fw"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Latest");?>

              <?php } elseif ($_smarty_tpl->getValue('sort') == "expire-soon") {?>
                <i class="fas fa-sort-amount-down fa-fw"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Expire Soon");?>

              <?php } elseif ($_smarty_tpl->getValue('sort') == "expire-latest") {?>
                <i class="fas fa-sort-amount-down-alt fa-fw"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Expire Latest");?>

              <?php }?>
            </button>
            <div class="dropdown-menu dropdown-menu-end">
              <a href="?<?php if ($_smarty_tpl->getValue('selected_country')) {?>country=<?php echo $_smarty_tpl->getValue('selected_country')['country_name'];?>
&<?php }
if ($_smarty_tpl->getValue('distance')) {?>distance=<?php echo $_smarty_tpl->getValue('distance');?>
&<?php }?>sort=latest" class="dropdown-item"><i class="fas fa-bars fa-fw mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Latest");?>
</a>
              <a href="?<?php if ($_smarty_tpl->getValue('selected_country')) {?>country=<?php echo $_smarty_tpl->getValue('selected_country')['country_name'];?>
&<?php }
if ($_smarty_tpl->getValue('distance')) {?>distance=<?php echo $_smarty_tpl->getValue('distance');?>
&<?php }?>sort=expire-soon" class="dropdown-item"><i class="fas fa-sort-amount-down fa-fw mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Expire Soon");?>
</a>
              <a href="?<?php if ($_smarty_tpl->getValue('selected_country')) {?>country=<?php echo $_smarty_tpl->getValue('selected_country')['country_name'];?>
&<?php }
if ($_smarty_tpl->getValue('distance')) {?>distance=<?php echo $_smarty_tpl->getValue('distance');?>
&<?php }?>sort=expire-latest" class="dropdown-item"><i class="fas fa-sort-amount-down-alt fa-fw mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Expire Latest");?>
</a>
            </div>
          </div>
        </div>
        <!-- sort -->
        <!-- location filter -->
        <?php if ($_smarty_tpl->getValue('user')->_logged_in && $_smarty_tpl->getValue('system')['location_finder_enabled']) {?>
          <div class="float-end">
            <div class="dropdown">
              <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-bs-toggle="dropdown" data-display="static">
                <i class="fa fa-map-marker-alt mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Distance");?>

              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <form class="ptb15 plr15" method="get" action="?">
                  <div class="form-group">
                    <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Distance");?>
</label>
                    <div>
                      <?php if ($_smarty_tpl->getValue('selected_country')) {?>
                        <input type="hidden" name="country" value="<?php echo $_smarty_tpl->getValue('selected_country')['country_name'];?>
">
                      <?php }?>
                      <div class="d-grid mb10">
                        <input type="range" class="custom-range" min="1" max="5000" name="distance" value="<?php if ($_smarty_tpl->getValue('distance')) {
echo $_smarty_tpl->getValue('distance');
} else { ?>5000<?php }?>" oninput="this.form.distance_value.value=this.value">
                      </div>
                      <div class="input-group">
                        <span class="input-group-text" id="basic-addon1"><?php if ($_smarty_tpl->getValue('system')['system_distance'] == "mile") {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("ML");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("KM");
}?></span>
                        <input disabled type="number" class="form-control" min="1" max="5000" name="distance_value" value="<?php if ($_smarty_tpl->getValue('distance')) {
echo $_smarty_tpl->getValue('distance');
} else { ?>5000<?php }?>" oninput="this.form.distance.value=this.value">
                      </div>
                      <?php if ($_smarty_tpl->getValue('sort')) {?>
                        <input type="hidden" name="sort" value="<?php echo $_smarty_tpl->getValue('sort');?>
">
                      <?php }?>
                    </div>
                  </div>
                  <div class="d-grid">
                    <button type="submit" class="btn btn-sm btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Filter");?>
</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        <?php }?>
        <!-- location filter -->
        <!-- country filter -->
        <div class="float-end">
          <div class="dropdown">
            <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-bs-toggle="dropdown">
              <i class="fa fa-globe fa-fw"></i>
              <?php if ($_smarty_tpl->getValue('selected_country')) {?>
                <span><?php echo $_smarty_tpl->getValue('selected_country')['country_name'];?>
</span>
              <?php } else { ?>
                <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All Countries");?>
</span>
              <?php }?>
            </button>
            <div class="dropdown-menu dropdown-menu-end countries-dropdown">
              <div class="js_scroller">
                <a class="dropdown-item" href="?<?php if ($_smarty_tpl->getValue('distance')) {?>distance=<?php echo $_smarty_tpl->getValue('distance');
if ($_smarty_tpl->getValue('sort')) {?>&<?php }
}
if ($_smarty_tpl->getValue('sort')) {?>sort=<?php echo $_smarty_tpl->getValue('sort');
}?>">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All Countries");?>

                </a>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('countries'), 'country');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('country')->value) {
$foreach2DoElse = false;
?>
                  <a class="dropdown-item" href="?country=<?php echo $_smarty_tpl->getValue('country')['country_name_native'];
if ($_smarty_tpl->getValue('distance')) {?>&distance=<?php echo $_smarty_tpl->getValue('distance');
}
if ($_smarty_tpl->getValue('sort')) {?>&sort=<?php echo $_smarty_tpl->getValue('sort');
}?>">
                    <?php echo $_smarty_tpl->getValue('country')['country_name'];?>

                  </a>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
              </div>
            </div>
          </div>
        </div>
        <!-- country filter -->
      </div>

      <?php if ($_smarty_tpl->getValue('rows')) {?>
        <div class="row">
          <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rows'), 'post');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('post')->value) {
$foreach3DoElse = false;
?>
            <div class="col-md-6 col-lg-4">
              <div class="card product">
                <?php if ($_smarty_tpl->getValue('post')['needs_subscription']) {?>
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/posts/<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
">
                    <div class="ptb20 plr20">
                      <?php $_smarty_tpl->renderSubTemplate('file:_need_subscription.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                    </div>
                  </a>
                <?php } else { ?>
                  <div class="product-image">
                    <?php if ($_smarty_tpl->getValue('post')['offer']['end_date']) {?>
                      <div class="product-price with-offer">
                        <i class="far fa-calendar-alt mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Expires");?>
: <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('post')['offer']['end_date'],$_smarty_tpl->getValue('system')['system_date_format']);?>

                      </div>
                    <?php }?>
                    <img src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('post')['offer']['thumbnail'];?>
">
                    <div class="product-overlay">
                      <a class="btn btn-sm btn-outline-secondary rounded-pill" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/posts/<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("More");?>

                      </a>
                    </div>
                  </div>
                  <div class="product-info">
                    <div class="product-meta">
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/posts/<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
" class="title"><?php echo $_smarty_tpl->getValue('post')['offer']['meta_title'];?>
</a>
                    </div>
                    <?php if ($_smarty_tpl->getValue('post')['offer']['price']) {?>
                      <div class="product-meta text-success">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("From");?>
 <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('post')['offer']['price']);?>
</strong>
                      </div>
                    <?php }?>
                  </div>
                <?php }?>
              </div>
            </div>
          <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>

        <?php echo $_smarty_tpl->getValue('pager');?>

      <?php } else { ?>
        <?php $_smarty_tpl->renderSubTemplate('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
      <?php }?>
    </div>
    <!-- right panel -->

  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->renderSubTemplate('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}

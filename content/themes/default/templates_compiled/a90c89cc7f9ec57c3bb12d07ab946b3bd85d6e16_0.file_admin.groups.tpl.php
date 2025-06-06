<?php
/* Smarty version 5.4.1, created on 2025-03-02 02:05:45
  from 'file:admin.groups.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67c3bcf9258245_03363550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a90c89cc7f9ec57c3bb12d07ab946b3bd85d6e16' => 
    array (
      0 => 'admin.groups.tpl',
      1 => 1725819976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__categories.recursive_options.tpl' => 3,
    'file:__custom_fields.tpl' => 1,
    'file:__svg_icons.tpl' => 2,
    'file:__categories.recursive_rows.tpl' => 1,
  ),
))) {
function content_67c3bcf9258245_03363550 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/drew44/public_html/content/themes/default/templates';
?><div class="card">
  <div class="card-header with-icon">
    <?php if ($_smarty_tpl->getValue('sub_view') == "find") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/groups" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Back");?>

        </a>
      </div>
    <?php } elseif ($_smarty_tpl->getValue('sub_view') == "edit_group") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/groups" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left"></i><span class="ml5 d-none d-lg-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Back");?>
</span>
        </a>
        <a target="_blank" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/groups/<?php echo $_smarty_tpl->getValue('data')['group_name'];?>
" class="btn btn-md btn-info">
          <i class="fa fa-eye"></i><span class="ml5 d-none d-lg-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("View Group");?>
</span>
        </a>
      </div>
    <?php } elseif ($_smarty_tpl->getValue('sub_view') == "categories") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/groups/add_category" class="btn btn-md btn-primary">
          <i class="fa fa-plus"></i><span class="ml5 d-none d-lg-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New Category");?>
</span>
        </a>
      </div>
    <?php } elseif ($_smarty_tpl->getValue('sub_view') == "add_category" || $_smarty_tpl->getValue('sub_view') == "edit_category") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/groups/categories" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left"></i><span class="ml5 d-none d-lg-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Back");?>
</span>
        </a>
      </div>
    <?php }?>
    <i class="fa fa-users mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Groups");?>

    <?php if ($_smarty_tpl->getValue('sub_view') == "find") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Find");
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "edit_group") {?> &rsaquo; <?php echo $_smarty_tpl->getValue('data')['group_title'];
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "categories") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Categories");
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "add_category") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Categories");?>
 &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New Category");
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "edit_category") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Categories");?>
 &rsaquo; <?php echo $_smarty_tpl->getValue('data')['category_name'];
}?>
  </div>

  <?php if ($_smarty_tpl->getValue('sub_view') == '' || $_smarty_tpl->getValue('sub_view') == "find") {?>

    <div class="card-body">

      <!-- search form -->
      <div class="mb20">
        <form class="d-flex flex-row align-items-center flex-wrap" action="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/groups/find" method="get">
          <div class="form-group mb0">
            <div class="input-group">
              <input type="text" class="form-control" name="query">
              <button type="submit" class="btn btn-sm btn-light"><i class="fas fa-search mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>
</button>
            </div>
          </div>
        </form>
        <div class="form-text small">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search by Group Web Address or Title");?>

        </div>
      </div>
      <!-- search form -->

      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("ID");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Group");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Admin");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Privacy");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Members");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Actions");?>
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
                  <td>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/groups/<?php echo $_smarty_tpl->getValue('row')['group_name'];?>
" target="_blank"><?php echo $_smarty_tpl->getValue('row')['group_id'];?>
</a>
                  </td>
                  <td>
                    <a target="_blank" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/groups/<?php echo $_smarty_tpl->getValue('row')['group_name'];?>
">
                      <img class="tbl-image" src="<?php echo $_smarty_tpl->getValue('row')['group_picture'];?>
">
                      <?php echo $_smarty_tpl->getValue('row')['group_title'];?>

                    </a>
                  </td>
                  <td>
                    <a target="_blank" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('row')['user_name'];?>
">
                      <img class="tbl-image" src="<?php echo $_smarty_tpl->getValue('row')['user_picture'];?>
">
                      <?php if ($_smarty_tpl->getValue('system')['show_usernames_enabled']) {
echo $_smarty_tpl->getValue('row')['user_name'];
} else {
echo $_smarty_tpl->getValue('row')['user_firstname'];?>
 <?php echo $_smarty_tpl->getValue('row')['user_lastname'];
}?>
                    </a>
                  </td>
                  <td>
                    <?php if ($_smarty_tpl->getValue('row')['group_privacy'] == "public") {?>
                      <i class="fa fa-globe fa-fw mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Public");?>

                    <?php } elseif ($_smarty_tpl->getValue('row')['group_privacy'] == "closed") {?>
                      <i class="fa fa-unlock-alt fa-fw mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Closed");?>

                    <?php } elseif ($_smarty_tpl->getValue('row')['group_privacy'] == "secret") {?>
                      <i class="fa fa-lock fa-fw mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Secret");?>

                    <?php }?>
                  </td>
                  <td><?php echo $_smarty_tpl->getValue('row')['group_members'];?>
</td>
                  <td>
                    <a data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit");?>
' href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/groups/edit_group/<?php echo $_smarty_tpl->getValue('row')['group_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                      <i class="fa fa-pencil-alt"></i>
                    </a>
                    <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="group" data-id="<?php echo $_smarty_tpl->getValue('row')['group_id'];?>
">
                      <i class="fa fa-trash-alt"></i>
                    </button>
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

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "edit_group") {?>

    <div class="card-body">
      <div class="row">
        <div class="col-12 col-md-2 text-center mb20">
          <img class="img-fluid img-thumbnail rounded-circle" src="<?php echo $_smarty_tpl->getValue('data')['group_picture'];?>
">
        </div>
        <div class="col-12 col-md-10 mb20">
          <ul class="list-group">
            <li class="list-group-item">
              <span class="float-end badge badge-lg rounded-pill bg-secondary"><?php echo $_smarty_tpl->getValue('data')['group_id'];?>
</span>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Group ID");?>

            </li>
            <li class="list-group-item">
              <span class="float-end badge badge-lg rounded-pill bg-secondary"><?php echo $_smarty_tpl->getValue('data')['group_members'];?>
</span>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Members");?>

            </li>
            <li class="list-group-item">
              <span class="float-end badge badge-lg rounded-pill bg-secondary">
                <?php if ($_smarty_tpl->getValue('data')['group_privacy'] == "public") {?>
                  <i class="fa fa-globe fa-fw mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Public");?>

                <?php } elseif ($_smarty_tpl->getValue('data')['group_privacy'] == "closed") {?>
                  <i class="fa fa-unlock-alt fa-fw mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Closed");?>

                <?php } elseif ($_smarty_tpl->getValue('data')['group_privacy'] == "secret") {?>
                  <i class="fa fa-lock fa-fw mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Secret");?>

                <?php }?>
              </span>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Privacy");?>

            </li>
          </ul>
        </div>
      </div>

      <!-- tabs nav -->
      <ul class="nav nav-tabs mb20">
        <li class="nav-item">
          <a class="nav-link active" href="#group_settings" data-bs-toggle="tab">
            <i class="fa fa-cog fa-fw mr5"></i><strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Settings");?>
</strong>
          </a>
        </li>
        <?php if ($_smarty_tpl->getValue('system')['monetization_enabled']) {?>
          <li class="nav-item">
            <a class="nav-link" href="#group_monetization" data-bs-toggle="tab">
              <i class="fa fa-coins fa-fw mr5"></i><strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Monetization");?>
</strong>
            </a>
          </li>
        <?php }?>
      </ul>
      <!-- tabs nav -->

      <!-- tabs content -->
      <div class="tab-content">
        <!-- settings tab -->
        <div class="tab-pane active" id="group_settings">
          <form class="js_ajax-forms" data-url="admin/groups.php?do=edit_group&edit=settings&id=<?php echo $_smarty_tpl->getValue('data')['group_id'];?>
">
            <div class="row form-group">
              <label class="col-md-3 form-label">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Created By");?>

              </label>
              <div class="col-md-9">
                <a target="_blank" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('data')['user_name'];?>
">
                  <img class="tbl-image" src="<?php echo $_smarty_tpl->getValue('data')['user_picture'];?>
">
                  <?php if ($_smarty_tpl->getValue('system')['show_usernames_enabled']) {
echo $_smarty_tpl->getValue('data')['user_name'];
} else {
echo $_smarty_tpl->getValue('data')['user_firstname'];?>
 <?php echo $_smarty_tpl->getValue('data')['user_lastname'];
}?>
                </a>
                <a target="_blank" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit");?>
' href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/users/edit/<?php echo $_smarty_tpl->getValue('data')['user_id'];?>
" class="btn btn-sm btn-light btn-icon btn-rounded ml10">
                  <i class="fa fa-pencil-alt"></i>
                </a>
              </div>
            </div>

            <div class="row form-group">
              <label class="col-md-3 form-label">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Name Your Group");?>

              </label>
              <div class="col-md-9">
                <input class="form-control" name="title" value="<?php echo $_smarty_tpl->getValue('data')['group_title'];?>
">
              </div>
            </div>

            <div class="row form-group">
              <label class="col-md-3 form-label">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Group Username");?>

              </label>
              <div class="col-md-9">
                <div class="input-group">
                  <span class="input-group-text d-none d-sm-block"><?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/groups/</span>
                  <input type="text" class="form-control" name="username" id="username" value="<?php echo $_smarty_tpl->getValue('data')['group_name'];?>
">
                </div>
              </div>
            </div>

            <div class="row form-group">
              <label class="col-md-3 form-label">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Privacy");?>

              </label>
              <div class="col-md-9">
                <select class="form-select" name="privacy">
                  <option <?php if ($_smarty_tpl->getValue('data')['group_privacy'] == "public") {?>selected<?php }?> value="public"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Public Group");?>
</option>
                  <option <?php if ($_smarty_tpl->getValue('data')['group_privacy'] == "closed") {?>selected<?php }?> value="closed"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Closed Group");?>
</option>
                  <option <?php if ($_smarty_tpl->getValue('data')['group_privacy'] == "secret") {?>selected<?php }?> value="secret"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Secret Group");?>
</option>
                </select>
                <div class="form-text">
                  (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Note: Change group privacy to public will approve any pending join requests");?>
)
                </div>
              </div>
            </div>

            <div class="row form-group">
              <label class="col-md-3 form-label">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Category");?>

              </label>
              <div class="col-md-9">
                <select class="form-select" name="category">
                  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['categories'], 'category');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach1DoElse = false;
?>
                    <?php $_smarty_tpl->renderSubTemplate('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_category'=>$_smarty_tpl->getValue('data')['group_category']), (int) 0, $_smarty_current_dir);
?>
                  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </select>
              </div>
            </div>

            <div class="row form-group">
              <label class="col-md-3 form-label">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Country");?>

              </label>
              <div class="col-md-9">
                <select class="form-select" name="country">
                  <option value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Country");?>
</option>
                  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['countries'], 'country');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('country')->value) {
$foreach2DoElse = false;
?>
                    <option value="<?php echo $_smarty_tpl->getValue('country')['country_id'];?>
" <?php if ($_smarty_tpl->getValue('data')['group_country'] == $_smarty_tpl->getValue('country')['country_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('country')['country_name'];?>
</option>
                  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </select>
              </div>
            </div>

            <div class="row form-group">
              <label class="col-md-3 form-label">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("About");?>

              </label>
              <div class="col-md-9">
                <textarea class="form-control" name="description" rows="5"><?php echo $_smarty_tpl->getValue('data')['group_description'];?>
</textarea>
              </div>
            </div>

            <!-- custom fields -->
            <?php if ($_smarty_tpl->getValue('custom_fields')['basic']) {?>
              <?php $_smarty_tpl->renderSubTemplate('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->getValue('custom_fields')['basic'],'_registration'=>false,'_inline'=>true), (int) 0, $_smarty_current_dir);
?>
            <?php }?>
            <!-- custom fields -->

            <div class="divider"></div>

            <div class="form-table-row">
              <div class="avatar">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"chat",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
              </div>
              <div>
                <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Chat Box");?>
</div>
                <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enable chat box for this group");?>
</div>
              </div>
              <div class="text-end">
                <label class="switch" for="chatbox_enabled">
                  <input type="checkbox" name="chatbox_enabled" id="chatbox_enabled" <?php if ($_smarty_tpl->getValue('data')['chatbox_enabled']) {?>checked<?php }?>>
                  <span class="slider round"></span>
                </label>
              </div>
            </div>

            <div class="divider"></div>

            <div class="form-table-row">
              <div>
                <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Members Can Publish Posts?");?>
</div>
                <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Members can publish posts or only group admins");?>
</div>
              </div>
              <div class="text-end">
                <label class="switch" for="group_publish_enabled">
                  <input type="checkbox" name="group_publish_enabled" id="group_publish_enabled" <?php if ($_smarty_tpl->getValue('data')['group_publish_enabled']) {?>checked<?php }?>>
                  <span class="slider round"></span>
                </label>
              </div>
            </div>

            <div class="form-table-row">
              <div>
                <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Post Approval");?>
</div>
                <div class="form-text d-none d-sm-block">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All posts must be approved by a group admin");?>
<br>
                  (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Note: Disable it will approve any pending posts");?>
)
                </div>
              </div>
              <div class="text-end">
                <label class="switch" for="group_publish_approval_enabled">
                  <input type="checkbox" name="group_publish_approval_enabled" id="group_publish_approval_enabled" <?php if ($_smarty_tpl->getValue('data')['group_publish_approval_enabled']) {?>checked<?php }?>>
                  <span class="slider round"></span>
                </label>
              </div>
            </div>

            <!-- success -->
            <div class="alert alert-success mt15 mb0 x-hidden"></div>
            <!-- success -->

            <!-- error -->
            <div class="alert alert-danger mt15 mb0 x-hidden"></div>
            <!-- error -->
            <div class="card-footer-fake text-end">
              <button type="button" class="btn btn-danger js_admin-deleter" data-handle="group_posts" data-id="<?php echo $_smarty_tpl->getValue('data')['group_id'];?>
" data-delete-message="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Are you sure you want to delete all posts?");?>
">
                <i class="fa fa-trash-alt mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete Posts");?>

              </button>
              <button type="button" class="btn btn-danger js_admin-deleter" data-handle="group" data-id="<?php echo $_smarty_tpl->getValue('data')['group_id'];?>
" data-redirect="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/groups">
                <i class="fa fa-trash-alt mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete Group");?>

              </button>
              <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Save Changes");?>
</button>
            </div>
          </form>
        </div>
        <!-- settings tab -->

        <!-- monetization tab -->
        <div class="tab-pane" id="group_monetization">
          <?php if ($_smarty_tpl->getValue('data')['can_monetize_content']) {?>
            <form class="js_ajax-forms" data-url="admin/groups.php?do=edit_group&edit=monetization&id=<?php echo $_smarty_tpl->getValue('data')['group_id'];?>
">
              <div class="form-table-row">
                <div class="avatar">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"monetization",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
                </div>
                <div>
                  <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Monetization");?>
</div>
                  <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enable or disable monetization for your content");?>
</div>
                </div>
                <div class="text-end">
                  <label class="switch" for="group_monetization_enabled">
                    <input type="checkbox" name="group_monetization_enabled" id="group_monetization_enabled" <?php if ($_smarty_tpl->getValue('data')['group_monetization_enabled']) {?>checked<?php }?>>
                    <span class="slider round"></span>
                  </label>
                </div>
              </div>

              <div class="row form-group">
                <label class="col-md-3 form-label">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Payment Plans");?>

                </label>
                <div class="col-md-9">
                  <div class="payment-plans">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('monetization_plans'), 'plan');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('plan')->value) {
$foreach3DoElse = false;
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
                        <div class="mt10">
                          <span class="text-link mr10 js_monetization-deleter" data-id="<?php echo $_smarty_tpl->getValue('plan')['plan_id'];?>
">
                            <i class="fa fa-trash-alt mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete");?>

                          </span>
                          |
                          <span data-toggle="modal" data-url="monetization/controller.php?do=edit&id=<?php echo $_smarty_tpl->getValue('plan')['plan_id'];?>
" class="text-link ml10">
                            <i class="fa fa-pen mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit");?>

                          </span>
                        </div>
                      </div>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    <div data-toggle="modal" data-url="monetization/controller.php?do=add&node_id=<?php echo $_smarty_tpl->getValue('data')['group_id'];?>
&node_type=group" class="payment-plan new"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add new plan");?>
 </div>
                  </div>
                </div>
              </div>

              <!-- success -->
              <div class="alert alert-success x-hidden"></div>
              <!-- success -->

              <!-- error -->
              <div class="alert alert-danger x-hidden"></div>
              <!-- error -->

              <div class="card-footer-fake text-end">
                <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Save Changes");?>
</button>
              </div>
            </form>
          <?php } else { ?>
            <div class="alert alert-danger">
              <div class="icon">
                <i class="fa fa-minus-circle fa-2x"></i>
              </div>
              <div class="text pt5">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("This group super admin is not eligible for monetization");?>

              </div>
            </div>
          <?php }?>
        </div>
        <!-- monetization tab -->
      </div>
      <!-- tabs content -->
    </div>

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "categories") {?>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover js_treegrid">
          <thead>
            <tr>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Title");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Description");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Actions");?>
</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($_smarty_tpl->getValue('rows')) {?>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rows'), 'row');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('row')->value) {
$foreach4DoElse = false;
?>
                <?php $_smarty_tpl->renderSubTemplate('file:__categories.recursive_rows.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_url'=>"groups",'_handle'=>"group_category"), (int) 0, $_smarty_current_dir);
?>
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
    </div>

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "add_category") {?>

    <form class="js_ajax-forms" data-url="admin/groups.php?do=add_category">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Name");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="category_name">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Description");?>

          </label>
          <div class="col-md-9">
            <textarea class="form-control" name="category_description" rows="3"></textarea>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Parent Category");?>

          </label>
          <div class="col-md-9">
            <select class="form-select" name="category_parent_id">
              <option value="0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Set as a Parent Category");?>
</option>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categories'), 'category');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach5DoElse = false;
?>
                <?php $_smarty_tpl->renderSubTemplate('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </select>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="category_order">
          </div>
        </div>

        <!-- success -->
        <div class="alert alert-success mt15 mb0 x-hidden"></div>
        <!-- success -->

        <!-- error -->
        <div class="alert alert-danger mt15 mb0 x-hidden"></div>
        <!-- error -->
      </div>
      <div class="card-footer text-end">
        <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Save Changes");?>
</button>
      </div>
    </form>

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "edit_category") {?>

    <form class="js_ajax-forms" data-url="admin/groups.php?do=edit_category&id=<?php echo $_smarty_tpl->getValue('data')['category_id'];?>
">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Name");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="category_name" value="<?php echo $_smarty_tpl->getValue('data')['category_name'];?>
">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Description");?>

          </label>
          <div class="col-md-9">
            <textarea class="form-control" name="category_description" rows="3"><?php echo $_smarty_tpl->getValue('data')['category_description'];?>
</textarea>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Parent Category");?>

          </label>
          <div class="col-md-9">
            <select class="form-select" name="category_parent_id">
              <option value="0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Set as a Parent Category");?>
</option>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')["categories"], 'category');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach6DoElse = false;
?>
                <?php $_smarty_tpl->renderSubTemplate('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_category'=>$_smarty_tpl->getValue('data')['category_parent_id']), (int) 0, $_smarty_current_dir);
?>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </select>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="category_order" value="<?php echo $_smarty_tpl->getValue('data')['category_order'];?>
">
          </div>
        </div>

        <!-- success -->
        <div class="alert alert-success mt15 mb0 x-hidden"></div>
        <!-- success -->

        <!-- error -->
        <div class="alert alert-danger mt15 mb0 x-hidden"></div>
        <!-- error -->
      </div>
      <div class="card-footer text-end">
        <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Save Changes");?>
</button>
      </div>
    </form>

  <?php }?>
</div><?php }
}

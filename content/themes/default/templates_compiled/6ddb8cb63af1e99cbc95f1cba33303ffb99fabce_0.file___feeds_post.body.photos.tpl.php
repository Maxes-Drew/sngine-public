<?php
/* Smarty version 5.4.1, created on 2025-03-02 22:34:47
  from 'file:__feeds_post.body.photos.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67c4dd07a3f796_44754595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ddb8cb63af1e99cbc95f1cba33303ffb99fabce' => 
    array (
      0 => '__feeds_post.body.photos.tpl',
      1 => 1705184538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67c4dd07a3f796_44754595 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/drew44/public_html/content/themes/default/templates';
?><div class="pg_wrapper clearfix">
  <?php if ($_smarty_tpl->getValue('_post')['photos_num'] == 1) {?>
    <div class="pg_1x <?php if ($_smarty_tpl->getValue('_post')['photos'][0]['blur']) {?>x-blured<?php }?>">
      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/photos/<?php echo $_smarty_tpl->getValue('_post')['photos'][0]['photo_id'];?>
" class="js_lightbox" data-id="<?php echo $_smarty_tpl->getValue('_post')['photos'][0]['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['photos'][0]['source'];?>
" data-context="<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('_post')['post_type'],array('product','offer'))) {?>post<?php } else { ?>album<?php }?>">
        <img src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['photos'][0]['source'];?>
">
      </a>
    </div>
  <?php } elseif ($_smarty_tpl->getValue('_post')['photos_num'] == 2) {?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_post')['photos'], 'photo');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('photo')->value) {
$foreach0DoElse = false;
?>
      <div class="pg_2x <?php if ($_smarty_tpl->getValue('photo')['blur']) {?>x-blured<?php }?>">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/photos/<?php echo $_smarty_tpl->getValue('photo')['photo_id'];?>
" class="js_lightbox" data-id="<?php echo $_smarty_tpl->getValue('photo')['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('photo')['source'];?>
" data-context="post" style="background-image:url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('photo')['source'];?>
');"></a>
      </div>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
  <?php } elseif ($_smarty_tpl->getValue('_post')['photos_num'] == 3) {?>
    <div class="pg_3x">
      <div class="pg_2o3">
        <div class="pg_2o3_in <?php if ($_smarty_tpl->getValue('_post')['photos'][0]['blur']) {?>x-blured<?php }?>">
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/photos/<?php echo $_smarty_tpl->getValue('_post')['photos'][0]['photo_id'];?>
" class="js_lightbox" data-id="<?php echo $_smarty_tpl->getValue('_post')['photos'][0]['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['photos'][0]['source'];?>
" data-context="post" style="background-image:url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['photos'][0]['source'];?>
');"></a>
        </div>
      </div>
      <div class="pg_1o3">
        <div class="pg_1o3_in <?php if ($_smarty_tpl->getValue('_post')['photos'][1]['blur']) {?>x-blured<?php }?>">
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/photos/<?php echo $_smarty_tpl->getValue('_post')['photos'][1]['photo_id'];?>
" class="js_lightbox" data-id="<?php echo $_smarty_tpl->getValue('_post')['photos'][1]['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['photos'][1]['source'];?>
" data-context="post" style="background-image:url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['photos'][1]['source'];?>
');"></a>
        </div>
        <div class="pg_1o3_in <?php if ($_smarty_tpl->getValue('_post')['photos'][2]['blur']) {?>x-blured<?php }?>">
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/photos/<?php echo $_smarty_tpl->getValue('_post')['photos'][2]['photo_id'];?>
" class="js_lightbox" data-id="<?php echo $_smarty_tpl->getValue('_post')['photos'][2]['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['photos'][2]['source'];?>
" data-context="post" style="background-image:url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['photos'][2]['source'];?>
');"></a>
        </div>
      </div>
    </div>
  <?php } else { ?>
    <div class="pg_4x">
      <div class="pg_2o3">
        <div class="pg_2o3_in <?php if ($_smarty_tpl->getValue('_post')['photos'][0]['blur']) {?>x-blured<?php }?>">
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/photos/<?php echo $_smarty_tpl->getValue('_post')['photos'][0]['photo_id'];?>
" class="js_lightbox" data-id="<?php echo $_smarty_tpl->getValue('_post')['photos'][0]['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['photos'][0]['source'];?>
" data-context="post" style="background-image:url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['photos'][0]['source'];?>
');"></a>
        </div>
      </div>
      <div class="pg_1o3">
        <div class="pg_1o3_in <?php if ($_smarty_tpl->getValue('_post')['photos'][1]['blur']) {?>x-blured<?php }?>">
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/photos/<?php echo $_smarty_tpl->getValue('_post')['photos'][1]['photo_id'];?>
" class="js_lightbox" data-id="<?php echo $_smarty_tpl->getValue('_post')['photos'][1]['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['photos'][1]['source'];?>
" data-context="post" style="background-image:url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['photos'][1]['source'];?>
');"></a>
        </div>
        <div class="pg_1o3_in <?php if ($_smarty_tpl->getValue('_post')['photos'][2]['blur']) {?>x-blured<?php }?>">
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/photos/<?php echo $_smarty_tpl->getValue('_post')['photos'][2]['photo_id'];?>
" class="js_lightbox" data-id="<?php echo $_smarty_tpl->getValue('_post')['photos'][2]['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['photos'][2]['source'];?>
" data-context="post" style="background-image:url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['photos'][2]['source'];?>
');"></a>
        </div>
        <div class="pg_1o3_in <?php if ($_smarty_tpl->getValue('_post')['photos'][3]['blur']) {?>x-blured<?php }?>">
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/photos/<?php echo $_smarty_tpl->getValue('_post')['photos'][3]['photo_id'];?>
" class="js_lightbox" data-id="<?php echo $_smarty_tpl->getValue('_post')['photos'][3]['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['photos'][3]['source'];?>
" data-context="post" style="background-image:url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['photos'][3]['source'];?>
');">
            <?php if ($_smarty_tpl->getValue('_post')['photos_num'] > 4) {?>
              <span class="more">+<?php echo $_smarty_tpl->getValue('_post')['photos_num']-4;?>
</span>
            <?php }?>
          </a>
        </div>
      </div>
    </div>
  <?php }?>
</div><?php }
}

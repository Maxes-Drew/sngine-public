<?php
/* Smarty version 5.4.1, created on 2025-03-02 18:08:21
  from 'file:__feeds_conversation.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67c49e95075620_50403798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '193cb3e1adca472e6f634527803e0d8515daccde' => 
    array (
      0 => '__feeds_conversation.tpl',
      1 => 1697836602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67c49e95075620_50403798 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/drew44/public_html/content/themes/default/templates';
?><li class="feeds-item <?php if (!$_smarty_tpl->getValue('conversation')['seen']) {?>unread<?php }?>" data-last-message="<?php echo $_smarty_tpl->getValue('conversation')['last_message_id'];?>
">
  <?php if ($_smarty_tpl->getValue('conversation')['multiple_recipients']) {?>
    <a class="data-container js_chat-start" data-cid="<?php echo $_smarty_tpl->getValue('conversation')['conversation_id'];?>
" data-name="<?php echo $_smarty_tpl->getValue('conversation')['name'];?>
" data-name-list="<?php echo $_smarty_tpl->getValue('conversation')['name_list'];?>
" data-link="<?php echo $_smarty_tpl->getValue('conversation')['link'];?>
" data-multiple="true" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/messages/<?php echo $_smarty_tpl->getValue('conversation')['conversation_id'];?>
" <?php if ($_smarty_tpl->getValue('conversation')['node_id']) {?>data-chat-box="true" <?php }?>>
      <div class="data-avatar">
        <?php if ($_smarty_tpl->getValue('conversation')['node_id']) {?>
          <img src="<?php echo $_smarty_tpl->getValue('conversation')['picture'];?>
" alt="<?php echo $_smarty_tpl->getValue('conversation')['name'];?>
">
        <?php } else { ?>
          <div class="left-avatar" style="background-image: url('<?php echo $_smarty_tpl->getValue('conversation')['picture_left'];?>
')"></div>
          <div class="right-avatar" style="background-image: url('<?php echo $_smarty_tpl->getValue('conversation')['picture_right'];?>
')"></div>
        <?php }?>
      </div>
      <div class="data-content">
        <?php if ($_smarty_tpl->getValue('conversation')['image'] != '') {?>
          <div class="float-end">
            <img class="data-img" src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('conversation')['image'];?>
" alt="">
          </div>
        <?php }?>
        <div><span class="name"><?php echo $_smarty_tpl->getValue('conversation')['name'];?>
</span></div>
        <div class="text">
          <?php if ($_smarty_tpl->getValue('conversation')['message'] != '') {?>
            <?php echo $_smarty_tpl->getValue('conversation')['message_orginal'];?>

          <?php } elseif ($_smarty_tpl->getValue('conversation')['photo'] != '') {?>
            <i class="fa fa-file-image"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Photo");?>

          <?php } elseif ($_smarty_tpl->getValue('conversation')['voice_note'] != '') {?>
            <i class="fas fa-microphone"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Voice Message");?>

          <?php }?>
        </div>
        <div class="time js_moment" data-time="<?php echo $_smarty_tpl->getValue('conversation')['time'];?>
"><?php echo $_smarty_tpl->getValue('conversation')['time'];?>
</div>
      </div>
    </a>
  <?php } else { ?>
    <a class="data-container js_chat-start" data-cid="<?php echo $_smarty_tpl->getValue('conversation')['conversation_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('conversation')['user_id'];?>
" data-name="<?php echo $_smarty_tpl->getValue('conversation')['name'];?>
" data-name-list="<?php echo $_smarty_tpl->getValue('conversation')['name_list'];?>
" data-link="<?php echo $_smarty_tpl->getValue('conversation')['link'];?>
" data-picture="<?php echo $_smarty_tpl->getValue('conversation')['picture'];?>
" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/messages/<?php echo $_smarty_tpl->getValue('conversation')['conversation_id'];?>
" <?php if ($_smarty_tpl->getValue('conversation')['node_id']) {?>data-chat-box="true" <?php }?>>
      <div class="data-avatar">
        <img src="<?php echo $_smarty_tpl->getValue('conversation')['picture'];?>
" alt="<?php echo $_smarty_tpl->getValue('conversation')['name'];?>
">
      </div>
      <div class="data-content">
        <?php if ($_smarty_tpl->getValue('conversation')['image'] != '') {?>
          <div class="float-end">
            <img class="data-img" src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('conversation')['image'];?>
" alt="">
          </div>
        <?php }?>
        <div><span class="name"><?php echo $_smarty_tpl->getValue('conversation')['name'];?>
</span></div>
        <div class="text">
          <?php if ($_smarty_tpl->getValue('conversation')['message'] != '') {?>
            <?php echo $_smarty_tpl->getValue('conversation')['message_orginal'];?>

          <?php } elseif ($_smarty_tpl->getValue('conversation')['photo'] != '') {?>
            <i class="fa fa-file-image"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Photo");?>

          <?php } elseif ($_smarty_tpl->getValue('conversation')['voice_note'] != '') {?>
            <i class="fas fa-microphone"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Voice Message");?>

          <?php }?>
        </div>
        <div class="time js_moment" data-time="<?php echo $_smarty_tpl->getValue('conversation')['time'];?>
"><?php echo $_smarty_tpl->getValue('conversation')['time'];?>
</div>
      </div>
    </a>
  <?php }?>
</li><?php }
}

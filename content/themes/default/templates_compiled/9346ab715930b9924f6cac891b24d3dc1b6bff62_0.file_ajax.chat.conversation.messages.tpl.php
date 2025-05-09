<?php
/* Smarty version 5.4.1, created on 2025-03-02 18:08:21
  from 'file:ajax.chat.conversation.messages.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67c49e950c3b12_37742850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9346ab715930b9924f6cac891b24d3dc1b6bff62' => 
    array (
      0 => 'ajax.chat.conversation.messages.tpl',
      1 => 1647993782,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:ajax.chat.messages.tpl' => 1,
  ),
))) {
function content_67c49e950c3b12_37742850 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/drew44/public_html/content/themes/default/templates';
if ($_smarty_tpl->getValue('conversation')['total_messages'] >= $_smarty_tpl->getValue('system')['max_results']) {?>
  <!-- see-more -->
  <div class="alert alert-chat see-more small js_see-more" data-id=<?php echo $_smarty_tpl->getValue('conversation')['conversation_id'];?>
 data-get="messages">
    <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Loading Older Messages");?>
</span>
    <div class="loader loader_small x-hidden"></div>
  </div>
  <!-- see-more -->
<?php }?>

<ul>
  <?php $_smarty_tpl->renderSubTemplate('file:ajax.chat.messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('messages'=>$_smarty_tpl->getValue('conversation')['messages']), (int) 0, $_smarty_current_dir);
?>
</ul><?php }
}

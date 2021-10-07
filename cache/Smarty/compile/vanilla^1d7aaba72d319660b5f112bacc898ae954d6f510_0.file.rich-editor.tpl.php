<?php
/* Smarty version 3.1.39, created on 2021-09-20 18:29:43
  from '/var/www/vanilla/plugins/rich-editor/views/rich-editor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6148d3177c11e2_94177728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d7aaba72d319660b5f112bacc898ae954d6f510' => 
    array (
      0 => '/var/www/vanilla/plugins/rich-editor/views/rich-editor.tpl',
      1 => 1620339398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6148d3177c11e2_94177728 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/vanilla/library/SmartyPlugins/function.t.php','function'=>'smarty_function_t',),));
?>
<div class="richEditor isDisabled" aria-label="<?php echo smarty_function_t(array('c'=>"Type your message"),$_smarty_tpl);?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['editorData']->value['editorID'];?>
" aria-describedby="<?php echo $_smarty_tpl->tpl_vars['editorData']->value['editorDescriptionID'];?>
" aria-multiline="true">
    <p id="<?php echo $_smarty_tpl->tpl_vars['editorData']->value['editorDescriptionID'];?>
" class="sr-only">
        <?php echo smarty_function_t(array('c'=>"richEditor.description.title"),$_smarty_tpl);?>

        <?php echo smarty_function_t(array('c'=>"richEditor.description.paragraphMenu"),$_smarty_tpl);?>

        <?php echo smarty_function_t(array('c'=>"richEditor.description.inlineMenu"),$_smarty_tpl);?>

        <?php echo smarty_function_t(array('c'=>"richEditor.description.embed"),$_smarty_tpl);?>

    </p>
    <div class="richEditor-frame InputBox">
        <div class="richEditor-textWrap">
            <div class="ql-editor richEditor-text userContent isDisabled" data-gramm="false" contenteditable="false" disabled="disabled" data-placeholder="Create a new post..." tabindex="0"></div>
        </div>
    </div>
</div>
<?php }
}

<?php
/* Smarty version 3.1.33, created on 2019-06-20 17:11:57
  from 'C:\xampp\htdocs\prestashop\admin518fmti8l\themes\default\template\helpers\tree\tree_toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0c04ad5fb458_83900796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '489d7e4edd045e0e6daf0eb34603b5f07b76647f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin518fmti8l\\themes\\default\\template\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1556660796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0c04ad5fb458_83900796 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actions']->value, 'action');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
</div>
<?php }
}

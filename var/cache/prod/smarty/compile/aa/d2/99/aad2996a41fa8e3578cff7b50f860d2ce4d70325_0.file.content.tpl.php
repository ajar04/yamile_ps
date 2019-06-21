<?php
/* Smarty version 3.1.33, created on 2019-06-11 20:38:44
  from 'C:\xampp\htdocs\prestashop\admin518fmti8l\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0057a47a4472_75264337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aad2996a41fa8e3578cff7b50f860d2ce4d70325' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin518fmti8l\\themes\\default\\template\\content.tpl',
      1 => 1556660796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0057a47a4472_75264337 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}

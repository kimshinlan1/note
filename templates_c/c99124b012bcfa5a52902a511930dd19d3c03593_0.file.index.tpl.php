<?php
/* Smarty version 3.1.43, created on 2022-03-23 15:58:59
  from '/storage/emulated/0/Icode-Go/data_files/www/note/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_623ae1537587b7_91873121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c99124b012bcfa5a52902a511930dd19d3c03593' => 
    array (
      0 => '/storage/emulated/0/Icode-Go/data_files/www/note/templates/index.tpl',
      1 => 1648025936,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:home.tpl' => 1,
  ),
),false)) {
function content_623ae1537587b7_91873121 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1092716009623ae15372d230_37541034', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_1092716009623ae15372d230_37541034 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1092716009623ae15372d230_37541034',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['ac']->value == 'home') {?>
    <?php $_smarty_tpl->_subTemplateRender("file:home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php }
}
}
/* {/block 'body'} */
}

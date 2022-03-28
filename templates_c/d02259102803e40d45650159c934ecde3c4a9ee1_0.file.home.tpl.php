<?php
/* Smarty version 3.1.43, created on 2022-03-28 16:43:59
  from '/storage/emulated/0/Icode-Go/data_files/www/note/templates/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6241835f16a704_73396884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd02259102803e40d45650159c934ecde3c4a9ee1' => 
    array (
      0 => '/storage/emulated/0/Icode-Go/data_files/www/note/templates/home.tpl',
      1 => 1648460637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6241835f16a704_73396884 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1772958916241835f05fda2_55793067', 'link_css');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16857694286241835f083ce4_64163078', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'link_css'} */
class Block_1772958916241835f05fda2_55793067 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'link_css' => 
  array (
    0 => 'Block_1772958916241835f05fda2_55793067',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <link rel="stylesheet" href="./css/<?php echo $_smarty_tpl->tpl_vars['ac']->value;?>
.css">
<?php
}
}
/* {/block 'link_css'} */
/* {block 'body'} */
class Block_16857694286241835f083ce4_64163078 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_16857694286241835f083ce4_64163078',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="row">
		<div class="col-md-12">
			<div  class="text-primary h3 text-center">Danh sách các note</h3>
			<div class="list-group group-notes">

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'data_list_note', false, 'key');
$_smarty_tpl->tpl_vars['data_list_note']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['data_list_note']->value) {
$_smarty_tpl->tpl_vars['data_list_note']->do_else = false;
?>
						<?php $_smarty_tpl->_assignInScope('date_created', $_smarty_tpl->tpl_vars['data_list_note']->value['date_created']);?>
						<?php $_smarty_tpl->_assignInScope('day_created', substr($_smarty_tpl->tpl_vars['date_created']->value,8,2));?> 					  <?php $_smarty_tpl->_assignInScope('month_created', substr($_smarty_tpl->tpl_vars['date_created']->value,5,2));?> 						<?php $_smarty_tpl->_assignInScope('year_created', substr($_smarty_tpl->tpl_vars['date_created']->value,0,4));?>
		    <?php $_smarty_tpl->_assignInScope('hour_created', substr($_smarty_tpl->tpl_vars['date_created']->value,11,2));?>
            <?php $_smarty_tpl->_assignInScope('min_created', substr($_smarty_tpl->tpl_vars['date_created']->value,14,2));
if (strlen($_smarty_tpl->tpl_vars['data_list_note']->value['body']) > 300) {?>

							<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['data_list_note']) ? $_smarty_tpl->tpl_vars['data_list_note']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['body'] = (substr($_smarty_tpl->tpl_vars['data_list_note']->value['body'],0,300)).(' ...');
$_smarty_tpl->_assignInScope('data_list_note', $_tmp_array);
} else {
$_tmp_array = isset($_smarty_tpl->tpl_vars['data_list_note']) ? $_smarty_tpl->tpl_vars['data_list_note']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['body'] = $_smarty_tpl->tpl_vars['data_list_note']->value['body'];
$_smarty_tpl->_assignInScope('data_list_note', $_tmp_array);
}?>
<a href="index.php?ac=edit_note&&id=<?php echo $_smarty_tpl->tpl_vars['data_list_note']->value['id_note'];?>
" class="list-group-item ">
								<h4 class="list-group-item-heading text-danger note-title"><?php echo $_smarty_tpl->tpl_vars['data_list_note']->value['title'];?>
</h4>
<p class="list-group-item-text"><?php echo $_smarty_tpl->tpl_vars['data_list_note']->value['body'];?>
</p>
<small> Tạo ngày
									<?php echo $_smarty_tpl->tpl_vars['day_created']->value;?>
 tháng
									<?php echo $_smarty_tpl->tpl_vars['month_created']->value;?>
 năm
									<?php echo $_smarty_tpl->tpl_vars['year_created']->value;?>
 lúc
									<?php echo $_smarty_tpl->tpl_vars['hour_created']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['min_created']->value;?>

</small>
</a>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


			</div>
		</div>
	</div>
<?php
}
}
/* {/block 'body'} */
}

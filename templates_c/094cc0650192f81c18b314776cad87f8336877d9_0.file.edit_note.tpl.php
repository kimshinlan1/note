<?php
/* Smarty version 3.1.43, created on 2022-03-28 16:57:01
  from '/storage/emulated/0/Icode-Go/data_files/www/note/templates/edit_note.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6241866d35c792_53902278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '094cc0650192f81c18b314776cad87f8336877d9' => 
    array (
      0 => '/storage/emulated/0/Icode-Go/data_files/www/note/templates/edit_note.tpl',
      1 => 1648461419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6241866d35c792_53902278 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21220039756241866d2fc901_21057013', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_21220039756241866d2fc901_21057013 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_21220039756241866d2fc901_21057013',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-primary">Chỉnh sửa note</h3>
            <div class="alert alert-info">Đã tạo vào ngày
         <?php $_smarty_tpl->_assignInScope('date_created', $_smarty_tpl->tpl_vars['data_note']->value['date_created']);?>
	     <?php $_smarty_tpl->_assignInScope('day_created', substr($_smarty_tpl->tpl_vars['date_created']->value,8,2));?> 					 <?php $_smarty_tpl->_assignInScope('month_created', substr($_smarty_tpl->tpl_vars['date_created']->value,5,2));?> 		            <?php $_smarty_tpl->_assignInScope('year_created', substr($_smarty_tpl->tpl_vars['date_created']->value,0,4));?>
		 <?php $_smarty_tpl->_assignInScope('hour_created', substr($_smarty_tpl->tpl_vars['date_created']->value,11,2));?>
         <?php $_smarty_tpl->_assignInScope('min_created', substr($_smarty_tpl->tpl_vars['date_created']->value,14,2));?>
         <?php echo (((((((($_smarty_tpl->tpl_vars['day_created']->value).(' tháng
                     ')).($_smarty_tpl->tpl_vars['month_created']->value)).(' năm
                     ')).($_smarty_tpl->tpl_vars['year_created']->value)).(' lúc
                     ')).($_smarty_tpl->tpl_vars['hour_created']->value)).(':')).($_smarty_tpl->tpl_vars['min_created']->value);?>

            </div>
            <form method="POST" onsubmit="return false;" id="formEditNote">
                <div class="form-group">
                    <label for="user_signin">Tiêu đề</label>
                    <input type="text" class="form-control" id="title_edit_note" value="<?php echo $_smarty_tpl->tpl_vars['data_note']->value['title'];?>
">
</div>
<div class="form-group">
<label for="pass_signin">Nội dung</label>
<textarea class="form-control" id="body_edit_note" rows="5">     <?php echo $_smarty_tpl->tpl_vars['data_note']->value['body'];?>

</textarea>
</div>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['data_note']->value['id_note'];?>
" id="id_edit_note">
                <a href="index.php" class="btn btn-default">
                    <span class="glyphicon glyphicon-arrow-left"></span> Trở về
                </a>
                <button class="btn btn-danger pull-right" data-toggle="modal" data-target="#modalDeleteNote">
                    <span class="glyphicon glyphicon-trash"></span> Xoá
                </button>
                <button class="btn btn-primary" id="submit_edit_note">
                    <span class="glyphicon glyphicon-ok"></span> Lưu
                </button>
                <br><br>
                <div class="alert alert-danger hidden"></div>
            </form>
        </div>
    </div>
</div>
<?php
}
}
/* {/block 'body'} */
}

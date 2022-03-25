<?php
/* Smarty version 3.1.43, created on 2022-03-25 14:42:24
  from '/storage/emulated/0/Icode-Go/data_files/www/note/templates/create_note.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_623d72608fd154_64684842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8b3c9219084daca893f4625fd0b83304fde6602' => 
    array (
      0 => '/storage/emulated/0/Icode-Go/data_files/www/note/templates/create_note.tpl',
      1 => 1648193844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_623d72608fd154_64684842 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2104806066623d72608f6943_02138586', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_2104806066623d72608f6943_02138586 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_2104806066623d72608f6943_02138586',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 <div class="row">
        <div class="col-md-12">
            <h3 class="text-primary">Tạo note mới</h3>
            <form method="POST" onsubmit="return false;" id="formCreateNote">
                <div class="form-group">
                    <label for="user_signin">Tiêu đề</label>
                    <input type="text" class="form-control" id="title_create_note">
                </div>
                <div class="form-group">
                    <label for="pass_signin">Nội dung</label>
                    <textarea class="form-control" id="body_create_note" rows="5"></textarea>
                </div>
                <a href="index.php" class="btn btn-default">
                    <span class="glyphicon glyphicon-arrow-left"></span> Trở về
                </a>
                <button class="btn btn-primary" id="submit_create_note">
                    <span class="glyphicon glyphicon-ok"></span> Tạo note
                </button>
                <br><br>
                <div class="alert alert-danger hidden"></div>
            </form>
        </div>
    </div>
  </form>
<?php
}
}
/* {/block 'body'} */
}

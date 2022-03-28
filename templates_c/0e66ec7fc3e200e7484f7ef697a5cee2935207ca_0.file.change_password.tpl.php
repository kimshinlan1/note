<?php
/* Smarty version 3.1.43, created on 2022-03-28 16:35:16
  from '/storage/emulated/0/Icode-Go/data_files/www/note/templates/change_password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62418154c84859_91021410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e66ec7fc3e200e7484f7ef697a5cee2935207ca' => 
    array (
      0 => '/storage/emulated/0/Icode-Go/data_files/www/note/templates/change_password.tpl',
      1 => 1648460112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62418154c84859_91021410 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23884997762418154c81593_37901919', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_23884997762418154c81593_37901919 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_23884997762418154c81593_37901919',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-primary">Change password</h3>
            <form method="POST" onsubmit="return false;" id="formChangePass">
                <div class="form-group">
                    <label for="user_signin">Old password</label>
                    <input type="password" class="form-control" id="old_pass">
                </div>
                <div class="form-group">
                    <label for="user_signin">New password</label>
                    <input type="password" class="form-control" id="new_pass">
                </div>
                <div class="form-group">
                    <label for="user_signin">Retype new password</label>
                    <input type="password" class="form-control" id="re_new_pass">
                </div>
                <a href="index.php" class="btn btn-default">
                    <span class="fa fa-arrow-left"></span> Back
                </a>
                <button class="btn btn-primary" id="submit_change_pass">
                    <span class="icon-ok"></span> Change
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

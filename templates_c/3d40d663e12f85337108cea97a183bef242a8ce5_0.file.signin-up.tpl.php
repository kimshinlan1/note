<?php
/* Smarty version 3.1.43, created on 2022-03-24 13:34:56
  from '/storage/emulated/0/Icode-Go/data_files/www/note/templates/signin-up.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_623c11103fad77_45316065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d40d663e12f85337108cea97a183bef242a8ce5' => 
    array (
      0 => '/storage/emulated/0/Icode-Go/data_files/www/note/templates/signin-up.tpl',
      1 => 1648103634,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_623c11103fad77_45316065 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1854549598623c11103f7a00_99075166', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_1854549598623c11103f7a00_99075166 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1854549598623c11103f7a00_99075166',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="container">
    <div class="row">
        <div class="col-md-5">
            <h3 class="text-primary">Đăng nhập</h3>
            <form method="POST" onsubmit="return false;" id="formSignin">
                <div class="form-group">
                    <label for="user_signin">Tên đăng nhập</label>
                    <input type="text" class="form-control" id="user_signin">
                </div>
                <div class="form-group">
                    <label for="pass_signin">Mật khẩu</label>
                    <input type="password" class="form-control" id="pass_signin">
                </div>
                <button class="btn btn-primary" id="submit_signin">Đăng nhập</button>
                <br><br>
                <div class="alert alert-danger hidden"></div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <h3 class="text-success">Đăng ký tài khoản</h3>
            <p class="text-danger">* Vui lòng nhập đầy đủ thông tin dưới đây để đăng ký tài khoản :</p>
            <form method="POST" onsubmit="return false;" id="formSignup">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Tên đăng nhập" id="user_signup">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Mật khẩu" id="pass_signup">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Nhập lại mật khẩu" id="repass_signup">
                </div>
                <button class="btn btn-success" id="submit_signup">Tạo tài khoản</button>
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

<?php
/* Smarty version 3.1.43, created on 2022-03-25 10:11:58
  from '/storage/emulated/0/Icode-Go/data_files/www/note/templates/layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_623d32fe1ba8f4_53782744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '011126bf56cd47de76c8e3c205ee4ff33d3c7983' => 
    array (
      0 => '/storage/emulated/0/Icode-Go/data_files/www/note/templates/layout.tpl',
      1 => 1648177744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_623d32fe1ba8f4_53782744 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
    <head>
    <title>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1611246422623d32fe1a26e2_70541311', 'title');
?>

    </title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php $_smarty_tpl->_assignInScope('base_url', ($_SERVER['REQUEST_URI']).('styles/styles.css'));?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php echo '<script'; ?>
 src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.js" crossorigin="anonymous"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>
</head>

<body>
  <div class="wrapper container">
  <?php if ($_SESSION['user']) {?>
    <nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-header">
							<span class="fa fa-solid fa-user">Account</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php"> Home</a>
					</div>

					<div class="collapse navbar-collapse" id="nav-header">
					    <ul class="nav navbar-nav navbar-right">
					      	<li>
					      		<a href="index.php?ac=create_note">
					      			<span class="fa fa-plus"></span> Note mới
					      		</a>
					      	</li>
					      	<li>
					      		<a href="index.php?ac=change_password">
					      			<span class="fa fa-key"></span> Đổi mật khẩu
					      		</a>
					      	</li>
					        <li>
					         	<a href="signout.php">
					         		<span class="fa fa-sign-out"></span> Thoát
					    		</a>
					    	</li>
					    </ul>
					</div>
				</div>
			</nav>
  <?php } else { ?>
  <nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="index.php">
							<span class="glyphicon glyphicon-edit"></span> iNote
						</a>
					</div>
				</div>
			</nav>
  <?php }?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_994089946623d32fe1b8881_69804157', 'body');
?>

  </div>

   <div class="modal fade" id="modalDeleteNote" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-trash"></span> Xoá note</h4>
                </div>
                <div class="modal-body">
                    <p>Bạn chắc chắn muốn xoá note này không ?</p>
                    <div class="alert alert-danger hidden"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Không</button>
                    <button type="button" class="btn btn-primary" id="submit_delete_note">Đồng ý</button>
                </div>
            </div>
        </div>
    </div>
    <?php echo '<script'; ?>
 src="js/plugins/autogrow.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/functions/sign_up.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/functions/sign_in.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/functions/note.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/functions/change-pass.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
/* {block 'title'} */
class Block_1611246422623d32fe1a26e2_70541311 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1611246422623d32fe1a26e2_70541311',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_994089946623d32fe1b8881_69804157 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_994089946623d32fe1b8881_69804157',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php
}
}
/* {/block 'body'} */
}

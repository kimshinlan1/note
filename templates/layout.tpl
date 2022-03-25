<html>
    <head>
    <title>
      {block name=title}{/block}
    </title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {$base_url = $smarty.server.REQUEST_URI|cat:'styles/styles.css'}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.js" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
  <div class="wrapper container">
  {if isset($smarty.session.user)}
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
  {else}
  <nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="index.php">
							<span class="glyphicon glyphicon-edit"></span> iNote
						</a>
					</div>
				</div>
			</nav>
  {/if}

  {block name=body}

  {/block}
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
    <script src="js/plugins/autogrow.js"></script>
    <script src="js/functions/sign_up.js"></script>
    <script src="js/functions/sign_in.js"></script>
    <script src="js/functions/note.js"></script>
    <script src="js/functions/change-pass.js"></script>

</body>
</html>
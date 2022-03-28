{extends file="layout.tpl"}
{block name=body}

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
{/block}

<h1>Login</h1>

<form action="login/loginRun" method="post">
    
    <label class="label label-default">Username</label>
    <input type="text" name="login" class="form-control" /><br />
    <label class="label label-default">Password</label>
    <input type="password" name="password" class="form-control" /><br />
    <button type="submit" class="btn btn-default">
        Login
    </button>
    <hr>
    <h4>If you do not have an account you can register from <a href="<?php echo URL; ?>login/register">here</a>.</h4>
</form>
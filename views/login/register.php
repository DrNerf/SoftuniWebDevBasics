<h1>Register</h1>

<form method="post" action="<?php echo URL; ?>login/registerRun">
    <label for="username">Username</label>
    <input type="text" name="username" class="form-control" />
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" />
    <label for="repeatPassword">Repeat Password</label>
    <input type="password" name="repeatPassword" class="form-control" />
    <br>
    <button type="submit" class="btn btn-success">
        Register
    </button>
    <hr>
    <h4>If you already have an account, you can login from <a href="<?php echo URL; ?>login">here</a>.</h4>
</form>
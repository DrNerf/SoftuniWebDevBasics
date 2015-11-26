<h1>User: Edit</h1>

<form method="post" action="<?php echo URL;?>user/editSave/<?php echo $this->user[0]['userid']; ?>">
    <label>Login</label><input type="text" name="login" value="<?php echo $this->user[0]['login']; ?>" class="form-control" /><br />
    <label>Password</label><input type="text" name="password" class="form-control" /><br />
    <label>Role</label>
        <select name="role" class="form-control">
            <option value="admin" <?php if($this->user[0]['role'] == 'admin') echo 'selected'; ?>>Admin</option>
            <option value="owner" <?php if($this->user[0]['role'] == 'owner') echo 'selected'; ?>>Owner</option>
            <option value="owner" <?php if($this->user[0]['role'] == 'default') echo 'selected'; ?>>Default</option>
        </select><br />
        <label>&nbsp;</label><input type="submit" class="btn btn-success" value="Save" />
        <br><br>
</form>
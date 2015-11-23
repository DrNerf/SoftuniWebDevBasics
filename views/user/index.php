<h1>User</h1>

<form method="post" action="<?php echo URL;?>user/create">
    <label>Login</label><input type="text" name="login" class="form-control" /><br />
    <label>Password</label><input type="text" name="password" class="form-control" /><br />
    <label>Role</label>
        <select name="role" class="form-control">
            <option value="default">Default</option>
            <option value="admin">Admin</option>
        </select><br />
    <label>&nbsp;</label><input type="submit" value="Insert" class="btn btn-default" />
</form>

<hr />

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Role</th>
            <th>Commands</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($this->userList as $key => $value) {
                echo '<tr>';
                echo '<td>' . $value['userid'] . '</td>';
                echo '<td>' . $value['login'] . '</td>';
                echo '<td>' . $value['role'] . '</td>';
                echo '<td>
                        <a href="'.URL.'user/edit/'.$value['userid'].'">Edit</a> 
                        <a href="'.URL.'user/delete/'.$value['userid'].'">Delete</a></td>';
                echo '</tr>';
            }
        ?>
    </tbody>
</table>
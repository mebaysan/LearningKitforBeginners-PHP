<?php
if (isset($_GET['u_id'])) {
    $edited_user_id = $_GET['u_id'];
}
$query = "select * from users where user_id = '$edited_user_id'";
$edit_user_query = mysqli_query($connection, $query);
if ($edit_user_query) {
    while ($row = mysqli_fetch_assoc($edit_user_query)) {
        $user_first_name = $row['user_firstname'];
        $user_last_name = $row['user_lastname'];
        $user_username = $row['username'];
        $user_email = $row['user_email'];
        $user_password = $row['password'];
        $user_role = $row['user_role'];
    }
} else {
    die("QUERY FAILED:" . mysqli_error($connection));
}

if (isset($_POST['edit_user_submit'])) {
    $user_first_name = $_POST['edit_first_name'];
    $user_last_name = $_POST['edit_last_name'];
    $user_username = $_POST['edit_username'];
    $user_email = $_POST['edit_email'];
    $user_password = $_POST['edit_password'];
    $user_role = $_POST['edit_role'];
    $query = "update users set username = '$user_username',
                                user_firstname = '$user_first_name',
                                user_lastname = '$user_last_name',
                                user_email = '$user_email',
                                password = '$user_password',
                                user_role = '$user_role'
                                where user_id = '$edited_user_id' ";
    $edit_success_query = mysqli_query($connection, $query);
    if ($edit_success_query) {
        header("Location: users.php");
    } else {
        die("QUERY FAILED: " . mysqli_error($connection));
    }
}


?>


<form action="" method="post">
    <div class="form-group">
        <label>First Name</label>
        <input value="<?php echo $user_first_name; ?>" type="text" class="form-control" name="edit_first_name">
    </div>
    <div class="form-group">
        <label>Last Name</label>
        <input type="text" value="<?php echo $user_last_name; ?>" class="form-control" name="edit_last_name">
    </div>
    <div class="form-group">
        <label>Username</label>
        <input type="text" value="<?php echo $user_username; ?>" class="form-control" name="edit_username">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" value="<?php echo $user_email; ?>" class="form-control" name="edit_email">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" value="<?php echo $user_password; ?>" class="form-control" name="edit_password">
    </div>
    <div class="form-group">
        <label>Role</label>
        <select class="form-control" name="edit_role">
            <option disabled selected><?php echo $user_role; ?></option disabled>
            <option value="admin">Admin</option>
            <option value="subscriber">Subscriber</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary" name="edit_user_submit">Edit User</button>
</form>

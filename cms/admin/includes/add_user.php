<?php
if (isset($_POST['add_user_submit'])) {
    $added_first_name = $_POST['add_first_name'];
    $added_last_name = $_POST['add_last_name'];
    $added_username = $_POST['add_username'];
    $added_email = $_POST['add_email'];
    $added_password = $_POST['add_password'];
    $added_role = $_POST['add_role'];


    $query = "insert into users(user_firstname,user_lastname,user_email,username,password,user_role) 
              values('$added_first_name','$added_last_name','$added_email','$added_username'
              ,'$added_password','$added_role')";
    $added_user_query = mysqli_query($connection, $query);
    if (!$added_user_query) {
        die("QUERY FAILED" . mysqli_error($connection));
    } else {
        header("Location: users.php");
    }
}

?>


<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>First Name</label>
        <input type="text" class="form-control" name="add_first_name">
    </div>
    <div class="form-group">
        <label>Last Name</label>
        <input type="text" class="form-control" name="add_last_name">
    </div>
    <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control" name="add_username">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="add_email">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="add_password">
    </div>
    <div class="form-group">
        <label>Role</label>
        <select class="form-control" name="add_role">
            <option disabled selected>Select Options</option disabled>
            <option value="admin">Admin</option>
            <option value="subscriber">Subscriber</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary" name="add_user_submit">Add User</button>
</form>
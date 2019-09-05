<table class="table table-bordered table-hover table-responsive">
    <?php
    if (isset($_GET['delete'])) {
        $deleted_user_id = $_GET['delete'];
        $query = "delete from users where user_id = '$deleted_user_id'";
        $deleted_user_query = mysqli_query($connection, $query);
        if ($deleted_user_query)
            echo "<div class='alert alert-success'>Delete was successful</div>";
        else
            echo "<div class='alert alert-danger'>Delete was not success! QUERY FAILED</div>";

    }
    if (isset($_GET['change_to_admin'])) {
        $to_admin_id = $_GET['change_to_admin'];
        $query = "update users set user_role = 'admin'";
        $to_admin_query = mysqli_query($connection, $query);
        if ($to_admin_query)
            echo "<div class='alert alert-success'>Changed to ADMIN was successful</div>";
        else
            echo "<div class='alert alert-danger'>Changed to ADMIN was not success! QUERY FAILED</div>";

    }
    if (isset($_GET['change_to_subscriber'])) {
        $to_subscriber_id = $_GET['approve'];
        $query = "update users set user_role = 'subscriber'";
        $to_subscriber_query = mysqli_query($connection, $query);
        if ($to_subscriber_query)
            echo "<div class='alert alert-success'>Changed to SUBSCRIBER was successful</div>";
        else
            echo "<div class='alert alert-danger'>Changed to SUBSCRIBER was not success! QUERY FAILED</div>";

    }


    ?>
    <thead>
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Role</th>
    </tr>
    </thead>
    <tbody>

    <?php
    //    GET ALL Comments
    $query = "select * from users";
    $select_all_users_query = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($select_all_users_query)) {
        $user_id = $row['user_id'];
        $username = $row['username'];
        $user_password = $row['user_password'];
        $user_firstname = $row['user_firstname'];
        $user_lastname = $row['user_lastname'];
        $user_email = $row['user_email'];
        $user_image = $row['user_image'];
        $user_role = $row['user_role'];
        ?>
        <tr>
            <td><?php echo $user_id; ?></td>
            <td><?php echo $username; ?></td>
            <td><?php echo $user_firstname; ?></td>
            <td><?php echo $user_lastname; ?></td>
            <td><?php echo $user_email; ?></td>
            <td><?php echo $user_role; ?></td>
            <td><a href="users.php?change_to_admin=<?php echo $user_id; ?>"
                   class="btn btn-info btn-sm">Change to Admin</a>
            <td><a href="users.php?change_to_subscriber=<?php echo $user_id; ?>"
                   class="btn btn-warning btn-sm">Change to Subscriber</a>
            <td><a href="users.php?delete=<?php echo $user_id; ?>"
                   class="btn btn-warning btn-danger">Delete</a>
            <td><a href="users.php?source=edit_user&u_id=<?php echo $user_id; ?>"
                   class="btn btn-success">Edit</a>

        </tr>
    <?php }; ?>
    </tbody>
</table>

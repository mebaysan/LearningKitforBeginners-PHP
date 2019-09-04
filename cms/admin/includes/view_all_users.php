<table class="table table-bordered table-hover table-responsive">
    <?php
    if (isset($_GET['delete'])) {
        $deleted_comment_id = $_GET['delete'];
        $query = "delete from comments where comment_id = '$deleted_comment_id'";
        $deleted_comment_query = mysqli_query($connection, $query);
        if ($deleted_comment_query)
            echo "<div class='alert alert-success'>Delete was successful</div>";
        else
            echo "<div class='alert alert-danger'>Delete was not success! QUERY FAILED</div>";

    }
    if (isset($_GET['unapprove'])) {
        $unapprove_comment_id = $_GET['unapprove'];
        $query = "update comments set comment_status = 'unapprove'";
        $unapprove_comment_query = mysqli_query($connection, $query);
        if ($unapprove_comment_query)
            echo "<div class='alert alert-success'>Unapprove was successful</div>";
        else
            echo "<div class='alert alert-danger'>Unapprove was not success! QUERY FAILED</div>";

    }
    if (isset($_GET['approve'])) {
        $approve_comment_id = $_GET['approve'];
        $query = "update comments set comment_status = 'approve'";
        $approve_comment_query = mysqli_query($connection, $query);
        if ($approve_comment_query)
            echo "<div class='alert alert-success'>Approve was successful</div>";
        else
            echo "<div class='alert alert-danger'>Approve was not success! QUERY FAILED</div>";

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
        <th>Date</th>
    </tr>
    </thead>
    <tbody>

    <?php
    //    GET ALL Comments
    $query = "select * from comments";
    $select_all_comments_query = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($select_all_comments_query)) {
        $comment_id = $row['comment_id'];
        $comment_post_id = $row['comment_post_id'];
        $comment_author = $row['comment_author'];
        $comment_email = $row['comment_email'];
        $comment_content = $row['comment_content'];
        $comment_status = $row['comment_status'];
        $comment_date = $row['comment_date'];
        ?>
        <tr>
            <td><?php echo $comment_id; ?></td>
            <?php
            $query = "select * from posts where post_id = '$comment_post_id'";
            $select_post_query = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($select_post_query)) {
                $post_id = $row['post_id'];
                $post_title = $row['post_title'];
            }
            ?>

            <td><a href="../post.php?p_id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a></td>


            <td><?php echo $comment_author; ?></td>
            <td><?php echo $comment_content; ?></td>
            <td><?php echo $comment_email; ?></td>
            <td><?php echo $comment_status; ?></td>
            <td><?php echo $comment_date; ?></td>
            <td><a href="comments.php?approve=<?php echo $comment_id; ?>"
                   class="btn btn-info btn-sm">Approve</a>
            <td><a href="comments.php?unapprove=<?php echo $comment_id; ?>"
                   class="btn btn-warning btn-sm">Unapprove</a>
            <td><a href="comments.php?delete=<?php echo $comment_id; ?>"
                   class="btn btn-warning btn-danger">Delete</a>

        </tr>
    <?php }; ?>
    </tbody>
</table>

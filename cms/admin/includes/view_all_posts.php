<table class="table table-bordered table-striped table-hover table-responsive">
    <?php
    if (isset($_GET['delete'])) {
        $deleted_post_id = $_GET['delete'];
        $query = "delete from posts where post_id = '$deleted_post_id'";
        $deleted_post_query = mysqli_query($connection, $query);
        if ($deleted_post_query)
            echo "<div class='alert alert-success'>Delete was successful</div>";
        else
            echo "<div class='alert alert-danger'>Delete was not success! QUERY FAILED</div>";

    } ?>
    <thead>
    <tr>
        <th>Id</th>
        <th>Author</th>
        <th>Title</th>
        <th>Category</th>
        <th>Status</th>
        <th>Image</th>
        <th>Tags</th>
        <th>Comments</th>
        <th>Date</th>
        <th></th>
    </tr>
    </thead>
    <tbody>

    <?php
    //    GET ALL POSTS
    $query = "select * from posts";
    $select_all_posts_query = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
        $post_id = $row['post_id'];
        $post_author = $row['post_author'];
        $post_title = $row['post_title'];
        $post_category_id = $row['post_category_id'];
        $post_status = $row['post_status'];
        $post_image = $row['post_image'];
        $post_tags = $row['post_tags'];
        $post_comment_count = $row['post_comment_count'];
        $post_date = $row['post_date'];
        ?>
        <tr>
            <td><?php echo $post_id; ?></td>
            <td><?php echo $post_author; ?></td>
            <td><?php echo $post_title; ?></td>
            <td><?php echo $post_category_id; ?></td>
            <td><?php echo $post_status; ?></td>
            <td><img width="150" height="90" src="../images/<?php echo $post_image; ?>" alt="image">
            </td>
            <td><?php echo $post_tags; ?></td>
            <td><?php echo $post_comment_count; ?></td>
            <td><?php echo $post_date; ?></td>
            <td><a href="posts.php?source=edit_post&p_id=<?php echo $post_id; ?>" class="btn btn-info btn-sm">Edit</a>
            <td><a href="posts.php?delete=<?php echo $post_id; ?>" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>
    <?php }; ?>
    </tbody>
</table>

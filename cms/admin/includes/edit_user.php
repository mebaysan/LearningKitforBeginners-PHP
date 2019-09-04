<?php
if (isset($_GET['p_id'])) {
    $edited_post_id = $_GET['p_id'];
}
$query = "select * from posts where post_id = '$edited_post_id'";
$edit_post_query = mysqli_query($connection, $query);
if ($edit_post_query) {
    while ($row = mysqli_fetch_assoc($edit_post_query)) {
        $post_id = $row['post_id'];
        $post_author = $row['post_author'];
        $post_title = $row['post_title'];
        $post_category_id = $row['post_category_id'];
        $post_status = $row['post_status'];
        $post_image = $row['post_image'];
        $post_tags = $row['post_tags'];
        $post_comment_count = $row['post_comment_count'];
        $post_date = $row['post_date'];
        $post_content = $row["post_content"];
    }
} else {
    die("QUERY FAILED:" . mysqli_error($connection));
}

if (isset($_POST['edit_post_submit'])) {
    $edit_post_title = $_POST['edit_post_title'];
    $edit_post_category_id = $_POST['edit_post_category_id'];
    $edit_post_author = $_POST['edit_post_author'];
    $edit_post_status = $_POST['edit_post_status'];

    $edit_post_image = $_FILES['image']['name'];
    $edit_post_image_temp = $_FILES['image']['tmp_name'];

    $edit_post_tags = $_POST['edit_post_tags'];
    $edit_post_content = $_POST['edit_post_content'];
    $edit_post_date = date("d-m-y");
    $edit_post_comment_count = 4;
    move_uploaded_file($edit_post_image_temp, "../images/$edit_post_image");
    if(empty($post_image)){
        $query = "select * from posts where post_id = '$edited_post_id'";
        $select_image = mysqli_query($connection,$query);
        while($row = mysqli_fetch_array($select_image)){
            $post_image = $row['post_image'];
        }
    }
    $query = "update posts set post_category_id = '$edit_post_category_id',post_title ='$edit_post_title',post_author = '$edit_post_author',post_date = now(),post_image = '$edit_post_image',post_content = '$edit_post_content',post_tags = '$edit_post_tags',post_comment_count = '$edit_post_comment_count',post_status  = '$edit_post_status' where post_id = '$edited_post_id'";
    $edit_post_query = mysqli_query($connection, $query);
    if (!$edit_post_query) {
        die("QUERY FAILED" . mysqli_error($connection));
    } else {
        header("Location: posts.php");
    }
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Post Title</label>
        <input type="text" class="form-control" name="edit_post_title" value="<?php echo $post_title; ?>">
    </div>
    <div class="form-group">
        <label>Post Category Id</label>
        <select class="form-control" name="edit_post_category_id" id="edit_post_category">
            <?php
            $query = "select * from categories";
            $select_categories = mysqli_query($connection, $query);
            if (!$select_categories)
                die("QUERY FAILED:" . mysqli_error($connection));
            while ($row = mysqli_fetch_assoc($select_categories)) {
                $cat_id = $row['category_id'];
                $cat_title = $row['category_title'];
                ?>
                <option value="<?php echo $cat_id; ?>"><?php echo $cat_title; ?></option>
            <?php }; ?>
        </select>


    </div>
    <div class="form-group">
        <label>Post Author</label>
        <input type="text" class="form-control" name="edit_post_author" value="<?php echo $post_author; ?>">
    </div>
    <div class="form-group">
        <label>Post Status</label>
        <input type="text" class="form-control" name="edit_post_status" value="<?php echo $post_status; ?>">
    </div>
    <div class="form-group">
        <label>Post Image</label>
        <br>
        <img width="100" height="90" src="../images/<?php echo $post_image ?>" alt="">
    </div>
    <div class="form-group">
        <label>Post Tags</label>
        <input type="text" class="form-control" name="edit_post_tags" value="<?php echo $post_tags; ?>">
    </div>
    <div class="form-group">
        <label>Post Content</label>
        <textarea class="form-control" name="edit_post_content" cols="30"
                  rows="10"><?php echo $post_content; ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary" name="edit_post_submit">Edit Post</button>
</form>

<?php
if (isset($_POST['add_post_submit'])) {
    $added_post_title = $_POST['add_post_title'];
    $added_post_category_id = $_POST['add_post_category_id'];
    $added_post_author = $_POST['add_post_author'];
    $added_post_status = $_POST['add_post_status'];

    $added_post_image = $_FILES['image']['name'];
    $added_post_image_temp = $_FILES['image']['tmp_name'];

    $added_post_tags = $_POST['add_post_tags'];
    $added_post_content = $_POST['add_post_content'];

    $added_post_date = date("d-m-y");
    $added_post_comment_count = 4;

    move_uploaded_file($added_post_image_temp, "../images/$added_post_image");

    $query = "insert into posts(post_category_id,post_title,post_author,post_date,post_image,post_content,post_tags,post_comment_count,post_status) 
              values('$added_post_category_id','$added_post_title','$added_post_author',now()
              ,'$added_post_image','$added_post_content','$added_post_tags','$added_post_comment_count','$added_post_status')";
    $added_post_query = mysqli_query($connection, $query);
    if (!$added_post_query) {
        die("QUERY FAILED" . mysqli_error($connection));
    } else {
        header("Location: posts.php");
    }
}

?>


<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Post Title</label>
        <input type="text" class="form-control" name="add_post_title">
    </div>
    <div class="form-group">
        <label>Post Category Id</label>
        <input type="text" class="form-control" name="add_post_category_id">
    </div>
    <div class="form-group">
        <label>Post Author</label>
        <input type="text" class="form-control" name="add_post_author">
    </div>
    <div class="form-group">
        <label>Post Status</label>
        <input type="text" class="form-control" name="add_post_status">
    </div>
    <div class="form-group">
        <label>Post Image</label>
        <input type="file" class="form-control" name="add_post_image">
    </div>
    <div class="form-group">
        <label>Post Tags</label>
        <input type="text" class="form-control" name="add_post_tags">
    </div>
    <div class="form-group">
        <label>Post Content</label>
        <textarea class="form-control" name="add_post_content" cols="30" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary" name="add_post_submit">Add Post</button>
</form>
<?php include "includes/header.php"; ?>
    <!-- Navigation -->
<?php include "includes/navigation.php"; ?>
    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <h1 class="page-header">
                Page Heading
                <small>Secondary Text</small>
            </h1>
            <!--  BLOG POSTS -->
            <?php
            if (isset($_GET['p_id'])) {
                $post_id = $_GET['p_id'];
            }


            $query = "select * from posts where post_id = '$post_id'";
            $select_all_posts_query = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
                ?>
                <h2>
                    <a href="#"><?php echo $row['post_title']; ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $row['post_author']; ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $row['post_date']; ?></p>
                <hr>
                <img class="img-responsive" src="./images/<?php
                if ($row['post_image'] == "" || $row['post_image'])
                    echo 'nothing.jpg';
                else
                    echo $row['post_image'];
                ?>" alt="">
                <hr>
                <p><b>TAGS<br></b><?php echo $row['post_tags']; ?></p>
                <hr>
            <?php }; ?>

            <!-- ######################### COMMENT SECTİON #########################    -->


            <?php

            if (isset($_POST['create_comment'])) {
                $post_id = $_GET['p_id'];
                $comment_author = $_POST['comment_author'];
                $comment_email = $_POST['comment_email'];
                $comment_content = $_POST['comment_content'];
                $query = "insert into comments(comment_post_id,comment_author,comment_email,
                            comment_content,comment_status,comment_date) values('$post_id','$comment_author',
                            '$comment_email','$comment_content','unapproved',now()) ";
                $create_comment_query = mysqli_query($connection, $query);
                if ($create_comment_query)
                    echo "<div class='alert alert-success'>Comment Create was success!</div>";
                else
                    die("<div class='alert alert-warning'>Comment Create was not success! QUERY FAILED" . mysqli_error($connection) . "</div>");
            }


            ?>
            <!-- Comments Form -->
            <div class="well">
                <h4>Leave a Comment:</h4>
                <form action="" method="post" role="form">
                    <div class="form-group">
                        <input placeholder="Comment Author..." type="text" class="form-control" name="comment_author">
                    </div>
                    <div class="form-group">
                        <input placeholder="Comment Author's Email..." type="email" class="form-control"
                               name="comment_email">
                    </div>
                    <div class="form-group">
                        <textarea name="comment_content" placeholder="Comment Content..." class="form-control"
                                  rows="3"></textarea>
                    </div>
                    <button name="create_comment" type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

            <hr>


            <!-- Comment -->

            <?php
            $query = "select * from comments where comment_post_id = '$post_id' and comment_status = 'approve'";
            $get_all_comments_query = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_array($get_all_comments_query)) {
                $comment_author = $row['comment_author'];
                $comment_content = $row['comment_content'];
                $comment_date = $row['comment_date'];
                ?>
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $comment_author; ?>
                            <small><?php echo $comment_date; ?></small>
                        </h4>
                        <?php echo $comment_content; ?>
                    </div>
                </div>
            <?php }; ?>

        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Footer -->
<?php include "includes/footer.php"; ?>
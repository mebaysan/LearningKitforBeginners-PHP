<?php require "includes/db.php"; ?>
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

            <?php
            if (isset($_POST['submit'])) {
                if ($_POST['search_key'] == null)
                    echo "<div class='alert alert-danger'>Lütfen arama kelimesi girin</div>";
                $search_key = $_POST['search_key'];
                $query = "select * from posts where post_title || post_tags like '%$search_key%' "; // post_title veya post_tags içerisinde search_key geçenler dedik.
                $select_search_query = mysqli_query($connection, $query);
                if (!$select_search_query)
                    die("QUERY FAILED : " . mysqli_error($connection));
                $count = mysqli_num_rows($select_search_query); // mysqli_num_rows -> dönen datanın satır sayısını verir
                if ($count == 0)
                    echo "<div class='alert alert-warning'>Sonuç bulunamadı</div>";
                while ($row = mysqli_fetch_assoc($select_search_query)) {
                    ?>
                    <h2>
                        <a href="#"><?php echo $row['post_title']; ?></a>
                    </h2>
                    <p class="lead">
                        by <a href="index.php"><?php echo $row['post_author']; ?></a>
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span> <?php echo $row['post_date']; ?></p>
                    <hr>
                    <img class="img-responsive" src="./images/<?php echo $row['post_image']; ?>" alt="">
                    <hr>
                    <p><b>TAGS<br></b><?php echo $row['post_tags']; ?></p>
                    <a class="btn btn-primary" href="#">Read More <span
                                class="glyphicon glyphicon-chevron-right"></span></a>
                    <hr>
                    <?php
                }
            } ?>
        </div>


        <!-- Blog Sidebar Widgets Column -->
        <?php include "includes/sidebar.php"; ?>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Footer -->
<?php include "includes/footer.php"; ?>
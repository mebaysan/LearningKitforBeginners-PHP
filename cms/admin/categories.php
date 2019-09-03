<?php include "includes/admin_header.php"; ?>
<div id="wrapper">

    <!-- Navigation -->
    <?php include "includes/admin_navigation.php"; ?>
    <?php
    //      DELETE CATEGORY
    if (isset($_GET['delete'])) {
        $deleted_id = $_GET['delete'];
        $query = "delete from categories where category_id = '$deleted_id' ";
        $delete_kategori_query = mysqli_query($connection, $query);
        header("Location: categories.php");
    }
    ?>


    <?php
    if (isset($_POST['process_add_category_title'])) {
        $category_title = $_POST['add_category_title'];
        if ($category_title == "" || empty($category_title)) {
            echo "<script>alert('Category title not be empty');</script>";
        } else {
            $query = "insert into categories(category_title) value ('$category_title')";
            $added_query = mysqli_query($connection, $query);
            if ($added_query) {
                echo "<script>alert('Category added was be success!');</script>";
                header("Location: categories.php");
            } else {
                echo "<script>alert('QUERY FAILED');</script>";
                die("QUERY FAILED!");
            }
        }
    }

    ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Welcome to admin
                        <small>Author</small>
                    </h1>
                    <div class="col-xs-6">
                        <div style="display: none;" id="process_status">
                        </div>
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="category_title">Add Category</label>
                                <input type="text" class="form-control" id="add_category_title"
                                       name="add_category_title">
                                <input type="hidden" name="process_add_category_title" value="1">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" id="btn_add_category" value="Add Category">
                            </div>
                        </form>


                        <?php
                        // UPDATE CATEGORY
                        if (isset($_GET['update'])) {
                            $cat_id = $_GET['update'];
                            $query = "select * from categories where category_id = '$cat_id'";
                            $select_edit_category = mysqli_query($connection, $query);
                            while ($row = mysqli_fetch_assoc($select_edit_category)) {
                                $cat_id = $row['category_id'];
                                $cat_title = $row['category_title'];

                                ?>
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="edit_category_title">Update Category</label>
                                        <input type="text" class="form-control" id="edit_category_title"
                                               name="edit_category_title" value="<?php echo $cat_title; ?>">
                                        <input type="hidden" name="edit_category_id" value="<?php echo $cat_id; ?>">
                                        <input type="hidden" name="submit_edit_category_title" value="1">
                                    </div>
                                    <div class="form-group">
                                        <input class="btn btn-primary" type="submit" id="btn_add_category"
                                               value="Add Category">
                                    </div>
                                </form>
                            <?php }
                        }
                        if (isset($_POST['submit_edit_category_title'])) {
                            $edited_cat_id = $_POST['edit_category_id'];
                            $edited_cat_title = $_POST['edit_category_title'];
                            $query = "update categories set category_title = '$edited_cat_title' where category_id = '$edited_cat_id'";
                            $edited_query = mysqli_query($connection, $query);
                            if ($edited_query) {
                                echo "<script>alert('Edited was success');</script>";
                                header("Location: categories.php");
                            }
                        }

                        ?>


                    </div>
                    <div class="col-xs-6">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $query = "select * from categories";
                            $select_all_categories = mysqli_query($connection, $query);
                            while ($row = mysqli_fetch_assoc($select_all_categories)) {
                                $category_id = $row['category_id'];
                                $category_title = $row['category_title'];
                                ?>
                                <tr>
                                    <td><?php echo $category_id ?></td>
                                    <td><?php echo $category_title ?></td>
                                    <!--  <td>

                                        <input type="submit" class="btn btn-danger btn_delete_category"
                                               data-deger="<?php echo $category_id; ?>" value="Sil">
                                    </td>  -->
                                    <td><a class="btn btn-danger"
                                           href="categories.php?delete=<?php echo $category_id; ?>">Delete</a></td>
                                    <td><a class="btn btn-info"
                                           href="categories.php?update=<?php echo $category_id; ?>">Update</a></td>
                                </tr>
                            <?php }; ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->
    <?php include "includes/admin_footer.php"; ?>
    <!-- <script src="/admin/js/my_ajax.js"></script> -->


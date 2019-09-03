<?php include "includes/admin_header.php"; ?>
<div id="wrapper">

    <!-- Navigation -->
    <?php include "includes/admin_navigation.php"; ?>


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
                        <div class="form-group">
                            <label for="category_title">Add Category</label>
                            <input type="text" class="form-control" id="add_category_title">
                            <input type="hidden" name="process_add_category_title" value="1">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" id="btn_add_category" value="Add Category">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category Title</th>
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
    <script src="/admin/js/my_ajax.js"></script>


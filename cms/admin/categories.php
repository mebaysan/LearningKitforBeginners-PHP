<?php include "includes/admin_header.php"; ?>
<div id="wrapper">

    <!-- Navigation -->
    <?php include "includes/admin_navigation.php"; ?>
    <?php include "functions.php"; ?>
    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Welcome to admin
                        <small>Author</small>
                    </h1>


                    <!-- ADD CATEGORY -->
                    <div class="col-xs-6">
                        <?php insert_category(); ?>
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="add_category_title">Add Category</label>
                                <input type="text" class="form-control" id="add_category_title"
                                       name="add_category_title">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" id="btn_add_category_title"
                                       name="btn_add_category_title"
                                       value="Add Category">
                            </div>
                        </form>
                        <!-- /ADD CATEGORY -->


                        <!-- UPDATE AND INCLUDE   -->
                        <?php
                        if (isset($_GET['edit'])) {
                            $category_id = $_GET['edit'];
                            include "includes/update_category.php";
                            ?>


                        <?php } ?>
                        <!-- /UPDATE AND INCLUDE   -->


                    </div>
                    <div class="col-xs-6">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category Title</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>


                            <!--  GET ALL CATEGORIES  -->
                            <?php get_all_categories(); ?>
                            <!--  /GET ALL CATEGORIES  -->


                            </tbody>


                            <!--  DELETE CATEGORY  -->
                            <?php delete_category(); ?>
                            <!--  /DELETE CATEGORY  -->


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



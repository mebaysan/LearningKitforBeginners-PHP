<!-- EDIT CATEGORY  -->
<form action="" method="post">
    <div class="form-group">
        <label for="edit_category_title">Edit Category</label>
        <?php
        if (isset($_GET['edit'])) {
            $category_id = $_GET['edit'];

            $query = "select * from categories where category_id = '$category_id'";
            $select_category_id = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($select_category_id)) {
                $category_id = $row['category_id'];
                $category_title = $row['category_title'];
                ?>
                <input type="text" class="form-control" id="edit_category_title"
                       value="<?php if (isset($category_title)) {
                           echo $category_title;
                       }
                       ?>">
            <?php }
        } ?>

    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" id="btn_edit_category_title" name="edit_category"
               value="Edit Category">
    </div>
</form>
<!-- /EDIT CATEGORY  -->
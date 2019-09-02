<?php
include "../includes/db.php";
if (isset($_POST['kategori'])) {
    $added_category_title = $_POST['kategori'];
    if ($added_category_title == null || empty($added_category_title)) {
        $arr['process'] = 'warning';
        $arr['message'] = 'Category title must be at least 3 characters!! ';
        echo json_encode($arr);
        die();
    }
    $query = "insert into categories(category_title) value('$added_category_title')";
    $added_category_title_query = mysqli_query($connection, $query);
    if ($added_category_title_query) {
        $arr['process'] = 'success';
        $arr['message'] = 'Process is success';
        echo json_encode($arr);
    }
    else{
        $arr['process'] = 'danger';
        $arr['message'] = 'Query FAILED' . mysqli_error($connection);
        echo json_encode($arr);
        die();
    }
}
?>
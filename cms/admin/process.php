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
        $arr['message'] = 'Category added was successfully';
        echo json_encode($arr);
    } else {
        $arr['process'] = 'danger';
        $arr['message'] = 'Query FAILED' . mysqli_error($connection);
        echo json_encode($arr);
        die();
    }
}



if (isset($_POST['deleted_kategori_id'])) {
    $deleted_kategori_id = $_POST['deleted_kategori_id'];
    $query = "delete from categories where category_id = '$deleted_kategori_id' ";
    $delete_kategori_query = mysqli_query($connection, $query);
    if ($delete_kategori_query === true) {
        $giden = array(
            "message" => 'Category is deleted',
            "process" => 'success',
        );
        echo json_encode($giden);
    } else {
        $giden = array(
            "message" => 'Category is not deleted! QUERY FAILED',
            "process" => 'danger',
        );
        echo json_encode($giden);

    }
}
?>
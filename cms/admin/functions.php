<?php
include "../includes/db.php";

function insert_category()
{
    global $connection;
    if (isset($_POST['add_category_title'])) {
        $category_title = $_POST['add_category_title'];
        if ($category_title == "" || empty($category_title)) {
            echo "<span style='color:red;'>This field should not be empty</span>";
        } else {
            $query = "insert into categories (category_title) value ('$category_title')";
            $insert_category_query = mysqli_query($connection, $query);
            if (!$insert_category_query) {
                die("QUERY FAILED" . mysqli_error($connection));
            }
        }
    }
}


function delete_category()
{
    global $connection;
    if (isset($_GET['delete'])) {
        $category_id = $_GET['delete'];
        $query = "delete from categories where category_id = {$category_id}";
        $delete_query = mysqli_query($connection, $query);
        header("Location: categories.php");
    }
}

function get_all_categories()
{
    global $connection;
    $query = "select * from categories";
    $select_all_categories = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($select_all_categories)) {
        $category_id = $row['category_id'];
        $category_title = $row['category_title'];
        echo "<tr>";
        echo "<td>{$category_id}</td>";
        echo "<td>${category_title}</td>";
        echo "<td><a href='categories.php?delete={$category_id}'>Delete</a></td>";
        echo "<td><a href='categories.php?edit={$category_id}'>Edit</a></td>";
        echo "<tr>";
    }
}


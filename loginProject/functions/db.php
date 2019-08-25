<?php
$con = mysqli_connect("localhost", "root", "2976", "login");



function row_count($result)
{
    return mysqli_num_rows($result);
}

function escape($string)
{
    global $con;
    return mysqli_real_escape_string($con, $string); // kod parçacığı olarak gönderilen stringelere müdahale eder
}

function query($query)
{
    global $con;
    return mysqli_query($con, $query);
}

function confirm($result)
{
    global $con;
    if (!$result) {
        die("<div class='alert alert-danger'>SQL HATASI : " . mysqli_error($con) . "</div>");
    }
}

function fetch_array($result)
{
    global $con;
    return mysqli_fetch_array($result);

}

<?php
include "config.php";

$id = $_GET['c_id'];

$sql = "DELETE  FROM `category` WHERE c_id ='$id'";

$del = mysqli_query($conn, $sql);

if($del)
{
    echo "<script>window.location.href='category.php'</script>";
}
?>
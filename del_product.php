<?php
    require "cdb.php";
    $id = $_GET['id'];
    $qry = "delete from products where ID = $id";
    $res = mysqli_query($cdb,$qry);
    header("location:add_product.php");
?>
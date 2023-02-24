<?php 
    include 'config.php';
    session_start();


    if(!in_array($_GET['p_id'], $_SESSION['cart']))
    {
        array_push($_SESSION['cart'], $_GET['p_id']);
        $_SESSION['message'] = "Product Added To Cart";
    }
    else
    {
        $_SESSION['message'] = "Product Is Already In Cart";
    }

    header('location:cart.php');
        // echo "<script>window.location.href='productlist.php'</script>";

?>
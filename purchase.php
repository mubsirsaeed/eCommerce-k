<?php
include 'config.php';
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['btn']))
    {
        $fname =$_POST['fname'];
        $date =$_POST['date'];
        $address =$_POST['address'];
        $city =$_POST['city'];
        $zipcode =$_POST['zipcode'];
        $phone =$_POST['phone'];
        $email =$_POST['email'];
        $optradio =$_POST['optradio'];

        $sql = "INSERT INTO `orders`(`order_by`, `order_date`, `address`, `city`, `postal_code`, `phone_no`, `email`, `pay_method`)
        VALUES ('$fname','$date','$address','$city','$zipcode','$phone','$email','$optradio')";

        $ord = mysqli_query($conn, $sql);
        
        if($ord)
        {
            $order_id = mysqli_insert_id($conn);

            $sql1 = "INSERT INTO `items`(`item_order_id`, `item_p_id`, `item_qty`) 
            VALUES (?,?,?)";

            $stmt = mysqli_prepare($conn, $sql1);

            if($stmt)
            {
                mysqli_stmt_bind_param($stmt, "iii", $order_id, $item_p_id,$item_qty);

                foreach($_SESSION['cart'] as $key => $values)
                {
                    $item_p_id = $values    ;
                    $x=$x+0;
                    for($i=$x; $i<=$x; $i++)
                    {
                        $item_qty = $_SESSION['qty_array'][$i];
                       mysqli_stmt_execute($stmt); 
                    }
                    $x=$x+1;
                }
                unset($_SESSION['cart']);
                echo "<script> alert(Order placed); </script>";

                header('location:user_invoice.php');
            }
        }
    }

    else{
        echo "error";
    }
 


}
else{
    echo 'false';
}   
?>
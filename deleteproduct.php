<?php include "config.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  
</head>

<body>
  <?php include "dashboard_header.php"?>
    <div class="container-scroller" style="width:100%">  
        <div style="margin:8%;" >
                <?php
                  
                    $p_id = $_GET['p_id'];

                    $sql = "SELECT * FROM `products` WHERE p_id = '$p_id'";
                    
                    $edit = mysqli_query($conn, $sql);
                    
                    $row = mysqli_fetch_array($edit);
                ?>
            <div class="container">
				<div class="row">
                <form action="" method="post">
                <div class="card mb-3" >
                    <img class="card-img-top" src='data:image/jpg;base64,<?php echo base64_encode($row['p_img'])?>' alt="Card image cap" style="width:30%; height:20%;">  
                    <div class="card-body" style="margin-left:30%;margin-top:-30%;">
                        <h1 ><?php echo$row['p_name']?></h1>
                        <h4 class="card-text"><?php echo$row['p_discription']?></h4>
                         <h4><?php echo$row['p_code']?>&nbsp;&nbsp;<?php echo$row['p_number']?></h4>
                         <h4><?php echo$row['p_amount']?>Rs.</h4>   
                         <h4><?php echo$row['p_qty']?>Qty</h4>
                    <br><br><br>     
                    <button type="submit" class="btn btn-primary me-2"  name="btn">Delete</button>
                    <a href="product.php" class="btn btn-light"> Cancel </a>
                    </div>
                </div>

                <?php
                if(isset($_POST['btn']))
                {
                    $sql="DELETE FROM `products` WHERE p_id = '$p_id'";
                    $delete = mysqli_query($conn, $sql);
                    if($delete)
                    {
                        echo "<script>window.location.href='product.php'</script>";
                    }
                    else
                    {
                        echo "Opps some ting wrong";
                    }
                }
                
                ?>
                </form>
				</div>
			</div>
        </div>
    </div>

<!-- 
  <script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script> -->
<script src="dashboard/js/formpickers.js"></script>
  <script src="dashboard/js/form-addons.js"></script>
  <script src="dashboard/js/x-editable.js"></script>
  <script src="dashboard/js/dropify.js"></script>
  <script src="dashboard/js/dropzone.js"></script>
  <script src="dashboard/js/jquery-file-upload.js"></script>
  <script src="dashboard/js/formpickers.js"></script>
  <script src="dashboard/js/form-repeater.js"></script>
  <script src="dashboard/js/inputmask.js"></script>      

</body>
</html>
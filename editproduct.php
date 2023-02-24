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
      <!-- partial -->
      <div class="" >        
        <div class="content-wrapper">       
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Product</h4>
                  <?php
                  
                  $p_id = $_GET['p_id'];
                 
                  $sql = "SELECT * FROM  products  WHERE p_id = '$p_id'";
                  
                  $edit = mysqli_query($conn, $sql);
                  
                  $row = mysqli_fetch_array($edit);
                  ?>
                  <form class="forms-sample" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputName1">Product Title</label>
                      <input type="text" class="form-control" name="p_title" id="exampleInputName1" value="<?php echo $row['p_name']?>"  >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Product Description</label>
                      <input type="text" class="form-control" name="p_des" id="exampleInputName1" value="<?php echo $row['p_discription']?>"  >
                    </div>
                      
                    <div class="form-group">
                      <label for="exampleInputEmail3">Product Code</label>
                      <input type="text" class="form-control" id="exampleInputEmail3" name="p_code" value="<?php echo $row['p_code']?>" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Producut Number</label>
                      <input type="text" class="form-control" id="exampleInputPassword4" name="p_num"  value="<?php echo $row['p_number']?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Amount</label>
                      <input type="text" class="form-control" id="exampleInputPassword4" name="p_amount" value="<?php echo $row['p_amount']?>">  
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Quantity</label>
                      <input type="text" class="form-control" id="exampleInputCity1"  name="p_qty" value="<?php echo $row['p_qty']?>">
                    </div>
                    <!-- <div class="form-group">
                     <label>File upload</label>
                      <div class="custom-file mb-4" >
                        <input type="file" class="custom-file-input " id="customFile" name="p_img" >
                        <label class="custom-file-label" for="customFile">Choose file</label>
                      </div>
                    </div> --> 
                    <div class="col-lg-5 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title d-flex">File upload
                          </h4>
                          <input type="file" class="dropify" name="p_img"/>
                        </div>
                      </div>
                    </div>
                    <img src="data:image/jpg;base64,"<?php echo base64_encode($row['p_img'])?> alt="">

                    <button type="submit" class="btn btn-primary me-2" name="btn">Submit</button>
                    <a href="data-table.php" class="btn btn-light"> Cancel </a>
                    
                  <?php
                    
                    if (isset($_POST['btn']))
                    {
                        $p_title = $_POST['p_title'];
                        $p_des = $_POST['p_des'];
                        $p_code = $_POST['p_code'];
                        $p_num = $_POST['p_num'];
                        $p_amount = $_POST['p_amount'];
                        $p_qty = $_POST['p_qty'];

                        // $p_id = $p_code . $p_num ;

                        $p_img_name = $_FILES['p_img']['name'];
                        $img_temp_name = $_FILES['p_img']['tmp_name'];
                        $allowed_ext =['jpg','jpeg','png', 'webp', 'jfif'];
                        $ConvertToLowerCase =strtolower(pathinfo($_FILES['p_img']['name'], PATHINFO_EXTENSION));
                        
                        // print_r($_FILES['p_img']);

                        
                        if(isset($_FILES['p_img']))
                        {
                            if(in_array($ConvertToLowerCase,$allowed_ext))
                            {

                            
                            $bloobimg = addslashes(file_get_contents($img_temp_name));
                            $sql = "UPDATE products SET   p_code ='$p_code', p_number ='$p_num', p_name ='$p_title', p_discription ='$p_des', p_amount ='$p_amount',
                            p_qty ='$p_qty', p_img_name ='$p_img_name',
                            p_img='$bloobimg' where p_id='$p_id'";
                            // $sql="UPDATE  products  SET  p_code ='$p_code', p_number ='$p_num', p_name ='$p_title', p_discription ='$p_des',
                            //  p_amount ='$p_amount', p_qty ='$p_qty', p_img_name ='$p_img_name', p_img ='$bloobimg' WHERE p_id = '$p_id'";
                            
                            $result = mysqli_query($conn, $sql);
                                if($result)
                                {
                                    echo "<script>window.location.href='product.php'</script>";
                                
                                }
                            }
                            else
                            {

                            $sql="UPDATE  products  SET  p_code ='$p_code', p_number ='$p_num', p_name ='$p_title', p_discription ='$p_des',
                             p_amount ='$p_amount', p_qty ='$p_qty' WHERE p_id = '$p_id'";

                            $result = mysqli_query($conn, $sql);
                                if($result)
                                {
                                    echo "<script>window.location.href='product.php'</script>";
                                
                                }
                            }
                        }
                        else{
                          $sql="UPDATE  products  SET  p_code ='$p_code', p_number ='$p_num', p_name ='$p_title', p_discription ='$p_des',
                           p_amount ='$p_amount', p_qty ='$p_qty' WHERE p_id = '$p_id'";

                          $result = mysqli_query($conn, $sql);
                              if($result)
                              {
                                  echo "<script>window.location.href='product.php'</script>";
                              
                              }
                        }
                    }

                  ?>

                  </form>
                </div>
              </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
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
<?php include "dashboard_footer.php"?>
</body>
</html>
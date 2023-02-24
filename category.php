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
                  <h4 class="card-title">Category</h4>

                  <?php
                  if(isset($_GET['c_id']))
                  {
                  $id = $_GET['c_id'];
                  
                  $sql= "SELECT * FROM `category` WHERE c_id = '$id'";

                  $upd = mysqli_query($conn,$sql);

                  $row = mysqli_fetch_array($upd);
                  
                  ?>


                  <form class="forms-sample" method="post" enctype="multipart/form-data">
                    <div class="form-group col-6">
                      <label for="exampleInputName1">ADD CATEGORY</label>
                      <input type="text" class="form-control" name="c_name" value='<?php echo $row['c_name']?>'  >
                    </div>
                    <div style="margin-left:50%; margin-top:-6.5%">
                    <button type="submit" class="btn btn-primary me-2" name="upd">Submit</button>
                    <a href="category.php" class="btn btn-light">Cancel</a>
                    </div>
                    </form>
                    <?php
                    
                    if (isset($_POST['upd']))
                    {
                      $c_name = $_POST['c_name'];
                      

                      $sql = "UPDATE `category` SET `c_name`='$c_name' WHERE c_id = '$id'";
                      
                      $result = mysqli_query($conn, $sql);
                      if($result)
                      {
                        echo "<script>window.location.href='category.php'</script>";
                      }
                    }
                
                
                
                        }
                    
                    else{
                    ?>

                    
                  <form class="forms-sample" method="post" enctype="multipart/form-data">
                    <div class="form-group col-6">
                      <label for="exampleInputName1">ADD CATEGORY</label>
                      <input type="text" class="form-control" name="c_name" id="exampleInputName1"  >
                    </div>
                    <div style="margin-left:50%; margin-top:-6.5%">
                    <button type="submit" class="btn btn-primary me-2" name="btn">Submit</button>
                    <a href="Admin.php" class="btn btn-light">Cancel</a>
                    
                    </div>
                    <?php } ?>
                  <?php
                    
                    if (isset($_POST['btn']))
                    {
                      $c_name = $_POST['c_name'];
                      

                      $sql = "INSERT INTO `category`(`c_name`) VALUES ('$c_name')";
                      
                      $result = mysqli_query($conn, $sql);
                      if($result)
                      {
                        echo "<script>window.location.href='category.php'</script>";
                      }
                    }
                    
                  ?>



                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>CATEGORY</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          
                          $sql = "SELECT * FROM `category`";

                          $show = mysqli_query($conn, $sql);

                          while ($row = mysqli_fetch_array($show) )
                          {
                            
                          ?>
                          
                        <tr>
                            <td><?php echo $row['c_name']?></td>
                           
                            <td>
                              <a href="category.php?c_id=<?php echo $row['c_id']?>" class="btn btn-outline-primary">
                              Update
                              </a>
                              <a href="delete_cat.php?c_id=<?php echo $row['c_id']?>" class="btn btn-outline-primary" >
                              Delete
                              </a>
                              
                            </td>
                        </tr>
                        <?php }?>
                      </tbody>
                      
                    </table>

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

  <script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
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


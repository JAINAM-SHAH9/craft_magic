<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>crafty Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <style>
    body {
        background-color: #f8f9fa; /* Set background color */
    }
    .form-container {
        background-color: #ffffff; /* Set form background color */
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1); /* Add box shadow */
    }
    .form-container label {
        font-weight: bold;
    }
    .form-container select {
        height: 38px;
    }
    .form-container input[type="submit"] {
        background-color: #007bff;
        border: none;
    }
    .form-container input[type="submit"]:hover {
        background-color: #0069d9;
    }
</style>
</head>
<body>
  <div class="container-scroller">
   
    <!-- partial:partials/_navbar.php -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="index.php"><img src="images/newlogo.jpeg" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="index.php"><img src="images/newlogo.jpeg" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>

      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
       
        <ul class="navbar-nav navbar-nav-right">
                  
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <span class="nav-profile-name">Admin</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              
            <a class="dropdown-item" href="logout.php">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.php -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  id="Category" data-bs-toggle="collapse" href="#cat" aria-expanded="false" aria-controls="cat">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title">Category</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse multi-collapse" id="cat">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="itemadd.php"> Add </a></li>     
              </ul>
            </div>
          </li>          
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">Products</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="productadd.php"> Add </a></li>                
              </ul>
            </div>
          </li>  
          
          <li class="nav-item">
            <a class="nav-link" id="Orders" data-bs-toggle="collapse" href="#ord" aria-expanded="false" aria-controls="ord">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title">Orders</span>
              <i class="menu-arrow"></i>
            </a>
              <i class="menu-arrow"></i>
            <div class="collapse" id="ord">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="orderview.php"> View </a></li>     
              </ul>
            </div>
          </li>

          
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#user" aria-expanded="false" aria-controls="auth">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">User</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="user">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="userdetail.php">View </a></li>        
              </ul>
            </div>
          </li>   
          

        </ul>
      </nav>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
       
       
<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<?php
 $conn = mysqli_connect("localhost", "root", "", "crafty");

    if(isset($_POST["add"]))
    {
        $pname=$_POST["pname"];
        $price=$_POST["price"];
        $filename=uplode();
        $cat=$_POST["cat"];
        $dis=$_POST["dis"];

        $add="INSERT INTO product (name,catagory,img,price,dis) VALUES ('$pname','$cat','$filename','$price','$dis');";
        $fire_add=mysqli_query($conn,$add);
        if(!$fire_add)  
        {
            echo mysqli_error($con);
        }

    ?>

<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>Sr.No</th>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Description</th>
            <th>Image</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "crafty");
        $sql = "SELECT * FROM `product`";
        $query = mysqli_query($conn, $sql);
        $count = 0;
        while ($res = mysqli_fetch_assoc($query)) {
            $count++;
        ?>
            <tr>
                <td><?php echo $count; ?></td>
                <td><?php echo $res['name']; ?></td>
                <td><?php echo $res['catagory']; ?></td>
                <td><?php echo $res['price']; ?></td>
                <td><?php echo $res['dis']; ?></td>
                <td><img src="../product_img/<?php echo $res['img']; ?>" style="max-height: 150px;"></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php
    }
    else
    {
  ?>
  <table class="table table-striped text-center">
    <thead>
        <tr>
            <th>Sr.No</th>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Description</th>
            <th>Image</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "crafty");
        $sql = "SELECT * FROM `product`";
        $query = mysqli_query($conn, $sql);
        $count = 0;
        while ($res = mysqli_fetch_assoc($query)) {
            $count++;
        ?>
            <tr>
                <td><?php echo $count; ?></td>
                <td><?php echo $res['name']; ?></td>
                <td><?php echo $res['catagory']; ?></td>
                <td><?php echo $res['price']; ?></td>
                <td><?php echo $res['dis']; ?></td>
                <td><img src="../product_img/<?php echo $res['img']; ?>" style="max-height: 150px;"></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php

    }
?>
</body>
                   <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</html>


       <?php
    include "conection.php";
    $data=file_get_contents("./catagory.txt");
    $data_arr=explode(",",$data);
    $ind=end($data_arr);

    
    $countproduct="SELECT * FROM product";
    $fire_count=mysqli_query($con,$countproduct);
    if(!$fire_count)
    {
        echo mysqli_error($con);
    }
    $product=mysqli_num_rows($fire_count);
    echo "Total Numbers Of Product:  ".$product;

    function uplode()//uplodes profilepicture
    {

        $file=$_FILES["product_img"];
        $file_name=$_FILES["product_img"]["name"];
        $file_tmp_name=$_FILES["product_img"]["tmp_name"];
        $file_size=$_FILES["product_img"]["size"];
        $file_error=$_FILES["product_img"]["error"];
        $file_type=$_FILES["product_img"]["type"];
        $file_get_ex=explode('.',$file_name);
        $file_ex=strtolower(end($file_get_ex));
        $allowed_ex=array('png','jpg','jpeg');

        if(in_array($file_ex,$allowed_ex))//this will chack if the file formate is alloud or not
        {
            if($file_error==0)
            {
                // if($file_size < 10485760)//5242880 byts = 2mb
                // {
                //     $file_new_name=uniqid('',true).".".$file_ex;

                //     $file_destination="product_img/". $file_new_name;

                //     move_uploaded_file($file_tmp_name,$file_destination);
                //     return $file_new_name;
                // }

                if ($file_size < 10485760) {
                  $file_new_name = uniqid('', true) . "." . $file_ex;
                  $file_destination = "../product_img/" . $file_new_name;
              
                  if (move_uploaded_file($file_tmp_name, $file_destination)) {
                      return $file_new_name;
                  } else {
                      echo "Error uploading file.";
                  }
              }
                else
                {
                    echo "<script>alert('This is too large file.')</script>";
                }
            }
            else
            {
                echo "<script>alert('There is a error in file uplode please try again.')</script>";
            }
        }
        else
        {
            echo "<script>alert('This file type is not allowed please enter a valid file type.')</script>";
        }

    }

//     function uplode()
// {
//     $file = $_FILES["product_img"];
//     $file_name = $_FILES["product_img"]["name"];
//     $file_tmp_name = $_FILES["product_img"]["tmp_name"];
//     $file_size = $_FILES["product_img"]["size"];
//     $file_error = $_FILES["product_img"]["error"];
//     $file_type = $_FILES["product_img"]["type"];
//     $file_get_ex = explode('.', $file_name);
//     $file_ex = strtolower(end($file_get_ex));
//     $allowed_ex = array('png', 'jpg', 'jpeg');

//     if (in_array($file_ex, $allowed_ex)) {
//         if ($file_error == 0) {
//             if ($file_size < 10485760) {
//                 $file_new_name = uniqid('', true) . "." . $file_ex;
//                 $file_destination = "product_img/" . $file_new_name;

//                 // Check if the directory exists, if not, create it
//                 if (!is_dir("product_img")) {
//                     mkdir("product_img");
//                 }

//                 move_uploaded_file($file_tmp_name, $file_destination);
//                 return $file_new_name;
//             } else {
//                 echo "<script>alert('This is too large file.')</script>";
//             }
//         } else {
//             echo "<script>alert('There is an error in file upload. Please try again.')</script>";
//         }
//     } else {
//         echo "<script>alert('This file type is not allowed. Please enter a valid file type.')</script>";
//     }
// }

?>

<form action="" method="post" enctype="multipart/form-data" class="container mt-5 form-container">
    <div class="form-group">
        <label>Product name :</label>
        <input type="text" name="pname" id="" placeholder="Product name" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Price of Product :</label>
        <input type="number" name="price" id="" placeholder="Price of product" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Product_img :</label>
        <input type="file" name="product_img" id="" class="form-control-file">
    </div>
    <div class="form-group">
        <label>Discription</label>
        <textarea name="dis" id="" cols="30" rows="10" placeholder="Discription" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <label>Select Category :</label>
        <select name="cat" id="" class="form-control" required>
            <option value="">--Select--</option>
            <?php
            for ($i = 0; $i < count($data_arr); $i++) {
                echo "<option value='$data_arr[$i]'>$data_arr[$i]</option>";
            }
            ?>
        </select>
    </div>
    <input type="submit" value="Add" name="add" class="btn btn-primary">
</form>

    

        </div>
        <!-- content-wrapper ends -->
     
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/data-table.js"></script>
  <script src="js/jquery.dataTables.js"></script>
  <script src="js/dataTables.bootstrap4.js"></script>
  <!-- End custom js for this page-->

  <script src="js/jquery.cookie.js" type="text/javascript"></script>
</body>

</html>


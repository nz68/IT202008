<?php

include("includes/db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta names="viewport" content="width=device-width,initial-scale=1">
    <title>Insert Product</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
    
<div class="row"> <!--row begin-->
    
    <div class="col-lg-12">
        
        <ol class="breadcrumb">
            
            <li class="active">
                
                Dashboard / Insert Product
                
            </li>
            
        </ol>
        
    </div>
    
</div> <!--row finish-->
   
<div class="row"> <!--row begin-->
    
    <div class="col-lg-12">
        
        <div class="panel panel-default">
            
            <div class="panel-heading">
                
                <h3 class="panel-title">
                    
                    Insert Product
                    
                </h3>
                
            </div>
            
            <div class="panel-body">
                
                <form method="post" class="form-horizontal" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        
                        <label class="col-md-3 control-label">Product Title</label>
                        
                        <div class="col-md-6">
                            
                            <input name="product_title" type="text" class="form-control" required>
                            
                        </div>
                        
                    </div>
                    
                    
                    
                    <div class="form-group">
                        
                        <label class="col-md-3 control-label">Product Category</label>
                        
                        <div class="col-md-6">
                            
                           <select name="product_cat" class="form-control">
                               
                               <option>Select Category Product</option>
                               
                               <?php
                               $get_p_cats = "select * from product_categories";
                               $run_p_cats = mysqli_query($con,$get_p_cats);
                               while ($row_p_cats=mysqli_fetch_array($run_p_cats)){
                                   $p_cat_id = $row_p_cats['p_cat_id'];
                                   $p_cat_title = $row_p_cats['p_cat_title'];
                                   
                                   echo"
                                   
                                   <option value='$p_cat_id'> $p_cat_title</option>
                                   
                                   ";
                               }
                               ?>
                               
                           </select>
                            
                        </div>
                        
                    </div>
                     <div class="form-group">
                        
                        <label class="col-md-3 control-label">Category</label>
                        
                        <div class="col-md-6">
                            
                           <select name="cat" class="form-control">
                               
                               <option>Select Category</option>
                               
                               <?php
                               $get_cat = "select * from categories";
                               $run_cat = mysqli_query($con,$get_cat);
                               
                               while ($row_cat=mysqli_fetch_array($run_cat)){
                                  
                                   $cat_id = $row_cat['cat_id'];
                                   $cat_title = $row_cat['cat_title'];
                                   
                                   echo"
                                   
                                   <option value='$cat_id'> $cat_title</option>
                                   
                                   ";
                               }
                               ?>
                               
                           </select>
                            
                        </div>
                        
                    </div>
                    
                    <div class="form-group"> <!--group begin-->
                        
                        <label class="col-md-3 control-label">Product Image</label>
                        
                        <div class="col-md-6">
                            
                            <input name="product_img1" type="file" class="form-control" required>
                            
                        </div>
                        
                    </div> <!--group finsih-->
                     
                     <div class="form-group"> <!--group begin-->
                        
                        <label class="col-md-3 control-label">Product Price</label>
                        
                        <div class="col-md-6">
                            
                            <input name="product_price" type="text" class="form-control" required>
                            
                        </div>
                        
                    </div> <!--group finsih-->
                     <div class="form-group"> <!--group begin-->
                        
                        <label class="col-md-3 control-label">Product Keywords</label>
                        
                        <div class="col-md-6">
                            
                            <input name="product_keywords" type="text" class="form-control" required>
                            
                        </div>
                        
                    </div> <!--group finsih-->
                    <div class="form-group"> <!--group begin-->
                        
                        <label class="col-md-3 control-label"></label>
                        
                        <div class="col-md-6">
                            
                            <input name="submit" value="Insert Product" type="submit" class="btn btn-primary form-control">
                            
                        </div>
                        
                    </div> <!--group finsih-->
                     
                </form>
                
            </div>
            
        </div>
        
    </div>
    
</div> <!--row finish-->
    
   <script src="js/bootstrap-337.min.css"></script>
   <script src="js/jquery-331.min.js"></script>
    

</body>
</html>


<?php 

if(isset($_POST['submit'])){
    
    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_cat'];
    $cat = $_POST['cat'];
    $product_price = $_POST['product_price'];
    $product_keywords = $_POST['product_keywords'];
    
    $product_img1 = $_FILES['product_img1']['name'];
    
    $temp_name = $_FILES['product_img1']['tmp_name'];
    
    move_uploaded_file($temp_name,"product_images/$product_img1");
    
    $insert_product="insert into products (p_cat_id,cat_id,product_title,product_img1,product_price,product_keywords) values('$product_cat','$cat','$product_title','$product_img1','$product_price','$product_keywords')";
    
    $run_product = mysqli_query($con,$insert_product);
    
    if($run_product){
        
        echo"<script>alert('Product has been added successfully')</script>";
        echo"<script>window.open('insert_product.php','_self')</script>";
    }
}

?>
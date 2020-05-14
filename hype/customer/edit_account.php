<h1 align="center">Edit Account</h1>

<form action="" method="post" enctype="multipart/form-data"> <!--form begin-->
    
  <div class="form-group">
      
      <label>Name:</label>
      
      <input type="text" name="c_name" class="form-control" required>
  
  </div>
  
   <div class="form-group">
      
      <label>Email:</label>
      
      <input type="text" name="c_email" class="form-control" required>
  
  </div>  
  
   <div class="form-group">
      
      <label>Image:</label>
      
      <input type="file" name="c_image" class="form-control" required>
      
      <img class="img-responsive" src="customer_images/user.jpg" alt="">
  
  </div>  
  
  <div class="text-center">
      
      <button name="update" class="btn btn-primary">
      
      Confirm
      
      </button>
    
  </div>
  
  
</form> <!--form finish-->
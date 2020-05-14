<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta names="viewport" content="width=device-width,initial-scale=1">
    <title>Hype Shop</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
  
   <div id="top"> <!--Top Begin-->
       
       <div class="container"> <!--Container Begin-->
           
           <div class="col-md-6 offer"> <!--col-md-6 offer Begin-->
               
               <a href="" class="btn btn-success btn-sm">Welcome</a>
               <a href="checkout.php">4 Items In Your Cart | Total Price: $300</a>
               
           </div> <!--col-md-6 offer Finish-->
           
           <div class="col-md-6"> <!--col-md-6 Begin-->
                
                <ul class="menu"> <!--cmenu Begin-->
                    
                     <li>
                        <a href="register.php">Register</a>
                    </li>
                    <li>
                        <a href="customer/account.php">My Account</a>
                    </li>
                    <li>
                        <a href="cart.php">Go To Cart</a>
                    </li>
                    <li>
                        <a href="checkout.php">Login</a>
                    </li>
                    
                </ul> <!--cmenu Finish-->
               
           </div> <!--col-md-6 Finish-->  
           
       </div> <!--Container Finish-->  
    
   </div> <!--Top Finish-->  
   
   <div id="navbar" class="navbar navbar-default"> <!--navbar-default begin-->
       
       <div class="container"> <!--container Begin-->
          
           <div class="navbar-header"> <!--navbar-header Begin-->
              
              <a href="index.php" class="navbar-brand home"> <!--navbar-home Begin-->
                  
                  <img src="images/hypeshop.PNG" alt="HypeShop Logo" class="hidden-xs">
                
                  
              </a> <!--navbar-home Finish-->
              
              <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                  
                  <span class="sr-only">Toggle Navigation</span>
                  
                  <i class="fa fa-align-justify"></i>
                  
              </button>
               <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                  
                  <span class="sr-only">Toggle Search</span>
                  
                  <i class="fa fa-search"></i>
                  
              </button>
               
           </div> <!--navbar-header Finish-->
           
           <div class="navbar-collapse collapse" id="navigation"> <!--navbar-collapse Begin-->
               
               <div class="padding-nav"> <!--padding-nav Begin-->
                   
                   <ul class="nav navbar-nav left"> <!--nav-left Begin-->
                       
                       <li>
                           <a href="index.php">Home</a>
                       </li>
                       <li>
                           <a href="shop.php">Shop</a>
                       </li>
                       <li>
                           <a href="customer/account.php">My Account</a>
                       </li>
                       <li class="active">
                           <a href="cart.php">Shopping Cart</a>
                       </li>
                   </ul> <!--nav-left Finish-->
                   
               </div> <!--padding-nav Finish-->
               
               <a href="cart.php" class="btn navbar-btn btn-primary right"> <!--navbar-btn primary Begin-->
                   
                   <i class="fa fa-shopping-cart"></i>
                   
                   <span>4 Items In Your Cart</span>
                   
               </a> <!--navbar-btn primary Finish-->
               
               <div class="navbar-collapse collapse right"> <!--navbar collapse Begin-->
                   
                   <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"> <!--primary navbar Begin-->
                       
                       <span class="glyphicon glyphicon-search">Search</span>
                       
                       <i class="fa fa-search"></i>
                       
                   </button> <!--primary navbar Finish-->
                   
               </div> <!--navbar collapse Finish-->
               
               <div class="collapse clearfix" id="search"> <!--collapse clearfix Begin-->
                  
                   <form method="get" action="results.php" class="navbar-form"> <!--navbar-form Begin-->
                       
                       <div class="input-group"> <!--input-group Begin-->
                           
                           <input type="text" class="form-control" placeholder="Search" name="user_query"> 
                           
                           <span class="input-group-btn"> <!--input-button begin-->
                           
                           <button type="submit" name="search" value="Search" class="btn btn-primary"> <!--btn primary Begin-->
                               
                               <i class="fa fa-search"></i>
                          
                            </button> <!--btn primary Finish-->
                            
                            </span> <!--input-group btn Finish-->
                            
                       </div> <!--input-group Finish-->
                       
                   </form> <!--navbar-form Finish-->
                   
               </div> <!--collapse clearfix Finish-->
               
           </div> <!--navbar-collapse Finish-->
           
       </div> <!--container Finish-->
       
   </div> <!--navbar-default Finish-->
   
   <div id="content"> <!--content Begin-->
       <div class="container"> <!--container Begin-->
           <div class="col-md-12"> <!--col-md-12 Begin-->
               
               <ul class="breadcrumb"> <!--breadcrumb Begin-->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Cart
                   </li>
               </ul> <!--breadcrumb Finish-->
               
           </div> <!--col-md-12 Finish-->
           
           <div id="cart" class="col-md-9"> <!--col-md-9 begin-->
               
               <div class="box"> <!--box begin-->
                   
                   <form action="cart.php" method="post" enctype="multipart/form-data"> <!--form begin-->
                       
                       <h1>Shopping Cart</h1>
                       <p class="text-muted">You currently have 3 item(s) in your cart</p>
                       
                       <div class="table-responsive"> <!--tableres begin-->
                           
                           <table class="table"> <!--table begin-->
                               
                               <thead> <!--thead begin-->
                                   
                                   <tr> <!--tr begin-->
                                       
                                       <th colspan="2">Product</th>
                                       <th>Quantity</th>
                                       <th>Price</th>
                                       <th>Size</th>
                                       <th colspan="1">Remove</th>
                                       <th colspan="2">Total</th>
                                       
                                   </tr> <!--tr finish-->
                                   
                               </thead> <!--thead finish-->
                               
                               <tbody> <!--tbody begin-->
                                  
                                  <tr> <!--tr begin-->
                                      
                                      <td>   
                                      
                                      <img class="img-responsive" src="admin_area/product_images/vans.jpg" alt="vans">
                                      
                                      </td>
                                      
                                      <td>
                                          
                                          <a href="#">Vans Checkered</a>
                                          
                                      </td>
                                      
                                      <td>
                                          2
                                      </td>
                                      
                                      <td>
                                          $60 
                                      </td>
                                      
                                      <td>
                                          9
                                      </td>
                                      
                                      <td>
                                         <input type="checkbox" name="remove[]"> 
                                      </td>
                                      
                                      <td>
                                          $120
                                      </td>
                                
                                      
                                  </tr> <!--tr finish-->
                                   
                               </tbody> <!--tbody finish-->
                               <tbody> <!--tbody begin-->
                                  
                                  <tr> <!--tr begin-->
                                      
                                      <td>   
                                      
                                      <img class="img-responsive" src="admin_area/product_images/air%20jordan%204%20retro%20se.png" alt="vans">
                                      
                                      </td>
                                      
                                      <td>
                                          
                                          <a href="#">Air Jordan retro SE</a>
                                          
                                      </td>
                                      
                                      <td>
                                          2
                                      </td>
                                      
                                      <td>
                                          $60 
                                      </td>
                                      
                                      <td>
                                          9
                                      </td>
                                      
                                      <td>
                                         <input type="checkbox" name="remove[]"> 
                                      </td>
                                      
                                      <td>
                                          $120
                                      </td>
                                
                                      
                                  </tr> <!--tr finish-->
                                   
                               </tbody> <!--tbody finish-->
                               <tbody> <!--tbody begin-->
                                  
                                  <tr> <!--tr begin-->
                                      
                                      <td>   
                                      
                                      <img class="img-responsive" src="admin_area/product_images/ultrabooost.jpg" alt="vans">
                                      
                                      </td>
                                      
                                      <td>
                                          
                                          <a href="#">Adidas Ultraboost White</a>
                                          
                                      </td>
                                      
                                      <td>
                                          2
                                      </td>
                                      
                                      <td>
                                          $60 
                                      </td>
                                      
                                      <td>
                                          9
                                      </td>
                                      
                                      <td>
                                         <input type="checkbox" name="remove[]"> 
                                      </td>
                                      
                                      <td>
                                          $120
                                      </td>
                                
                                      
                                  </tr> <!--tr finish-->
                                   
                               </tbody> <!--tbody finish-->
                               
                               <tfoot> <!--tfoot begin-->
                                   
                                   <tr> <!--tr begin-->
                                       
                                       <th colspan="5">Total</th>
                                       <th colspan="2">$100</th>
                            
                                   </tr> <!--tr finish-->
                                   
                               </tfoot> <!--tfoot finish-->
                               
                           </table> <!--table finish-->
                           
                       </div> <!--tableres finish-->
                       
                       <div class="box-footer"> <!--box begin-->
                           
                           <div class="pull-left"> <!--pull-left begin-->
                               
                               <a href="index.php" class="btn btn-default"> <!--btndefault begin-->
                                   
                                   Continue Shopping
                                   
                               </a> <!--btndefault begin-->
                               
                           </div> <!--pull-left finish-->
                           
                           <div class="pull-right"> <!--pull-right begin-->
                               
                               <button type="submit" name="update" value="Update Cart" class="btn btn-default"> <!--btndefault begin-->
                                   
                                   Update Cart
                                   
                               </button> <!--btndefault begin-->
                               
                               <a href="checkout.php" class="btn btn-primary">
                                   
                                   Proceed to Checkout
                                   
                               </a>
                               
                           </div> <!--pull-right finish-->
                           
                           
                       </div> <!--box finish-->
          
                   </form> <!--form finish-->
                   
               </div> <!--box finish-->
               
           </div> <!--col-md-9 Finish-->
           
           </div> <!--container Finish-->
   </div> <!--content Finish-->
   
   
    
   

    <script src="js/bootstrap-337.min.css"></script>
   <script src="js/jquery-331.min.js"></script>

</body>
</html>
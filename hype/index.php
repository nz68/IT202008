<?php 

include("includes/db.php");
include("functions/functions.php");
    
?>



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
                       
                       <li class="active">
                           <a href="index.php">Home</a>
                       </li>
                       <li>
                           <a href="shop.php">Shop</a>
                       </li>
                       <li>
                           <a href="customer/account.php">My Account</a>
                       </li>
                       <li>
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
    
    <div id="hot"> <!--hot begin-->
       
       <div class="box"> <!--box begin-->
          
          <div class="container"> <!--container begin-->
              
              <div class="col-md-12"> <!--colmd12 begin-->
                  
                  <h2>
                      New Release
                  </h2>
                  
              </div> <!--colmd12 finish-->
              
          </div> <!--container finish-->
        
       </div> <!--box finish-->
        
    </div> <!--hot finish-->
    
    <div id="content" class="container"> <!--container begin-->
        
        <div class="row"> <!--row begin-->
            
    <?php
            
        getPro();    
               
    ?>
            
        </div> <!--row finish-->
        
        
    </div> <!--container finish-->
        
    
    
   <script src="js/bootstrap-337.min.css"></script>
   <script src="js/jquery-331.min.js"></script>

</body>
</html>
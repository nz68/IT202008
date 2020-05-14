<div class="panel panel-default sidebar-menu"> <!--panel default sidebar menu begin-->
    
    <div class="panel-heading"> <!--panel heading begin-->
        
        <center> <!--center begin-->
            
            <img src="customer_images/user.jpg" alt="profile">
            
        </center> <!--center finish-->
        
        <br/>
        
        <h3 align="center" class="panel-title"> <!--title begin-->
            
           Name: Nelson 
            
        </h3> <!--title Finish-->
           
    </div> <!--panel heading finish-->
    
    <div class="panel-body"> <!--panel body begin-->
        
        <ul class="nav nav-pills nav-stacked-nav">
            
            <li class="<?php if(isset($_GET['my_orders'])){echo"active"; } ?>">
                
                <a href="account.php?my_orders">My Orders</a>
                
            </li>
            
            <li class="<?php if(isset($_GET['edit_account'])){echo"active"; } ?>">
                
                <a href="account.php?edit_account">Edit Account</a>
                
            </li>
            
            <li class="<?php if(isset($_GET['change_pass'])){echo"active"; } ?>">
                
                <a href="account.php?change_pass">Change Your Password</a>
                
            </li>
            
            <li>
                
                <a href="logout.php">Log Out</a>
                
            </li>
            
            
            
            
        </ul>
        
    </div> <!--panel body finish-->
     
</div> <!--panel default sidebar menu finish-->
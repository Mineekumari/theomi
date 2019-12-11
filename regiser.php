<html>
<?php
include_once('db.php');
?>
<head>
<title>User Login</title>
 <link href="css/bootstrap.min.css" rel="stylesheet">
  
 <style>
      .login{min-height:200px;
       background-color:pink;
     
	float:right;	
}
 </style>
</head>
<body>
    <div class="container">
      <div class="col-sm-4 login">

        <h3 style="color:red;">Registration Here</h3>
            <form action="regiser.php" method="post"> 
            <div class="from-group">
           <label><b>Name</b></label>
               <input type="text"  placeholder="customer name" class="form-control"name="customer_name" required class="my-fields">
            </div>  
             <div class="from-group">
           <label><b>Email</b></label>
              <input type="text"  placeholder="customer email" class="form-control"name="customer_email" required class="my-fields">
            </div>
            <div class="from-group">
           <label><b>Image</b></label>
              <input type="text"  placeholder="customer image" class="form-control"name="customer_image" required class="my-fields">
            </div>
            <div class="from-group">
           <label><b>Password</b></label>
             <input type="text"  placeholder="customer password" class="form-control"name="customer_pass" required class="my-fields">
            </div>
             <div class="from-group">
           <label><b>Address</b></label>
              <input type="text"  placeholder="customer address" class="form-control"name="customer_address" required class="my-fields">
            </div>
            <div class="from-group">
           <label><b>Country</b></label>
             <input type="text"  placeholder="customer country" class="form-control"name="customer_country" required class="my-fields">
            </div><br>
           <input type="submit" name="submit" value="register" class="btn btn-primary">
            <a href="login.php"><h6><b>Login</b></h6></a> 

      </form>
      <?php
       if (isset($_POST['submit'])) {
           
           $customer_name = $_POST['customer_name'];
           $customer_email = $_POST['customer_email'];
           $customer_image = $_POST['customer_image'];
           $customer_pass = $_POST['customer_pass'];
          $customer_address = $_POST['customer_address'];
          $customer_country = $_POST['customer_country'];
          
        $query =  "INSERT INTO `customer`(`customer_name`, `customer_email`, `customer_image`, `customer_pass`, `customer_address`, `customer_country`) VALUES('$customer_name','$customer_email','$customer_image','$customer_pass','$customer_address','$customer_country')";
        if(mysqli_query($conn,$query)){
          header('location:index.php');
        }
          else
          {
            echo "Your email is all ready used plese login";
          }
        }
       ?>
      
           </body>
    </html>


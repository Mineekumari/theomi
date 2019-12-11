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

        <h3 style="color:red;">Login Here</h3>
            <form action="login.php" method="post"> 
          
             <div class="from-group">
           <label><b>Email</b></label>
              <input type="text"  placeholder="customer email" class="form-control"name="customer_email" required class="my-fields">
            </div>
           
            <div class="from-group">
           <label><b>Password</b></label>
             <input type="text"  placeholder="customer password" class="form-control"name="customer_pass" required class="my-fields">
            </div>
             <br>
           <input type="submit" name="submit" value="login" class="btn btn-primary">
           <a href="regiser.php"><h6><b>Create out account</b></h6></a> 

      </form>
       <?php
   if(isset($_POST['submit'])){
    $customer_email=$_POST['customer_email'];
    $customer_pass=$_POST['customer_pass'];
    $query="select * from customer where customer_email='$customer_email' && customer_pass='$customer_pass'";
       $data=mysqli_query($conn, $query);
       $total=mysqli_num_rows($data);
       if($total==1)
       {
       header('location:index.php');
       }
       else{
        echo "login failed";
       }
   }
   ?>
      </body>
    </html>


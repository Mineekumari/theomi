<?php
include ('db.php');

 if (isset($_POST['submit'])) {
   /*  $customer_id = $_POST['customer_id'];
     $customer_date = $_POST['customer_date'];*/
     $customer_name= $_POST['customer_name'];
     $customer_email = $_POST['customer_email'];
     $customer_image = $_POST['customer_image'];
     $customer_pass = $_POST['customer_pass'];
     $customer_role = $_POST['customer_role'];
     $customer_posts = $_POST['customer_posts'];
    

  $customer = "insert into 'customer'('customer_name', 'customer_email','custmer_image',' customer_pass', 'customer_role', 'customer_posts') VALUES ('$customer_name','$customer_email','$customer_image','$customer_pass','$customer_role','$customer_posts')";
     
     if(mysqli_query($conn,$customer)){
              echo "<script>alert(Invalid information)</script>";
    }
      else{
        echo "<script>alert(Invalid information)</script>";
      }
    } 
  ?>
  <!--end insert category  -->
      


  
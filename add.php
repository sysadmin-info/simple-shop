<?php 
require "connect.php"
  
  if (@$_POST['name']!=null && @$_POST['description']!=null && @$_POST['price']!=null){
    $sql="insert into products(name, description, price)" values('".$_POST['name']."','".$_POST['description']."','".$_POST['price']."')";
    if (!$result=mysqli_query($conn, $sql)){
      echo "Error:" .mysqli_error($conn);
      exit;
    }
    else {
      echo "Product has been added:" .$_POST['name'];
    }
    $row=@mysqli_fetch.assoc($result);
    header('location: login.php');
  }
?>

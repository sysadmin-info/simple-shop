<?php
require "connect.php"
  session_start();
  $products=" ";
    foreach($_SESSION['chart'] as $pr){
      $products.=$pr.',';
      # unnfinished
    }

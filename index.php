<?php
//header
require('db.php');
require('header.php');

//content
if(isset($_GET['page'])){
  require(str_replace("'","",$_GET['page']).'.php');
}else{
  require('home.php');
}

//footer
 require("footer.php");
?>

<?php 
$navigation = (isset($_GET['navigation']) && $_GET['navigation'] != '') ? $_GET['navigation']: '';
?>
<html> 
    <head>
      <title>Endterm Activity #1</title>
      <link rel="stylesheet" type="text/css" href='style.css">
      <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Fira+Sans|Mukta&display=swap" rel="stylesheet">
    </head>
    <body>
     

      <div class="navbar">
        <a href="index.php?navigation=product">Products</a>
        <a href="index.php?navigation=categories">Category</a>
        <a href="index.php?navigation=create">Create</a>
      </div>

      <div>         
      <?php 
        switch($navigation){
          case 'product':
            require_once 'product.php';
            break;
          case 'categories':
            require_once 'categories.php';
            break;
          case 'create':
            require_once 'form_create.php';
            break;
          case 'details':
            require_once 'product-details.php';
            break;
		  case 'update':
            require_once 'form_update.php';
            break;
        }
    ?>
      </div>

     
    </body>
</html>


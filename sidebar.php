<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>

body {
  background-color:  #fffdd0;
}

.main {
  margin-left: 200px;
  font-size: 20px; 
  padding: 0px 10px;
}

 {
  background-color: green;
  color: white;
}


.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}


.fa-caret-down {
  float: right;
  padding-right: 8px;
}


</style>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand" href="index.php">ET No.1</a>
  
  </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">HOME</a></li>
      <a href="index.php?navigation=product">Products</a>
      <a href="index.php?navigation=categories">Category</a>
      <a href="index.php?navigation=create">Create</a>
    </ul>
  </div>
  <a href ="Customer1.php">Contact us</a>
  <a href="Addsup.Php">About us</a>
</div>
</nav>
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
        }
    ?>
      </div>
<script>

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
</body>
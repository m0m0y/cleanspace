<?php 
require("assets/common/header.php"); 
require("controller/productlist.php");
?>

<header id="header" class="fixed-top d-flex align-items-center header-transparent">
	<div class="container d-flex align-items-center justify-content-between">
		<?php require("assets/common/navbar.php"); ?>
	</div>
</header>

<?php 
  $host = $_SERVER['REQUEST_URI'];

  $class = new product_links();
  $links = $class->links($host);
?>

<?php require("assets/common/contact.php"); ?>
<?php require("assets/common/footer.php"); ?>
<?php require("assets/common/header.php"); ?>
<link rel="stylesheet" href="https://cdn.boomcdn.com/libs/owl-carousel/2.3.4/assets/owl.carousel.min.css">
<script src="https://cdn.boomcdn.com/libs/owl-carousel/2.3.4/owl.carousel.js"></script>
<script src="https://cdn.boomcdn.com/libs/owl-carousel/2.3.4/owl.carousel.min.js"></script>

<!-- ======= Header Section ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
	<div class="container d-flex align-items-center justify-content-between">

		<!-- Navbar -->
		<?php require("assets/common/navbar.php"); ?>
	</div>
</header><!-- End Header Section -->

<?php 
    $host = $_SERVER['SERVER_NAME']  . $_SERVER['REQUEST_URI']; 
    if($host == "localhost/cleanspace/product") {
		require("products/index.php");
    }
 
    if($host == "localhost/cleanspace/cleanspace_halo_power_unit") {
		require("products/cleanspace_halo_power_unit.php");
    }

    if($host == "localhost/cleanspace/cleanspace_halo_half_mask") {
		require("products/cleanspace_halo_half_mask.php");
    }

    if($host == "localhost/cleanspace/cleanspace_halo_head_harness") {
		require("products/cleanspace_halo_head_harness.php");
    }

    if($host == "localhost/cleanspace/cleanspace_halo_particulate_filter") {
		require("products/cleanspace_particulate_filter.php");
    }

    if($host == "localhost/cleanspace/cleanspace_halo_unit_id_panel") {
		require("products/cleanspace_halo_unit_id_panel.php");
    }

    if($host == "localhost/cleanspace/cleanspace_halo_mask_id_badges") {
		require("products/cleanspace_halo_mask_id_badges.php");
    }

    if($host == "localhost/cleanspace/cleanspace_halo_hood_with_visor") {
		require("products/cleanspace_halo_hood_with_visor.php");
    }

    if($host == "localhost/cleanspace/cleanspace_halo_cleaning_storage") {
		require("products/cleanspace_halo_cleaning_storage.php");
    }
    
    if($host == "localhost/cleanspace/cleanspace_halo_steri_plus_exhalation2") {
		require("products/cleanspace_steri_plus_exhalation2.php");
    }

    if($host == "localhost/cleanspace/cleanspace_halo_steri_plus_exhalation") {
		require("products/cleanspace_steri_plus_exhalation.php");
    }

    if($host == "localhost/cleanspace/cleanspace_halo_protective_coverall") {
		require("products/cleanspace_protective_coverall.php");
    }

    if($host == "localhost/cleanspace/cleanspace2_power_system") {
		require("products/cleanspace2_power_system.php");
    }

    if($host == "localhost/cleanspace/cleanspace2_half_mask") {
		require("products/cleanspace2_half_mask.php");
    }

    if($host == "localhost/cleanspace/cleanspace2_particulate_filter") {
		require("products/cleanspace2_particulate_filter.php");
    }

    if($host == "localhost/cleanspace/cleanspace2_particulate_pre_filter") {
		require("products/cleanspace2_particulate_pre_filter.php");
    }

    ?>
<?php require("assets/common/contact.php"); ?>
<?php require("assets/common/footer.php"); ?>
<?php

class product_links {
    public function links($host) {
        switch ($host) {
            case "/cleanspace/product";
              require("products/index.php");
              break;
            
            case "/cleanspace/cleanspace_halo_power_unit":
              require("products/cleanspace_halo_power_unit.php");
              break;
      
            case "/cleanspace/cleanspace_halo_half_mask":
              require("products/cleanspace_halo_half_mask.php");
              break;
      
            case "/cleanspace/cleanspace_halo_head_harness":
              require("products/cleanspace_halo_head_harness.php");
              break;
      
            case "/cleanspace/cleanspace_halo_particulate_filter":
              require("products/cleanspace_particulate_filter.php");
              break;
      
            case "/cleanspace/cleanspace_halo_unit_id_panel":
              require("products/cleanspace_halo_unit_id_panel.php");
              break;
      
            case "/cleanspace/cleanspace_halo_mask_id_badges":
              require("products/cleanspace_halo_mask_id_badges.php");
              break;
      
            case "/cleanspace/cleanspace_halo_hood_with_visor":
              require("products/cleanspace_halo_hood_with_visor.php");
              break;
      
            case "/cleanspace/cleanspace_halo_cleaning_storage":
              require("products/cleanspace_halo_cleaning_storage.php");
              break;
      
            case "/cleanspace/cleanspace_halo_steri_plus_exhalation2":
              require("products/cleanspace_steri_plus_exhalation2.php");
              break;
      
            case "/cleanspace/cleanspace_halo_steri_plus_exhalation":
              require("products/cleanspace_steri_plus_exhalation.php");
              break;
      
            case "/cleanspace/cleanspace_halo_protective_coverall":
              require("products/cleanspace_protective_coverall.php");
              break;
      
            case "/cleanspace/cleanspace2_power_system":
              require("products/cleanspace2_power_system.php");
              break;
      
            case "/cleanspace/cleanspace2_half_mask":
              require("products/cleanspace2_half_mask.php");
              break;
      
            case "/cleanspace/cleanspace2_particulate_filter":
              require("products/cleanspace2_particulate_filter.php");
              break;
      
            case "/cleanspace/cleanspace2_particulate_pre_filter":
              require("products/cleanspace2_particulate_pre_filter.php");
              break;
          }
    }
}

?>
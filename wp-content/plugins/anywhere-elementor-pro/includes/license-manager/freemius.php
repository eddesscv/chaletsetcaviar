<?php

if ( function_exists( 'wpv_ae' ) ) {
    wpv_ae()->set_basename( true, __FILE__ );
} else {
    
    if ( !function_exists( 'wpv_ae' ) ) {
        // Create a helper function for easy SDK access.
        function wpv_ae()
        {
            global  $wpv_ae ;
            
            if ( !isset( $wpv_ae ) ) {
                // Include Freemius SDK.
                
               
            }
            
            return $wpv_ae;
        }
        
        // Init Freemius.
        wpv_ae();
        // Signal that SDK was initiated.
        do_action( 'wpv_ae_loaded' );
    }

}

// EDD License Migration Code
function aep_fs_license_key_migration()
{
    
    if ( 'pending' != get_option( 'aep_fs_migrated2fs', 'pending' ) ) {
        return;
    }
    // Get the license key from the previous eCommerce platform's storage.
    $license_key = get_option( 'ae_pro_license_key', '' );
    if ( empty($license_key) ) {
        // No key to migrate.
        return;
    }
    // Get the first 32 characters.
    $license_key = substr( $license_key, 0, 32 );
    try {
        
    } catch ( Exception $e ) {
        
    }
    
    
        update_option( 'aep_fs_migrated2fs', 'done' );
        if ( is_string( $next_page ) ) {
            fs_redirect( $next_page );
        }
    

}

add_action( 'admin_init', 'aep_fs_license_key_migration' );
// Admin Notice for missing license
function aep_fs_missing_license()
{
    
   
        ?>
	
	<?php 
    

}

add_action( 'admin_notices', 'aep_fs_missing_license' );
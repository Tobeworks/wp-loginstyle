<?php
	
/**
 * Admin Logo Replacement
*/
function omLoginLogo() { 
	//Style auch bei Login einfügen
	wp_enqueue_style( 'wpbf-style-child', plugin_dir_url(__FILE__).'login.css', false, WPBF_CHILD_VERSION );
?>
    <style type="text/css">
        #login h1 a, .login h1 a {
        background-image: url(<?= plugin_dir_url(__FILE__).'../images/omgrouplogo.gif'; ?>);
        }

    </style>
<?php }
add_action( 'login_enqueue_scripts', 'omLoginLogo');

/**
 * Admin Klick URL
*/
function omLoginUrl() {
    return 'https://online-marketing-group.ch/';
}
add_filter( 'login_headerurl', 'omLoginUrl' );

add_filter( 'login_display_language_dropdown', '__return_false' );

/**
 * Admin Logo Text
*/
function omLoginText() {
    return 'The site brought you by Online-Marketing-Group';
}
add_filter( 'login_headertitle', 'omLoginText');


/**
 * Additional texts
*/
function omLoginFormTop(){
	return '<div class="om-loginform-top">Support: <a href="mailto:support@omgroup.ch?subject=Supportanfrage über '.home_url(). '">support@omgroup.ch</a><br>
Tel: +41 44 500 09 09</div>';
}
add_filter( 'login_message', 'omLoginFormTop');
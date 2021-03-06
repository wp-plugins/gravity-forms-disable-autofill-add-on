<?php
/*
*
*
*/

add_action('admin_menu', 'create_gf_disable_autofill_settings_menu');

function create_gf_disable_autofill_settings_menu() {
	/*add_menu_page('WP Disable Autofill', 'Generate Alt Tags', 'administrator', 'generate-image-alt-tags-settings',
	 							'gen_alt_tag_settings_page' , plugins_url('/options/images/icon-16.png', dirname(__FILE__))  );*/
  //add_submenu_page( 'options-general.php', 'Gravity Forms Disable Autofill Add-On', 'Disable Autofill Add-On', 'administrator',
	 //									'gravity-forms-disable-autofill-settings', 'create_gf_disable_autofill_settings_page');
	//add_submenu_page( $parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function);*/
	//add_action( 'admin_init', 'register_disable_autofill_settings' );
	//add_action( 'admin_init', 'register_disable_autofill_includes' );
  add_filter( 'gform_addon_navigation', 'add_menu_item' );
function add_menu_item( $menu_items ) {
    $menu_items[] = array( "name" => "gf_disable_autofill", "label" => "Disable Autofill",
     "callback" => "create_gf_disable_autofill_settings_page", "permission" => "administrator" );
    return $menu_items;
}
}

function create_gf_disable_autofill_settings_page() {
	register_gf_disable_autofill_settings();
	register_gf_disable_autofill_includes();
	gf_disable_autofill_settings_page();
}
function register_gf_disable_autofill_settings() {
	register_setting( 'disable-gf-autofill-settings-group', 'new_option_name' );
	register_setting( 'disable-gf-autofill-settings-group', 'some_other_option' );
	register_setting( 'disable-gf-autofill-settings-group', 'option_etc' );

}
function register_gf_disable_autofill_includes() {
	wp_register_script( 'plugin-options-scripts', plugins_url('/options/inc/options-scripts.js', dirname(__FILE__)));
	wp_register_style( 'plugin-options-styles', plugins_url('/options/inc/options-styles.css', dirname(__FILE__)));
	wp_enqueue_script( 'plugin-options-scripts' );
	wp_enqueue_style( 'plugin-options-styles' );
}





function gf_disable_autofill_settings_page() {
?>
<div class="wrap">
<h2>Gravity Forms Disable Autofill Add-On</h2>

<form method="post" action="options.php">
    <?php settings_fields( 'disable-gf-autofill-settings-group' ); ?>
    <?php do_settings_sections( 'disable-gf-autofill-settings-group' ); ?>
    <h3>Coming soon</h3>
    <!--<table class="form-table">
        <tr valign="top">
        <th scope="row">New Option Name</th>
        <td><input type="text" name="new_option_name" onclick="cry()" value="<?php echo esc_attr( get_option('new_option_name') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <th scope="row">Some Other Option</th>
        <td><input type="text" name="some_other_option" value="<?php echo esc_attr( get_option('some_other_option') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <th scope="row">Options, Etc.</th>
        <td><input type="text" name="option_etc" value="<?php echo esc_attr( get_option('option_etc') ); ?>" /></td>
        </tr>
    </table>-->

    <?php submit_button(); ?>

</form>
</div>
<?php } ?>

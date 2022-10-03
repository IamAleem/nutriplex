=== Analytics Library ===

1. Add Submodule
git submodule add git@bitbucket.org:cyberchimps/analytics.git

2. If already exist make sure it has latest code
git submodule init
git submodule update

3. Add the following code to the main file of plugin**

if ( ! function_exists( 'function_name' ) ) {
	/**
	 * Helper function to access SDK.
	 */
	function function_name() {
		global $glabal_var_fs;

		if ( ! isset( $glabal_var_fs ) ) {
			// Include Analytics SDK.
			require_once dirname( __FILE__ ) . '/analytics/start.php';

			$glabal_var_fs = ras_dynamic_init(
				array(
					'id'              => '',
					'slug'            => '',
					'product_name'    => '',
					'module_type'     => '',
					'version'         => '',
					'plugin_basename' => '',
					'plugin_url'      => '',
				)
			);
		}

		return $glabal_var_fs;
	}

	// Init Analytics.
	function_name();
	// SDK initiated.
	do_action( 'function_name_loaded' );
}

4. Update the function name and pass appropriate parameters value
    a. Update the function name
    b. update global variable name
        1. id e.g. '1234'
        2. slug e.g. 'my-plugin'
        3. product_name e.g. 'my-plugin'
        4. module_type e.g. 'plugin'
        5. version e.g. '1.2.3'
        6. plugin_basename e.g. 'plugin-folder/plugin-name.php'
        7. plugin_url e.g.




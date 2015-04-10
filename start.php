<?php
elgg_register_event_handler('init', 'system', 'easytheme2_init');

function easytheme2_init() {
	        elgg_extend_view('css/elgg', 'easytheme2/css');
	        elgg_extend_view('css/walled_garden', 'easytheme2/walled_garden');	
		     elgg_unregister_menu_item('topbar', 'elgg_logo');
                elgg_extend_view('css/admin', 'easytheme2/admin'); 
                elgg_extend_view ('page/elements/head','easytheme2/meta');
	   elgg_register_plugin_hook_handler('head', 'page', 'easytheme2_head');
		$base = elgg_get_plugins_path() . 'easytheme2/actions/easytheme2';
		elgg_register_action('easytheme2/settings/save', "$base/save.php", 'admin');
 
}


function easytheme2_head($hook, $type, $data) {
	$data['metas']['viewport'] = array(
		'name' => 'viewport',
		'content' => 'width=device-width, initial-scale=1.0',
	);

	return $data;
}


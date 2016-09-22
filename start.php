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

elgg_register_event_handler('pagesetup', 'system', 'profile_icon_size');

function profile_icon_size() {

$viewer = elgg_get_logged_in_user_entity();

elgg_unregister_menu_item('topbar', 'profile');
			
if ($viewer) {
elgg_register_menu_item('topbar', array(
			'name' => 'profile',
			'href' => $viewer->getURL(),
			'text' => elgg_view('output/img', array(
			'src' => $viewer->getIconURL('small'),
			'alt' => $viewer->name,
			'title' => elgg_echo('profile'),
			'class' => 'elgg-border-plain elgg-transition',
			)),
			'priority' => 100,
			'link_class' => 'elgg-topbar-avatar',
		));
		}
}
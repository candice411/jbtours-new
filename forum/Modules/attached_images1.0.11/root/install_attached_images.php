<?php
/**
*
* @package umil
* @version $Id: install_last_posts_avatar.php,v 1.0.2 2009/12/08 17:00:00 irdem Exp $
* @copyright (c) 2009 irdem
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
define('UMIL_AUTO', true);
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
$user->session_begin();
$auth->acl($user->data);
$user->setup();

if (!file_exists($phpbb_root_path . 'umil/umil_auto.' . $phpEx))
{
	trigger_error('Please download the latest UMIL (Unified MOD Install Library) from: <a href="http://www.phpbb.com/mods/umil/">phpBB.com/mods/umil</a>', E_USER_ERROR);
}

// The name of the mod to be displayed during installation.
$mod_name = 'ATTACHED_IMAGES_BLOCK';

/*
* The name of the config variable which will hold the currently installed version
* You do not need to set this yourself, UMIL will handle setting and updating the version itself.
*/
$version_config_name = 'attached_images_version';

$language_file = 'mods/umil_attached_images';

/*
* The array of versions and actions within each.
* You do not need to order it a specific way (it will be sorted automatically), however, you must enter every version, even if no actions are done for it.
*
* You must use correct version numbering.  Unless you know exactly what you can use, only use X.X.X (replacing X with an integer).
* The version numbering must otherwise be compatible with the version_compare function - http://php.net/manual/en/function.version-compare.php
*/
$versions = array(
	// Version 1.0.0
	'1.0.0'	=> array(
		// Lets add config settings
		'config_add' => array(
			array('attached_images_block_enable', false),
			array('forum_ids_to_show', '2'),
			array('maximum_number_image', '5'),				
		),
	),

	// Version 1.0.1
	'1.0.1'	=> array(
		// Lets add config settings
		'config_add' => array(
			array('maximum_width_image', '174'),				
		),
	),

	// Version 1.0.0-RC2
	'1.0.2' => array(
		// Nothing changed in this version.
	),

	// Version 1.0.3-RC3
	'1.0.3'	=> array(
		// Lets add config settings
		'config_add' => array(
			array('resize_after_this_pixel', '175'),				
		),
	),

	// Version 1.0.0-RC4
	'1.0.4' => array(
		// Nothing changed in this version.
	),

	// Version 1.0.5-RC5
	'1.0.5'	=> array(
		// Lets add config settings
	),

	// Version 1.0.6
	'1.0.6'	=> array(
	
	'module_add' => array(
		// Now we will add the modules manually
		array('acp', 'ACP_CAT_DOT_MODS', 'ATTACHED_IMAGES_BLOCK'),

		array('acp', 'ATTACHED_IMAGES_BLOCK', array(
					'module_basename'	=> 'attached_images',
					'module_langname'	=> 'ATTACHED_IMAGES_BLOCK_CONFIG',
					'module_mode'       => 'ACP_MODULE_NAME',
					'module_auth'		=> 'acl_a_board',
				),
			),
		),
	),

	// Version 1.0.7
	'1.0.7'	=> array(
		// Lets add config settings
		'config_add' => array(
			array('random_images_block_enable', false),
			array('max_random_images', '5'),
			array('exclude_forum', '5'),
			array('maximum_im_width', '174'),				
			array('resize_im_after', '175'),				
		),
	
		'module_add' => array(
			// Now we will add the modules manually
			array('acp', 'ATTACHED_IMAGES_BLOCK', array(
					'module_basename'	=> 'random_images',
					'module_langname'	=> 'RANDOM_IMAGES_BLOCK_CONFIG',
					'module_mode'       => 'ACP_MODULE_NAME',
					'module_auth'		=> 'acl_a_board',
				),
			),
		),
	),
	
	// Version 1.0.8
	'1.0.8' => array(
		// Nothing changed in this version.
	),

	// Version 1.0.9
	'1.0.9' => array(
		// Nothing changed in this version.
	),

	// Version 1.0.10
	'1.0.10' => array(
		// Nothing changed in this version.
	),
	
	// Version 1.0.11
	'1.0.11'	=> array(
		// Lets add config settings
		'config_add' => array(
			array('lst_number_chars', '24'),				
			array('rnd_number_chars', '24'),				
		),
	),
);

// Include the UMIF Auto file and everything else will be handled automatically.
include($phpbb_root_path . 'umil/umil_auto.' . $phpEx);


?>
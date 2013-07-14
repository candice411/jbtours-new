<?php
/**
*
* @package acp
* @version $Id: functions_attached_images.php,v0.0.1 2009/11/30 17:00:00 irdem Exp $
* @copyright (c) 2009 irdem
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @package module_install
*/

if (!defined('IN_PHPBB'))
{
	exit();
}

class acp_random_images_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_random_images',
			'title'		=> 'RANDOM_IMAGES_BLOCK',
			'version'	=> '1.0.11',
			'modes'		=> array(
				'config_random_images'	=> array(
					'title'			=> 'ACP_RANDOM',
					'auth'			=> 'acl_a_board',
					'cat'			=> array('ACP_BOARD_CONFIGURATION'),
				),
			),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
}

?>
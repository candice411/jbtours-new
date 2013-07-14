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

class acp_attached_images_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_attached_images',
			'title'		=> 'ATTACHED_IMAGES_BLOCK',
			'version'	=> '1.0.11',
			'modes'		=> array(
				'config_attached_images'	=> array(
					'title'			=> 'ACP_MODULE_NAME',
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
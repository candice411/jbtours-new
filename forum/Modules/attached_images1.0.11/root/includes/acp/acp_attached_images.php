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
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* @package acp
*/
class acp_attached_images
{
	var $u_action;

	function main($id, $mode)
	{
		global $db, $user, $auth, $template, $cache;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;

		$user->add_lang('acp/common');
		$this->tpl_name = 'acp_attached_images';
		$this->page_title = $user->lang['ATTACHED_IMAGES_BLOCK'];
		add_form_key('acp_attached_images');

		$submit = (isset($_POST['submit'])) ? true : false;
		if ($submit)
		{
			if (!check_form_key('acp_attached_images'))
			{
				trigger_error('FORM_INVALID');
			}

			set_config('attached_images_block_enable', request_var('attached_images_block_enable', 0));
			set_config('maximum_number_image', request_var('maximum_number_image', ''));
			set_config('maximum_width_image', request_var('maximum_width_image', ''));
			set_config('resize_after_this_pixel', request_var('resize_after_this_pixel', ''));
			set_config('forum_ids_to_show', request_var('forum_ids_to_show', ''));
			set_config('lst_number_chars', request_var('lst_number_chars', ''));

			trigger_error($user->lang['ATTACHED_IMAGES_BLOCK_SAVED'] . adm_back_link($this->u_action));
		}

		$template->assign_vars(array(
			'U_ACTION'						=> $this->u_action,
			'MAXIMUM_NUMBER_IMAGE'			=> $config['maximum_number_image'],
			'MAXIMUM_WIDTH_IMAGE'			=> $config['maximum_width_image'],
			'ATTACHED_IMAGES_BLOCK_ENABLE'	=> $config['attached_images_block_enable'],
			'RESIZE_AFTER_THIS_PIXEL'		=> $config['resize_after_this_pixel'],
			'FORUM_IDS_TO_SHOW'				=> $config['forum_ids_to_show'],
			'LST_NUMBER_CHARS'				=> $config['lst_number_chars'],
		));

	}
}

?>
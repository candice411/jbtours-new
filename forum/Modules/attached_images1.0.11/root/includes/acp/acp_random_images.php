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
class acp_random_images
{
	var $u_action;

	function main($id, $mode)
	{
		global $db, $user, $auth, $template, $cache;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;

		$user->add_lang('acp/common');
		$this->tpl_name = 'acp_random_images';
		$this->page_title = $user->lang['RANDOM_IMAGES_BLOCK'];
		add_form_key('acp_random_images');

		$submit = (isset($_POST['submit'])) ? true : false;
		if ($submit)
		{
			if (!check_form_key('acp_random_images'))
			{
				trigger_error('FORM_INVALID');
			}

			set_config('random_images_block_enable', request_var('random_images_block_enable', 0));
			set_config('max_random_images', request_var('max_random_images', ''));
			set_config('maximum_im_width', request_var('maximum_im_width', ''));
			set_config('exclude_forum', implode(',', request_var('exclude_forum', array(0))));
			set_config('resize_im_after', request_var('resize_im_after', ''));
			set_config('rnd_number_chars', request_var('rnd_number_chars', ''));

			trigger_error($user->lang['ATTACHED_IMAGES_BLOCK_SAVED'] . adm_back_link($this->u_action));
		}

		$template->assign_vars(array(
			'U_ACTION'						=> $this->u_action,
			'RANDOM_IMAGES_BLOCK_ENABLE'	=> $config['random_images_block_enable'],
			'MAX_RANDOM_IMAGES'				=> $config['max_random_images'],
			'MAXIMUM_IM_WIDTH'				=> $config['maximum_im_width'],
			'RESIZE_IM_AFTER'				=> $config['resize_im_after'],
			'S_EXCLUDE_FORUM'				=> make_forum_select(explode(',', $config['exclude_forum'])),
			'RND_NUMBER_CHARS'				=> $config['rnd_number_chars'],
		));

	}
}

?>
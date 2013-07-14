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

$user->add_lang('mods/attached_images');
function attached_images()
{
	global $config, $db, $auth, $user, $template, $phpbb_root_path, $phpEx;
	if (!$config['attached_images_block_enable'])
	{
		return;
	}
	
	$ext_array = array('jpeg', 'jpg', 'gif', 'png', 'bmp');

	//attached_images acp parameter
	$max_limit = $config['maximum_number_image'];
	$forums = ($config['forum_ids_to_show']) ? $config['forum_ids_to_show'] : 0;
	$lst_nmb_chars      = $config['lst_number_chars'];

	//image_resize parameter for  acp
	$resize_after	= $config['resize_after_this_pixel'];
	$max_width		= $config['maximum_width_image'];

	//no display attachments if the forum and attachment no autorised to guests
	$auth_read_forum = $auth->acl_getf('f_read', 'f_download', true);
	$forums_auth_ary = array();
	foreach($auth_read_forum as $key => $authed_attachments)
	{
		if($authed_attachments['f_read'] != 0)
		{
			$forums_auth_ary[] = $key;
        }
	}
    $authed_attachments = array_intersect(array_keys($auth->acl_getf('f_read', true)), array_keys($auth->acl_getf('f_download', true)));
    unset($auth_read_forum);

	// grab attachments that meet criteria and auths
	if(sizeof($authed_attachments))
	{
		$sql = 'SELECT a.post_msg_id, a.attach_id, a.physical_filename, a.poster_id, a.thumbnail, u.user_id, u.username, u.user_colour, u.user_type, u.user_avatar, u.user_avatar_type, u.user_avatar_width, u.user_avatar_height, t.topic_id, t.topic_title, t.forum_id, t.topic_last_post_id, t.topic_last_post_time, t.topic_replies_real, t.topic_views
			FROM ' . ATTACHMENTS_TABLE . ' a
				INNER JOIN ' . TOPICS_TABLE . ' t ON (a.topic_id = t.topic_id)
					INNER JOIN ' . USERS_TABLE . ' u ON (a.poster_id = u.user_id)
						WHERE a.topic_id = t.topic_id
							AND ' . $db->sql_in_set('extension', $ext_array) . '
							AND ' . $db->sql_in_set('t.forum_id', $authed_attachments) . '
							AND t.forum_id IN (' . $forums . ')
							AND t.forum_id <> 0
						GROUP BY post_msg_id
						ORDER BY filetime DESC, post_msg_id ASC';
	
		$result = $db->sql_query_limit($sql, $max_limit);
	
		while ($row = $db->sql_fetchrow($result))
		{			
			//obtain the all attachments defined in ext_array and users data
			$topic_id 		= $row['topic_id'];
			$forum_id 		= $row['forum_id'];
			$topic_title 	= $row['topic_title'];
			$attach_id 		= $row['attach_id'];
			$usernam = get_username_string('full', $row['user_id'], $row['username'], $row['user_colour']);				
			$poster_avatar  =     get_user_avatar($row['user_avatar'], $row['user_avatar_type'], 50, 40);
			$post_time      = $user->format_date($row['topic_last_post_time']);
			$attachment_url = append_sid($phpbb_root_path . 'download/file.' . $phpEx . '?id=' . $attach_id);
			$thumbnail		= $row['thumbnail'];

			// Trim the topic titles
			if ($lst_nmb_chars != 0 and utf8_strlen($topic_title) > $lst_nmb_chars)
			{
				$topic_title = utf8_substr($topic_title, 0, $lst_nmb_chars) . '...';
			}

			if($row['thumbnail'] == 1)
			{
				$row['physical_filename'] = 'thumb_' . $row['physical_filename'];
				$attachment_url = append_sid($phpbb_root_path . 'download/file.' . $phpEx . '?id=' . $attach_id . '&amp;t=1');
			}
			else
			{
				$row['physical_filename'] = $row['physical_filename'];
				$attachment_url = append_sid($phpbb_root_path . 'download/file.' . $phpEx . '?id=' . $attach_id);
			}

			//resize_img
			if ($ext_array = array('jpeg', 'jpg', 'gif', 'png', 'bmp') || ($row['physical_filename'] = $row['physical_filename']))
			{
				$which_resize = @getimagesize($config['upload_path'] . '/' . $row['physical_filename']);
				if ($which_resize[0] > $resize_after)
				{
					$resize = true;
					$ratio 	= $max_width/$which_resize[0];
					$h_vign = round($which_resize[1]*$ratio);
					$l_vign = $max_width;
					$window_width = $l_vign+10;
					$window_height = $h_vign+10;
				}
				else 
				{
					$l_vign = $which_resize[0];
					$h_vign = $which_resize[1];
				}
			}

			// Assign index specific vars
			$template->assign_block_vars('attached_images', array(
				'ATTACH_IMAGE'		=> $attachment_url,
				'S_FORUM'          	=> append_sid("{$phpbb_root_path}viewforum.$phpEx", 'f=' . $forum_id),	
				'TOPICTITLE'		=> $topic_title,
				'ATTACH_ID'			=> $row['attach_id'],
				'ATTACH_POSTER'		=> $usernam,		
				'DATE'				=> $post_time,
				'IM_WIDTH'	 		=> $l_vign,
				'IM_HEIGHT'	 		=> $h_vign,
				'POSTER_AVATAR'		=> $poster_avatar,
				'REPLIES'         	=> $row['topic_replies_real'],
				'U_FILE_POSTE'      => append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'p=' . $row['post_msg_id'] .'#p'.$row['post_msg_id']),
				'U_LAST_POSTE'      => append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'p=' . $row['topic_last_post_id'] .'#p'.$row['topic_last_post_id']),
				'U_POSTER' 			=> append_sid($phpbb_root_path . 'memberlist.' . $phpEx, array('mode' => 'viewprofile', 'u' => $row['user_id'])),
				'U_VIEW_TOPIC'		=> append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'f=' . $forum_id . '&amp;t=' . $topic_id),
				'VIEWS'            	=> $row['topic_views']
			));

			// If no attachments to display, we already parsed them
			$attachments[$row['post_msg_id']][] = $row;
			if (!empty($attachments[$row['post_msg_id']]))
			{
				foreach ($attachments[$row['post_msg_id']] as $attachment)
				{
					$template->assign_vars(array(		
						'S_DISPLAY_ATTACHMENTS'	=> (!empty($attachments[$row['post_msg_id']])) ? true : false,
					));
				}
			}
		}

		// Assign index specific vars
		$template->assign_vars(array(
			'ATTACHED_IMAGES_BLOCK_ENABLE' 	=> $config['attached_images_block_enable'],
		));

	$db->sql_freeresult($result);
	}

}

function get_images()
{
	global $config, $db, $auth, $user, $template, $phpbb_root_path, $phpEx;
	if (!$config['random_images_block_enable'])
	{
		return;
	}

	$ext_array = array('jpeg', 'jpg', 'gif', 'png', 'bmp');
	
	//random_images acp parameter
	$max_limit = $config['max_random_images'];
	$exclude_forum = ($config['exclude_forum']) ? $config['exclude_forum'] : 0;
	$exclude_forum = explode(',', $exclude_forum);
	$random=true;
	$rnd_nmb_chars      = $config['rnd_number_chars'];

	//image_resize parameter for  acp
	$resize_im_after	= $config['resize_im_after'];
	$max_im_width		= $config['maximum_im_width'];
	
	$order_by = "RAND()";

	if(!$random)
	{	
		$order_by = "filetime DESC";  
	}
	
	//no display attachments if the forum and attachment no autorised to guests
	$auth_read_forum = $auth->acl_getf('f_read', 'f_download', true);
	$forums_auth_ary = array();
	foreach($auth_read_forum as $key => $authed_attachments)
	{
		if($authed_attachments['f_read'] != 0)
		{
			$forums_auth_ary[] = $key;
        }
	}
    $authed_attachments = array_intersect(array_keys($auth->acl_getf('f_read', true)), array_keys($auth->acl_getf('f_download', true)));
    unset($auth_read_forum);

	// grab attachments that meet criteria and auths
	if(sizeof($authed_attachments))
	{
		$sql = 'SELECT a.post_msg_id, a.attach_id, a.physical_filename, a.poster_id, a.thumbnail, u.user_id, u.username, u.user_colour, u.user_type, t.topic_id, t.topic_title, t.forum_id, t.topic_last_post_id, t.topic_last_post_time, t.topic_replies_real, t.topic_views
			FROM ' . ATTACHMENTS_TABLE . ' a
				INNER JOIN ' . TOPICS_TABLE . ' t ON (a.topic_id = t.topic_id)
					INNER JOIN ' . USERS_TABLE . ' u ON (a.poster_id = u.user_id)
						WHERE a.topic_id = t.topic_id
							AND ' . $db->sql_in_set('t.forum_id', $exclude_forum, true) . '
							AND ' . $db->sql_in_set('extension', $ext_array) . '
							AND ' . $db->sql_in_set('t.forum_id', $authed_attachments) . '
							AND t.forum_id <> 0
						GROUP BY post_msg_id
						ORDER BY ' . $order_by . '' ;

		$result = $db->sql_query_limit($sql, $max_limit);
	
		while ($row = $db->sql_fetchrow($result))
		{			
			$topic_id = $row['topic_id'];
			$forum_id = $row['forum_id'];
			$topic_title = $row['topic_title'];
			$attach_id = $row['attach_id'];
			$usernam = get_username_string('full', $row['user_id'], $row['username'], $row['user_colour']);				
			$attachment_url = append_sid($phpbb_root_path . 'download/file.' . $phpEx . '?id=' . $attach_id);
			$thumbnail		= $row['thumbnail'];

			// Trim the topic titles
			if ($rnd_nmb_chars != 0 and utf8_strlen($topic_title) > $rnd_nmb_chars)
			{
				$topic_title = utf8_substr($topic_title, 0, $rnd_nmb_chars) . '...';
			}

			if($row['thumbnail'] == 1)
			{
				$row['physical_filename'] = 'thumb_' . $row['physical_filename'];
				$attachment_url = append_sid($phpbb_root_path . 'download/file.' . $phpEx . '?id=' . $attach_id . '&amp;t=1');
			}
			else
			{
				$row['physical_filename'] = $row['physical_filename'];
				$attachment_url = append_sid($phpbb_root_path . 'download/file.' . $phpEx . '?id=' . $attach_id);
			}

			//resize_img
			if ($ext_array = array('jpeg', 'jpg', 'gif', 'png', 'bmp') || ($row['physical_filename'] = $row['physical_filename']))
			{
			$which_resize = @getimagesize($config['upload_path'] . '/' . $row['physical_filename']);
				if ($which_resize[0] > $resize_im_after)
				{
					$resize = true;
					$ratio 	= $max_im_width/$which_resize[0];
					$h_vign = round($which_resize[1]*$ratio);
					$l_vign = $max_im_width;
					$window_width = $l_vign+10;
					$window_height = $h_vign+10;
				}
				else 
				{
					$l_vign = $which_resize[0];
					$h_vign = $which_resize[1];
				}
			}
		
			$template->assign_block_vars('random_images', array(
				'ATTACH_IMAGE'		=> $attachment_url,
				'FORUM-ID'         	=> $row['forum_id'],
				'S_FORUM'          	=> append_sid("{$phpbb_root_path}viewforum.$phpEx?", 'f=' . $forum_id),	
				'TOPICTITLE'		=> $topic_title,
				'ATTACH_ID'			=> $row['attach_id'],
				'ATTACH_POSTER'		=> $usernam,		
				'IM_WIDTH'	 		=> $l_vign,
				'IM_HEIGHT'	 		=> $h_vign,
				'REPLIES'         	=> $row['topic_replies_real'],
				'U_FILE_POSTE'      => append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'p=' . $row['post_msg_id'] .'#p'.$row['post_msg_id']),
				'U_LAST_POSTE'      => append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'p=' . $row['topic_last_post_id'] .'#p'.$row['topic_last_post_id']),
				'U_POSTER' 			=> append_sid($phpbb_root_path . 'memberlist.' . $phpEx, array('mode' => 'viewprofile', 'u' => $row['user_id'])),
				'U_VIEW_TOPIC'		=> append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'f=' . $forum_id . '&amp;t=' . $topic_id),
				'VIEWS'            	=> $row['topic_views']
			));

			// If no attachments to display, we already parsed them
			$attachments[$row['post_msg_id']][] = $row;
			if (!empty($attachments[$row['post_msg_id']]))
			{
				foreach ($attachments[$row['post_msg_id']] as $attachment)
				{
					$template->assign_vars(array(		
						'S_DISPLAY_ATTACHMENT'	=> (!empty($attachments[$row['post_msg_id']])) ? true : false,
					));
				}
			}
		}

		// Assign index specific vars
		$template->assign_vars(array(
			'RANDOM_IMAGES_BLOCK_ENABLE' 	=> $config['random_images_block_enable'],
		));
	
	$db->sql_freeresult($result);
	}

}

?>
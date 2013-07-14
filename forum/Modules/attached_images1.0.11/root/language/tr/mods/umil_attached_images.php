<?php
/**
*
* info_acp_attached_photo [Turkish]
*
* @package language
* @version $Id: info_acp_attached_images.php 2009-11-30 15:31022Z irdem $
* @copyright (c) 2009 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ATTACHED_IMAGES_BLOCK'							=> 'Ekli Resimler Bloğu',
	'ATTACHED_IMAGES_BLOCK_EXPLAIN'					=> 'Ekli Resimler Bloğu modunu veritabanı değişikliklerini UMIL otomatik yöntemiyle kur.',
	'INSTALL_ATTACHED_IMAGES_BLOCK'					=> 'Ekli Resimler Bloğu modunu kur',
	'INSTALL_ATTACHED_IMAGES_BLOCK_CONFIRM'			=> 'Ekli Resimler Bloğu modunu kurmaya hazır mısınız?',
	'UNINSTALL_ATTACHED_IMAGES_BLOCK'				=> 'Ekli Resimler Bloğu modun kaldır',
	'UNINSTALL_ATTACHED_IMAGES_BLOCK_CONFIRM'		=> 'Ekli Resimler Bloğu modunu kaldırmaya hazır mısınız? Bu eklenti tarafından yapılan tüm ayarlar ve eklenen veri kaldırılacaktır!',
	'UPDATE_ATTACHED_IMAGES_BLOCK'					=> 'Ekli Resimler Bloğu modunu güncelle',
	'UPDATE_ATTACHED_IMAGES_BLOCK_CONFIRM'			=> 'Ekli Resimler Bloğu modunu güncellemeye hazır mısınız?',	
));

?>
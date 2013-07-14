<?php
/**
*
* info_acp_attached_images [Turkish]
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
	'ATTACHED_IMAGES_BLOCK'					=> 'Ekli Resimler Bloğu',
	'ACP_MODULE_NAME'						=> 'Ekli Resimler Bloğu',
	'ATTACHED_IMAGES_BLOCK_CONFIG'			=> 'Son Resimler',
	'ATTACHED_IMAGES_BLOCK_ENABLE'			=> 'Ana sayfada Ekli Resimler Bloğunu aktif et',
	'ATTACHED_IMAGES_BLOCK_ENABLE_EXPLAIN'	=> 'Etkinleştirilmesi halinde belirtilen forumlardan ekli son resimleri index üzerinde bir blok olarak gösterir.',
	'ATTACHED_IMAGES_BLOCK_SAVED'			=> 'Değişiklikler başarıyla kaydedildi!',
	'FORUM_IDS_TO_SHOW'						=> 'Gösterilecek forum ID.',
	'FORUM_IDS_TO_SHOW_EXPLAIN'				=> 'Anasayfada bir blok üzerinde gösterilecek resimler için bir forum ID nosu belirtin.  Birden çok forum seçmek isterseniz, her bir forum ID\'si arasına virgül koyun (Örnek:1,3,5) ',
	'MAXIMUM_NUMBER_IMAGE'					=> 'Maksimum resim sayısı',
	'MAXIMUM_NUMBER_IMAGE_EXPLAIN'			=> 'Blokta gösterilecek maksimum resim sayısı',
	'MAXIMUM_WIDTH_IMAGE'					=> 'Maksimum resim genişliği',
	'MAXIMUM_WIDTH_IMAGE_EXPLAIN'			=> 'Ekli Resimler Bloğu üzerinde görünecek maksimum resim genişliğini ayarlayın (pixel)',
	'RESIZE_AFTER_THIS_PIXEL'				=> 'Boyutlandırma alt sınırı ',
	'RESIZE_AFTER_THIS_PIXEL_EXPLAIN'		=> 'Bu boyuta kadar olan resimleri boyutlandırmaz. (pixel)',
	'LST_NUMBER_CHARS'						=> 'Karakter Sayısı ',
	'LST_NUMBER_CHARS_EXPLAIN'				=> 'Ekli resimler bloğu konu başlıkları için karakter sayısını tanımlamanızı sağlar',
	
));

?>
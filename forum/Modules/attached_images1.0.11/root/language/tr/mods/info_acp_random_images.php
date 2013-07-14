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
	'RANDOM_IMAGES_BLOCK_ENABLE'			=> 'Modülü aktif et',
	'RANDOM_IMAGES_BLOCK_ENABLE_EXPLAIN'	=> 'Etkinleştirilmesi halinde forumlardan ekli resimleri rastgele olarak index üzerinde bir blok olarak gösterir..',
	'RANDOM_IMAGES_BLOCK_SAVED'				=> 'Değişiklikler başarıyla kaydedildi!',
	'RANDOM_IMAGES_BLOCK'					=> 'Rastgele Resimler Bloğu',
	'ACP_RANDOM'							=> 'Rastgele Resimler Bloğu',
	'RANDOM_IMAGES_BLOCK_CONFIG'			=> 'Rastgele Resimler',
	'MAX_RANDOM_IMAGES'						=> 'Maksimum resim sayısı',
	'MAX_RANDOM_IMAGES_EXPLAIN'				=> 'Blokta gösterilecek maksimum resim sayısı',
	'EXCLUDE_FORUM'							=> 'Hariç tutulacak forum ',
	'EXCLUDE_FORUM_EXPLAIN'					=> 'Hariç tutulacak forum adını seçin. Birden çok forum seçmek isterseniz, ctrl tuşuna basarak listeden forumları seçebelirsiniz. ',
	'MAXIMUM_IM_WIDTH'						=> 'Maksimum resim genişliği',
	'MAXIMUM_IM_WIDTH_EXPLAIN'				=> 'Ekli Resimler Bloğu üzerinde görünecek maksimum resim genişliğini ayarlayın (pixel)',
	'RESIZE_IM_AFTER'						=> 'Boyutlandırma alt sınırı ',
	'RESIZE_IM_AFTER_EXPLAIN'				=> 'Bu boyuta kadar olan resimleri boyutlandırmaz. (pixel)',
	'RND_NUMBER_CHARS'						=> 'Karakter Sayısı ',
	'RND_NUMBER_CHARS_EXPLAIN'				=> 'Rastgele resimler bloğu konu başlıkları için karakter sayısını tanımalmanızı sağlar',

));

?>
<?php

/**
* Estonian translation by phpBBestonia.eu <https://www.phpbbestonia.eu>
*
* @package - Activity 24 hours
* @copyright (c) 2015 RMcGirr83
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
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
// Some characters you may want to copy&paste:
// ’ » “ ” …

$lang = array_merge($lang, array(
	'BOTS_24HOUR_TOTAL'	=> array(
		1 => '%d robot',
		2 => '%d robotit',
	),
	'USERS_24HOUR_TOTAL'	=>  '%d registreeritud,',
	'HIDDEN_24HOUR_TOTAL'	=> ' %d peidetud, ',
	'GUEST_ONLINE_24'		=> array(
		1 => ' ja %d külaline',
		2 => ' ja %d külalist',
	),
	'LAST_24_HOURS'	=> ' aktiivne viimase 24h jooksul',
	'24HOUR_TOPICS'			=> 'Uusi teemasid %d',
	'24HOUR_POSTS'			=> 'Uusi postitusi %d',
	'24HOUR_USERS'			=> 'Uusi kasutajaid %d',
	'NO_ONLINE_BOTS'		=> 'Ühtegi robotit ei ole katiivseid',

	'TWENTYFOURHOUR_STATS'	=> 'Tegevus viimase 24h jooksul',
	'TOTAL_24HOUR_USERS'	=> array(
		1 => 'Kokku oli %d kasutaja :: ',
		2 => 'Kokku oli %d kasutajat :: ',
	),
));

<?php
/**
*
* Upcomng Birthday List extension for the phpBB Forum Software package.
*
* @copyright (c) Rich McGirr
* @author 2015 Rich McGirr (RMcGirr83)
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = [];
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
//
// Some characters for use
// ’ » “ ” …


$lang = array_merge($lang, [

	// ACP entries
	'ALLOW_BIRTHDAYS_AHEAD' 		=> 'Number of days to display upcoming birthdays',
	'ALLOW_BIRTHDAYS_AHEAD_EXPLAIN'	=> 'Displays the upcoming birthdays on the index page.<br><em>You must have “Allow birthdays” (located under Board Features) as well as “Enable birthday listing” (located under Load Settings)  set to yes for the list of upcoming birthdays to appear.</em>',
	'BIRTHDAYS_AHEAD_DATE_FORMAT'	=> 'Date format of upcoming birthdays',
	'BIRTHDAYS_AHEAD_DATE_FORMAT_EXPLAIN'	=> 'The showing of the date format of the birthday upon hover of a user name in the list.',
	'UBL_DATE_FORMAT_DDMMYYYY'	=> 'dd-mm-yyyy',
	'UBL_DATE_FORMAT_MMDDYYYY'	=> 'mm-dd-yyyy',
]);

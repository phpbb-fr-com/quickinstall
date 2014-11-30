<?php
/**
*
* phpbb [French]
*
* @package quickinstall
* @copyright (c) 2007 phpBB Limited
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* @translator phpBB-fr.com <http://www.phpbb-fr.com>
*
*/

/**
* @ignore
*/
if (!defined('IN_QUICKINSTALL'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'TRANSLATION_INFO'	=> 'Traduit par <a href="http://forums.phpbb-fr.com">phpBB-fr.com</a>',
	'DIRECTION'			=> 'ltr',
//	'DATE_FORMAT'		=> '|d M Y|',	// 01 Jan 2007
	'DATE_FORMAT'		=> '|D d F Y|',	// lundi 01 Janvier 2007
	'USER_LANG'			=> 'fr',
	'USER_LANG_LONG'	=> 'Français',

	'datetime'			=> array(
		'TODAY'		=> 'Aujourd’hui',
		'TOMORROW'	=> 'Demain',
		'YESTERDAY'	=> 'Hier',

		'Sunday'	=> 'Dimanche',
		'Monday'	=> 'Lundi',
		'Tuesday'	=> 'Mardi',
		'Wednesday'	=> 'Mercredi',
		'Thursday'	=> 'Jeudi',
		'Friday'	=> 'Vendredi',
		'Saturday'	=> 'Samedi',

		'Sun'		=> 'Dim',
		'Mon'		=> 'Lun',
		'Tue'		=> 'Mar',
		'Wed'		=> 'Mer',
		'Thu'		=> 'Jeu',
		'Fri'		=> 'Ven',
		'Sat'		=> 'Sam',

		'January'	=> 'Janvier',
		'February'	=> 'Février',
		'March'		=> 'Mars',
		'April'		=> 'Avril',
		'May'		=> 'Mai',
		'June'		=> 'Juin',
		'July'		=> 'Juillet',
		'August'	=> 'Août',
		'September' => 'Septembre',
		'October'	=> 'Octobre',
		'November'	=> 'Novembre',
		'December'	=> 'Décembre',

		'Jan'		=> 'Jan',
		'Feb'		=> 'Fév',
		'Mar'		=> 'Mars',
		'Apr'		=> 'Avr',
		'May_short'	=> 'Mai',	// Short representation of "May". May_short used because in English the short and long date are the same for May.
		'Jun'		=> 'Juin',
		'Jul'		=> 'Juil',
		'Aug'		=> 'Août',
		'Sep'		=> 'Sep',
		'Oct'		=> 'Oct',
		'Nov'		=> 'Nov',
		'Dec'		=> 'Déc',
	),

	// The default dateformat which will be used on new installs in this language
	// Translators should change this if a the usual date format is different
//	'default_dateformat'	=> 'd F Y, H:i',		// 01 January 2007, 13:37
//	'default_dateformat'	=> 'D M d, Y g:i a',	// Mon Jan 01, 2007 1:37 pm
	'default_dateformat'	=> 'D d F Y, H:i',		// Lundi 01 Janvier 2007, 13:37

));

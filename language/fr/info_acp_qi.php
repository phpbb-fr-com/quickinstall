<?php
/**
*
* info_acp_qi [French]
*
* @package quickinstall
* @version $Id:	papicx	1.1.8	04/01/2013 14h24 $
* @copyright (c) 2008 phpBB Group
* @translator (c) 2012 Papicx http://www.cxclub.org/ papicx@phpbb-fr.com
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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

$lang = array_merge($lang, array(
	'LOG_INSTALL_INSTALLED_QI'	=> '<strong>Forum installé par QuickInstall version %s</strong>',
));

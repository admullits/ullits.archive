<?php
/**
*
* acp_email.php [Danish]
*
* @package language
* @version Id: email.php 8479 2008-03-29 00:22:48Z naderman $
* @version $Id: email.php,v 1.4 2008/04/13 18:19:44 jansk Exp $
* @source file is copyright (c) 2000, 2002, 2005, 2007 phpBB Group, 
* @modified and translated by Olympus DK Team
* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
* Translators: Olympus DK Team, working at http://www.phpBB3.dk and http://area51.phpBB3.dk 
*
* This file is part of the Danish language package for phpBB 3.0.x.
* Copyright (c) 2006, 2007, 2008 Olympus DK Team
*
* The Danish language package for phpBB 3.0.x is free software; you can redistribute it and/or
* modify it under the terms of the GNU General Public License as published by the Free Software
* Foundation, version 2 of the License.
*
* The Danish Language package for phpBB 3.0.x is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
* A PARTICULAR PURPOSE. See the GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License along with this language
* package. If not, see <http://www.gnu.org/licenses/old-licenses/gpl-2.0.html>.
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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Her kan du sende en email til enten alle dine brugere, eller til de brugere i en specifik gruppe som <strong>har muligheden for at modtage masse-emails aktiveret</strong>. Når du sender en masse-email bliver mailen sendt til den angivne administrative emailadresse, med en blind kopi til alle modtagerne. Som standard afsendes emailen til 50 brugere ad gangen, er der 1.000 brugere som skal modtage emailen, afsendes den altså 20 gange. Vær tålmodig, når du sender email til en stor gruppe af personer og stop ikke siden halvvejs. Afsendelsen af en masse-email kan tage lang tid, men du bliver adviseret når scriptet er fuldført.',
	'ALL_USERS'						=> 'Alle brugere',

	'COMPOSE'				=> 'Skriv email',

	'EMAIL_SEND_ERROR'		=> 'Der opstod én eller flere fejl under afsendelsen af emailen. Kontrollér venligst %sfejlloggen%s for oplysninger om fejlårsagen.',
	'EMAIL_SENT'			=> 'Denne email er blevet sendt.',
	'EMAIL_SENT_QUEUE'		=> 'Denne email er nu placeret i afsendelseskøen.',

	'LOG_SESSION'			=> 'Log mailsession til kritisk log',

	'SEND_IMMEDIATELY'		=> 'Send straks',
	'SEND_TO_GROUP'			=> 'Send til gruppe',
	'SEND_TO_USERS'			=> 'Send til brugere',
	'SEND_TO_USERS_EXPLAIN'	=> 'Indtastning af navne her vil overskrive enhver gruppe valgt ovenfor. Indtast hvert brugernavn på en ny linie.',

	'MAIL_HIGH_PRIORITY'	=> 'Høj',
	'MAIL_LOW_PRIORITY'		=> 'Lav',
	'MAIL_NORMAL_PRIORITY'	=> 'Normal',
	'MAIL_PRIORITY'			=> 'Prioritet for email',
	'MASS_MESSAGE'			=> 'Din email',
	'MASS_MESSAGE_EXPLAIN'	=> 'Bemærk venligst at du må kun skrive ren tekst. Al markup vil blive fjernet før forsendelse.',

	'NO_EMAIL_MESSAGE'		=> 'Du skal skrive en besked.',
	'NO_EMAIL_SUBJECT'		=> 'Du skal angive en overskrift i din email.',
));

?>
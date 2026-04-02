<?php
/**
*
* acp_ban.php [Danish]
*
* @package language
* @version Id: ban.php 8479 2008-03-29 00:22:48Z naderman $
* @version $Id: ban.php,v 1.4 2008/04/13 18:19:44 jansk Exp $
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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 time',
	'30_MINS'		=> '30 minutter',
	'6_HOURS'		=> '6 timer',

	'ACP_BAN_EXPLAIN'	=> 'Her kan du administrere udelukkelse af brugere ved navn, IP- eller emailadresse. Disse metoder forhindrer en bruger i at få adgang til boardet. Du kan give en kort (maksimalt 3000 tegn) begrundelse for udelukkelsen hvis du ønsker. Denne begrundelse vises i administratorloggen. Udelukkelsens varighed skal også defineres. Hvis du ønsker at udelukkelsen skal slutte på en specifik dato i stedet for efter en fastsat periode vælg <span style="text-decoration: underline;">Indtil -&gt;</span> for udelukkelsens længde og indtast en dato i <kbd>yyyy-mm-dd format</kbd>.',

	'BAN_EXCLUDE'			=> 'Ophæv udelukkelse',
	'BAN_LENGTH'			=> 'Varighed af udelukkelse',
	'BAN_REASON'			=> 'Udelukkelsesgrund',
	'BAN_GIVE_REASON'		=> 'Vist udelukkelsesgrund',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Udelukkelseslisten er blevet opdateret',

	'EMAIL_BAN'					=> 'Udeluk emailadresser',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Vælg "Ja" for at ophæve den valgte emailadresses udelukkelse.',
	'EMAIL_BAN_EXPLAIN'			=> 'Du kan udelukke flere emailadresser på én gang ved at indtaste hver adresse på en ny linie. Brug * som ubekendt for at matche delvise adresser, f.eks. <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp>, osv.',
	'EMAIL_NO_BANNED'			=> 'Ingen udelukkede emailadresser',
	'EMAIL_UNBAN'				=> 'Ophæv udelukkelse af emailadresser',
	'EMAIL_UNBAN_EXPLAIN'		=> 'For at ophæve flere emailadressers udelukkelse i én arbejdsgang, skal du bruge windowsmetoden for at markere flere rækker (tasterne Alt og Ctrl). Udelukkede emailadresser er fremhævede.',

	'IP_BAN'					=> 'Udeluk IP-adresser',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Vælg "Ja" for at ophæve den valgte IP-adresses udelukkelse.',
	'IP_BAN_EXPLAIN'			=> 'Du kan udelukke flere IP-adresser eller værtsnavne på én gang ved at indtaste hver adresse eller vært på en ny linie. For at specificere et interval af IP-adresser adskilles start og slut med med en bindestreg (-). Brug * for at specificere en ubekendt.',
	'IP_HOSTNAME'				=> 'IP-adresser eller værtsnavne',
	'IP_NO_BANNED'				=> 'Ingen udelukkede IP-adresser',
	'IP_UNBAN'					=> 'Ophæv udelukkelse af IP-adresser',
	'IP_UNBAN_EXPLAIN'			=> 'For at ophæve flere IP-adressers udelukkelse i én arbejdsgang, skal du bruge windowsmetoden for at markere flere rækker (tasterne Alt og Ctrl). Udelukkede IP-adresser er fremhævede.',

	'LENGTH_BAN_INVALID'		=> 'Datoen skal have formatet <kbd>YYYY-MM-DD</kbd>.',

	'PERMANENT'		=> 'Permanent',

	'UNTIL'						=> 'Indtil',
	'USER_BAN'					=> 'Udeluk brugere',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Vælg "Ja" for at ophæve den valgte brugers udelukkelse.',
	'USER_BAN_EXPLAIN'			=> 'Du kan udelukke flere brugere på én gang ved at indtaste hver bruger på en ny linie. Brug funktionen <span style="text-decoration: underline;">Find en tilmeldt bruger</span> til at finde og tilføje én eller flere brugere automatisk.',
	'USER_NO_BANNED'			=> 'Ingen udelukkede brugere',
	'USER_UNBAN'				=> 'Ophæv brugeres udelukkelse',
	'USER_UNBAN_EXPLAIN'		=> 'For at ophæve flere brugeres udelukkelse i én arbejdsgang, skal du bruge windowsmetoden for at markere flere rækker (tasterne Alt og Ctrl). Udelukkede brugere er fremhævede.',
));

?>
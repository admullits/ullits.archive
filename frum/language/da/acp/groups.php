<?php
/**
*
* acp_groups.php [Danish]
*
* @package language
* @version Id: groups.php 8634 2008-06-09 13:05:34Z Kellanved $
* @version $Id: groups.php,v 1.6 2008/06/12 15:32:22 jansk Exp $
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

$lang = array_merge($lang, array(
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Her kan du administrere alle dine brugergrupper. Du kan slette, oprette og rette eksisterende grupper. Desuden kan du udpege gruppeledere, ændre gruppens navn og beskrivelse, samt gruppens status til åben, skjult eller lukket.',
	'ADD_USERS'						=> 'Tilføj brugere',
	'ADD_USERS_EXPLAIN'				=> 'Her kan du tilføje nye brugere til gruppen. Du kan vælge om gruppen skal være ny standardgruppe for de valgte brugere. Du kan ydermere udpege dem som gruppeledere. Indtast venligst hvert brugernavn på en separat linie.',

	'COPY_PERMISSIONS'				=> 'Kopiér tilladelser fra',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Når gruppen er oprettet vil den have samme tilladelser som den hér valgte.',
	'CREATE_GROUP'					=> 'Opret ny gruppe',

	'GROUPS_NO_MEMBERS'				=> 'Denne gruppe har ingen medlemmer',
	'GROUPS_NO_MODS'				=> 'Ingen gruppeledere defineret',
	
	'GROUP_APPROVE'					=> 'Godkend medlem',
	'GROUP_APPROVED'				=> 'Godkendte medlemmer',
	'GROUP_AVATAR'					=> 'Gruppeavatar',
	'GROUP_AVATAR_EXPLAIN'			=> 'Billedet vises i gruppekontrolpanelet.',
	'GROUP_CLOSED'					=> 'Lukket',
	'GROUP_COLOR'					=> 'Gruppefarve',
	'GROUP_COLOR_EXPLAIN'			=> 'Definerer farven som gruppemedlemmers navne vises med, lad være tom for brugerstandard.',
	'GROUP_CONFIRM_ADD_USER'		=> 'Er du sikker på du vil tilføje brugeren %1$s til gruppen?',
	'GROUP_CONFIRM_ADD_USERS'		=> 'Er du sikker på du vil tilføje brugerne %1$s til gruppen?',
	'GROUP_CREATED'					=> 'Gruppen er oprettet.',
	'GROUP_DEFAULT'					=> 'Gør gruppen til standard for medlem',
	'GROUP_DEFS_UPDATED'			=> 'Standardgruppe sat for alle valgte medlemmer.',
	'GROUP_DELETE'					=> 'Slet medlem fra gruppe',
	'GROUP_DELETED'					=> 'Gruppe slettet og standardbrugergrupper indstillet.',
	'GROUP_DEMOTE'					=> 'Degradér gruppeleder',
	'GROUP_DESC'					=> 'Gruppebeskrivelse',
	'GROUP_DETAILS'					=> 'Gruppeinformation',
	'GROUP_EDIT_EXPLAIN'			=> 'Her har du mulighed for at ændre en eksisterende gruppe. Bl.a. navn, beskrivelse og type (åben, lukket, m.v.). Du kan også sætte indstillinger som omfatter hele gruppen, som den farve gruppemedlemmernes brugernavne vises med, rang m.v. Ændringer hér overskriver brugernes nuværende indstillinger. Bemærk venligst at gruppemedlemmer kan ændre deres gruppeavatar, medmindre du sætter passende brugertilladelser.',
	'GROUP_ERR_USERS_EXIST'			=> 'De angivne brugere er allerede medlemmer af denne gruppe.',
	'GROUP_FOUNDER_MANAGE'			=> 'Kan kun ændres af grundlæggere',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Gruppen kan kun ændres af grundlæggere. Brugere med tilladelse til at ændre i grupper og gruppens medlemmer vil stadig kunne se den.',
	'GROUP_HIDDEN'					=> 'Skjult',
	'GROUP_LANG'					=> 'Gruppesprog',
	'GROUP_LEAD'					=> 'Gruppeledere',
	'GROUP_LEADERS_ADDED'			=> 'Nye ledere tilføjet gruppe.',
	'GROUP_LEGEND'					=> 'Vis gruppe i farveforklaring',
	'GROUP_LIST'					=> 'Nuværende medlemmer',
	'GROUP_LIST_EXPLAIN'			=> 'Dette er en komplet liste over alle nuværende brugere med medlemskab af denne gruppe. Du kan slette medlemmer (undtaget i bestemte specialgrupper) eller tilføje nye som du vil.',
	'GROUP_MEMBERS'					=> 'Gruppemedlemmer',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Dette er en komplet liste over alle medlemmer af denne brugergruppe. Den inkluderer separate sektioner for ledere, afventende og eksisterende medlemmer. Herfra kan du administrere alle aspekter af hvem der har medlemsskab af denne gruppe og hvad deres rolle er. For at fjerne en leder, men beholde vedkommende i gruppen, brug "Degradér" i stedet for at slette. Brug på tilsvarende måde "Forfrem" til at gøre et eksisterende medlem til leder.',
	'GROUP_MESSAGE_LIMIT'			=> 'Maksimalt antal private beskeder pr. mappe for medlemmer af gruppe',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Denne indstilling overskriver indstillingerne for maksimalt antal private beskeder i en mappe. En værdi på 0 betyder at brugerens standardgrænse bruges.',
	'GROUP_MODS_ADDED'				=> 'Nye gruppeledere tilføjet.',
	'GROUP_MODS_DEMOTED'			=> 'Gruppeledere degraderet.',
	'GROUP_MODS_PROMOTED'			=> 'Gruppemedlemmer forfremmet.',
	'GROUP_NAME'					=> 'Gruppenavn',
	'GROUP_NAME_TAKEN'				=> 'Gruppenavnet bruges allerede, vælg venligst et andet.',
	'GROUP_OPEN'					=> 'Åben',
	'GROUP_PENDING'					=> 'Afventende medlemmer',
	'GROUP_PROMOTE'					=> 'Forfrem til gruppeleder',
	'GROUP_RANK'					=> 'Grupperang',
	'GROUP_RECEIVE_PM'				=> 'Gruppe kan modtage private beskeder',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Bemærk venligst at skjulte grupper ikke kan tilsendes beskeder, uanset denne indstilling.',
	'GROUP_REQUEST'					=> 'Forespørgsel',
	'GROUP_SETTINGS_SAVE'			=> 'Indstillinger for gruppe',
	'GROUP_TYPE'					=> 'Gruppetype',
	'GROUP_TYPE_EXPLAIN'			=> 'Dette afgør hvorvidt brugere kan tilmelde sig eller se denne gruppe.',
	'GROUP_UPDATED'					=> 'Gruppeindstillinger opdateret.',

	'GROUP_USERS_ADDED'				=> 'Nye brugere tilføjet gruppen.',
	'GROUP_USERS_EXIST'				=> 'De valgte brugere er allerede medlemmer.',
	'GROUP_USERS_REMOVE'			=> 'Brugere fjernet fra gruppe og nye standardindstillinger sat.',

	'MAKE_DEFAULT_FOR_ALL'	=> 'Gør til standardgruppe for samtlige medlemmer',
	'MEMBERS'				=> 'Medlemmer',

	'NO_GROUP'					=> 'Ingen gruppe angivet.',
	'NO_GROUPS_CREATED'			=> 'Endnu ingen gruppe oprettet.',
	'NO_PERMISSIONS'			=> 'Kopiér ikke tilladelser',
	'NO_USERS' 					=> 'Du har ikke tilknyttet brugere.',
	'NO_USERS_ADDED'			=> 'Ingen brugere blev tilføjet gruppen.',
	'NO_VALID_USERS'			=> 'Du har ikke angivet nogle brugere der er berettiget til dette.',

	'SPECIAL_GROUPS'			=> 'Prædefinerede grupper',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Prædefinerede grupper er specielle grupper, de kan ikke slettes eller rettes direkte. Du kan dog stadig tilføje brugere og ændre basisindstillinger.',

	'TOTAL_MEMBERS'				=> 'Medlemmer',

	'USERS_APPROVED'				=> 'Brugere godkendt.',
	'USER_DEFAULT'					=> 'Brugerstandard',
	'USER_DEF_GROUPS'				=> 'Brugerdefinerede grupper',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Dette er grupper oprettet af dig eller en anden administrator af dette board. Du kan administrere medlemskaber såvel som rette gruppeegenskaber eller endda slette gruppen.',
	'USER_GROUP_DEFAULT'			=> 'Sæt som standardgruppe',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Hvis du svarer "Ja" hér vil det sætte gruppen som standardgruppe for de tilføjede brugere.',
	'USER_GROUP_LEADER'				=> 'Sæt som gruppeleder',
));

?>
<?php
/**
*
* acp_attachments.php [Danish]
*
* @package language
* @version Id: attachments.php 8555 2008-05-15 14:10:11Z Kellanved $
* @version $Id: attachments.php,v 1.6 2008/06/12 15:46:27 jansk Exp $
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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Her kan du ændre og vedligeholde indstillingerne for vedhæftede filer og tilknyttede specialkategorier.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Her kan du ændre, slette, deaktivere og tilføje filtypegrupper, og tilføje en specialkategori til disse. Desuden kan downloadmulighederne ændres, og du definere et uploadikon, som vil blive vist foran en vedhæftet fil, som tilhører gruppen.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Her kan du administrere og kontrollere dine tilladte filtyper. For at aktivere dine filtyper, referér venligst til kontrolpanelet for filtypegrupper. Der advares kraftigt imod at tillade filtyper, der kan indeholde scripts (som <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>asp</code>, <code>aspx</code>...).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Her vises vildfarne filer. Det sker oftest, når brugere vedhæfter filer, men ikke får klikket "Udfør" på det endelige indlæg. Du kan slette filerne, eller knytte dem til eksisterende indlæg. For at knytte filerne til indlæg kræves et gyldigt indlægs-ID, du skal selv angive dette ID. Den allerede uploadede fil vil herefter blive tilknyttet dette indlæg.',
	'ADD_EXTENSION'						=> 'Tilføj filtype',
	'ADD_EXTENSION_GROUP'				=> 'Tilføj filtypegruppe',
	'ADMIN_UPLOAD_ERROR'				=> 'Fejl under forsøg på at vedhæfte fil: %s.',
	'ALLOWED_FORUMS'					=> 'Tilladte fora',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Tillader at tilknytte de udvalgte filtyper til indlæg i de valgte fora.',
	'ALLOWED_IN_PM_POST'				=> 'Tilladt',
	'ALLOW_ATTACHMENTS'					=> 'Tillad at vedhæfte filer',
	'ALLOW_ALL_FORUMS'					=> 'Tillad i alle fora',
	'ALLOW_IN_PM'						=> 'Tillad i private beskeder',
	'ALLOW_PM_ATTACHMENTS'				=> 'Tillad at vedhæfte filer i private beskeder',
	'ALLOW_SELECTED_FORUMS'				=> 'Kun nedenstående valgte fora',
	'ASSIGNED_EXTENSIONS'				=> 'Valgte filtyper',
	'ASSIGNED_GROUP'					=> 'Valgte gruppe',
	'ATTACH_EXTENSIONS_URL'				=> 'Filtyper',
	'ATTACH_EXT_GROUPS_URL'				=> 'Filtypegrupper',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Maksimal filstørrelse',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Hver fils maksimale størrelse, 0 betyder ubegrænset.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Maksimal filstørrelse i private beskeder',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Maksimum drevplads pr. bruger til vedhæftede filer i private beskeder, 0 betyder ubegrænset.',
	'ATTACH_ORPHAN_URL'					=> 'Vildfarne vedhæftede filer',
	'ATTACH_POST_ID'					=> 'Indlæggets ID',
	'ATTACH_QUOTA'						=> 'Den totale kvote for vedhæftede filer',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Maksimum drevplads tilgængelig for vedhæftede filer på hele boardet, 0 betyder ubegrænset.',
	'ATTACH_TO_POST'					=> 'Vedhæft fil til indlæg',

	'CAT_FLASH_FILES'			=> 'Flashfiler',
	'CAT_IMAGES'				=> 'Billeder',
	'CAT_QUICKTIME_FILES'		=> 'Quicktime media-filer',
	'CAT_RM_FILES'				=> 'RealMedia media-filer',
	'CAT_WM_FILES'				=> 'Windows Media media-filer',
	'CHECK_CONTENT'			=> 'Kontrol af vedhæftede filer',
	'CHECK_CONTENT_EXPLAIN'	=> 'Nogle browsere kan snydes og medfører fejlfortolkning af uploadede filers mimetype. Denne kontrol sikrer afvisning af filer der er årsag hertil.',
	'CREATE_GROUP'				=> 'Opret en ny gruppe',
	'CREATE_THUMBNAIL'			=> 'Opret miniature',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Der oprettes altid en miniature.',

	'DEFINE_ALLOWED_IPS'			=> 'Definér tilladte IP-adresser eller værtsnavne',
	'DEFINE_DISALLOWED_IPS'			=> 'Definér forbudte IP-adresser eller værtsnavne',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'For at specificere flere forskellige IP-adresser eller værtsnavne, skrives de hver især på en ny linie. For at specificere et interval af IP-adresser adskilles starten og slutningen med en bindestreg (eks: 202.123.228.100-202.123.228.125). Brug * som ubekendt for ukendte tegn.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Du kan fjerne flere forbudte IP-adresser i én arbejdsgang, ved at bruge den rette kombination af mus og tastatur (computer- og browserafhængigt). Forbudte IP-adresser har blå baggrund.',
	'DISPLAY_INLINED'				=> 'Vis billeder inline',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Hvis indstillingen er sat til "Nej", vil vedhæftede billedfiler blive vist som et link.',
	'DISPLAY_ORDER'					=> 'Visningsorden for vedhæftede filer',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Vis vedhæftede filer sorteret efter dato og tid.',
	
	'EDIT_EXTENSION_GROUP'			=> 'Ændre filtypegruppe',
	'EXCLUDE_ENTERED_IP'			=> 'For at forbyde angivne IP-adresse eller værtsnavn skal du slå denne til.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Ekskludér IP-adresse fra tilladte IP-adresser eller værtsnavne',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Ekskludér IP-adresse fra afviste IP-adresser eller værtsnavne',
	'EXTENSIONS_UPDATED'			=> 'Filtyper er nu opdaterede.',
	'EXTENSION_EXIST'				=> 'Filtype %s eksisterer allerede.',
	'EXTENSION_GROUP'				=> 'Filtypegruppe',
	'EXTENSION_GROUPS'				=> 'Filtypegrupper',
	'EXTENSION_GROUP_DELETED'		=> 'Filtypegruppe er nu slettet.',
	'EXTENSION_GROUP_EXIST'			=> 'Filtypegruppen %s eksisterer allerede.',

	'GO_TO_EXTENSIONS'		=> 'Gå til indstillinger for filtyper',
	'GROUP_NAME'			=> 'Gruppenavn',

	'IMAGE_LINK_SIZE'			=> 'Maksimale dimensioner på billede',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Vis vedhæftet billede som et tekstlink i indlægget, hvis billedet er større end (pixelbredde gange pixelhøjde). Sættes begge værdier til 0 deaktiveres denne funktion.',
	'IMAGICK_PATH'				=> 'Sti til imagemagick',
	'IMAGICK_PATH_EXPLAIN'		=> 'Den fulde sti til konverteringsprogrammet imagemagick, f.eks. <samp>/usr/bin/</samp>.',

	'MAX_ATTACHMENTS'				=> 'Maksimalt antal vedhæftede filer pr. indlæg',
	'MAX_ATTACHMENTS_PM'			=> 'Maksimalt antal vedhæftede filer pr. privat besked',
	'MAX_EXTGROUP_FILESIZE'			=> 'Maksimal filstørrelse',
	'MAX_IMAGE_SIZE'				=> 'Maksimale billeddimensioner',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Maksimal størrelse på vedhæftede billeder, 0 pixels gange 0 pixels deaktiverer muligheden for at vedhæfte billeder.',
	'MAX_THUMB_WIDTH'				=> 'Maksimal bredde på miniature i pixels',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Miniaturer vil ikke blive oprettet bredere end værdien defineret her.',
	'MIN_THUMB_FILESIZE'			=> 'Grænse for oprettelse af miniature',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Opret ikke miniature for billeder der er mindre end',
	'MODE_INLINE'					=> 'Inline',
	'MODE_PHYSICAL'					=> 'Fysisk',

	'NOT_ALLOWED_IN_PM'			=> 'Kun tilladt i indlæg',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Ikke tilladt',
	'NOT_ASSIGNED'				=> 'Ikke tildelt',
	'NO_EXT_GROUP'				=> 'Ingen',
	'NO_EXT_GROUP_NAME'			=> 'Intet gruppenavn angivet',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Ingen filtypegruppe angivet.',
	'NO_FILE_CAT'				=> 'Ingen',
	'NO_IMAGE'					=> 'Intet billede',
	'NO_THUMBNAIL_SUPPORT'		=> 'Miniaturefunktionen er blevet deaktivéret. Denne funktionalitet forudsætter at enten GD-udvidelse er tilgængelig eller at imagemagick er installeret på serveren. Ingen af disse blev fundet.',
	'NO_UPLOAD_DIR'				=> 'Den angivne modtagemappe eksisterer ikke.',
	'NO_WRITE_UPLOAD'			=> 'Der kan ikke skrives til den specificerede modtagemappe. Korrigér venligst tilladelser for mappen, så serveren kan skrive til den.',

	'ONLY_ALLOWED_IN_PM'    => 'Kun tilladt i private beskeder',
	'ORDER_ALLOW_DENY'		=> 'Tillad',
	'ORDER_DENY_ALLOW'		=> 'Afvis',

	'REMOVE_ALLOWED_IPS'		=> 'Fjern <em>tilladte</em> IP-adresser eller værtsnavne',
	'REMOVE_DISALLOWED_IPS'		=> 'Fjern <em>forbudte</em> IP-adresser eller værtsnavne',

	'SEARCH_IMAGICK'				=> 'Søg efter Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'Tillad & afvis-liste',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Ændre standardhandling når sikker download er aktiveret, fra tillad & afvis-listen til indholdet af en <strong>hvidliste</strong> (tillad) eller en <strong>sortliste</strong> (afvis).',
	'SECURE_DOWNLOADS'				=> 'Aktivér sikker download',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Med denne mulighed aktiveret kan der kun downloades filer fra de definerede IP-adresser eller værtsnavne.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Sikker download er ikke aktiveret. Nedenstående indstillinger bliver først mulige, når du har aktiveret sikker download.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'IP-adresselisten er nu opdateret.',
	'SECURE_EMPTY_REFERRER'			=> 'Tillad tomme henvisninger',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Sikker download er baseret på henvisninger (hvor kommer brugeren fra). Vil du tillade download for brugere uden henvisninger?',
	'SETTINGS_CAT_IMAGES'			=> 'Indstillinger for billedkategori',
	'SPECIAL_CATEGORY'				=> 'Specialkategori',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Specialkategorier bliver vist forskelligt i indlæggene.',
	'SUCCESSFULLY_UPLOADED'			=> 'Filen er modtaget.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Filtypegruppe er tilføjet.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Filtypegruppe er opdateret.',

	'UPLOADING_FILES'				=> 'Uploader filer',
	'UPLOADING_FILE_TO'				=> 'Uploader fil "%1$s" til indlæg nummer %2$d...',
	'UPLOAD_DENIED_FORUM'			=> 'Du har ikke tilladelse til at sende filer til forummet "%s".',
	'UPLOAD_DIR'					=> 'Modtagemappe',
	'UPLOAD_DIR_EXPLAIN'			=> 'Stien til modtagemappen, hvor vedhæftede filer gemmes. Hvis du ændrer modtagemappe og der allerede er uploadet filer i den oprindelige mappe, skal du manuelt flytte filerne fra denne til den nye mappe.',
	'UPLOAD_ICON'					=> 'Uploadikon',
	'UPLOAD_NOT_DIR'				=> 'Den specificerede modtagemappe lader ikke til at eksistere.',
));

?>
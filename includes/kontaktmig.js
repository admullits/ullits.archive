<!--
// use this function to hide email adresses from spambots

function kontaktmig( mitnavn, dom, tekst, tld,  style )
{
// arguments: mitnavn   -  user name
//	      dom	-  domain name
//	      tld	- top level domain name - set to "dk" if not specified
//	      tekst	- text for link. If not specified, email adress is used
//	      style	- can specify style
//	     tld, tekst and style are optional - can be "", or argument not specified
//examples: kontaktmig( "naturgas", "midtnord", "", "klik her", "color: #366990; font-weight: bold; font-size: 12");
// kontaktmig( "ks", "hng" );

// texts written in html codes help hide address from spambots.
// Those written as actual letters are required - else link not interpreted as html


if ( typeof tld == 'undefined' || tld  == "" ) 
 {
   tld = "&#100;&#107;"; // dee kay som default
 } 


var pkt = "&#046;";
var snab = "&#64;";
var storre = ">"; //"&#62;";
var al = "a";
var lunk1 = "hr";
var lunk2 = "ef";
var lige = "&#61;";
var dobcit = "&#34;";
var post = "&#77;&#97;&#105;&#76;";
var til =  "&#84;&#111;";
var colo = "&#58;";
var postadr = mitnavn + snab + dom + pkt + tld;
if ( typeof tekst == 'undefined' || tekst == "" )
{
 tekst = postadr;
}

document.write( '<' + al + ' ' + lunk1 + lunk2 + '=\"');
document.write(   post + til + colo + postadr );
document.write(   '\"' )

if (  typeof style != 'undefined' && style != "" )
{
 document.write( ' style=' + '\"' + style + '\"');
}

document.write(  '>' + tekst + '</' + al + storre );


}
//-->


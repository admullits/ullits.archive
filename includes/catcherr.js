<!--
//insert in <head> section as <script language="JavaScript" src="catcherr.js" ></SCRIPT>
function stoperror()
{
 return true;
}

window.onerror=stoperror;  //comment this out during test, then use it in production

function inspect(elm){
  var str = "";
  for (var i in elm){
    str += i + ": " + elm.getAttribute(i) + "\n";
  }
  alert(str);
}
function whatitems( cont )
{

 // call eg. with document.all to see what it contains
	     var ix;
             var str = "";
	     var str2;

	     for ( ix = 0; ix < cont.length; ix++ )
	      { str2 = "";
		if (cont[ix].id ) { str2 = " id " + cont[ix].id; }
		if (cont[ix].name) { str2 = str2 + " name " + cont[ix].name; }
		if (str2 != "") { str2 = "(" + str2 + ")"; }
                str = str + str2 + " ";
	      }
alert(str);
}

function ReplaceTags(xStr)
{

	var regExp = /<br>/gi;  //used in convert innerHTML to innerText
	xStr = xStr.replace(regExp,"\n");
        regExp = /<\/?[^>]+>/gi;
        xStr = xStr.replace(regExp,"");
	regExp = /&amp;/g;
	xStr = xStr.replace(regExp, "&" );
        return xStr;
}

function doinnerText( elm )
{   // cross-browser support e.g. myinnertext = doinnerText( document.getElementById("myelement") );
    // NB! read-only
  if ( typeof elm.innerText == "undefined" )
   { return ReplaceTags(elm.innerHTML );
   }
  else
   return elm.innerText;
}

function docall( dcm )
{
 // return value of document.all or W3C equivalent
 // arg. is document, top.map.document, etc.
// call example:   var dcall = docall(document); // fix for propr. IE .all 

return (dcm.all) ? dcm.all : dcm.getElementsByTagName("*");
}

function docallstr( )  
{
// return string of document.all or W3C equivalent

return (document.all) ? "document.all." : "document.getElementsByTagName(\"*\").";

}

//-->

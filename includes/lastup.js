<!-- 
function lastup()
{

var days = new Array(8);
days[1] = "Søn";
days[2] = "Man";
days[3] = "Tir";
days[4] = "Ons";
days[5] = "Tor";
days[6] = "Fre";
days[7] = "Lør";
var months = new Array(13);
months[1] = "Jan";
months[2] = "Feb";
months[3] = "Mar";
months[4] = "Apr";
months[5] = "Maj";
months[6] = "Jun";
months[7] = "Jul";
months[8] = "Aug";
months[9] = "Sep";
months[10] = "Okt";
months[11] = "Nov";
months[12] = "Dec";
var dateObj = new Date(document.lastModified);
var wday = days[dateObj.getDay() + 1];
var lmonth = months[dateObj.getMonth() + 1];
var date = dateObj.getDate();
var fyear = dateObj.getYear();
if (fyear < 2000) 
{ fyear = fyear + 1900;
}
document.write("Sidst opdateret "+ wday + " " + lmonth + " " + date + " " + fyear);

}
//-->


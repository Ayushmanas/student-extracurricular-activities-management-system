<style type="text/css">
body 
{
background-color:ffffff;
background-image:url(images/background/hr.jpg);
background-repeat:no-repeat;
background-position:center center;
background-attachment:fixed;
font-family:sans-serif;
}
</style>
<title>
Student Database
</title>
<SCRIPT LANGUAGE="JavaScript">
var message="Sorry,Right click disabled";
///////////////////////////////////
function clickIE() {if (document.all) {alert(message);return false;}}
function clickNS(e) {if 
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {alert(message);return false;}}}
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}

document.oncontextmenu=new Function("return false")
// --> 
</script>
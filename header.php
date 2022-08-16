<?
session_start();



include "baglanti.php";

if($aa==2)
{
$yy=$yil;
}
else
{
$yy=date("Y");
}
 
$gun=date("Y-m-d");


?>
<html>
<head>
<title>GELİR YÖNETİMİ BAŞKANLIĞI</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>

<link rel="stylesheet" type="text/css" href="takvim/epoch_styles.css" />
<script type="text/javascript" src="takvim/epoch_classes.js"></script>
<script type="text/javascript">
/*You can also place this code in a separate file and link to it like epoch_classes.js*/
	var bas_cal,dp_cal,ms_cal;      
window.onload = function () {
	
	dp_cal  = new Epoch('epoch_popup','popup',document.getElementById('popup_container'));
	dp_cal  = new Epoch('epoch_popup','popup',document.getElementById('popup_container2'));
	ms_cal  = new Epoch('epoch_multi','flat',document.getElementById('multi_container'),true);
};
</script>

<style type="text/css">
<!--
.mytext {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: #666666} 
.mytext a:link {color: #666666; text-decoration: none} 
.mytext a:visited {color: #666666; text-decoration: none} 
.mytext a:hover {color: #666666; text-decoration: underline} 
.mytext a:active {color: #666666; text-decoration: none} 
.mytext2 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: #CC0000} 
.mytext2 a:link {color: #000000; text-decoration: none} 
.mytext2 a:visited {color: #000000; text-decoration: none} 
.mytext2 a:hover {color: #000000; text-decoration: underline} 
.mytext2 a:active {color: #000000; text-decoration: none} 
.style2 {
	color: #000033;
	font-weight: bold;
}
-->

.dynamic-tab-pane-control h2 {
	text-align:	center;
	width:		auto;
}

.dynamic-tab-pane-control h2 a {
	display:	inline;
	width:		auto;
}

.dynamic-tab-pane-control a:hover {
	background: transparent;
}
.style4 {
	color: #FFFFFF;
	font-weight: bold;
}
.style5 {color: #FFFFFF}
.style6 {color: #000066}
.style8 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: #000033; }
</style>
</head>

<body bgcolor="#CCCCCC" onLoad="MM_preloadImages('images/but2_1.jpg','images/but2_2.jpg','images/but2_3.jpg','images/but2_4.jpg','images/but2_5.jpg','images/but2_6.jpg')">
<div align="left">
<link type="text/css" rel="stylesheet" href="templates/default/tab.css" />
  <table width="760" border="0" cellspacing="0" cellpadding="0">
    <tr> 
      <td><img src="images/hdr1.gif" width="850" height="50" border="0" usemap="#Map2"></td>
    </tr>
  </table>
  <table width="850" height="25" border="0" cellpadding="0" cellspacing="0" bgcolor="#f4f4f4">
    <tr> 
      <td><div align="center"></div></td>
    </tr>
</table>
  <table width="850" border="0" cellspacing="0" cellpadding="0">
    <tr> 
      <td width="127"><div align="left"><a href="index.php"><img src="images/but1_1.jpg" name="Image1" width="127" height="27" border="0" id="Image1" onMouseOver="MM_swapImage('Image1','','images/but2_1.jpg',1)" onMouseOut="MM_swapImgRestore()"></a></div></td>
      <td width="126"><div align="left"><a href="hatlar.php"><img src="images/but1_2.jpg" name="Image2" width="126" height="27" border="0" id="Image2" onMouseOver="MM_swapImage('Image2','','images/but2_2.jpg',1)" onMouseOut="MM_swapImgRestore()"></a></div></td>
      <td width="128"><div align="left"><a href="raporlar.php"><img src="images/but1_3.jpg" name="Image3" width="128" height="27" border="0" id="Image3" onMouseOver="MM_swapImage('Image3','','images/but2_3.jpg',1)" onMouseOut="MM_swapImgRestore()"></a></div></td>
      <td width="126"><div align="left"><a href="calendar.php" target="_blank"><img src="images/but1_4.jpg" name="Image4" width="126" height="27" border="0" id="Image4" onMouseOver="MM_swapImage('Image4','','images/but2_4.jpg',1)" onMouseOut="MM_swapImgRestore()"></a></div></td>
      <td width="117"><div align="left"><a href="admin.php"><img src="images/but1_5.jpg" name="Image5" width="129" height="27" border="0" id="Image5" onMouseOver="MM_swapImage('Image5','','images/but2_5.jpg',1)" onMouseOut="MM_swapImgRestore()"></a></div></td>
      <td width="136"><div align="left"><a href="#"><img src="images/but1_6.jpg" name="Image6" width="124" height="27" border="0" id="Image6" onMouseOver="MM_swapImage('Image6','','images/but2_6.jpg',1)" onMouseOut="MM_swapImgRestore()"></a></div></td>
      <td width="136">&nbsp;</td>
      <td width="136">&nbsp;</td>
      <td width="136">&nbsp;</td>
      <td width="136">&nbsp;</td>
      <td width="136">&nbsp;</td>
      <td width="136">&nbsp;</td>
    </tr>
</table>
  <table width="760" border="0" cellspacing="0" cellpadding="0">
    <tr> 
      <td><img src="images/hdr2.jpg" width="850" height="100"></td>
    </tr>
  </table>
<?
session_start();
include "level4_check.php";

?>


<?php

include "baglanti.php";


include("config.php");


$sqlac=mysql_query("select * from login_table where userid='$key' ");

while($dok=mysql_fetch_array($sqlac))
{

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
</style>
</head>

<body bgcolor="#CCCCCC" onLoad="MM_preloadImages('images/but2_1.jpg','images/but2_2.jpg','images/but2_3.jpg','images/but2_4.jpg','images/but2_5.jpg','images/but2_6.jpg')">
<div align="left">
<link type="text/css" rel="stylesheet" href="templates/default/tab.css" />
  <table width="760" border="0" cellspacing="0" cellpadding="0">
    <tr> 
      <td><img src="images/hdr1.gif" width="760" height="50" border="0" usemap="#Map2"></td>
    </tr>
  </table>
  <table width="760" height="25" border="0" cellpadding="0" cellspacing="0" bgcolor="#f4f4f4">
    <tr> 
      <td><div align="center"></div></td>
    </tr>
  </table>
  <table width="760" border="0" cellspacing="0" cellpadding="0">
    <tr> 
      <td width="127"><a href="index.php"><img src="images/but1_1.jpg" name="Image1" width="127" height="27" border="0" id="Image1" onMouseOver="MM_swapImage('Image1','','images/but2_1.jpg',1)" onMouseOut="MM_swapImgRestore()"></a></td>
      <td width="126"><a href="hatlar.php"><img src="images/but1_2.jpg" name="Image2" width="126" height="27" border="0" id="Image2" onMouseOver="MM_swapImage('Image2','','images/but2_2.jpg',1)" onMouseOut="MM_swapImgRestore()"></a></td>
      <td width="128"><a href="raporlar.php"><img src="images/but1_3.jpg" name="Image3" width="128" height="27" border="0" id="Image3" onMouseOver="MM_swapImage('Image3','','images/but2_3.jpg',1)" onMouseOut="MM_swapImgRestore()"></a></td>
      <td width="126"><a href="takvim.php"><img src="images/but1_4.jpg" name="Image4" width="126" height="27" border="0" id="Image4" onMouseOver="MM_swapImage('Image4','','images/but2_4.jpg',1)" onMouseOut="MM_swapImgRestore()"></a></td>
      <td width="117"><a href="admin.php"><img src="images/but1_5.jpg" name="Image5" width="129" height="27" border="0" id="Image5" onMouseOver="MM_swapImage('Image5','','images/but2_5.jpg',1)" onMouseOut="MM_swapImgRestore()"></a></td>
      <td width="136"><a href="#"><img src="images/but1_6.jpg" name="Image6" width="124" height="27" border="0" id="Image6" onMouseOver="MM_swapImage('Image6','','images/but2_6.jpg',1)" onMouseOut="MM_swapImgRestore()"></a></td>
    </tr>
  </table>
  <table width="760" border="0" cellspacing="0" cellpadding="0">
    <tr> 
      <td><img src="images/hdr2.jpg" width="760" height="162"></td>
    </tr>
  </table>
  <table width="760" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
    <tr> 
      <td><table width="757" border="0" cellspacing="15" cellpadding="0">
          <tr> 
            <td width="486" valign="top"><div align="right">
              <form name="form1" method="post" action="useradd.php">
                <h3 align="center">Yeni Kullan&#305;c&#305; Ekle </h3>
                <table width="80%" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#000000" bgcolor="#FFFFFF">
                  <tr>
                    <td width="20%"><div align="right"><strong>User Name:</strong></div></td>
                    <td width="40%"><input name="username" type="text" id="username" value="<? echo"$dok[user_name]"; ?>" maxlength="15"></td>
                  </tr>
                  <tr>
                    <td><div align="right"><strong>Password:</strong></div></td>
                    <td><input name="userpass" type="password" id="userpass" value="" maxlength="15"></td>
                  </tr>
                  <tr>
                    <td><div align="right"><strong>Userlevel:</strong></div></td>
                    <td><label>
                      <select name="userlevel">
					    <option value="<? echo"$dok[user_level]"; ?>" selected><? echo"$dok[user_level]"; ?></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                      </select>
                    </label></td>
                  </tr>
                  <tr>
                    <td><div align="right"><strong>User Dept: </strong></div></td>
                    <td><select name="select">
                     <option value="<? echo"$dok[user_deptl]"; ?>" selected><? echo"$dok[user_dept]"; ?></option>
                      <option value="Analiz">Gelir Analiz</option>
                      <option value="DisHat">Dış Hat Yönetim</option>
                      <option value="IcHat">İç Hat Yönetim</option>
                      <option value="Ucret">Ücret</option>
                      <option value="GroupDesk">Group Desk</option>
                    </select></td>
                  </tr>
                  <tr>
                    <td><div align="right"><strong>Kullanici Ofis:</strong></div></td>
                    <td><input name="userofis" type="text" id="userofis" value="" maxlength"25"></td>
                  </tr>
                  <tr>
                    <td><div align="right"><strong>Email Address:</strong></div></td>
                    <td><input name="useremail" type="text" id="useremail2" value="" maxlength"25"></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="Submit" value="Add User">
                        <input type="reset" name="Submit22" value="Reset"></td>
                  </tr>
                </table>
                <br>
                <table width="80%" border="1" align="center" bgcolor="#FFFFFF">
                  <tr>
                    <center>
                      <? echo $msg; ?>
                      <td colspan="2">Kullan&#305;c&#305; Seviyeleri: </td>
                    </center>
                  </tr>
                  <tr>
                    <td width="33">1</td>
                    <td>Normal Kullanıcı </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Hatcı,Ücertçi,Grop Desk </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Gelir Analist </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Admin</td>
                  </tr>
                </table>
                <p class = "smallErrorText" align="center">
                  <?php
				  
				  
				  }
   if ($msg2) {$msg = "The user name you have choosen is already in use, sorry, please choose another";}
  if ($msg2b) {$msg = "The email address you have choosen is already in use, sorry, please choose another";} 
  if ($msg3) {$msg = "Error, you must fill in all fields";}
  
  
   ?>
                </p>
                <p>&nbsp;</p>
              </form>
              <p align="left"><span class="mytext">                 
			  
  </span></p>
              <p><span class="mytext2 style2"><br>
                </span></p>
            </div></td>
            <td width="226" align="center" valign="top" class="mytext2"><div align="left">
              <form name="form2" method="get" action="index.php">
                <div align="center"><span class="mytext">
                    <select name="yil" id="yil">
                      <option value="--">Yıl</option>
                      <option value="2005">2005</option>
                      <option value="2006">2006</option>
                      <option value="2007" selected>2007</option>
                      <option value="2008">2008</option>
                      <option value="2009">2009</option>
                    </select>
                    <select name="hafta" id="hafta">
					<option value="--" selected>Hafta</option>
					<?
					for($j=1;$j<53;$j++)
					{
					?>
					<option value="<? echo"$j"; ?>"><? echo"$j"; ?></option>
					<?
					}
					?>
                    </select>
                    <input type="submit" name="Submit2" value="Git">
                    <input name="aa" type="hidden" id="aa" value="2">
</span>                  </div>
              </form>
            </div></td>
          </tr>
        </table></td>
    </tr>
    <tr> 
      <td><img src="images/dlin1.gif" width="757" height="2"></td>
    </tr>
  </table>
  <table width="760" height="300" border="0" cellpadding="0" cellspacing="0">
    <tr> 
      <td  valign="top" bgcolor="#FFFFFF"><table width="700%" border="1" cellpadding="0" cellspacing="15" bordercolor="efefef">
          <tr> 
            <td valign="top">&nbsp;</td>
          </tr>
        </table>
        <p>&nbsp;</p></td>
    </tr>
  </table>
  <table width="760" border="0" cellspacing="0" cellpadding="0">
    <tr> 
      <td bgcolor="#FFFFFF"><img src="images/dlin1.gif" width="757" height="2"></td>
    </tr>
  </table>
  <table width="760" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
    <tr> 
      <td width="37"><img src="images/ftr_1.gif" width="37" height="50" border="0" usemap="#Map"></td>
      <td width="722"><table width="686" border="0" cellspacing="10" cellpadding="0">
          <tr> 
            <td><div align="center"><img src="images/bul.gif" width="4" height="6" class="mytext"> <span class="mytext"><a href="index.php">Anasayfa</a>&nbsp;&nbsp; <img src="images/bul.gif" width="4" height="6"> <a href="hatlar.php">Hatlar</a>&nbsp;&nbsp; <img src="images/bul.gif" width="4" height="6"> <a href="raporlar.php">Raporlar&nbsp;</a>&nbsp; <img src="images/bul.gif" width="4" height="6"> <a href="takvim.php">Takvim</a>&nbsp;&nbsp; <img src="images/bul.gif" width="4" height="6"> <a href="admin.php">Yönetim</a>&nbsp;&nbsp; <img src="images/bul.gif" width="4" height="6"> <a href="help.php">Yardım</a>&nbsp;</span></div></td>
          </tr>
        </table></td>
      <td width="10"><div align="right"><img src="images/ftr_2.gif" width="37" height="50"></div></td>
    </tr>
  </table>
  <map name="Map">
    <area shape="circle" coords="22,26,7" href="#top" alt="Top">
  </map>
</div>
<map name="Map2">
  <area shape="rect" coords="721,20,735,33" href="index.php" alt="Home">
  <area shape="rect" coords="696,21,708,29" href="mailto:feriduno@thy.com" alt="Email">
  <area shape="rect" coords="667,20,684,34" href="login.php" alt="Login">
</map>
</body>
</html>

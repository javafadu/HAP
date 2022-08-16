<?
require "header.php";

?>
<style type="text/css">
<!--
.style3 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style4 {font-size: 12px}
.style5 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; }
.style10 {font-size: 10px}
.style11 {color: #666666}
-->
</style>



  <table width="850" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
    <tr> 
      <td><table width="850" border="0" cellspacing="15" cellpadding="0">
          <tr> 
            <td width="486" valign="top"><div align="right">
              <p align="left"><span class="mytext">                 
			<? 
$thisyear= $yy;  
			if($_SESSION['kontrol'] == 1)
			{
			?>            
<p class="mytext2">
             
			  
			  
			  
			  
			  
			   <? 
						if($aa<>2)
						{
		$haftasec=mysql_query("select * from tarihler where date='$gun' ");
		while($haftayaz=mysql_fetch_array($haftasec))
		{
		$buhafta=$haftayaz[WOY];
		$gechafta=$buhafta-1;
		}
		}
		else
		{
		$buhafta=$hafta+1;
		$gechafta=$hafta;
		}
		
			
			echo"Hafta :<font color='blue'><u> $gechafta. Hafta</u></font>"; ?>
  </p></span>
              <p><span class="style8"><span class="style8">Ýncelemek istediðiniz haftayý sað taraftan seçebilirsiniz. </span></span><span class="mytext2 style2"><br>
                    </span></p>
            </div></td>
            <td width="229" align="center" valign="middle" class="mytext">              <form name="form2" method="get" action="index.php">
              <div align="center"><span class="mytext">
                <select name="yil" id="yil">
                  <option value="--">Yýl</option>
                  <option value="2005">2005</option>
                  <option value="2006">2006</option>
                  <option value="2007">2007</option>
                  <option value="2008" selected>2008</option>
                  <option value="2009">2009</option>
                </select>
                <select name="hafta" id="hafta">
                  <option value="--" selected>Hafta</option>
				  <option value="Genel">Genel</option>
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
              </span> </div>
            </form></td></tr>
        </table></td>
    </tr>
    <tr> 
      <td><img src="images/dlin1.gif" width="850" height="2"></td>
    </tr>
</table>
  <table width="850" height="300" border="0" cellpadding="0" cellspacing="0">
    <tr> 
      <td width="467" height="20" valign="top" bgcolor="#FFFFFF"><table width="550" border="0" cellspacing="15" cellpadding="0">
          <tr> 
            <td valign="top" class="mytext">
        
<p class="mytext2">
  <?
			}
			else
			{
			echo"Bu Alanda $gechafta. Hafta Hatlara ait Bilgiler Mevcut<br>Sadece Yetkili Kiþilere Açýktýr";
			}
			?> 
            </p>
            <p align="center">
              <?
$sqlhatasil=mysql_query("select * from personel where hatasil like '%$kod%' ");
while($hatasil=mysql_fetch_array($sqlhatasil))
{
$isim0=$hatasil[isim];
$soyisim0=$hatasil[soyisim];
$tel0=$hatasil[tel];
$mail0=$hatasil[mail1];

}
?>


              <?
$sqlhatyedek=mysql_query("select * from personel where hatyedek like '%$kod%' ");
while($hatyedek=mysql_fetch_array($sqlhatyedek))
{
$isim2=$hatyedek[isim];
$soyisim2=$hatyedek[soyisim];
$tel2=$hatyedek[tel];
$mail2=$hatyedek[mail1];

}
?>

              <?
$sqlucretasil=mysql_query("select * from personel where ucretasil like '%$kod%' ");
while($ucretasil=mysql_fetch_array($sqlucretasil))
{
$isim3=$ucretasil[isim];
$soyisim3=$ucretasil[soyisim];
$tel3=$ucretasil[tel];
$mail3=$ucretasil[mail1];

}
?>


<?
$sqlucretyedek=mysql_query("select * from personel where ucretyedek like '%$kod%' ");
while($ucretyedek=mysql_fetch_array($sqlucretyedek))
{
$isim4=$ucretyedek[isim];
$soyisim4=$ucretyedek[soyisim];
$tel4=$ucretyedek[tel];
$mail4=$ucretyedek[mail1];

}
?>

 <?
$sqlgrupasil=mysql_query("select * from personel where grupasil like '%$kod%' ");
while($grupasil=mysql_fetch_array($sqlgrupasil))
{
$isim5=$grupasil[isim];
$soyisim5=$grupasil[soyisim];
$tel5=$grupasil[tel];
$mail5=$grupasil[mail1];

}
?>

<?
$sqlgrupyedek=mysql_query("select * from personel where grupyedek like '%$kod%' ");
while($grupyedek=mysql_fetch_array($sqlgrupyedek))
{
$isim6=$grupyedek[isim];
$soyisim6=$grupyedek[soyisim];
$tel6=$grupyedek[tel];
$mail6=$grupyedek[mail1];

}
?>



<?
$sqlanalizasil=mysql_query("select * from personel where analizasil like '%$kod%' ");
while($analizasil=mysql_fetch_array($sqlanalizasil))
{
$isim7=$analizasil[isim];
$soyisim7=$analizasil[soyisim];
$tel7=$analizasil[tel];
$mail7=$analizasil[mail1];

}
?>

<?
$sqlanalizyedek=mysql_query("select * from personel where analizyedek like '%$kod%' ");
while($analizyedek=mysql_fetch_array($sqlanalizyedek))
{
$isim8=$analizyedek[isim];
$soyisim8=$analizyedek[soyisim];
$tel8=$analizyedek[tel];
$mail8=$analizyedek[mail1];

}
?>




            </p>
            <table width="90%" border="1" cellpadding="1" cellspacing="1" bordercolor="F4F4F4" bgcolor="#FFFFFF">
  <tr bgcolor="#99CCCC">
    <td width="23%"><div align="left" class="style3 style4">SORUMLU</span></div></td>
    <td width="14%"><div align="center" class="style5">ADI</span></div></td>
    <td width="16%"><div align="center" class="style5">SOYADI</span></div></td>
    <td width="13%"><div align="center" class="style5">DAHILI</span></div></td>
    <td width="34%"><div align="center" class="style5">E-MAIL</span></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#FFFFD5">
    <td><div align="left" class="style6 style10"><strong>HAT&Ccedil;I</strong></div></td>
    <td><div align="left" class="style6 style10"><? echo"$isim0"; ?></div></td>
    <td><div align="left" class="style6 style10"><? echo"$soyisim0"; ?></div></td>
    <td><div align="center" class="style6 style10"><? echo"$tel0"; ?></div></td>
    <td><div align="left" class="style6 style10"><? echo"<a href='mailto:$mail10'>$mail0</a>"; ?></div></td>
  </tr>
  <tr bgcolor="#FFFFD5">
    <td><div align="left" class="style6 style10"><strong>HAT&Ccedil;I YEDEK </strong></div></td>
    <td><div align="left" class="style6 style10"><? echo"$isim2"; ?></div></td>
    <td><div align="left" class="style6 style10"><? echo"$soyisim2"; ?></div></td>
    <td><div align="center" class="style6 style10"><? echo"$tel2"; ?></div></td>
      <td><div align="left" class="style6 style10"><? echo"<a href='mailto:$mail2'>$mail2</a>"; ?></div></td>
</tr>
  <tr bgcolor="#FFFFFF">
    <td colspan="5">&nbsp;</td>
    </tr>
  <tr bgcolor="#FFFF33">
    <td colspan="5"><span class="style10"></span>      <div align="center"><span class="style3"><span class="style4"><span class="style10"></span></span></span></div>      <div align="center"><span class="style3"><span class="style4"><span class="style10"></span></span></span></div>      <div align="center"><span class="style3"><span class="style4"><span class="style10"></span></span></span></div>      <div align="center"><span class="style3"><span class="style4"><span class="style10"></span></span></span></div></td>
    </tr>
  <tr>
    <td bgcolor="#FFFFFF"><div align="left" class="style6 style10 style11"><strong>&Uuml;CRET&Ccedil;&#304;</strong></div></td>
     <td><div align="left" class="style6 style10"><? echo"$isim3"; ?></div></td>
    <td><div align="left" class="style6 style10"><? echo"$soyisim3"; ?></div></td>
    <td><div align="center" class="style6 style10"><? echo"$tel3"; ?></div></td>
      <td><div align="left" class="style6 style10"><? echo"<a href='mailto:$mail3'>$mail3</a>"; ?></div></td>
</tr>
  <tr>
    <td bgcolor="#FFFFFF"><div align="left" class="style6 style10 style11"><strong>&Uuml;CRET&Ccedil;&#304; YEDEK </strong></div></td>
    <td><div align="left" class="style6 style10"><? echo"$isim4"; ?></div></td>
    <td><div align="left" class="style6 style10"><? echo"$soyisim4"; ?></div></td>
    <td><div align="center" class="style6 style10"><? echo"$tel4"; ?></div></td>
      <td><div align="left" class="style6 style10"><? echo"<a href='mailto:$mail4'>$mail4</a>"; ?></div></td>
</tr>
  <tr bgcolor="#FFFFFF">
    <td colspan="5">&nbsp;</td>
    </tr>
  <tr bgcolor="#FFFF33">
    <td colspan="5"><span class="style10"></span>      <div align="center"><span class="style3"><span class="style4"><span class="style10"></span></span></span></div>      <div align="center"><span class="style3"><span class="style4"><span class="style10"></span></span></span></div>      <div align="center"><span class="style3"><span class="style4"><span class="style10"></span></span></span></div>      <div align="center"><span class="style3"><span class="style4"><span class="style10"></span></span></span></div></td>
    </tr>
  <tr bgcolor="#FFFFD5">
    <td><div align="left" class="style6 style10"><strong>GRUP&Ccedil;U</strong></div></td>
     <td><div align="left" class="style6 style10"><? echo"$isim5"; ?></div></td>
    <td><div align="left" class="style6 style10"><? echo"$soyisim5"; ?></div></td>
    <td><div align="center" class="style6 style10"><? echo"$tel5"; ?></div></td>
      <td><div align="left" class="style6 style10"><? echo"<a href='mailto:$mail5'>$mail5</a>"; ?></div></td>
</tr>
  <tr bgcolor="#FFFFD5">
    <td><div align="left" class="style6 style10"><strong>GRUP&Ccedil;U YEDEK</strong></div></td>
     <td><div align="left" class="style6 style10"><? echo"$isim6"; ?></div></td>
    <td><div align="left" class="style6 style10"><? echo"$soyisim6"; ?></div></td>
    <td><div align="center" class="style6 style10"><? echo"$tel6"; ?></div></td>
      <td><div align="left" class="style6 style10"><? echo"<a href='mailto:$mail6'>$mail6</a>"; ?></div></td>
</tr>
  <tr bgcolor="#FFFFFF">
    <td colspan="5">&nbsp;</td>
    </tr>
  <tr bgcolor="#FFFF33">
    <td colspan="5"><span class="style10"></span>      <div align="center"><span class="style3"><span class="style4"><span class="style10"></span></span></span></div>      <div align="center"><span class="style3"><span class="style4"><span class="style10"></span></span></span></div>      <div align="center"><span class="style3"><span class="style4"><span class="style10"></span></span></span></div>      <div align="center"><span class="style3"><span class="style4"><span class="style10"></span></span></span></div></td>
    </tr>
  <tr>
    <td><div align="left" class="style6 style10 style11"><strong>ANAL&#304;ST</strong></div></td>
    <td><div align="left" class="style6 style10"><? echo"$isim7"; ?></div></td>
    <td><div align="left" class="style6 style10"><? echo"$soyisim7"; ?></div></td>
    <td><div align="center" class="style6 style10"><? echo"$tel7"; ?></div></td>
      <td><div align="left" class="style6 style10"><? echo"<a href='mailto:$mail7'>$mail7</a>"; ?></div></td>
</tr>
  <tr>
    <td><div align="left" class="style6 style10 style11"><strong>ANAL&#304;ST YEDEK </strong></div></td>
    <td><div align="left" class="style6 style10"><? echo"$isim8"; ?></div></td>
    <td><div align="left" class="style6 style10"><? echo"$soyisim8"; ?></div></td>
    <td><div align="center" class="style6 style10"><? echo"$tel8"; ?></div></td>
      <td><div align="left" class="style6 style10"><? echo"<a href='mailto:$mail8'>$mail8</a>"; ?></div></td>
</tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="center"><span class="style3"><span class="style4"></span></span></div></td>
    <td><div align="center"><span class="style3"><span class="style4"></span></span></div></td>
    <td><div align="center"><span class="style3"><span class="style4"></span></span></div></td>
    <td><div align="center"><span class="style3"><span class="style4"></span></span></div></td>
  </tr>
</table>	          
            </p></td>
          </tr>
        </table>
        
        <table width="482" border="0" cellspacing="15" cellpadding="0">
          <tr>
            <td width="58" valign="top">&nbsp;</td>
            <td width="379" valign="top" class="mytext2">&nbsp;</td>
          </tr>
        </table>
        <p>&nbsp;</p></td>
      <td width="15" valign="top" background="images/dlin2.gif" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="230" valign="top" bgcolor="#FFFFFF"><table width="200" border="0" cellspacing="15" cellpadding="0">
          <tr> 
            <?
			include "rightside.php";
			?>
          </tr>
        </table></td>
    </tr>
</table>
  <table width="850" border="0" cellspacing="0" cellpadding="0">
    <tr> 
      <td bgcolor="#FFFFFF"><img src="images/dlin1.gif" width="850" height="2"></td>
    </tr>
</table>
  <table width="850" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
    <tr> 
      <td width="37"><img src="images/ftr_1.gif" width="37" height="50" border="0" usemap="#Map"></td>
      <td width="722"><table width="686" border="0" cellspacing="10" cellpadding="0">
          <tr> 
            <td><div align="center"><img src="images/bul.gif" width="4" height="6" class="mytext"> 
                <span class="mytext"><a href="index.php">Anasayfa</a>&nbsp;&nbsp; 
                <img src="images/bul.gif" width="4" height="6"> <a href="hatlar.php">Hatlar</a>&nbsp;&nbsp; <img src="images/bul.gif" width="4" height="6"> 
                <a href="#">Raporlar&nbsp;</a>&nbsp; <img src="images/bul.gif" width="4" height="6"> 
                <a href="takvim.php">Takvim</a>&nbsp;&nbsp; <img src="images/bul.gif" width="4" height="6"> 
                <a href="admin.php">Yönetim</a>&nbsp;&nbsp; <img src="images/bul.gif" width="4" height="6"> 
                <a href="help.php">Yardým</a>&nbsp;</span></div></td>
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

<?
require "header.php";

?>
<link href="css/common.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style2 {font-weight: bold}
.style4 {color: #FFFFFF}
-->
</style>
<table width="850" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
    <tr> 
      <td><table width="850" border="0" cellspacing="15" cellpadding="0">
          <tr> 
            <td width="486" valign="top"><div align="right">
              <p align="left"><span class="mytext">                 
			  
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
  </span></p>
              <p><span class="style8"><span class="style8">Ýncelemek istediðiniz haftayý sað taraftan seçebilirsiniz. </span></span><span class="mytext2 style2"><br>
                    </span></p>
            </div></td>
            <td width="229" align="center" valign="middle" class="mytext">              <form name="form2" method="get" action="index.php">
              <div align="center"><span class="mytext">
                <select name="yil" id="yil">
                  <option value="--">Yýl</option>
                  <option value="2005">2005</option>
                  <option value="2006">2006</option>
                  <option value="2007" selected>2007</option>
                  <option value="2008">2008</option>
                  <option value="2009">2009</option>
                </select>
                <select name="hafta" id="hafta">
                  <option value="--" selected>Hafta</option>
				  <option value="Genel" selected>Genel</option>
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
      <td width="450" height="20" valign="top" bgcolor="#FFFFFF"><table width="800" border="0" cellspacing="15" cellpadding="0">
          <tr> 
            <td valign="top" class="mytext">
<? 
$thisyear= $yy;  
			if($_SESSION['kontrol'] == 1)
			{
			?>
<table align="center" >
  <tr>
  
  <td><form name="form3" method="get" action="">
         <div align="center">
           <?
		echo "<select name=\"rt\" class=\"input\" onChange=\"MM_jumpMenu('parent',this,0)\">";
        echo "<option value=\"\">INTERNATIOANAL</option> ";
        include 'includes/hatlisteint.php';
         echo "</select> ";
?>
         </div>
       </form>	</td>
  <td><form name="form4" method="get" action="">
         <div align="center">
           <?
		echo "<select name=\"rt\" class=\"input\" onChange=\"MM_jumpMenu('parent',this,0)\">";
        echo "<option value=\"\">DOMESTIC</option> ";
        include 'includes/hatlistedom.php';
         echo "</select> ";
?>
         </div>
       </form></td>
  </tr>
</TABLE>

<div align="center">    <?
$a=100;
$b=300;
$c=400;
echo"<b>$rt</b>";?>
  
</div>
<table width="95%" border="0" align="center">
  <tr>
    <th scope="col"> 
	
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
	codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" 
	WIDTH="700" 
	HEIGHT="400" 
	ALIGN="">
<PARAM NAME=movie VALUE="charts.swf?library_path=charts_library&xml_source=samplecappax.php?hat=<? echo"$rt"; ?>">
<PARAM NAME=quality VALUE=high>
<PARAM NAME=bgcolor VALUE=#666666>

<EMBED src="charts.swf?library_path=charts_library&xml_source=samplecappax.php?hat=<? echo"$rt"; ?>"
       quality=high 
       bgcolor=#666666  
       WIDTH="700" 
       HEIGHT="400" 
       ALIGN="" 
       swLiveConnect="true" 
       TYPE="application/x-shockwave-flash" 
       PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer">
</EMBED>
</OBJECT>
	   
	   
	   
	   	</th>
    <th scope="col">&nbsp;</th>
  </tr>
</table>
<table width="400" border="0" align="center" bordercolor="#990000">
  <tr bgcolor="#00CC00">
    <th scope="col"><a href="hatgoster.php?rt=<? echo"$rt"; ?>" class="style4">LF</a></th>
    <th scope="col"><a href="hatgosterry.php?rt=<? echo"$rt"; ?>" class="style4">RY</a></th>
    <th scope="col"><a href="hatgosterrask.php?rt=<? echo"$rt"; ?>" class="style4">RASK</a></th>
    <th scope="col"><a href="hatgosterpax.php?rt=<? echo"$rt"; ?>" class="style4">PAX</a></th>
    <th scope="col"><a href="hatgostercap.php?rt=<? echo"$rt"; ?>" class="style4">CAP</a></th>
    <th scope="col"><a href="hatgostercappax.php?rt=<? echo"$rt"; ?>" class="style4">08 Cap/Pax </a></th>
    <th scope="col">&nbsp;</th>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p><table width="70%" border="0" align="center">
   <form id="form5" name="form5" method="post" action="yorumkaydet.php"> <tr>
    <th colspan="3" scope="col"><label>
      <div align="left">
        <select name="yil" id="yil">
          <option value="2009">2009</option>
          <option value="2008" selected>2008</option>
          <option value="2007">2007</option>
          <option value="2006">2006</option>
        </select>
        <select name="hafta" id="hafta">
		<option value="Genel">Genel</option>
          <?
	  for ( $i=1; $i<53;$i++)
	  {
	  ?>
          <option value="<? echo"$i"; ?>"><? echo"$i"; ?></option>
          <?
		}
		?>
        </select>
        <select name="tur" id="tur">
          <option value="1" selected="selected">Olumlu Geli&#351;me</option>
          <option value="0">Olumsuz Geli&#351;me</option>
        </select>
        </label>      
        <label>
        </label>    
        <?
echo"$rt";
?>
      </div>
      <label></label></th>
    </tr>
  <tr>
    <th colspan="3" scope="col"><label>
      <div align="left">
        <textarea name="yorum" cols="60" rows="6" id="yorum"></textarea>
        </div>
    </label></th>
    </tr>
  <tr>
    <th scope="col"><input name="hat" type="hidden" id="hat" value="<? echo"$rt"; ?>" /></th>
    <th scope="col">&nbsp;</th>
    <th scope="col"><div align="right">
      <label>      </label>
    
     
      <label>
      <input type="submit" name="Submit3" value="Kaydet" />
      </label>
    </div></th>
    </tr> </form>
</table>
<br />
<br />
<?
$yrm=mysql_query("select * from yorumlar where route='$rt' order by yil,hafta DESC ");
$bg1="#EFE0D1";
$bg2="#E6FFF2";

while($yrl=mysql_fetch_array($yrm))
{

if ($yrl[tur]==0)
{
$a=$bg1;
}
else
{
$a=$bg2;
}
?>

<table width="95%" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="efefef" >
  <tr>
    <th width="19%" rowspan="3" scope="col" bgcolor="<? echo"$a";?>"><? echo"$yrl[yil]-$yrl[hafta]";?></th>
    <th width="35%" class="buttonz" scope="col"><div align="left" class="buttons"><? echo"$yrl[kisi]";?></div></th>
    <th width="23%" class="buttonz" scope="col"><div align="right"><? echo"$yrl[tarih]";?></div>
      <div align="right"></div></th>
    <th width="23%" class="buttonz" scope="col"><div align="right"><? echo"$yrl[saat]";?></div>
      <div align="right"></div></th>
  </tr>
  <tr>
    <td colspan="3" class="slink_orange"><? echo"$yrl[yorum]";?>
      <div align="center"></div></td>
    </tr>
  <tr>
    <td colspan="3" class="slink_orange">&nbsp;</td>
  </tr>
</table>
<br />
<?  } ?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table align="center" >
  <tr>
    <td><form action="" method="get" name="form3" id="form3">
      <div align="center">
        <?
		echo "<select name=\"rt\" class=\"input\" onChange=\"MM_jumpMenu('parent',this,0)\">";
        echo "<option value=\"\">INTERNATIOANAL</option> ";
        include 'includes/hatlisteint.php';
         echo "</select> ";
?>
      </div>
    </form></td>
    <td><form action="" method="get" name="form4" id="form4">
      <div align="center">
        <?
		echo "<select name=\"rt\" class=\"input\" onChange=\"MM_jumpMenu('parent',this,0)\">";
        echo "<option value=\"\">DOMESTIC</option> ";
        include 'includes/hatlistedom.php';
         echo "</select> ";
?>
      </div>
    </form></td>
  </tr>
</table>
<p>&nbsp;</p>
<p align="center"><?
			}
			else
			{
			echo"Bu Alanda $gechafta. Hafta Hatlara ait Bilgiler Mevcut<br>Sadece Yetkili Kiþilere Açýktýr";
			}
			?> 
	        </p>
</td>
          </tr>
        </table>
        
        <p>&nbsp;</p></td>
      <td width="15" valign="top" bgcolor="#FFFFFF"><p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
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
 
</div>

</body>
</html>

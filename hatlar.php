<?
require "header.php";

?>


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
 
</div>

</body>
</html>

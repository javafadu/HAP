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
              <p><span class="style8"><span class="style8">�ncelemek istedi�iniz haftay� sa� taraftan se�ebilirsiniz. </span></span><span class="mytext2 style2"><br>
                    </span></p>
            </div></td>
            <td width="229" align="center" valign="middle" class="mytext">              <form name="form2" method="get" action="index.php">
              <div align="center"><span class="mytext">
                <select name="yil" id="yil">
                  <option value="--">Y�l</option>
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
              <p>
                <? 
$thisyear= $yy;  
			if($_SESSION['kontrol'] == 1)
			{
			?>
			
			
			<?
		$timestamp = time();

$saat = date("H:i:s",$timestamp);
$tarih = date("Y-m-d");
$kisi = $_SESSION['username'];
$gra = getenv("REMOTE_ADDR");	
		
			$yrmkydet=mysql_query(" INSERT INTO `yorumlar` (`id`, `yil`, `hafta`, `route`, `tur`, `yorum`, `kisi`, `tarih`, `saat`, `ip`, `cvp`) VALUES ('', '$yil', '$hafta', '$hat', '$tur', '$yorum', '$kisi', '$tarih', '$saat', '$gra', NULL)  ");
			
			
			?>	
			
              </p>
              <p align="center">Yorumunuz Veritaban&#305;na Kaydedilmi&#351;tir. <br />
                <a href="hatgoster.php?rt=<? echo"$hat"; ?>">Yorum Yazd&#305;&#287;&#305;n&#305;z Hatta D&ouml;nmek &#304;&ccedil;in TIklay&#305;n </a><br />
              Ya da A&#351;a&#287;&#305;dan &#304;ncelemek &#304;stedi&#287;iniz Hatt&#305; Se&ccedil;iniz. </p>
			  
			  
			  
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

<div align="center"><br />
    <?
$a=100;
$b=300;
$c=400;
echo"$rt";
?>
  
</div>
<table width="95%" border="0" align="center">
  <tr>
    <th colspan="3" scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
  </tr>
  <tr>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="center"><?
			}
			else
			{
			echo"Bu Alanda $gechafta. Hafta Hatlara ait Bilgiler Mevcut<br>Sadece Yetkili Ki�ilere A��kt�r";
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
            <td valign="top" class="mytext"><strong>

			KULLANICI PANEL� </strong></td>
          </tr>
          <tr> 
            <td valign="top" bgcolor="#F0F0F0" class="mytext">
						<? 
if ($_SESSION['level'] != "1" and $_SESSION['level'] != "2" and $_SESSION['level'] != "3" and $_SESSION['level'] != "4")
{
?>
			
			 <form action="login.php" method="post" name="form1" class="mytext">
            <table width="200" border="0">
              <tr>
                <td class="mytext">Username:</td>
                <td><input name="username" type="text" class="mytext" id="username"></td>
              </tr>
              <tr>
                <td class="mytext">Password :</td>
                <td><input name="password" type="password" class="mytext" id="password"></td>
              </tr>
            </table>
            <div align="right">
              <input type="submit" name="Submit" value="Submit">
              <br>
            </div>
            </form> 
			<?
			}
			 else
			 {
echo "Hosgeldin :<b>".$_SESSION['username']."</b> <br> ";
			 echo"G�venli ��k�� i�in <a href='logout.php'><b>TIKLAYINIZ</b></a>";
			 echo"<br>Hatlar�m";
			 }
			?>            
              <div align="center"><img src="images/dlin1.gif" width="210" height="2"><br>            
                <br>            
            </div></td>
          </tr>
          <tr> 
            <td valign="top" class="mytext2"><span class="mytext2">
               <?  echo"<b>$gechafta. Hafta �ok Yorumlananlar</b><br>"; ?>
            </span></td>
          </tr>
          <tr> 
            <td valign="top" class="mytext2"><span class="mytext">
            Ut wisi enim 
              ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
              lobortis nisl ut aliquip ex ea commodo consequat. </span><br> 
              <img src="images/bul.gif" width="4" height="6"> 
            <a href="#">Read More</a></td>
          </tr>
          <tr> 
            <td valign="top" class="mytext2"><?  echo"<b>$gechafta. Haftan�n  Hat��s� ve Hatlar�</b><br>"; ?></td>
          </tr>
          <tr> 
            <td valign="top" class="mytext2"><span class="mytext">Ut wisi enim 
              ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
              lobortis nisl ut aliquip ex ea commodo consequat. </span><br> <img src="images/bul.gif" width="4" height="6"> 
              <a href="#">Read More</a></td>
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
                <a href="admin.php">Y�netim</a>&nbsp;&nbsp; <img src="images/bul.gif" width="4" height="6"> 
                <a href="help.php">Yard�m</a>&nbsp;</span></div></td>
          </tr>
        </table></td>
      <td width="10"><div align="right"><img src="images/ftr_2.gif" width="37" height="50"></div></td>
    </tr>
</table>
 
</div>

</body>
</html>

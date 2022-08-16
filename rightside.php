<td valign="top" class="mytext"><strong>

			KULLANICI PANELÝ </strong></td>
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
echo "Hosgeldin :<b>".$_SESSION['isim']." ".$_SESSION['soyisim']."</b> <br> ";
			 echo"Güvenli Çýkýþ için <a href='logout.php'><b>TIKLAYINIZ</b></a>";
			 echo"<br>Hatlarým";
			 }
			?>            
              <div align="center"><img src="images/dlin1.gif" width="210" height="2"><br>            
                <br>            
            </div></td>
          </tr>
          <tr> 
            <td valign="top" class="mytext2"><span class="mytext2">
               <?  echo"<br>YETKILILER</b><br>"; ?>
            </span></td>
          </tr>
          <tr> 
            <td valign="top" class="mytext2"><p> <?
		echo "<select name=\"kod\" class=\"input\" onChange=\"MM_jumpMenu('parent',this,0)\">";
        echo "<option value=\"\">Dis Hat</option> ";
        include 'includes/dishatlar.php';
         echo "</select> ";
?> <?
		echo "<select name=\"kod\" class=\"input\" onChange=\"MM_jumpMenu('parent',this,0)\">";
        echo "<option value=\"\">Iç Hat</option> ";
        include 'includes/ichatlar.php';
         echo "</select> ";
?>
                
</p>

              <form name="form3" method="post" action="hatcigosteryeni.php">
                <input name="kod" type="text" id="kod" size="3" maxlength="3">
                <input type="submit" name="Submit3" value="Ara">
              </form>
              <p>&nbsp;</p></td>
          </tr>
          <tr> 
            <td valign="top" class="mytext2"><?  echo"<b>$gechafta. Haftanýn  Hatçýsý ve Hatlarý</b><br>"; ?></td>
          </tr>
          <tr> 
            <td valign="top" class="mytext2">&nbsp;</td>
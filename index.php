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
<? 
$thisyear= $yy;  
			if($_SESSION['kontrol'] == 1)
			{
			?>            
<p class="mytext2">
              <?  echo"<b>$gechafta. Hafta  Raporlarý</b> <a href='raporlar/$thisyear/Hafta$gechafta.xls'> ( <img src='images/logo_excel.jpg' width='20' height='20' border='0'> Excel Olarak Aç )</a><br>"; ?>
              </p>
            <table width="100%" border="0" align="center">
  <tr>
    <td bordercolor="f4f4f4">
	
	<div class="tab-page" id="CB">
          <script type="text/javascript">
var tabPaneCB = new WebFXTabPane( document.getElementById( "CB" ), 0 )
        </script>
          <div class="tab-page" id="1">
            <h2 class="tab">LF YÜKSEK DIÞ HAT </h2>
            <script type="text/javascript">tabPaneCB.addTabPage( document.getElementById( "1" ) );</script>
      <table width="99%" border="1" bordercolor="f4f4f4">
        <tr class="mytext">
          <td>&nbsp;</td>
		   <td>&nbsp;</td>
          <td colspan="3" bordercolor="#666666"><div align="center"><strong>Bu Sene </strong></div></td>
          <td colspan="3" bordercolor="#666666"><div align="center"><strong>Ge&ccedil;en Sene </strong></div></td>
          <td colspan="3" bordercolor="#666666"><div align="center"><strong>Deðiþim</strong></div></td>
        </tr>
        <tr class="mytext">
		<td bordercolor="#999999" bgcolor="#990000"><span class="style4">HAT</span></td>
          <td bordercolor="#999999" bgcolor="#990000"><span class="style4">ROUTE</span></td>
          <td bordercolor="#666666" bgcolor="#6699FF"><div align="center"><span class="style5">CAP</span></div></td>
          <td bordercolor="#666666" bgcolor="#6699FF"><div align="center"><span class="style5">PAX</span></div></td>
          <td bordercolor="#666666" bgcolor="#6699FF"><div align="center"><span class="style5">LF</span></div></td>
          <td bordercolor="#666666" bgcolor="#FFCC00"><div align="center"><span class="style6">CAP</span></div></td>
          <td bordercolor="#666666" bgcolor="#FFCC00"><div align="center"><span class="style6">PAX</span></div></td>
          <td bordercolor="#666666" bgcolor="#FFCC00"><div align="center"><span class="style6">LF</span></div></td>
          <td bordercolor="#666666" bgcolor="#FFFFCC"><div align="center"><span class="style6">CAP</span></div></td>
          <td bordercolor="#666666" bgcolor="#FFFFCC"><div align="center"><span class="style6">PAX</span></div></td>
          <td bordercolor="#666666" bgcolor="#FFFFCC"><div align="center"><span class="style6">LF</span></div></td>
        </tr>
        <? $sorgu1=mysql_query("SELECT
distinct(`maindata`.`ROUTE`),
`maindata`.`CAPT`,
`maindata`.`PAXT`,
`maindata`.`LFT`,
`maindata`.`CAPL`,
`maindata`.`PAXL`,
`maindata`.`LFL`,
`maindata`.`CAPD`,
`maindata`.`PAXD`,
`maindata`.`LFD`,
`hatlar`.`HAT`
FROM
`hatlar`
Inner Join `maindata` ON `hatlar`.`ROUTE` = `maindata`.`ROUTE`
WHERE
`hatlar`.`MAG` =  'INT' AND
`maindata`.`LFT` >  '0.7' AND
`maindata`.`year` =  '$thisyear' AND
`maindata`.`woy` =  '$gechafta' order by `maindata`.`LFT` DESC ");
			 
			 $bgcolor1="#EFEFEF";
$bgcolor2="#FFFFFF";
$i=3;

			 
			  while($ls1=mysql_fetch_array($sorgu1))
			  {
			  
			  if($i%2==0)
  {
  $s=$bgcolor1;
  }
  else
  {
  $s=$bgcolor2;
  }  
			  echo "<tr bgcolor=\"$s\" class='mytext'>" ?>
			 <td><? echo"$ls1[HAT]"; ?></td>  
          <td><? echo"$ls1[ROUTE]"; ?></td>
          <td><? echo"$ls1[CAPT]"; ?>
            <div align="center"></div></td>
          <td><? echo"$ls1[PAXT]"; ?>
            <div align="center"></div></td>
          <td bgcolor="#FFFFE8"><? print(intval($ls1[LFT]*100)); echo"%"; ?>
            <div align="center"></div></td>
          <td><? echo"$ls1[CAPL]"; ?>
            <div align="center"></div></td>
          <td><? echo"$ls1[PAXL]"; ?>
            <div align="center"></div></td>
          <td><? print(intval($ls1[LFL]*100)); echo"%"; ?>
            <div align="center"></div></td>
          
		  <? if(($ls1[CAPD]*100)<0)
		  {
		  $r1="#FFCCCC";
		  }
		  else
		  {
		  $r1=$s;
		  }
		  ?>
		  <td bgcolor=<? echo"$r1"; ?>><? print(intval($ls1[CAPD]*100)); echo"%"; ?>
            <div align="center"></div></td>
			<?
			if(($ls1[PAXD]*100)<0)
		  {
		  $r2="#FFCCCC";
		  }
		  else
		  {
		  $r2=$s;
		  }
		  ?>
          <td bgcolor=<? echo"$r2"; ?>><? print(intval($ls1[PAXD]*100)); echo"%"; ?>
            <div align="center"></div></td>
			<?
			if(($ls1[LFD]*100)<0)
		  {
		  $r3="#FFCCCC";
		  }
		  else
		  {
		  $r3=$s;
		  }
		  ?>
          <td bgcolor=<? echo"$r3"; ?>>
         <? print(intval($ls1[LFD]*100)); echo""; ?>
            <div align="center"></div></td>
        </tr>
        <?
		 $i=$i+1; 
			  }
			  ?>
      </table>  
          </div>
	  
	  
	    <div class="tab-page" id="2">
            <h2 class="tab">LF DÜÞÜK DIÞ
HAT              
              <script type="text/javascript">tabPaneCB.addTabPage( document.getElementById( "2" ) );</script>
            </h2>
      <table width="99%" border="1" bordercolor="f4f4f4">
        <tr class="mytext">
          <td>&nbsp;</td><td>&nbsp;</td>
          <td colspan="3" bordercolor="#666666"><div align="center"><strong>Bu Sene </strong></div></td>
          <td colspan="3" bordercolor="#666666"><div align="center"><strong>Ge&ccedil;en Sene </strong></div></td>
          <td colspan="3" bordercolor="#666666"><div align="center"><strong>Deðiþim</strong></div></td>
        </tr>
        <tr class="mytext">
         <td bordercolor="#999999" bgcolor="#990000"><span class="style4">HAT</span></td>
          <td bordercolor="#999999" bgcolor="#990000"><span class="style4">ROUTE</span></td>
          <td bordercolor="#666666" bgcolor="#6699FF"><div align="center"><span class="style5">CAP</span></div></td>
          <td bordercolor="#666666" bgcolor="#6699FF"><div align="center"><span class="style5">PAX</span></div></td>
          <td bordercolor="#666666" bgcolor="#6699FF"><div align="center"><span class="style5">LF</span></div></td>
          <td bordercolor="#666666" bgcolor="#FFCC00"><div align="center"><span class="style6">CAP</span></div></td>
          <td bordercolor="#666666" bgcolor="#FFCC00"><div align="center"><span class="style6">PAX</span></div></td>
          <td bordercolor="#666666" bgcolor="#FFCC00"><div align="center"><span class="style6">LF</span></div></td>
          <td bordercolor="#666666" bgcolor="#FFFFCC"><div align="center"><span class="style6">CAP</span></div></td>
          <td bordercolor="#666666" bgcolor="#FFFFCC"><div align="center"><span class="style6">PAX</span></div></td>
          <td bordercolor="#666666" bgcolor="#FFFFCC"><div align="center"><span class="style6">LF</span></div></td>
        </tr>
        <? $sorgu2=mysql_query("SELECT
distinct(`maindata`.`ROUTE`),
`maindata`.`CAPT`,
`maindata`.`PAXT`,
`maindata`.`LFT`,
`maindata`.`CAPL`,
`maindata`.`PAXL`,
`maindata`.`LFL`,
`maindata`.`CAPD`,
`maindata`.`PAXD`,
`maindata`.`LFD`,
`hatlar`.`HAT`
FROM
`hatlar`
Inner Join `maindata` ON `hatlar`.`ROUTE` = `maindata`.`ROUTE`
WHERE
`hatlar`.`MAG` =  'INT' AND
`maindata`.`LFT` <  '0.5' AND
`maindata`.`year` =  '$thisyear' AND
`maindata`.`woy` =  '$gechafta' order by `maindata`.`LFT` ASC ");
			  
			  $bgcolor3="#EFEFEF";
$bgcolor4="#FFFFFF";
$j=3;

			  while($ls2=mysql_fetch_array($sorgu2))
			  {
			   if($j%2==0)
  {
  $t=$bgcolor1;
  }
  else
  {
  $t=$bgcolor2;
  }  
			 echo "<tr bgcolor=\"$t\" class='mytext'>" ?>
			  <td><? echo"$ls2[HAT]"; ?></td> 
          <td><? echo"$ls2[ROUTE]"; ?></td>
          <td><? echo"$ls2[CAPT]"; ?></td>
          <td><? echo"$ls2[PAXT]"; ?></td>
          <td bgcolor="#FFFFE8"><? print(intval($ls2[LFT]*100)); echo"%"; ?></td>
          <td><? echo"$ls2[CAPL]"; ?></td>
          <td><? echo"$ls2[PAXL]"; ?></td>
		  
          <td><? print(intval($ls2[LFL]*100)); echo"%"; ?></td>
		  <?
		  if(($ls2[CAPD]*100)<0)
		  {
		  $r4="#FFCCCC";
		  }
		  else
		  {
		  $r4=$t;
		  }
		  ?>
          <td bgcolor=<? echo"$r4"; ?>>
          <? print(intval($ls2[CAPD]*100)); echo"%"; ?></td>
		    <?
		  if(($ls2[PAXD]*100)<0)
		  {
		  $r5="#FFCCCC";
		  }
		  else
		  {
		  $r5=$t;
		  }
		  ?>
          <td bgcolor=<? echo"$r5"; ?>>
          <? print(intval($ls2[PAXD]*100)); echo"%"; ?></td>
		    <?
		  if(($ls2[LFD]*100)<0)
		  {
		  $r6="#FFCCCC";
		  }
		  else
		  {
		  $r6=$st;
		  }
		  ?>
          <td bgcolor=<? echo"$r6"; ?>>
          <? print(intval($ls2[LFD]*100)); echo""; ?></td>
        </tr>
        <?
			 $j++; }
			  ?>
      </table>
	    </div>     
	  
	  
	  
	  <div class="tab-page" id="3">
            <h2 class="tab">LF YÜKSEK ÝÇ
HAT              
              <script type="text/javascript">tabPaneCB.addTabPage( document.getElementById( "3" ) );</script>
            </h2>
      <table width="99%" border="1" bordercolor="f4f4f4">
        <tr class="mytext">
          <td>&nbsp;</td><td>&nbsp;</td>
          <td colspan="3" bordercolor="#666666"><div align="center"><strong>Bu Sene </strong></div></td>
          <td colspan="3" bordercolor="#666666"><div align="center"><strong>Ge&ccedil;en Sene </strong></div></td>
          <td colspan="3" bordercolor="#666666"><div align="center"><strong>Deðiþim</strong></div></td>
        </tr>
        <tr class="mytext">
       <td bordercolor="#999999" bgcolor="#990000"><span class="style4">HAT</span></td>
          <td bordercolor="#999999" bgcolor="#990000"><span class="style4">ROUTE</span></td>
          <td bordercolor="#666666" bgcolor="#6699FF"><div align="center"><span class="style5">CAP</span></div></td>
          <td bordercolor="#666666" bgcolor="#6699FF"><div align="center"><span class="style5">PAX</span></div></td>
          <td bordercolor="#666666" bgcolor="#6699FF"><div align="center"><span class="style5">LF</span></div></td>
          <td bordercolor="#666666" bgcolor="#FFCC00"><div align="center"><span class="style6">CAP</span></div></td>
          <td bordercolor="#666666" bgcolor="#FFCC00"><div align="center"><span class="style6">PAX</span></div></td>
          <td bordercolor="#666666" bgcolor="#FFCC00"><div align="center"><span class="style6">LF</span></div></td>
          <td bordercolor="#666666" bgcolor="#FFFFCC"><div align="center"><span class="style6">CAP</span></div></td>
          <td bordercolor="#666666" bgcolor="#FFFFCC"><div align="center"><span class="style6">PAX</span></div></td>
          <td bordercolor="#666666" bgcolor="#FFFFCC"><div align="center"><span class="style6">LF</span></div></td>
        </tr>
        <? /*$sorgu3=mysql_query("select * from maindata where year='$thisyear' and woy='$gechafta' and LFT<'0,5' order by LFT ASC ");*/
			 
			 $sorgu3=mysql_query("SELECT
distinct(`maindata`.`ROUTE`),
`maindata`.`CAPT`,
`maindata`.`PAXT`,
`maindata`.`LFT`,
`maindata`.`CAPL`,
`maindata`.`PAXL`,
`maindata`.`LFL`,
`maindata`.`CAPD`,
`maindata`.`PAXD`,
`maindata`.`LFD`,
`hatlar`.`HAT`
FROM
`hatlar`
Inner Join `maindata` ON `hatlar`.`ROUTE` = `maindata`.`ROUTE`
WHERE
`hatlar`.`MAG` =  'DOM' AND
`maindata`.`LFT` >  '0.7' AND
`maindata`.`year` =  '$thisyear' AND
`maindata`.`woy` =  '$gechafta' order by `maindata`.`LFT` DESC");


         $bgcolor5="#EFEFEF";
$bgcolor6="#FFFFFF";
$k=3;

			  while($ls3=mysql_fetch_array($sorgu3))
			  { if($k%2==0)
  {
  $u=$bgcolor1;
  }
  else
  {
  $u=$bgcolor2;
  }  
			 echo "<tr bgcolor=\"$u\" class='mytext'>" ?>
			  <td><? echo"$ls3[HAT]"; ?></td> 
          <td><? echo"$ls3[ROUTE]"; ?></td>
          <td><? echo"$ls3[CAPT]"; ?></td>
          <td><? echo"$ls3[PAXT]"; ?></td>
          <td bgcolor="#FFFFE8"><? print(intval($ls3[LFT]*100)); echo"%"; ?></td>
          <td><? echo"$ls3[CAPL]"; ?></td>
          <td><? echo"$ls3[PAXL]"; ?></td>
		  
          <td><? print(intval($ls3[LFL]*100)); echo"%"; ?></td>
		  <?
		  if(($ls3[CAPD]*100)<0)
		  {
		  $r7="#FFCCCC";
		  }
		  else
		  {
		  $r7=$u;
		  }
		  ?>
          <td bgcolor=<? echo"$r7"; ?>>
          <? print(intval($ls3[CAPD]*100)); echo"%"; ?></td>
		   <?
		  if(($ls3[PAXD]*100)<0)
		  {
		  $r8="#FFCCCC";
		  }
		  else
		  {
		  $r8=$u;
		  }
		  ?>
          <td bgcolor=<? echo"$r8"; ?>>
          <? print(intval($ls3[PAXD]*100)); echo"%"; ?></td>
		   <?
		  if(($ls3[LFD]*100)<0)
		  {
		  $r9="#FFCCCC";
		  }
		  else
		  {
		  $r9=$u;
		  }
		  ?>
          <td bgcolor=<? echo"$r9"; ?>>
         <? print(intval($ls3[LFD]*100)); echo""; ?></td>
        </tr>
        <?
			$k++;  }
			  ?>
      </table>
	  </div> 
	  
	  
	  <div class="tab-page" id="4">
            <h2 class="tab">LF DÜÞÜK ÝÇ HAT
              <script type="text/javascript">tabPaneCB.addTabPage( document.getElementById( "4" ) );</script>
            </h2>
      <table width="99%" border="1" bordercolor="f4f4f4">
        <tr class="mytext">
          <td>&nbsp;</td><td>&nbsp;</td>
          <td colspan="3" bordercolor="#666666"><div align="center"><strong>Bu Sene </strong></div></td>
          <td colspan="3" bordercolor="#666666"><div align="center"><strong>Ge&ccedil;en Sene </strong></div></td>
          <td colspan="3" bordercolor="#666666"><div align="center"><strong>Deðiþim</strong></div></td>
        </tr>
        <tr class="mytext">
      <td bordercolor="#999999" bgcolor="#990000"><span class="style4">HAT</span></td>
          <td bordercolor="#999999" bgcolor="#990000"><span class="style4">ROUTE</span></td>
          <td bordercolor="#666666" bgcolor="#6699FF"><div align="center"><span class="style5">CAP</span></div></td>
          <td bordercolor="#666666" bgcolor="#6699FF"><div align="center"><span class="style5">PAX</span></div></td>
          <td bordercolor="#666666" bgcolor="#6699FF"><div align="center"><span class="style5">LF</span></div></td>
          <td bordercolor="#666666" bgcolor="#FFCC00"><div align="center"><span class="style6">CAP</span></div></td>
          <td bordercolor="#666666" bgcolor="#FFCC00"><div align="center"><span class="style6">PAX</span></div></td>
          <td bordercolor="#666666" bgcolor="#FFCC00"><div align="center"><span class="style6">LF</span></div></td>
          <td bordercolor="#666666" bgcolor="#FFFFCC"><div align="center"><span class="style6">CAP</span></div></td>
          <td bordercolor="#666666" bgcolor="#FFFFCC"><div align="center"><span class="style6">PAX</span></div></td>
          <td bordercolor="#666666" bgcolor="#FFFFCC"><div align="center"><span class="style6">LF</span></div></td>
        </tr>
        <? $sorgu4=mysql_query("SELECT
distinct(`maindata`.`ROUTE`),
`maindata`.`CAPT`,
`maindata`.`PAXT`,
`maindata`.`LFT`,
`maindata`.`CAPL`,
`maindata`.`PAXL`,
`maindata`.`LFL`,
`maindata`.`CAPD`,
`maindata`.`PAXD`,
`maindata`.`LFD`,
`hatlar`.`HAT`
FROM
`hatlar`
Inner Join `maindata` ON `hatlar`.`ROUTE` = `maindata`.`ROUTE`
WHERE
`hatlar`.`MAG` =  'DOM' AND
`maindata`.`LFT` <  '0.5' AND
`maindata`.`year` =  '$thisyear' AND
`maindata`.`woy` =  '$gechafta' order by `maindata`.`LFT` ASC");
			 
			          $bgcolor7="#EFEFEF";
$bgcolor8="#FFFFFF";
$l=3;
			  while($ls4=mysql_fetch_array($sorgu4))
			  {
			    if($l%2==0)
  {
  $p=$bgcolor1;
  }
  else
  {
  $p=$bgcolor2;
  }  
			 echo "<tr bgcolor=\"$p\" class='mytext'>" ?>
		 <td><? echo"$ls4[HAT]"; ?></td> 
          <td><? echo"$ls4[ROUTE]"; ?></td>
          <td><? echo"$ls4[CAPT]"; ?></td>
          <td><? echo"$ls4[PAXT]"; ?></td>
          <td bgcolor="#FFFFE8"><? print(intval($ls4[LFT]*100)); echo"%"; ?></td>
          <td><? echo"$ls4[CAPL]"; ?></td>
          <td><? echo"$ls4[PAXL]"; ?></td>
          <td><? print(intval($ls4[LFL]*100)); echo"%"; ?></td>
		  <?
		  if(($ls4[CAPD]*100)<0)
		  {
		  $r10="#FFCCCC";
		  }
		  else
		  {
		  $r10=$s;
		  }
		  ?>
          <td bgcolor=<? echo"$r10"; ?>>
          <? print(intval($ls4[CAPD]*100)); echo"%"; ?></td>
		  <?
		  if(($ls4[PAXD]*100)<0)
		  {
		  $r11="#FFCCCC";
		  }
		  else
		  {
		  $r11=$s;
		  }
		  ?>
          <td bgcolor=<? echo"$r11"; ?>>
          <? print(intval($ls4[PAXD]*100)); echo"%"; ?></td>
		  <?
		  if(($ls4[LFD]*100)<0)
		  {
		  $r12="#FFCCCC";
		  }
		  else
		  {
		  $r12=$s;
		  }
		  ?>
          <td bgcolor=<? echo"$r12"; ?>>
          <? print(intval($ls4[LFD]*100)); echo""; ?></td>
        </tr>
        <?
			$l++;  }
			  ?>
      </table>
	  </div> 
	  
	  
	   <p class="mytext2">&nbsp;</p></td>
  </tr>
</table>
            <table cellpadding="5" cellspacing="0" border="0" width="65%">
  <tr>
    <td>
        <p align="center">
          <script type="text/javascript" src="templates/tabpane.js"></script>
         
          <br />
        <div class="tab-page" id="CB">
          <script type="text/javascript">
var tabPaneCB = new WebFXTabPane( document.getElementById( "CB" ), 0 )
        </script>
          <div class="tab-page" id="5">
            <h2 class="tab">&nbsp;</h2>
            </div>
          <center>
          
          
          </center>
      </div></TD>
  </TR>
  <TR>
    <TD vAlign=top align=middle colSpan=4 height=2>&nbsp;</TD>
  </TR>
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

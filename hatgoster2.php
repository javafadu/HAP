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
    <th colspan="3" scope="col">
	
	
	
	<applet codebase="codebase" code="ZoomChart.class" cabbase="zoomchart.cab,zoomchart-resource.cab" archive="zoomchart.zip,zoomchart-resource.zip" width="480" height="345">
<param name="Show_Request" value="1">
<param name="URL_Delimiter" value="|">
<param name="Auto_Reload_Interval" value="-1">
<param name="Use_Intraday" value="0">
<param name="Data_Source" value="Chartdata.php">
<param name="Max_Records" value="501">
<param name="Use_Server_Data_Filter" value="0">
<param name="Preload_Data" value="1">
<param name="Preload_Delimiter1" value=",">
<param name="Preload_Delimiter2" value="|">

<param name="Date_Range_Count" value="1">
<param name="Date_Range_0" value="Date Range,20020403,20040323">
<param name="Group_Count" value="1">
<param name="Symbol_Count" value="2">
<param name="Link_Symbols" value="0">
<param name="Init_Symbol_Count" value="2">
<param name="Group_0" value="DefaultGroup,2">
<param name="Symbol_0" value="DefaultGroup,0">
<param name="Symbol_Label_0" value="First Republic Fund">
<param name="Symbol_1" value="DefaultGroup,1">
<param name="Symbol_Label_1" value="Red October Investment Fund">
<param name="Init_Symbol_0" value="0">
<param name="Init_Symbol_1" value="1">
<param name="Show_Chart_Tab_First" value="1">
<param name="Refresh_Interval" value="1000">
<param name="Gap" value="3">
<param name="Font_Name" value="Dialog">
<param name="Font_Style" value="Plain">
<param name="Font_Size" value="10">
<param name="Background_Color" value="ffffff">
<param name="Foreground_Color" value="000000">
<param name="Text_Color" value="999999">
<param name="Top_BG_Color" value="ffffff">
<param name="JChart_Hint" value="Drag mouse to zoom in">
<param name="Chart_Font_Name" value="Dialog">
<param name="Chart_Font_Style" value="Plain">
<param name="Chart_Font_Size" value="10">
<param name="Bubble_Icon" value="bicon.gif">
<param name="Bubble_IsModal" value="0">
<param name="Bubble_Close_Button" value="cbtn1.gif,cbtn2.gif">
<param name="Bubble_Border_Color" value="c0c0c0">
<param name="Bubble_BG_Color" value="ffffcc">
<param name="Bubble_Icon_Target_Color" value="ff0000">
<param name="Bubble_Corner_Radius" value="5">
<param name="Bubble_Min_Dimension" value="100,30">
<param name="Bubble_Max_Dimension" value="400,120">
<param name="Bubble_Neck_Length" value="15">
<param name="Bubble_Neck_Offset" value="4.5">
<param name="Bubble_Spacing" value="5,5,15,5">
<param name="Bubble_Text_Color" value="000000">
<param name="Bubble_Text_Font_Name" value="Dialog">
<param name="Bubble_Text_Font_Style" value="Plain">
<param name="Bubble_Text_Font_Size" value="10">
<param name="Bubble_Line_Delimiter" value="^">
<param name="Bubble_Text_Rollover" value="0000ff,0">
<param name="Bubble_Title_Color" value="000000">
<param name="Bubble_Title_Font_Name" value="Dialog">
<param name="Bubble_Title_Font_Style" value="Bold">
<param name="Bubble_Title_Font_Size" value="11">
<param name="Bubble_Title" value="Notes:">
<param name="Chart_BG_Color" value="ffffff">
<param name="Chart_Graph_Color" value="ffffff">
<param name="Border_Color" value="B4B4DC">
<param name="Grid_Color" value="3b5b5b">
<param name="Vert_Grid_Density" value="4">
<param name="Grid_Images" value="horgrid_new.gif,vertgrid_new.gif">
<param name="Logo_Source" value="3,">
<param name="Bottom_Margin" value="20">
<param name="Top_Margin" value="20">
<param name="Left_Margin" value="45">
<param name="Right_Margin" value="50">
<param name="Message_Font_Name" value="Dialog">
<param name="Message_Font_Style" value="Plain">
<param name="Message_Font_Size" value="24">
<param name="Empty_Message" value="">
<param name="Wait_Message" value="Please wait while loading...">
<param name="Printing_Message" value="Please wait while printing...">
<param name="Timeout_Message" value="Server connection timed out.">
<param name="Ticker_Hint" value="If scrolling drag mouse to speed up">
<param name="Ticker_Delay" value="25">
<param name="Show_Ticker_Bar" value="1">
<param name="Ticker_BG_Color" value="ffffff">
<param name="Ticker_FG_Color" value="B4B4DC">
<param name="Ticker_Font_Name" value="Dialog">
<param name="Ticker_Font_Style" value="Bold">
<param name="Ticker_Font_Size" value="11">
<param name="Track_Values" value="1">
<param name="Track_Order" value="D,A,V">
<param name="Track_Labels" value="D:,P:,V:">
<param name="Target_Color" value="ff00ff">
<param name="Track_Spline_Vector" value="-5|0|-2|0,5|0|2|0,0|-5|0|-2,0|5|0|2">
<param name="Volume_Height" value="15%">
<param name="Volume_Margin" value="20">
<param name="Show_Volume" value="1">
<param name="Volume_Label" value="0,Volume (in 1000s)">
<param name="Show_Volume_On_Right" value="1">
<param name="Volume_Vert_Grid_Density" value="2">
<param name="Daily_Volume_Max_Width" value="20">
<param name="Volume_Precision" value="0">
<param name="Show_Year_On_Top" value="1">
<param name="Month_Array" value="Jan,Feb,Mar,Apr,Jun,Jul,Aug,Sep,Oct,Nov,Dec">
<param name="Use_Absolute_Value_Color" value="0">
<param name="Absolute_Value_Left_Label" value="">
<param name="Absolute_Value_Right_Label" value="">
<param name="Absolute_Value_Precision" value="2">
<param name="Show_Absolute_Values" value="1">
<param name="Show_Prices" value="1">
<param name="Number_Format_DG" value="">
<param name="Number_Format_Dec" value=".">
<param name="Show_Percentage_On_Left" value="1">
<param name="Percentage_Precision" value="1">
<param name="Show_Percentage" value="1">
<param name="YAxis_Value_Range" value="104,384">
<param name="Allow_Zoom" value="1">
<param name="Use_Right_Click" value="1">
<param name="Use_Zoom_Fill" value="1">
<param name="Zoom_Color" value="FFFFFF">
<param name="XORZoom_Color" value="ffffff">
<param name="Zoom_Fill_Colors" value="ffffff,EBE8E8,ffffff,EBE8E8,ffffff,EBE8E8">
<param name="Zoomout_Enabled" value="0">
<param name="Show_Date_Range_In_Front" value="0">
<param name="Edit_Date_Range" value="1">
<param name="Error_Color" value="ff0000">
<param name="Date_Format_Label" value="dd/mm/yyyy">
<param name="Date_Delimiter" value="-, ,:">
<param name="Date_Format" value="European">
<param name="Start_Date_Label" value="Start:">
<param name="Start_Date_TF_Hint" value="Start date">
<param name="End_Date_Label" value="End:">
<param name="End_Date_TF_Hint" value="End date">
<param name="Date_Range_Label" value="">
<param name="DRChoice_Hint" value="Select date range">
<param name="Line_Width" value="1">
<param name="Line_Color_Count" value="2">
<param name="Line_Color_0" value="000098">
<param name="Line_Color_1" value="ff0000">
<param name="Show_Mountain" value="0">
<param name="Mountain_Color" value="ccccff">
<param name="Use_Symbol_Options" value="1">
<param name="Symbol_Options_0" value="">
<param name="Symbol_Options_1" value="">
<param name="Show_Groups" value="0">
<param name="Group_Label" value="Please choose group:">
<param name="List_Hint" value="Select group">
<param name="First_Shown_Group" value="DefaultGroup">
<param name="Settings_Prompt" value="Please select data to graph:">
<param name="ListView_Hint" value="Select Items">
<param name="Use_ListView_Radio_Button" value="0">
<param name="Max_Item_Limit_Message" value="You have reached max allowed limit">
<param name="Show_Order_Box" value="1">
<param name="Order_Box_Label" value="Please set order:">
<param name="OrderList_Hint" value="Order items">
<param name="Move_Up_Button" value="Move Up">
<param name="MoveUp_Btn_Hint" value="Move item up">
<param name="Move_Down_Button" value="Move Down">
<param name="MoveDown_Btn_Hint" value="Move item down">
<param name="Show_Toolbar" value="1">
<param name="Chart_Tab_Hint" value="Go to chart tab">
<param name="Chart_Tab_1" value="chart_off.gif">
<param name="Chart_Tab_2" value="chart_on.gif">
<param name="Tab_BG_Color" value="ffffff">
<param name="Tab_Line_Color" value="ffffff">
<param name="Chart_Tab_Height" value="18">
<param name="Chart_Tab_Width" value="39">
<param name="Show_Chart_Tab" value="1">
<param name="Show_Detach_Button" value="1">
<param name="Detach_Btn_Hint" value="Click to detach">
<param name="Detach_Button_1" value="detach_new.gif">
<param name="Detach_Button_2" value="detach2_new.gif">
<param name="Detach_Button_Width" value="19">
<param name="Detach_Button_Height" value="17">
<param name="Frame_Title" value="Share price">
<param name="Frame_Min_Size" value="350,250">
<param name="Draw_Btn_Hint" value="Click to redraw">
<param name="Draw_Button_1" value="draw1_new.gif">
<param name="Draw_Button_2" value="draw2_new.gif">
<param name="Draw_Button_Width" value="36">
<param name="Draw_Button_Height" value="17">
<param name="Print_Button_1" value="print_off.gif">
<param name="Print_Button_2" value="print_on.gif">
<param name="Print_Button_Width" value="36">
<param name="Print_Button_Height" value="17">
<param name="Print_Btn_Hint" value="Click to generate GIF image">
<param name="Use_Print" value="0">
<param name="Print_Handler" value="">
<param name="Use_Base64_Encoding" value="1">
<param name="Print_Viewer" value="">
<param name="Print_Target" value="top">
<param name="Show_Settings_Tab" value="1">
<param name="Settings_Tab_Hint" value="Go to settings tab">
<param name="Settings_Tab_1" value="settings_off.gif">
<param name="Settings_Tab_2" value="settings_on.gif">
<param name="Settings_Tab_Width" value="49">
<param name="Settings_Tab_Height" value="18">
<param name="Show_Statusbar" value="1">
<param name="Statusbar_Timeout" value="2000">
<param name="Outline_BG_Color" value="B4B4DC">
<param name="Statusbar_Outline_Color1" value="B4B4DC">
<param name="Statusbar_Outline_Color2" value="B4B4DC">
<param name="Progress_Color" value="ff9999">
<param name="Wait_Image" value="wait_new.gif">
<param name="WaitAnimator_Hint" value="Wait while loading">
<param name="Wait_Image_Width" value="10">
<param name="Wait_Image_Height" value="10">
<param name="Wait_Delay" value="100">
<param name="Copyright" value="http://www.uralbeacon.co.uk">
<param name="Application_Name" value="Chart1">
<param name="License_Key" value="[prod_id=ZoomChart3.08;cust_id=test-user;type=demo;date=20070130;expire=20080130;codebase=*;docbase=*]440399878">
</applet>
	
	
	
	
	</th>
    <th scope="col">&nbsp;</th>
  </tr>
  <tr>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
  </tr>
  <tr>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
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
echo "Hosgeldin :<b>".$_SESSION['username']."</b> <br> ";
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
               <?  echo"<b>$gechafta. Hafta Çok Yorumlananlar</b><br>"; ?>
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
            <td valign="top" class="mytext2"><?  echo"<b>$gechafta. Haftanýn  Hatçýsý ve Hatlarý</b><br>"; ?></td>
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

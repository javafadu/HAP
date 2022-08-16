<?php
include "baglanti.php";

$ddd=mysql_query("select * from haftaliklf where route='$hat' order by cap DESC limit 0,1 ");

while($ddl=mysql_fetch_array($ddd))
{
$uc=$ddl['cap']+300;
}



echo "<chart>";

ECHO"<axis_value min='0'  
            max='$uc' 
            steps='10'  
            prefix='' 
            suffix='' 
            decimals='0'
            decimal_char='.'  
            separator='' 
            show_min='true' 
            font='arial' 
            bold='true' 
            size='12' 
            color='88FF00' 
            alpha='50'
            
            />";


echo"<chart_value prefix='' 
          suffix='' 
          decimals='0' 
          decimal_char='.'
          separator=''
          position='top'
          hide_zero='false' 
          as_percentage='false'
          font='arial' 
          bold='true' 
          size='10' 
          color='FFFFFF' 
          alpha='80'
          />";


echo "<chart_type>line</chart_type>";

   ?>
   <chart_data>
  <row>
	 <null/>
	
	<?
	include "baglanti.php";
	
	$sql1=mysql_query("select distinct(week) from haftaliklf where week between 1 and 20 order by week ASC");
	
	while($listele=mysql_fetch_array($sql1))
	
	{
	?>
	
	 
	 <string><? echo"$listele[week]"; ?></string>
	
	 
	 <?
	 
	 }
	 
	 ?>
  </row>
  <row>
	 <string>2007</string>
	 
	<? 

	$sql2=mysql_query("select * from haftaliklf where year=2007 and route='$hat' and week between 1 and 20 order by week ASC");
	while($listele07=mysql_fetch_array($sql2))
	{
	 ?>
	 <number> <? print($listele07[cap]);?></number>

	 
	 <?
	 }
	 ?>
  </row>
  <row>
  <string>2008</string>
	 <? 
	
	$sql3=mysql_query("select * from haftaliklf where year=2008 and route='$hat' and week between 1 and 20 order by week ASC");
	while($listele08=mysql_fetch_array($sql3))
	{
	 ?>
	 <number> <? print($listele08[cap]);?></number>

	 
	 <?
	 }
	 ?>
  </row>
</chart_data>


   <?
   
echo "</chart>";








?>
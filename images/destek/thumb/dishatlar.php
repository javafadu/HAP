<script language="JavaScript" type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
if(selObj.options[selObj.selectedIndex].value !== "-1"){
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
}
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>

<?php
$queryhatint = "SELECT
distinct(`hatisim`.`AIRPORT`),`hatisim`.`KOD`
FROM
`hatisim`
WHERE
`hatisim`.`DOMINT` =  'INT'
ORDER BY
`hatisim`.`KOD` ASC
 ";
$resulthatint = mysql_query($queryhatint) or die ("Couldn't execute query - OFISCON.PHP"); 
while($rowhatint = mysql_fetch_array($resulthatint)) {
$routeint = $rowhatint['AIRPORT'];
$routekod = $rowhatint['KOD'];
echo "<OPTION value=\"hatcigosteryeni.php?kod=$routekod\">$routekod</OPTION>";
}
?>

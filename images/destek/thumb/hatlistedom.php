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
distinct(`hatlar`.`ROUTE`)
FROM
`hatlar`
WHERE
`hatlar`.`MAG` =  'DOM'
ORDER BY
`hatlar`.`ROUTE` ASC
 ";
$resulthatint = mysql_query($queryhatint) or die ("Couldn't execute query - OFISCON.PHP"); 
while($rowhatint = mysql_fetch_array($resulthatint)) {
$routeint = $rowhatint['ROUTE'];
echo "<OPTION value=\"hatgoster.php?rt=$routeint\">$routeint</OPTION>";
}
?>

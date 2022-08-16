<?php 
include("phpgraphlib.php"); 
$graph=new PHPGraphLib(550,400);
$data=array("Jan"=>-10.1, "Feb"=>-22.6, "Mar"=>11.0, "Apr"=>30.7, "May"=>48.6, "Jun"=>99.8, "Jul"=>162.5, "Aug"=>56.8, "Sep"=>45.5, "Oct"=>25.1, "Nov"=>2.7, "Dec"=>-6.5);

$data2=array("Jan"=>-5.1, "Feb"=>-12.6, "Mar"=>221.0, "Apr"=>15.7, "May"=>48.6, "Jun"=>99.8, "Jul"=>162.5, "Aug"=>56.8, "Sep"=>45.5, "Oct"=>25.1, "Nov"=>2.7, "Dec"=>-6.5);

$graph->addData($data,$data2);
$graph->setBars(true);
$graph->setLine(false);
$graph->setLineColor("navy","yellow");
$graph->setupXAxis(20, "blue");
$graph->setTitle("Average Temperature by Month, in Fairbanks Alaska");
$graph->setTitleColor("blue");
$graph->setGridColor("153,204,255");
$graph->setDataValues(true);
$graph->setDataValueColor("navy");
$graph->createGraph();
?>



<?php
  
  header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Date in the past
  header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); // always modified
  header ("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
  header ("Pragma: no-cache"); // HTTP/1.0
  
  error_reporting(0);
  set_error_handler("ErrorHandler");

  $symbol = EncodeQuotes($HTTP_GET_VARS["symbol"]);
  $startDate = FormatDateStr($HTTP_GET_VARS["start"]);
  $endDate = FormatDateStr($HTTP_GET_VARS["end"]);
  $maxrecords = $HTTP_GET_VARS["maxrecords"];
  
  if ( !($maxrecords > 0) ) {
    trigger_error("Error: maxrecords required!", E_USER_ERROR);
  }

  echo GetChartData($symbol, $startDate, $endDate, "\r\n", $maxrecords);
  
  // user defined error handling function
  function ErrorHandler($errno, $errmsg, $filename, $linenum, $vars) {
    echo "19000101|0.0\n";
    exit -1;
  }

  function EncodeQuotes( $str ) {
		return str_replace ("\'", "'"."'", $str);
  }
  
  function FormatDateStr( $str ) {
		 	
		 	// 1995-01-07 00:00:00

		 	$y = substr($str, 0, 4); 
		 	$m = substr($str, 4, 2); 
		 	$d = substr($str, 6, 2); 
		 	
		 	return $y."-".$m."-".$d." 00:00:00";  
  }
  
	function GetChartData($symbol, $startDate, $endDate, $separator, $maxrecords) {

		$server = "localhost";
  $hesapadi = "root";
  $sifreniz = "";
  $veritabaniadi = "geliryonetim2";
  $con = mysql_connect($server, $hesapadi, $sifreniz); 
    
    $sql = "
      SELECT 
        a.* 
      FROM 
        j_symbol_history a, 
        j_symbol b 
      WHERE 
        a.SymbolKey = b.Id AND 
        b.Description = '$symbol'
        AND a.Datestamp BETWEEN #$startDate# AND #$endDate# 
      ORDER BY 
        a.Datestamp ";    
    
    
	  $rs = mysql_query($conn, $sql);

		$recordCount = GetRecordCount($rs);
			
		$result = "";
		$index = 0;
		$totalCount = 0;

		while ( mysql_fetch_row($rs) ) {
				
			if ( isVisible($index, $recordCount, $maxrecords, $totalCount) ) {
					
				$totalCount++;
					
				$date = strtotime(mysql_result($rs, "Datestamp"));
				$price = mysql_result($rs, "Price");

				$result .= date("Ymd", $date)."|".$price.$separator;
			}
			
			$index++;
		}
			
		return $result; 
	}
	
	function GetRecordCount( $rs ) {
	
		$count = 0;
		while ( mysql_fetch_row($rs) ) {
  		$count++;
		}
    mysql_fetch_row($rs, 1);
    
    return $count;
  }
  
	function isVisible($indexP, $recordCountP, $maxrecordsP, $totalCountP) {
		
		if ( $recordCountP > $maxrecordsP ) {
				
			$skipEvery = ceil($recordCountP/$maxrecordsP);
			
			if ( ($recordCountP - ($indexP + 1)) != 
			     ($maxrecordsP - $totalCountP) ) {
			     
				return ($indexP % $skipEvery) == 0;
			
			} else {
				return $totalCountP < $maxrecordsP;
			}
			
		} else {
  	  return true; 
		}
	}
?>
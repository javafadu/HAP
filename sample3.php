<?php



echo "<chart>";

ECHO"<axis_value min='0'  
            max='100' 
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
            alpha='75'
            orientation='diagonal_up' 
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
          alpha='90'
          />";


echo "<chart_type>line</chart_type>";

   echo "<chart_data>";
      echo "<row>";
         echo "<null/>";
         echo "<string>Jan</string>";
         echo "<string>Feb</string>";
         echo "<string>Mar</string>";
        echo " <string>Apr</string>";
          echo " <string>May</string>";
echo " <string>Jun</string>";
echo " <string>Jul</string>";
echo " <string>Aug</string>";
echo " <string>Sep</string>";
echo " <string>Oct</string>";
echo " <string>Nov</string>";
echo " <string>Dec</string>";
 
 


      echo "</row>";
      echo "<row>";
         echo "<string>Region A</string>";
         echo "<number>5</number>";
         echo "<number>10</number>";
         echo "<number>30</number>";
         echo "<number>63</number>";
echo "<number>63</number>";
echo "<number>63</number>";
echo "<number>63</number>";
echo "<number>63</number>";
echo "<number>63</number>";
echo "<number>63</number>";
echo "<number>63</number>";
echo "<number>63</number>";

      echo "</row>";
      echo "<row>";
         echo "<string>Region B</string>";
         echo "<number>100</number>";
         echo "<number>20</number>";
        echo "<number>65</number>";
         echo "<number>55</number>";
 echo "<number>55</number>";
 echo "<number>55</number>";
 echo "<number>55</number>";
 echo "<number>55</number>";
 echo "<number>55</number>";
 echo "<number>55</number>";
 echo "<number>55</number>";
 echo "<number>55</number>";

     echo " </row>";
      echo "<row>";
        echo " <string>Region C</string>";
         echo "<number>56</number>";
         echo "<number>21</number>";
         echo "<number>5</number>";
         echo "<number>90</number>";
 echo "<number>56</number>";
         echo "<number>21</number>";
         echo "<number>5</number>";
         echo "<number>90</number>";
 echo "<number>56</number>";
         echo "<number>21</number>";
         echo "<number>5</number>";
         echo "<number>90</number>";
      echo "</row>";
   echo "</chart_data>";
echo "</chart>";








?>
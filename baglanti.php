<?php
  $server = "localhost";
  $hesapadi = "root";
  $sifreniz = "";
  $veritabaniadi = "geliryonetim2";
  $con = mysql_connect($server, $hesapadi, $sifreniz);
  mysql_select_db($veritabaniadi) or die("Veritaban�na baglanamadi");

 if(mysql_error())
{
echo "Hata olustu:".mysql_error();
}
else
{
echo "";
}

?> 
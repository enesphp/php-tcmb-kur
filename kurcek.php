<?php 

$kurlar=simplexml_load_file("https://www.tcmb.gov.tr/kurlar/today.xml");
$dolar=$kurlar->Currency[0]->BanknoteBuying;
$euro=$kurlar->Currency[3]->BanknoteSelling;

$dolar=str_replace(".", ",", $dolar);
$euro=str_replace(".", ",", $euro);

echo "Dolar: ".$dolar;
echo "<br>";
echo "Euro: ".$euro;

?>

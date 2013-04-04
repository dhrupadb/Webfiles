<?php
exec("/home1/d/dhrupadb/html/cgi-bin/update.cgi", $random);
exec("/home1/d/dhrupadb/html/cgi-bin/getstat.cgi", $output);
echo "Number of visitors: $output[0]";
?>
<br>
<br>
<?php
$agent = $_SERVER['HTTP_USER_AGENT'];

if(preg_match('/Linux/',$agent)) { 
$os = 'Linux';
$fo = fopen('linux.txt', 'r');
$n = fgets($fo);
fclose($fo);
$fo = fopen('linux.txt', 'w');
fwrite($fo, ($n + 1));
fclose($fo);
}
elseif(preg_match('/Win/',$agent)) {
$os = 'Windows';
$fo = fopen('windows.txt', 'r');
$n = fgets($fo);
fclose($fo);
$fo = fopen('windows.txt', 'w');
fwrite($fo, ($n + 1));
fclose($fo);
}
elseif(preg_match('/Mac/',$agent)) { 
$os = 'Mac';
$fo = fopen('mac.txt', 'r');
$n = fgets($fo);
fclose($fo);
$fo = fopen('mac.txt', 'w');
fwrite($fo, ($n + 1));
fclose($fo);
}

else {
$os = 'Other';
$fo = fopen('others.txt', 'r');
$n = fgets($fo);
fclose($fo);
$fo = fopen('others.txt', 'w');
fwrite($fo, ($n + 1));
fclose($fo);
}


echo "Your operating system is: $os";

?>
<br>
<br>
<?php

echo "Visitors by operating system:";

$mac = fopen("mac.txt", "r");
$mac_n = fgets($mac);
$windows = fopen("windows.txt", "r");
$win_n = fgets($windows);
$linux = fopen("linux.txt", "r");
$lin = fgets($linux);
$other = fopen("others.txt", "r");
$o_n = fgets($other);
?>
<br>
<?php
echo " Mac: $mac_n";
?>
<br>
<?php
echo " Windows: $win_n";
?>
<br>
<?php
echo " Linux: $lin";
?>
<br>
<?php
echo " Others: $o_n";
?>

<?php

include 'Slwo.php';

$contents = file_get_contents('https://en.wikipedia.org/wiki/Hello,_Dolly!_(musical)');

$Slwo = new Deirde\Slwo\Slwo($contents);
$Slwo->sort('ksort');
$Slwo->htmlOutput();

?>
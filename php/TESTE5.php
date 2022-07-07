<?php
// input

$l= 0 ;
$s= 1 ;
$s1=1 ;


echo "1 <BR> 1 <BR>";
    for ($i=0; $i<50; $i++) {
    $l = $s+ $s1 ;
    $s1 = $s ;
    $s = $l ;
    echo " $l <BR>";

    };

?>
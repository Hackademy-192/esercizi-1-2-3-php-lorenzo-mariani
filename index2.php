<?php
$num = 10;
while ($num > 1){
    echo $num."\n";

if ($num % 2 == 0) {
 $num = $num / 2.;
} else {
    $num =($num * 3)+ 1.;
}

}
echo $num;
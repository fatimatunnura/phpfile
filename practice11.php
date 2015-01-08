<?php
$number_pens=1000;
$price= 10;

$total_price=$number_pens*$price;
echo $total_price;

echo "<br/>";

$present_price=8;
$current_price=$number_pens*$present_price;
echo $current_price;
echo "<br/>";


$price_reduction=$total_price-$current_price;
$diff_percentage=($price_reduction*100)/$total_price;
echo $diff_percentage;





?>
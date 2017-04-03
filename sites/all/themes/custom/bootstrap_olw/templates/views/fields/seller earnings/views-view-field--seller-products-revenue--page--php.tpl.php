<?php
$total_product_cost = $row->field_commerce_total[0]['raw']['amount'];
$seller_share = $total_product_cost * .95;
$currency_code = 'NGN';
$jj = commerce_currency_format($seller_share, $currency_code);
print $jj;
?>

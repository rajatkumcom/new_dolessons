<?php

$nid = $row->nid;
$node_data = node_load($nid);
$publish_status = $node_data->field_add_profile_payment_status[LANGUAGE_NONE][0]['value'];
$order_id = $node_data->field_add_banner_order_id[LANGUAGE_NONE][0]['value'];
$order_status = order_status($order_id);

if($publish_status == 0 && $order_status != "pending"){
print 'Amount Not Paid';
}
elseif($publish_status == 0 && $order_status == "pending"){

print l(t('Approve'), 'approve-banner-image/'.$nid, array('attributes' => array('class' => array('button'))));
}
else{
print 'Approved';
}



?>

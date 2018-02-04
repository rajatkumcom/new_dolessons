<?php

$nid = $row->nid;
$node_data = node_load($nid);
//display($node_data);
//die();
$publish_status = $node_data->field_sponsor_payment_status[LANGUAGE_NONE][0]['value'];
//display($publish_status);
//die();
$order_id = $node_data->field_sponsor_post_order_id[LANGUAGE_NONE][0]['value'];
$order_status = order_status($order_id);

if($publish_status == 0 && $order_status != "pending"){
print 'Amount Not Paid';
}
elseif($publish_status == 0 && $order_status == "pending"){

print l(t('Approve'), 'approve-sponsored-post/'.$nid, array('attributes' => array('class' => array('button'))));
}
else{
print 'Approved';
}



?>

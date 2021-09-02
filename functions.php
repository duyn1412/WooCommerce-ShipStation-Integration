<?php
//add new data to xml 

add_filter('woocommerce_shipstation_export_order_xml', 'd_add_new_data');
function d_add_new_data($order_xml){

  $doc = $order_xml->ownerDocument;

  // create element
  $data = $order_xml->appendChild( $doc->createElement( 'test' ) );

  // add value
  $data->appendChild($doc->createCDATASection('new') );

  return $order_xml;
}

<?php
$storeId = Mage::app()->getStore()->getStoreId();
$searchstring= Mage::registry('product_name');
if(isset($_GET['price'])){
$price=$_GET['price'];
$filter_price=number_format($price, 2, '.', '');
$_productCollection = Mage::getModel('catalog/product')
                        ->getCollection() 
                        ->addAttributeToSelect('*') 
						->addAttributeToFilter('price', array('lteq' => (float)$filter_price))
                        ->addAttributeToFilter('name', array('like' => '%'.$searchstring.'%'));
}else{
$_productCollection = Mage::getModel('catalog/product')
                        ->getCollection() 
                        ->addAttributeToSelect('*') 						
                        ->addAttributeToFilter('name', array('like' => '%'.$searchstring.'%'));	
}
//collection with particular range of attribute

$storeId = Mage::app()->getStore()->getStoreId();
$product_name= Mage::registry('product_name');
$product_price= Mage::registry('product_price');
$pin_code= Mage::registry('pin_code');
if(!empty($pin_code)){
$filter_price=number_format($product_price, 2, '.', '');
$filter_a = array('eq'=>$pin_code);
$filter_b = array('from'=>$pin_code-50,'to'=>$pin_code+50);

$_productCollection = Mage::getModel('catalog/product')
                        ->getCollection() 
                        ->addAttributeToSelect('*') 
						->addAttributeToFilter('price', array('lteq' => (float)$filter_price))
						->addFieldToFilter('pin_code', array( $filter_a, $filter_b))
                        ->addAttributeToFilter('name', array('like' => '%'.$product_name.'%'));
}	
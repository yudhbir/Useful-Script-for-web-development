<?php
//custom toolbar in custom template in magento
$toolbar = Mage::getBlockSingleton('catalog/product_list')->getToolbarBlock();
$toolbar->setCollection($_productCollection);
$layout = Mage::getSingleton('core/layout');
$pager = $layout->createBlock('page/html_pager');
$toolbar->setChild('product_list_toolbar_pager', $pager);
echo $toolbar->toHtml();  // to Show toolbar
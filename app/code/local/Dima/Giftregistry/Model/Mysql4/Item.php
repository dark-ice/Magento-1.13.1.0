<?php
class Dima_Giftregistry_Model_Mysql4_Item extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
{
    $this->_init('dima_giftregistry/item', 'item_id');
}
}
<?php
/**
 * Shippit Pty Ltd
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the terms
 * that is available through the world-wide-web at this URL:
 * http://www.shippit.com/terms
 *
 * @category   Shippit
 * @copyright  Copyright (c) 2016 by Shippit Pty Ltd (http://www.shippit.com)
 * @author     Matthew Muscat <matthew@mamis.com.au>
 * @license    http://www.shippit.com/terms
 */

class Shippit_Shippit_Model_Sync_Order_Item extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
        $this->_init('shippit/sync_order_item');
    }

    public function addItem($item)
    {
        return $this->setData($item);
    }
}

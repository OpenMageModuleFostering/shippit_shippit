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

class Shippit_Shippit_Model_Sync_Order_Config extends Mage_Core_Model_Abstract
{
    public function getStatus()
    {
        return array(
            Shippit_Shippit_Model_Sync_Order::STATUS_PENDING => Shippit_Shippit_Model_Sync_Order::STATUS_PENDING_TEXT,
            Shippit_Shippit_Model_Sync_Order::STATUS_SYNCED => Shippit_Shippit_Model_Sync_Order::STATUS_SYNCED_TEXT,
            Shippit_Shippit_Model_Sync_Order::STATUS_FAILED => Shippit_Shippit_Model_Sync_Order::STATUS_FAILED_TEXT,
        );
    }
}
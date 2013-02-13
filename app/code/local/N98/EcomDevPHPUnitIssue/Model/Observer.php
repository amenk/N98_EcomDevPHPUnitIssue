<?php

/**
 * @package N98_EcomDevPHPUnitIssue11
 */
class N98_EcomDevPHPUnitIssue_Model_Observer
{
    /**
     * @see \Mage_Wishlist_IndexController::sendAction
     * @param Varien_Event_Observer $observer
     */
    public function controllerActionPredispatchWishlistIndexSend(Varien_Event_Observer $observer)
    {
        global $event_was_fired;
        $event_was_fired = true;
    }
}
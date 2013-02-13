<?php

/**

 * @package N98_EcomDevPHPUnitIssue
 */
class N98_EcomDevPHPUnitIssue_Test_Controller_TestController extends EcomDev_PHPUnit_Test_Case_Controller
{

    /**
     * @test
     * @loadFixture ~N98_EcomDevPHPUnitIssue/empty
     */
    public function aAction()
    {
        $this->dispatch('/');
    }


    /**
     * @test
     * @loadFixture ~N98_EcomDevPHPUnitIssue/empty
     */
    public function bAction()
    {
        global $event_was_fired;

        $this->dispatch('wishlist/index/send');
        $this->assertEventDispatched('controller_action_predispatch_wishlist_index_send');
        $this->assertTrue($event_was_fired,'event was not really fired');
    }



}

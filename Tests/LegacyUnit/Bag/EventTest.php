<?php

declare(strict_types=1);

use OliverKlee\PhpUnit\TestCase;

/**
 * Test case.
 *
 * @author Mario Rimann <typo3-coding@rimann.org>
 * @author Niels Pardon <mail@niels-pardon.de>
 */
class Tx_Seminars_Tests_Unit_Bag_EventTest extends TestCase
{
    /**
     * @var \Tx_Seminars_Bag_Event
     */
    private $subject = null;

    /**
     * @var \Tx_Oelib_TestingFramework
     */
    private $testingFramework = null;

    protected function setUp()
    {
        $this->testingFramework = new \Tx_Oelib_TestingFramework('tx_seminars');

        $this->testingFramework->createRecord(
            'tx_seminars_seminars',
            ['title' => 'test event']
        );

        $this->subject = new \Tx_Seminars_Bag_Event('is_dummy_record=1');
    }

    protected function tearDown()
    {
        $this->testingFramework->cleanUp();

        \Tx_Seminars_Service_RegistrationManager::purgeInstance();
    }

    ///////////////////////////////////////////
    // Tests for the basic bag functionality.
    ///////////////////////////////////////////

    public function testBagCanHaveAtLeastOneElement()
    {
        self::assertFalse(
            $this->subject->isEmpty()
        );
    }
}

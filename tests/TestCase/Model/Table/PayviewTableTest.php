<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PayviewTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PayviewTable Test Case
 */
class PayviewTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PayviewTable
     */
    public $Payview;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.payview',
        'app.employees'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Payview') ? [] : ['className' => PayviewTable::class];
        $this->Payview = TableRegistry::getTableLocator()->get('Payview', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Payview);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

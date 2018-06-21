<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HoursWorkedTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HoursWorkedTable Test Case
 */
class HoursWorkedTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HoursWorkedTable
     */
    public $HoursWorked;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.hours_worked',
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
        $config = TableRegistry::getTableLocator()->exists('HoursWorked') ? [] : ['className' => HoursWorkedTable::class];
        $this->HoursWorked = TableRegistry::getTableLocator()->get('HoursWorked', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->HoursWorked);

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

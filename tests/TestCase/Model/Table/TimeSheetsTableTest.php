<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TimeSheetsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TimeSheetsTable Test Case
 */
class TimeSheetsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TimeSheetsTable
     */
    public $TimeSheets;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.time_sheets',
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
        $config = TableRegistry::getTableLocator()->exists('TimeSheets') ? [] : ['className' => TimeSheetsTable::class];
        $this->TimeSheets = TableRegistry::getTableLocator()->get('TimeSheets', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TimeSheets);

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

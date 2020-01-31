<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ObjectiveTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ObjectiveTable Test Case
 */
class ObjectiveTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ObjectiveTable
     */
    public $Objective;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Objective',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Objective') ? [] : ['className' => ObjectiveTable::class];
        $this->Objective = TableRegistry::getTableLocator()->get('Objective', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Objective);

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
}

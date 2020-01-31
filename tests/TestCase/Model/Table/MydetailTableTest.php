<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MydetailTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MydetailTable Test Case
 */
class MydetailTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MydetailTable
     */
    public $Mydetail;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Mydetail',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Mydetail') ? [] : ['className' => MydetailTable::class];
        $this->Mydetail = TableRegistry::getTableLocator()->get('Mydetail', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Mydetail);

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

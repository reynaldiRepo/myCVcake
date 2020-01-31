<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PendidikanTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PendidikanTable Test Case
 */
class PendidikanTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PendidikanTable
     */
    public $Pendidikan;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Pendidikan',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Pendidikan') ? [] : ['className' => PendidikanTable::class];
        $this->Pendidikan = TableRegistry::getTableLocator()->get('Pendidikan', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pendidikan);

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

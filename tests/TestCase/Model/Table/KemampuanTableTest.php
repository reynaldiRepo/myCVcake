<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KemampuanTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KemampuanTable Test Case
 */
class KemampuanTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\KemampuanTable
     */
    public $Kemampuan;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Kemampuan',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Kemampuan') ? [] : ['className' => KemampuanTable::class];
        $this->Kemampuan = TableRegistry::getTableLocator()->get('Kemampuan', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Kemampuan);

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

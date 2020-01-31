<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PengalamanTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PengalamanTable Test Case
 */
class PengalamanTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PengalamanTable
     */
    public $Pengalaman;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Pengalaman',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Pengalaman') ? [] : ['className' => PengalamanTable::class];
        $this->Pengalaman = TableRegistry::getTableLocator()->get('Pengalaman', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pengalaman);

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

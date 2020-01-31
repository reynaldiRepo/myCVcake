<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PortofolioTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PortofolioTable Test Case
 */
class PortofolioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PortofolioTable
     */
    public $Portofolio;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Portofolio',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Portofolio') ? [] : ['className' => PortofolioTable::class];
        $this->Portofolio = TableRegistry::getTableLocator()->get('Portofolio', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Portofolio);

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

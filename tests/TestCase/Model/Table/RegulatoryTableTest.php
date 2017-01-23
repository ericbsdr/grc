<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RegulatoryTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RegulatoryTable Test Case
 */
class RegulatoryTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RegulatoryTable
     */
    public $Regulatory;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.regulatory'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Regulatory') ? [] : ['className' => 'App\Model\Table\RegulatoryTable'];
        $this->Regulatory = TableRegistry::get('Regulatory', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Regulatory);

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

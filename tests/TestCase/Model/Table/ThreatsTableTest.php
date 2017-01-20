<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ThreatsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ThreatsTable Test Case
 */
class ThreatsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ThreatsTable
     */
    public $Threats;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.threats'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Threats') ? [] : ['className' => 'App\Model\Table\ThreatsTable'];
        $this->Threats = TableRegistry::get('Threats', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Threats);

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

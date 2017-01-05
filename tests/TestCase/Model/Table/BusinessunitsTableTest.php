<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BusinessunitsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BusinessunitsTable Test Case
 */
class BusinessunitsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BusinessunitsTable
     */
    public $Businessunits;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.businessunits',
        'app.primary_assets',
        'app.secondary_assets',
        'app.businessunits_primary_assets'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Businessunits') ? [] : ['className' => 'App\Model\Table\BusinessunitsTable'];
        $this->Businessunits = TableRegistry::get('Businessunits', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Businessunits);

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

<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SecondaryAssetsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SecondaryAssetsTable Test Case
 */
class SecondaryAssetsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SecondaryAssetsTable
     */
    public $SecondaryAssets;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.secondary_assets',
        'app.primary_assets',
        'app.businessunits',
        'app.assets',
        'app.assets_businessunits',
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
        $config = TableRegistry::exists('SecondaryAssets') ? [] : ['className' => 'App\Model\Table\SecondaryAssetsTable'];
        $this->SecondaryAssets = TableRegistry::get('SecondaryAssets', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SecondaryAssets);

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

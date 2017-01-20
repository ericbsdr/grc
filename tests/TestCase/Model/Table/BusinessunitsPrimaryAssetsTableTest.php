<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BusinessunitsPrimaryAssetsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BusinessunitsPrimaryAssetsTable Test Case
 */
class BusinessunitsPrimaryAssetsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BusinessunitsPrimaryAssetsTable
     */
    public $BusinessunitsPrimaryAssets;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.businessunits_primary_assets',
        'app.primary_assets',
        'app.businessunits',
        'app.assets',
        'app.assets_businessunits'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('BusinessunitsPrimaryAssets') ? [] : ['className' => 'App\Model\Table\BusinessunitsPrimaryAssetsTable'];
        $this->BusinessunitsPrimaryAssets = TableRegistry::get('BusinessunitsPrimaryAssets', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BusinessunitsPrimaryAssets);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

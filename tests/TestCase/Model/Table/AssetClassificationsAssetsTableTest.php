<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AssetClassificationsAssetsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AssetClassificationsAssetsTable Test Case
 */
class AssetClassificationsAssetsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AssetClassificationsAssetsTable
     */
    public $AssetClassificationsAssets;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.asset_classifications_assets',
        'app.asset_classifications',
        'app.asset_classification_types',
        'app.primary_assets',
        'app.secondary_assets',
        'app.businessunits',
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
        $config = TableRegistry::exists('AssetClassificationsAssets') ? [] : ['className' => 'App\Model\Table\AssetClassificationsAssetsTable'];
        $this->AssetClassificationsAssets = TableRegistry::get('AssetClassificationsAssets', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AssetClassificationsAssets);

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

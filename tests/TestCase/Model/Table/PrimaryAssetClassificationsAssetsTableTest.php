<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PrimaryAssetClassificationsAssetsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PrimaryAssetClassificationsAssetsTable Test Case
 */
class PrimaryAssetClassificationsAssetsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PrimaryAssetClassificationsAssetsTable
     */
    public $PrimaryAssetClassificationsAssets;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.primary_asset_classifications_assets',
        'app.asset_classifications',
        'app.asset_classification_types',
        'app.asset_classifications_assets',
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
        $config = TableRegistry::exists('PrimaryAssetClassificationsAssets') ? [] : ['className' => 'App\Model\Table\PrimaryAssetClassificationsAssetsTable'];
        $this->PrimaryAssetClassificationsAssets = TableRegistry::get('PrimaryAssetClassificationsAssets', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PrimaryAssetClassificationsAssets);

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

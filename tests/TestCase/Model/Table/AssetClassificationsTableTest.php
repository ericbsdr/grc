<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AssetClassificationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AssetClassificationsTable Test Case
 */
class AssetClassificationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AssetClassificationsTable
     */
    public $AssetClassifications;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('AssetClassifications') ? [] : ['className' => 'App\Model\Table\AssetClassificationsTable'];
        $this->AssetClassifications = TableRegistry::get('AssetClassifications', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AssetClassifications);

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

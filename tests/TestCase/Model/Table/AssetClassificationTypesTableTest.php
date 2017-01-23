<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AssetClassificationTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AssetClassificationTypesTable Test Case
 */
class AssetClassificationTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AssetClassificationTypesTable
     */
    public $AssetClassificationTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.asset_classification_types',
        'app.asset_classifications',
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
        $config = TableRegistry::exists('AssetClassificationTypes') ? [] : ['className' => 'App\Model\Table\AssetClassificationTypesTable'];
        $this->AssetClassificationTypes = TableRegistry::get('AssetClassificationTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AssetClassificationTypes);

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

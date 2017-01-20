<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PrimaryAssetsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PrimaryAssetsTable Test Case
 */
class PrimaryAssetsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PrimaryAssetsTable
     */
    public $PrimaryAssets;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.primary_assets',
        'app.secondary_assets',
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
        $config = TableRegistry::exists('PrimaryAssets') ? [] : ['className' => 'App\Model\Table\PrimaryAssetsTable'];
        $this->PrimaryAssets = TableRegistry::get('PrimaryAssets', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PrimaryAssets);

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

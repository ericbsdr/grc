<?php
namespace App\Test\TestCase\Controller;

use App\Controller\AssetClassificationsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\AssetClassificationsController Test Case
 */
class AssetClassificationsControllerTest extends IntegrationTestCase
{

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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

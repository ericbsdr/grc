<?php
namespace App\Test\TestCase\Controller;

use App\Controller\SecondaryAssetsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\SecondaryAssetsController Test Case
 */
class SecondaryAssetsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.secondary_assets',
        'app.primary_assets',
        'app.asset_classifications_assets',
        'app.asset_classifications',
        'app.asset_classification_types',
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

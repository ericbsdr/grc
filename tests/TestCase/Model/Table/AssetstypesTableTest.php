<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AssetstypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AssetstypesTable Test Case
 */
class AssetstypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AssetstypesTable
     */
    public $Assetstypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.assetstypes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Assetstypes') ? [] : ['className' => 'App\Model\Table\AssetstypesTable'];
        $this->Assetstypes = TableRegistry::get('Assetstypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Assetstypes);

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

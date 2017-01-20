<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VulnerabilitiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VulnerabilitiesTable Test Case
 */
class VulnerabilitiesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VulnerabilitiesTable
     */
    public $Vulnerabilities;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.vulnerabilities'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Vulnerabilities') ? [] : ['className' => 'App\Model\Table\VulnerabilitiesTable'];
        $this->Vulnerabilities = TableRegistry::get('Vulnerabilities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Vulnerabilities);

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

<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PoliciesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PoliciesTable Test Case
 */
class PoliciesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PoliciesTable
     */
    public $Policies;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.policies',
        'app.policy_statuses',
        'app.projects',
        'app.controls',
        'app.audit_dates'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Policies') ? [] : ['className' => 'App\Model\Table\PoliciesTable'];
        $this->Policies = TableRegistry::get('Policies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Policies);

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

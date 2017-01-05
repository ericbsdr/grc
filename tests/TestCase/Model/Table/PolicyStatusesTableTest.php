<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PolicyStatusesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PolicyStatusesTable Test Case
 */
class PolicyStatusesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PolicyStatusesTable
     */
    public $PolicyStatuses;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.policy_statuses',
        'app.policies',
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
        $config = TableRegistry::exists('PolicyStatuses') ? [] : ['className' => 'App\Model\Table\PolicyStatusesTable'];
        $this->PolicyStatuses = TableRegistry::get('PolicyStatuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PolicyStatuses);

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

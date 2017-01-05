<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ControlsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ControlsTable Test Case
 */
class ControlsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ControlsTable
     */
    public $Controls;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.controls',
        'app.policies',
        'app.policy_statuses',
        'app.projects',
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
        $config = TableRegistry::exists('Controls') ? [] : ['className' => 'App\Model\Table\ControlsTable'];
        $this->Controls = TableRegistry::get('Controls', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Controls);

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

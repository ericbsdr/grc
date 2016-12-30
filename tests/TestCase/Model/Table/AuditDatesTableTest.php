<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AuditDatesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AuditDatesTable Test Case
 */
class AuditDatesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AuditDatesTable
     */
    public $AuditDates;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('AuditDates') ? [] : ['className' => 'App\Model\Table\AuditDatesTable'];
        $this->AuditDates = TableRegistry::get('AuditDates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AuditDates);

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

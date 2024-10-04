<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ServiceTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ServiceTable Test Case
 */
class ServiceTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ServiceTable
     */
    protected $Service;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Service',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Service') ? [] : ['className' => ServiceTable::class];
        $this->Service = $this->getTableLocator()->get('Service', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Service);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ServiceTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

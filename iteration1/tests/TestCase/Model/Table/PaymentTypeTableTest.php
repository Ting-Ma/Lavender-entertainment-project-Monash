<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PaymentTypeTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PaymentTypeTable Test Case
 */
class PaymentTypeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PaymentTypeTable
     */
    protected $PaymentType;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.PaymentType',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('PaymentType') ? [] : ['className' => PaymentTypeTable::class];
        $this->PaymentType = $this->getTableLocator()->get('PaymentType', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->PaymentType);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PaymentTypeTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

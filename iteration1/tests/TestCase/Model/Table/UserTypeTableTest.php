<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserTypeTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserTypeTable Test Case
 */
class UserTypeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UserTypeTable
     */
    protected $UserType;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.UserType',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('UserType') ? [] : ['className' => UserTypeTable::class];
        $this->UserType = $this->getTableLocator()->get('UserType', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->UserType);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\UserTypeTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

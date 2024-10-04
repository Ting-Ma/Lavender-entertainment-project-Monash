<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VenueTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VenueTable Test Case
 */
class VenueTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VenueTable
     */
    protected $Venue;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Venue',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Venue') ? [] : ['className' => VenueTable::class];
        $this->Venue = $this->getTableLocator()->get('Venue', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Venue);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\VenueTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

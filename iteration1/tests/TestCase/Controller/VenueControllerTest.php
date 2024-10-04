<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\VenueController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\VenueController Test Case
 *
 * @uses \App\Controller\VenueController
 */
class VenueControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Venue',
    ];

    /**
     * Test assets method
     *
     * @return void
     * @uses \App\Controller\VenueController::assets()
     */
    public function testAssets(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\VenueController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\VenueController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\VenueController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\VenueController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\VenueController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test venueListing method
     *
     * @return void
     * @uses \App\Controller\VenueController::venueListing()
     */
    public function testVenueListing(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

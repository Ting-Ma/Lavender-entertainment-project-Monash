<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BookingFixture
 */
class BookingFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'booking';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'date' => '2023-10-03 10:28:20',
                'description' => 'Lorem ipsum dolor sit amet',
                'service_id' => 1,
                'venue_id' => 1,
                'user_id' => 1,
                'payment_id' => 1,
                'endtime' => '2023-10-03 10:28:20',
            ],
        ];
        parent::init();
    }
}

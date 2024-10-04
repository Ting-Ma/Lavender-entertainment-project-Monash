<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VenueFixture
 */
class VenueFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'venue';
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
                'name' => 'Lorem ipsum dolor sit amet',
                'street' => 'Lorem ipsum dolor sit amet',
                'facilities' => 'Lorem ipsum dolor sit amet',
                'suburb' => 'Lorem ipsum dolor sit amet',
                'postcode' => 'Lorem ipsum dolor sit amet',
                'booking_id' => 1,
                'price' => 'Lorem ipsum dolor sit amet',
                'date' => '2023-10-04',
                'service' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}

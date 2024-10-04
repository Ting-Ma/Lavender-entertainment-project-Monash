<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ServiceFixture
 */
class ServiceFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'service';
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
                'company' => 'Lorem ipsum dolor sit amet',
                'service_type' => 'Lorem ipsum dolor sit amet',
                'contact' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}

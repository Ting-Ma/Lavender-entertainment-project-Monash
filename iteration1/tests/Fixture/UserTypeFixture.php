<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UserTypeFixture
 */
class UserTypeFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'user_type';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'type' => 'b7356a7e-b851-4ab2-9a31-ae5cd0299a50',
                'description' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}

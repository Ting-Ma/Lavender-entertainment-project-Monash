<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Venue Entity
 *
 * @property int $id
 * @property string $name
 * @property string $street
 * @property string $facilities
 * @property string $suburb
 * @property string $postcode
 * @property int|null $booking_id
 * @property string|null $price
 * @property \Cake\I18n\FrozenDate|null $date
 * @property string $service
 */
class Venue extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'name' => true,
        'street' => true,
        'facilities' => true,
        'suburb' => true,
        'postcode' => true,
        'booking_id' => true,
        'price' => true,
        'date' => true,
        'service' => true,
    ];
}

<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Booking Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $date
 * @property string $description
 * @property int|null $service_id
 * @property int|null $venue_id
 * @property int|null $user_id
 * @property int|null $payment_id
 * @property \Cake\I18n\FrozenTime|null $endtime
 *
 * @property \App\Model\Entity\Service $service
 * @property \App\Model\Entity\Venue[] $venue
 * @property \App\Model\Entity\User[] $users
 * @property \App\Model\Entity\Payment[] $payment
 */
class Booking extends Entity
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
        'date' => true,
        'description' => true,
        'service_id' => true,
        'venue_id' => true,
        'user_id' => true,
        'payment_id' => true,
        'endtime' => true,
        'service' => true,
        'venue' => true,
        'users' => true,
        'payment' => true,
    ];
}

<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Invioce Entity
 *
 * @property int $id
 * @property int $number
 * @property int $vendor_id
 * @property int $budget_id
 */
class Invioce extends Entity
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
    protected array $_accessible = [
        'number' => true,
        'vendor_id' => true,
        'budget_id' => true,
    ];
}

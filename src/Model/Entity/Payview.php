<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Payview Entity
 *
 * @property int $employee_id
 * @property string $first_name
 * @property string $last_name
 * @property int $Worked_hours
 * @property float $Wage
 * @property float $Pay
 * @property string $month
 *
 * @property \App\Model\Entity\Employee $employee
 */
class Payview extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'employee_id' => true,
        'first_name' => true,
        'last_name' => true,
        'Worked_hours' => true,
        'Wage' => true,
        'Pay' => true,
        'month' => true,
        'employee' => true
    ];
}

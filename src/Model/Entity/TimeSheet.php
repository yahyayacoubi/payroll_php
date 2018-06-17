<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TimeSheet Entity
 *
 * @property int $id
 * @property int $employee_id
 * @property string $month
 * @property int $hours
 *
 * @property \App\Model\Entity\Employee $employee
 */
class TimeSheet extends Entity
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
        'month' => true,
        'hours' => true,
        'employee' => true
    ];
}

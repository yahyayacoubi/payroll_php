<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Payroll Entity
 *
 * @property int $id
 * @property int $employee_id
 * @property string $first_name
 * @property string $last_name
 * @property string $job
 * @property int $wage
 * @property int $hour
 * @property int $pay
 * @property string $month
 *
 * @property \App\Model\Entity\Employee $employee
 */
class Payroll extends Entity
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
        'job' => true,
        'wage' => true,
        'hour' => true,
        'pay' => true,
        'month' => true,
        'employee' => true
    ];
}

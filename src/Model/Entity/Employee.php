<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Employee Entity
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property \Cake\I18n\FrozenDate $birth_date
 * @property string $address
 * @property string $telephone_number
 * @property string $email
 * @property \Cake\I18n\FrozenDate $date_joined
 * @property int $job_id
 *
 * @property \App\Model\Entity\Job $job
 * @property \App\Model\Entity\Payroll[] $payrolls
 * @property \App\Model\Entity\TimeSheet[] $time_sheets
 */
class Employee extends Entity
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
        'first_name' => true,
        'last_name' => true,
        'birth_date' => true,
        'address' => true,
        'telephone_number' => true,
        'email' => true,
        'date_joined' => true,
        'job_id' => true,
        'job' => true,
        'payrolls' => true,
        'time_sheets' => true
    ];
}

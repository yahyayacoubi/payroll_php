<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Payview Model
 *
 * @property \App\Model\Table\EmployeesTable|\Cake\ORM\Association\BelongsTo $Employees
 *
 * @method \App\Model\Entity\Payview get($primaryKey, $options = [])
 * @method \App\Model\Entity\Payview newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Payview[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Payview|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Payview|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Payview patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Payview[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Payview findOrCreate($search, callable $callback = null, $options = [])
 */
class PayviewTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('payview');

        $this->belongsTo('Employees', [
            'foreignKey' => 'employee_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 55)
            ->requirePresence('first_name', 'create')
            ->notEmpty('first_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 55)
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name');

        $validator
            ->integer('Worked_hours')
            ->requirePresence('Worked_hours', 'create')
            ->notEmpty('Worked_hours');

        $validator
            ->numeric('Wage')
            ->requirePresence('Wage', 'create')
            ->notEmpty('Wage');

        $validator
            ->numeric('Pay')
            ->requirePresence('Pay', 'create')
            ->notEmpty('Pay');

        $validator
            ->scalar('month')
            ->maxLength('month', 20)
            ->requirePresence('month', 'create')
            ->notEmpty('month');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['employee_id'], 'Employees'));

        return $rules;
    }
}

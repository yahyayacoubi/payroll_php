<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TimeSheets Model
 *
 * @property \App\Model\Table\EmployeesTable|\Cake\ORM\Association\BelongsTo $Employees
 *
 * @method \App\Model\Entity\TimeSheet get($primaryKey, $options = [])
 * @method \App\Model\Entity\TimeSheet newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TimeSheet[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TimeSheet|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TimeSheet|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TimeSheet patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TimeSheet[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TimeSheet findOrCreate($search, callable $callback = null, $options = [])
 */
class TimeSheetsTable extends Table
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

        $this->setTable('time_sheets');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('month')
            ->maxLength('month', 20)
            ->requirePresence('month', 'create')
            ->notEmpty('month');

        $validator
            ->integer('hours')
            ->requirePresence('hours', 'create')
            ->notEmpty('hours');

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

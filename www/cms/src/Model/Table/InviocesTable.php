<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Invioces Model
 *
 * @method \App\Model\Entity\Invioce newEmptyEntity()
 * @method \App\Model\Entity\Invioce newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Invioce[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Invioce get($primaryKey, $options = [])
 * @method \App\Model\Entity\Invioce findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Invioce patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Invioce[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Invioce|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Invioce saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Invioce[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Invioce[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Invioce[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Invioce[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class InviocesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('invioces');
        $this->setDisplayField('invoices_id');
        $this->setPrimaryKey('invoices_id');

        $this->belongsTo('Vendors', [
            'foreignKey' => 'vendor_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Budgets', [
            'foreignKey' => 'budget_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('number')
            ->requirePresence('number', 'create')
            ->notEmptyString('number');

        $validator
            ->integer('vendor_id')
            ->notEmptyString('vendor_id');

        $validator
            ->integer('budget_id')
            ->notEmptyString('budget_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('vendor_id', 'Vendors'), ['errorField' => 'vendor_id']);
        $rules->add($rules->existsIn('budget_id', 'Budgets'), ['errorField' => 'budget_id']);

        return $rules;
    }
}

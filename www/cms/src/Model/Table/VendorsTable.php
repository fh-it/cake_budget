<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vendors Model
 *
 * @property \App\Model\Table\InviocesTable&\Cake\ORM\Association\HasMany $Invioces
 *
 * @method \App\Model\Entity\Vendor newEmptyEntity()
 * @method \App\Model\Entity\Vendor newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Vendor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Vendor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Vendor findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Vendor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Vendor[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Vendor|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vendor saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vendor[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vendor[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vendor[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vendor[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class VendorsTable extends Table
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

        $this->setTable('vendors');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Invioces', [
            'foreignKey' => 'vendor_id',
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->integer('phone')
            ->requirePresence('phone', 'create')
            ->notEmptyString('phone');

        return $validator;
    }
}

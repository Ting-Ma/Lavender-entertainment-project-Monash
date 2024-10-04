<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PaymentType Model
 *
 * @method \App\Model\Entity\PaymentType newEmptyEntity()
 * @method \App\Model\Entity\PaymentType newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\PaymentType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PaymentType get($primaryKey, $options = [])
 * @method \App\Model\Entity\PaymentType findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\PaymentType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PaymentType[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\PaymentType|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PaymentType saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PaymentType[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PaymentType[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\PaymentType[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PaymentType[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PaymentTypeTable extends Table
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

        $this->setTable('payment_type');
        $this->setDisplayField('type');
        $this->setPrimaryKey('type');
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
            ->scalar('description')
            ->maxLength('description', 64)
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        return $validator;
    }
}

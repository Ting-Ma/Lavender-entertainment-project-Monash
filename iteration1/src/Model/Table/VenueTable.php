<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Venue Model
 *
 * @method \App\Model\Entity\Venue newEmptyEntity()
 * @method \App\Model\Entity\Venue newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Venue[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Venue get($primaryKey, $options = [])
 * @method \App\Model\Entity\Venue findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Venue patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Venue[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Venue|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Venue saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Venue[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Venue[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Venue[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Venue[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class VenueTable extends Table
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

        $this->setTable('venue');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Booking', [
            'foreignKey' => 'booking_id',
        ]);
        $this->hasMany('Booking', [
            'foreignKey' => 'venue_id',
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
            ->maxLength('name', 64)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('street')
            ->maxLength('street', 64)
            ->requirePresence('street', 'create')
            ->notEmptyString('street');

        $validator
            ->scalar('facilities')
            ->maxLength('facilities', 64)
            ->requirePresence('facilities', 'create')
            ->notEmptyString('facilities');

        $validator
            ->scalar('suburb')
            ->maxLength('suburb', 255)
            ->requirePresence('suburb', 'create')
            ->notEmptyString('suburb');

        $validator
            ->scalar('postcode')
            ->maxLength('postcode', 255)
            ->requirePresence('postcode', 'create')
            ->notEmptyString('postcode');

        $validator
            ->integer('booking_id')
            ->allowEmptyString('booking_id');

        $validator
            ->scalar('price')
            ->maxLength('price', 255)
            ->allowEmptyString('price');

        $validator
            ->date('date')
            ->allowEmptyDate('date');

        $validator
            ->scalar('service')
            ->maxLength('service', 255)
            ->requirePresence('service', 'create')
            ->notEmptyString('service');

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
        $rules->add($rules->existsIn('booking_id', 'Booking'), ['errorField' => 'booking_id']);

        return $rules;
    }
}

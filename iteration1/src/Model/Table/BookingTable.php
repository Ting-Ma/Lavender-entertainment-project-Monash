<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Booking Model
 *
 * @property \App\Model\Table\ServiceTable&\Cake\ORM\Association\BelongsTo $Service
 * @property \App\Model\Table\VenueTable&\Cake\ORM\Association\BelongsTo $Venue
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\PaymentTable&\Cake\ORM\Association\HasMany $Payment
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\HasMany $Users
 * @property \App\Model\Table\VenueTable&\Cake\ORM\Association\HasMany $Venue
 *
 * @method \App\Model\Entity\Booking newEmptyEntity()
 * @method \App\Model\Entity\Booking newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Booking[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Booking get($primaryKey, $options = [])
 * @method \App\Model\Entity\Booking findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Booking patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Booking[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Booking|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Booking saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Booking[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Booking[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Booking[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Booking[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class BookingTable extends Table
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

        $this->setTable('booking');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Service', [
            'foreignKey' => 'service_id',
        ]);
        $this->belongsTo('Venue', [
            'foreignKey' => 'venue_id',
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Payment', [
            'foreignKey' => 'booking_id',
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'booking_id',
        ]);
        $this->hasMany('Venue', [
            'foreignKey' => 'booking_id',
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
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        $validator
            ->scalar('description')
            ->maxLength('description', 64)
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->integer('service_id')
            ->allowEmptyString('service_id');

        $validator
            ->integer('venue_id')
            ->allowEmptyString('venue_id');

        $validator
            ->integer('user_id')
            ->allowEmptyString('user_id');

        $validator
            ->integer('payment_id')
            ->allowEmptyString('payment_id');

        $validator
            ->dateTime('endtime')
            ->allowEmptyDateTime('endtime');

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
        $rules->add($rules->existsIn('service_id', 'Service'), ['errorField' => 'service_id']);
        $rules->add($rules->existsIn('venue_id', 'Venue'), ['errorField' => 'venue_id']);
        $rules->add($rules->existsIn('user_id', 'Users'), ['errorField' => 'user_id']);

        return $rules;
    }
}

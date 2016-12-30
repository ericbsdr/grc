<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Businessunits Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Assets
 * @property \Cake\ORM\Association\BelongsToMany $Assets
 *
 * @method \App\Model\Entity\Businessunit get($primaryKey, $options = [])
 * @method \App\Model\Entity\Businessunit newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Businessunit[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Businessunit|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Businessunit patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Businessunit[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Businessunit findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BusinessunitsTable extends Table
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

        $this->table('businessunits');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Assets', [
            'foreignKey' => 'asset_id'
        ]);
        $this->belongsToMany('Assets', [
            'foreignKey' => 'businessunit_id',
            'targetForeignKey' => 'asset_id',
            'joinTable' => 'assets_businessunits'
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
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->allowEmpty('owner');

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
        $rules->add($rules->existsIn(['asset_id'], 'Assets'));

        return $rules;
    }
}

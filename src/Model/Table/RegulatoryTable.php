<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Regulatory Model
 *
 * @method \App\Model\Entity\Regulatory get($primaryKey, $options = [])
 * @method \App\Model\Entity\Regulatory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Regulatory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Regulatory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Regulatory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Regulatory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Regulatory findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RegulatoryTable extends Table
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

        $this->table('regulatory');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->numeric('risk_magnifier')
            ->allowEmpty('risk_magnifier');

        return $validator;
    }
}

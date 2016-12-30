<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PolicyStatuses Model
 *
 * @property \Cake\ORM\Association\HasMany $Policies
 *
 * @method \App\Model\Entity\PolicyStatus get($primaryKey, $options = [])
 * @method \App\Model\Entity\PolicyStatus newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PolicyStatus[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PolicyStatus|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PolicyStatus patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PolicyStatus[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PolicyStatus findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PolicyStatusesTable extends Table
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

        $this->table('policy_statuses');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Policies', [
            'foreignKey' => 'policy_status_id'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        return $validator;
    }
}

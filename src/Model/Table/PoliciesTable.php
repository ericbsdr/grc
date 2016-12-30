<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Policies Model
 *
 * @property \Cake\ORM\Association\BelongsTo $PolicyStatuses
 * @property \Cake\ORM\Association\BelongsTo $Projects
 * @property \Cake\ORM\Association\HasMany $Controls
 *
 * @method \App\Model\Entity\Policy get($primaryKey, $options = [])
 * @method \App\Model\Entity\Policy newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Policy[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Policy|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Policy patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Policy[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Policy findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PoliciesTable extends Table
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

        $this->table('policies');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('PolicyStatuses', [
            'foreignKey' => 'policy_status_id'
        ]);
        $this->belongsTo('Projects', [
            'foreignKey' => 'project_id'
        ]);
        $this->hasMany('Controls', [
            'foreignKey' => 'policy_id'
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

        $validator
            ->allowEmpty('description');

        $validator
            ->dateTime('next_review_date')
            ->allowEmpty('next_review_date');

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
        $rules->add($rules->existsIn(['policy_status_id'], 'PolicyStatuses'));
        $rules->add($rules->existsIn(['project_id'], 'Projects'));

        return $rules;
    }
}

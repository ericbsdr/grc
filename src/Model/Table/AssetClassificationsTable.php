<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AssetClassifications Model
 *
 * @property \Cake\ORM\Association\BelongsTo $AssetClassificationTypes
 * @property \Cake\ORM\Association\HasMany $AssetClassificationsAssets
 *
 * @method \App\Model\Entity\AssetClassification get($primaryKey, $options = [])
 * @method \App\Model\Entity\AssetClassification newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AssetClassification[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AssetClassification|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AssetClassification patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AssetClassification[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AssetClassification findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AssetClassificationsTable extends Table
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

        $this->table('asset_classifications');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('AssetClassificationTypes', [
            'foreignKey' => 'asset_classification_type_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('AssetClassificationsAssets', [
            'foreignKey' => 'asset_classification_id'
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
            ->requirePresence('criteria', 'create')
            ->notEmpty('criteria');

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
        $rules->add($rules->existsIn(['asset_classification_type_id'], 'AssetClassificationTypes'));

        return $rules;
    }
}

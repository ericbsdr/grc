<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SecondaryAssets Model
 *
 * @property \Cake\ORM\Association\BelongsTo $PrimaryAssets
 *
 * @method \App\Model\Entity\SecondaryAsset get($primaryKey, $options = [])
 * @method \App\Model\Entity\SecondaryAsset newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SecondaryAsset[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SecondaryAsset|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SecondaryAsset patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SecondaryAsset[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SecondaryAsset findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SecondaryAssetsTable extends Table
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

        $this->table('secondary_assets');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('PrimaryAssets', [
            'foreignKey' => 'primary_asset_id'
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
            ->allowEmpty('owner');

        $validator
            ->allowEmpty('status');

        $validator
            ->dateTime('review')
            ->allowEmpty('review');

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
        $rules->add($rules->existsIn(['primary_asset_id'], 'PrimaryAssets'));

        return $rules;
    }
}

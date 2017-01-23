<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PrimaryAssetClassificationsAssets Model
 *
 * @property \Cake\ORM\Association\BelongsTo $AssetClassifications
 * @property \Cake\ORM\Association\BelongsTo $PrimaryAssets
 *
 * @method \App\Model\Entity\PrimaryAssetClassificationsAsset get($primaryKey, $options = [])
 * @method \App\Model\Entity\PrimaryAssetClassificationsAsset newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PrimaryAssetClassificationsAsset[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PrimaryAssetClassificationsAsset|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PrimaryAssetClassificationsAsset patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PrimaryAssetClassificationsAsset[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PrimaryAssetClassificationsAsset findOrCreate($search, callable $callback = null)
 */
class PrimaryAssetClassificationsAssetsTable extends Table
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

        $this->table('primary_asset_classifications_assets');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('AssetClassifications', [
            'foreignKey' => 'asset_classification_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('PrimaryAssets', [
            'foreignKey' => 'primary_asset_id',
            'joinType' => 'INNER'
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
        $rules->add($rules->existsIn(['asset_classification_id'], 'AssetClassifications'));
        $rules->add($rules->existsIn(['primary_asset_id'], 'PrimaryAssets'));

        return $rules;
    }
}

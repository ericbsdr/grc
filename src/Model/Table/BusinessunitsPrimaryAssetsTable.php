<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BusinessunitsPrimaryAssets Model
 *
 * @property \Cake\ORM\Association\BelongsTo $PrimaryAssets
 * @property \Cake\ORM\Association\BelongsTo $Businessunits
 *
 * @method \App\Model\Entity\BusinessunitsPrimaryAsset get($primaryKey, $options = [])
 * @method \App\Model\Entity\BusinessunitsPrimaryAsset newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BusinessunitsPrimaryAsset[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BusinessunitsPrimaryAsset|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BusinessunitsPrimaryAsset patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BusinessunitsPrimaryAsset[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BusinessunitsPrimaryAsset findOrCreate($search, callable $callback = null)
 */
class BusinessunitsPrimaryAssetsTable extends Table
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

        $this->table('businessunits_primary_assets');
        $this->displayField('primary_asset_id');
        $this->primaryKey(['primary_asset_id', 'businessunit_id']);

        $this->belongsTo('PrimaryAssets', [
            'foreignKey' => 'primary_asset_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Businessunits', [
            'foreignKey' => 'businessunit_id',
            'joinType' => 'INNER'
        ]);
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
        $rules->add($rules->existsIn(['businessunit_id'], 'Businessunits'));

        return $rules;
    }
}

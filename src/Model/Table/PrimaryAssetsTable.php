<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PrimaryAssets Model
 *
 * @property \Cake\ORM\Association\HasMany $AssetClassificationsAssets
 * @property \Cake\ORM\Association\HasMany $SecondaryAssets
 * @property \Cake\ORM\Association\BelongsToMany $Businessunits
 *
 * @method \App\Model\Entity\PrimaryAsset get($primaryKey, $options = [])
 * @method \App\Model\Entity\PrimaryAsset newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PrimaryAsset[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PrimaryAsset|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PrimaryAsset patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PrimaryAsset[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PrimaryAsset findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PrimaryAssetsTable extends Table
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

        $this->table('primary_assets');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('AssetClassificationsAssets', [
            'foreignKey' => 'primary_asset_id'
        ]);
        $this->hasMany('SecondaryAssets', [
            'foreignKey' => 'primary_asset_id'
        ]);
        $this->belongsToMany('Businessunits', [
            'foreignKey' => 'primary_asset_id',
            'targetForeignKey' => 'businessunit_id',
            'joinTable' => 'businessunits_primary_assets'
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
}

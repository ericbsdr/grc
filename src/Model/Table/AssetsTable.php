<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Assets Model
 *
 * @property \Cake\ORM\Association\HasMany $Businessunits
 * @property \Cake\ORM\Association\BelongsToMany $Businessunits
 *
 * @method \App\Model\Entity\Asset get($primaryKey, $options = [])
 * @method \App\Model\Entity\Asset newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Asset[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Asset|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Asset patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Asset[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Asset findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AssetsTable extends Table
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

        $this->table('assets');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Businessunits', [
            'foreignKey' => 'asset_id'
        ]);
        $this->belongsToMany('Businessunits', [
            'foreignKey' => 'asset_id',
            'targetForeignKey' => 'businessunit_id',
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

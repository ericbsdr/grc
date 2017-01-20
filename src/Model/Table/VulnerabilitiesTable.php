<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vulnerabilities Model
 *
 * @method \App\Model\Entity\Vulnerability get($primaryKey, $options = [])
 * @method \App\Model\Entity\Vulnerability newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Vulnerability[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Vulnerability|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vulnerability patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Vulnerability[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Vulnerability findOrCreate($search, callable $callback = null)
 */
class VulnerabilitiesTable extends Table
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

        $this->table('vulnerabilities');
        $this->displayField('name');
        $this->primaryKey('id');
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

<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AuditDates Model
 *
 * @method \App\Model\Entity\AuditDate get($primaryKey, $options = [])
 * @method \App\Model\Entity\AuditDate newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AuditDate[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AuditDate|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AuditDate patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AuditDate[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AuditDate findOrCreate($search, callable $callback = null)
 */
class AuditDatesTable extends Table
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

        $this->table('audit_dates');
        $this->displayField('id');
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
            ->dateTime('date')
            ->allowEmpty('date');

        return $validator;
    }
}

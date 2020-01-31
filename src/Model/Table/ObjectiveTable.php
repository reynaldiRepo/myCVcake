<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Objective Model
 *
 * @method \App\Model\Entity\Objective get($primaryKey, $options = [])
 * @method \App\Model\Entity\Objective newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Objective[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Objective|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Objective saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Objective patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Objective[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Objective findOrCreate($search, callable $callback = null, $options = [])
 */
class ObjectiveTable extends Table
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

        $this->setTable('objective');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('ket')
            ->requirePresence('ket', 'create')
            ->notEmptyString('ket');

        $validator
            ->integer('id_user')
            ->requirePresence('id_user', 'create')
            ->notEmptyString('id_user');

        return $validator;
    }
}

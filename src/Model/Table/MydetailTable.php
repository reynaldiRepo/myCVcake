<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Mydetail Model
 *
 * @method \App\Model\Entity\Mydetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\Mydetail newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Mydetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Mydetail|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mydetail saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mydetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Mydetail[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Mydetail findOrCreate($search, callable $callback = null, $options = [])
 */
class MydetailTable extends Table
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

        $this->setTable('mydetail');
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

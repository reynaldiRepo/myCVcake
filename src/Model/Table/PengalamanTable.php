<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pengalaman Model
 *
 * @method \App\Model\Entity\Pengalaman get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pengalaman newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pengalaman[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pengalaman|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pengalaman saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pengalaman patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pengalaman[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pengalaman findOrCreate($search, callable $callback = null, $options = [])
 */
class PengalamanTable extends Table
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

        $this->setTable('pengalaman');
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
            ->scalar('tahun_in')
            ->maxLength('tahun_in', 30)
            ->requirePresence('tahun_in', 'create')
            ->notEmptyString('tahun_in');

        $validator
            ->scalar('tahun_out')
            ->maxLength('tahun_out', 30)
            ->requirePresence('tahun_out', 'create')
            ->notEmptyString('tahun_out');

        $validator
            ->integer('id_user')
            ->requirePresence('id_user', 'create')
            ->notEmptyString('id_user');

        return $validator;
    }
}

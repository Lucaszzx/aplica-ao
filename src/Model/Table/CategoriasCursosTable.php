<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CategoriasCursos Model
 *
 * @method \App\Model\Entity\CategoriasCurso newEmptyEntity()
 * @method \App\Model\Entity\CategoriasCurso newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CategoriasCurso[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CategoriasCurso get($primaryKey, $options = [])
 * @method \App\Model\Entity\CategoriasCurso findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CategoriasCurso patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CategoriasCurso[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CategoriasCurso|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CategoriasCurso saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CategoriasCurso[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CategoriasCurso[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CategoriasCurso[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CategoriasCurso[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CategoriasCursosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('categorias_cursos');
        $this->setDisplayField('nome_categoria');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('nome_categoria')
            ->maxLength('nome_categoria', 220)
            ->requirePresence('nome_categoria', 'create')
            ->notEmptyString('nome_categoria');

        return $validator;
    }
}

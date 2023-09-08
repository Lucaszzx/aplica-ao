<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CategoriasCursos Controller
 *
 * @property \App\Model\Table\CategoriasCursosTable $CategoriasCursos
 * @method \App\Model\Entity\CategoriasCurso[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategoriasCursosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate =[
            'limit'=>5,
        ];
        $categoriasCursos = $this->paginate($this->CategoriasCursos);

        $this->set(compact('categoriasCursos'));
    }

    /**
     * View method
     *
     * @param string|null $id Categorias Curso id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categoriasCurso = $this->CategoriasCursos->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('categoriasCurso'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categoriasCurso = $this->CategoriasCursos->newEmptyEntity();
        if ($this->request->is('post')) {
            $categoriasCurso = $this->CategoriasCursos->patchEntity($categoriasCurso, $this->request->getData());
            if ($this->CategoriasCursos->save($categoriasCurso)) {
                $this->Flash->success(__('The categorias curso has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categorias curso could not be saved. Please, try again.'));
        }
        $this->set(compact('categoriasCurso'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Categorias Curso id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categoriasCurso = $this->CategoriasCursos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categoriasCurso = $this->CategoriasCursos->patchEntity($categoriasCurso, $this->request->getData());
            if ($this->CategoriasCursos->save($categoriasCurso)) {
                $this->Flash->success(__('The categorias curso has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categorias curso could not be saved. Please, try again.'));
        }
        $this->set(compact('categoriasCurso'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Categorias Curso id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categoriasCurso = $this->CategoriasCursos->get($id);
        if ($this->CategoriasCursos->delete($categoriasCurso)) {
            $this->Flash->success(__('The categorias curso has been deleted.'));
        } else {
            $this->Flash->error(__('The categorias curso could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

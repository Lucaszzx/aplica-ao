<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Datasource\Exception\RecordNotFoundException;
use Cake\Http\Response;
use Cake\Log\Log;
/**
 * Contacts Controller
 *
 * @property \App\Model\Table\ContactsTable $Contacts
 * @method \App\Model\Entity\Contact[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContactsController extends AppController
{

    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    // public function index()
    // {
    //     $this->paginate =[
    //         'limit'=>5,
    //     ];
    //     $contacts = $this->paginate($this->Contacts);

    //     $this->set(compact('contacts'));
    // }

    public function index()
    {
        $contacts= $this->Contacts->find('all');
        $this->set([
            'contacts' => $contacts,


            '_serialize' => ['contacts']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Contact id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    // public function view($id = null)
    // {
    //     $contact = $this->Contacts->get($id, [
    //         'contain' => [],
    //     ]);

    //     $this->set(compact('contact'));
    // }

    public function view($id)
    {
        $contact = $this->Contacts->get($id);
        $this->set([
            'contact' => $contact,
            '_serialize' => ['contact']
        ]);


        
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
//     public function add()
// {
//     $contact = $this->Contacts->newEmptyEntity();

//     // Busca todos os cursos existentes
//     $courses = $this->Contacts->Cursos->find('list')->toArray();

//     if ($this->request->is('post')) {
//         $contact = $this->Contacts->patchEntity($contact, $this->request->getData());

//         $contact->curso_id = $this->request->getData('curso_id');

//         if ($this->Contacts->save($contact)) {
//             $this->Flash->success(__('Contato adicionado com sucesso.'));
//             return $this->redirect(['action' => 'index']);
//         }
//         $this->Flash->error(__('Não foi possível adicionar o contato.'));
//     }

//     $this->set(compact('contact', 'courses'));
// }

public function add()
{
    $this->request->allowMethod(['post', 'put']);
    $contact = $this->Contacts->newEntity($this->request->getData());
    if ($this->Contacts->save($contact)) {
        $message = 'Saved';
    } else {
        $message = 'Error';
    }
    $this->set([
        'message' => $message,
        'contact' => $contact,
        '_serialize' => ['message', 'contact']
    ]);
}
    /**
     * Edit method
     *
     * @param string|null $id Contact id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    // public function edit($id = null)
    // {
    //     $contact = $this->Contacts->get($id, [
    //         'contain' => [],
    //     ]);
    //     $courses = $this->Contacts->Cursos->find('list')->toArray();

    //     if ($this->request->is(['patch', 'post', 'put'])) {
    //         $contact = $this->Contacts->patchEntity($contact, $this->request->getData());
    //         $contact->curso_id = $this->request->getData('curso_id');
    //         if ($this->Contacts->save($contact)) {
    //             $this->Flash->success(__('The contact has been saved.'));

    //             return $this->redirect(['action' => 'index']);
    //         }
    //         $this->Flash->error(__('The contact could not be saved. Please, try again.'));
    //     }
       
    //     $this->set(compact('contact', 'courses'));
    // }
    public function edit($id)
    {
        $this->request->allowMethod(['patch', 'post', 'put']);
        $contact= $this->Contacts->get($id);
        $contact= $this->Contacts->patchEntity($contact, $this->request->getData());
        if ($this->Contacts->save($contact)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            'contact' => $contact,
            '_serialize' => ['message','contact']
        ]);
    }
    /**
     * Delete method
     *
     * @param string|null $id Contact id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    // public function delete($id = null)
    // {
    //     $this->request->allowMethod(['post', 'delete']);
    //     $contact = $this->Contacts->get($id);
    //     if ($this->Contacts->delete($contact)) {
    //         $this->Flash->success(__('The contact has been deleted.'));
    //     } else {
    //         $this->Flash->error(__('The contact could not be deleted. Please, try again.'));
    //     }

    //     return $this->redirect(['action' => 'index']);
    // }

    public function delete($id)
    {
        $this->request->allowMethod(['delete']);
        $contact = $this->Contacts->get($id);
        $message = 'Deleted';
        if (!$this->Contacts->delete($contact)) {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
           
            '_serialize' => ['message']
        ]);

    }
}


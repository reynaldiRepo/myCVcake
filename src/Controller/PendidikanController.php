<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pendidikan Controller
 *
 * @property \App\Model\Table\PendidikanTable $Pendidikan
 *
 * @method \App\Model\Entity\Pendidikan[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PendidikanController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $pendidikan = $this->paginate($this->Pendidikan);

        $this->set(compact('pendidikan'));
    }

    /**
     * View method
     *
     * @param string|null $id Pendidikan id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pendidikan = $this->Pendidikan->get($id, [
            'contain' => [],
        ]);

        $this->set('pendidikan', $pendidikan);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pendidikan = $this->Pendidikan->newEntity();
        if ($this->request->is('post')) {
            $pendidikan = $this->Pendidikan->patchEntity($pendidikan, $this->request->getData());
            debug($this->request->getData());
            if ($this->Pendidikan->save($pendidikan)) {
                $this->Flash->success(__('The pendidikan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pendidikan could not be saved. Please, try again.'));
        }
        $this->set(compact('pendidikan'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pendidikan id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pendidikan = $this->Pendidikan->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pendidikan = $this->Pendidikan->patchEntity($pendidikan, $this->request->getData());
            if ($this->Pendidikan->save($pendidikan)) {
                $this->Flash->success(__('The pendidikan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pendidikan could not be saved. Please, try again.'));
        }
        $this->set(compact('pendidikan'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pendidikan id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pendidikan = $this->Pendidikan->get($id);
        if ($this->Pendidikan->delete($pendidikan)) {
            $this->Flash->success(__('The pendidikan has been deleted.'));
        } else {
            $this->Flash->error(__('The pendidikan could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Kemampuan Controller
 *
 * @property \App\Model\Table\KemampuanTable $Kemampuan
 *
 * @method \App\Model\Entity\Kemampuan[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class KemampuanController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $kemampuan = $this->paginate($this->Kemampuan);

        $this->set(compact('kemampuan'));
    }

    /**
     * View method
     *
     * @param string|null $id Kemampuan id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $kemampuan = $this->Kemampuan->get($id, [
            'contain' => [],
        ]);

        $this->set('kemampuan', $kemampuan);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $kemampuan = $this->Kemampuan->newEntity();
        if ($this->request->is('post')) {
            $kemampuan = $this->Kemampuan->patchEntity($kemampuan, $this->request->getData());
            if ($this->Kemampuan->save($kemampuan)) {
                $this->Flash->success(__('The kemampuan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The kemampuan could not be saved. Please, try again.'));
        }
        $this->set(compact('kemampuan'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Kemampuan id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $kemampuan = $this->Kemampuan->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $kemampuan = $this->Kemampuan->patchEntity($kemampuan, $this->request->getData());
            if ($this->Kemampuan->save($kemampuan)) {
                $this->Flash->success(__('The kemampuan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The kemampuan could not be saved. Please, try again.'));
        }
        $this->set(compact('kemampuan'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Kemampuan id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $kemampuan = $this->Kemampuan->get($id);
        if ($this->Kemampuan->delete($kemampuan)) {
            $this->Flash->success(__('The kemampuan has been deleted.'));
        } else {
            $this->Flash->error(__('The kemampuan could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

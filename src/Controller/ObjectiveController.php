<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Objective Controller
 *
 * @property \App\Model\Table\ObjectiveTable $Objective
 *
 * @method \App\Model\Entity\Objective[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ObjectiveController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        // hardcode
        $id = '3';

        $objective = $this->Objective->findByIdUser($id)->firstOrFail();
        if ($this->request->is(['patch', 'post', 'put'])) {
            $objective = $this->Objective->patchEntity($objective, $this->request->getData());
            if ($this->Objective->save($objective)) {
                $this->Flash->success(__('The objective has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The objective could not be saved. Please, try again.'));
        }
        $this->set(compact('objective'));
    }

    /**
     * View method
     *
     * @param string|null $id Objective id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $objective = $this->Objective->get($id, [
            'contain' => [],
        ]);

        $this->set('objective', $objective);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $objective = $this->Objective->newEntity();
        if ($this->request->is('post')) {
            $objective = $this->Objective->patchEntity($objective, $this->request->getData());
            if ($this->Objective->save($objective)) {
                $this->Flash->success(__('The objective has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The objective could not be saved. Please, try again.'));
        }
        $this->set(compact('objective'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Objective id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $objective = $this->Objective->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $objective = $this->Objective->patchEntity($objective, $this->request->getData());
            if ($this->Objective->save($objective)) {
                $this->Flash->success(__('The objective has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The objective could not be saved. Please, try again.'));
        }
        $this->set(compact('objective'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Objective id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $objective = $this->Objective->get($id);
        if ($this->Objective->delete($objective)) {
            $this->Flash->success(__('The objective has been deleted.'));
        } else {
            $this->Flash->error(__('The objective could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

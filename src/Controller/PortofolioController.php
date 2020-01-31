<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Portofolio Controller
 *
 * @property \App\Model\Table\PortofolioTable $Portofolio
 *
 * @method \App\Model\Entity\Portofolio[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PortofolioController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $portofolio = $this->paginate($this->Portofolio);

        $this->set(compact('portofolio'));
    }

    /**
     * View method
     *
     * @param string|null $id Portofolio id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $portofolio = $this->Portofolio->get($id, [
            'contain' => [],
        ]);

        $this->set('portofolio', $portofolio);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $portofolio = $this->Portofolio->newEntity();
        if ($this->request->is('post')) {
            $portofolio = $this->Portofolio->patchEntity($portofolio, $this->request->getData());
            if ($this->Portofolio->save($portofolio)) {
                $this->Flash->success(__('The portofolio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The portofolio could not be saved. Please, try again.'));
        }
        $this->set(compact('portofolio'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Portofolio id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $portofolio = $this->Portofolio->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $portofolio = $this->Portofolio->patchEntity($portofolio, $this->request->getData());
            if ($this->Portofolio->save($portofolio)) {
                $this->Flash->success(__('The portofolio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The portofolio could not be saved. Please, try again.'));
        }
        $this->set(compact('portofolio'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Portofolio id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $portofolio = $this->Portofolio->get($id);
        if ($this->Portofolio->delete($portofolio)) {
            $this->Flash->success(__('The portofolio has been deleted.'));
        } else {
            $this->Flash->error(__('The portofolio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

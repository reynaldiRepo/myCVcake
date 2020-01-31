<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pengalaman Controller
 *
 * @property \App\Model\Table\PengalamanTable $Pengalaman
 *
 * @method \App\Model\Entity\Pengalaman[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PengalamanController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $pengalaman = $this->paginate($this->Pengalaman);

        $this->set(compact('pengalaman'));
    }

    /**
     * View method
     *
     * @param string|null $id Pengalaman id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pengalaman = $this->Pengalaman->get($id, [
            'contain' => [],
        ]);

        $this->set('pengalaman', $pengalaman);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pengalaman = $this->Pengalaman->newEntity();
        if ($this->request->is('post')) {
            $pengalaman = $this->Pengalaman->patchEntity($pengalaman, $this->request->getData());
            if ($this->Pengalaman->save($pengalaman)) {
                $this->Flash->success(__('The pengalaman has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pengalaman could not be saved. Please, try again.'));
        }
        $this->set(compact('pengalaman'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pengalaman id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pengalaman = $this->Pengalaman->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pengalaman = $this->Pengalaman->patchEntity($pengalaman, $this->request->getData());
            if ($this->Pengalaman->save($pengalaman)) {
                $this->Flash->success(__('The pengalaman has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pengalaman could not be saved. Please, try again.'));
        }
        $this->set(compact('pengalaman'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pengalaman id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pengalaman = $this->Pengalaman->get($id);
        if ($this->Pengalaman->delete($pengalaman)) {
            $this->Flash->success(__('The pengalaman has been deleted.'));
        } else {
            $this->Flash->error(__('The pengalaman could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

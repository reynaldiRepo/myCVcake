<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Mydetail Controller
 *
 * @property \App\Model\Table\MydetailTable $Mydetail
 *
 * @method \App\Model\Entity\Mydetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MydetailController extends AppController
{
  
    public function index()
    {
        // hardcode
        $id = null;

        $mydetail = $this->Mydetail->findByIdUser('3')->firstOrFail();
        // debug($mydetail);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mydetail = $this->Mydetail->patchEntity($mydetail, $this->request->getData());
            if ($this->Mydetail->save($mydetail)) {
                $this->Flash->success(__('The mydetail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mydetail could not be saved. Please, try again.'));
        }
        $this->set(compact('mydetail'));
    }

    public function view($id = null)
    {
        $mydetail = $this->Mydetail->get($id, [
            'contain' => [],
        ]);

        $this->set('mydetail', $mydetail);
    }

    public function add()
    {
        $mydetail = $this->Mydetail->newEntity();
        if ($this->request->is('post')) {
            $mydetail = $this->Mydetail->patchEntity($mydetail, $this->request->getData());
            if ($this->Mydetail->save($mydetail)) {
                $this->Flash->success(__('The mydetail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mydetail could not be saved. Please, try again.'));
        }
        $this->set(compact('mydetail'));
    }

    public function edit($id = null)
    {
         // hardcode
         $id = null;

         $mydetail = $this->Mydetail->findByIdUser('3')->firstOrFail();
         // debug($mydetail);
         if ($this->request->is(['patch', 'post', 'put'])) {
             $mydetail = $this->Mydetail->patchEntity($mydetail, $this->request->getData());
             if ($this->Mydetail->save($mydetail)) {
                 $this->Flash->success(__('The mydetail has been saved.'));
 
                 return $this->redirect(['action' => 'index']);
             }
             $this->Flash->error(__('The mydetail could not be saved. Please, try again.'));
         }
         $this->set(compact('mydetail'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mydetail = $this->Mydetail->get($id);
        if ($this->Mydetail->delete($mydetail)) {
            $this->Flash->success(__('The mydetail has been deleted.'));
        } else {
            $this->Flash->error(__('The mydetail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Payview Controller
 *
 * @property \App\Model\Table\PayviewTable $Payview
 *
 * @method \App\Model\Entity\Payview[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PayviewController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Employees']
        ];
        $payview = $this->paginate($this->Payview);

        $this->set(compact('payview'));
    }

    /**
     * View method
     *
     * @param string|null $id Payview id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $payview = $this->Payview->get($id, [
            'contain' => ['Employees']
        ]);

        $this->set('payview', $payview);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $payview = $this->Payview->newEntity();
        if ($this->request->is('post')) {
            $payview = $this->Payview->patchEntity($payview, $this->request->getData());
            if ($this->Payview->save($payview)) {
                $this->Flash->success(__('The payview has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The payview could not be saved. Please, try again.'));
        }
        $employees = $this->Payview->Employees->find('list', ['limit' => 200]);
        $this->set(compact('payview', 'employees'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Payview id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $payview = $this->Payview->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $payview = $this->Payview->patchEntity($payview, $this->request->getData());
            if ($this->Payview->save($payview)) {
                $this->Flash->success(__('The payview has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The payview could not be saved. Please, try again.'));
        }
        $employees = $this->Payview->Employees->find('list', ['limit' => 200]);
        $this->set(compact('payview', 'employees'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Payview id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $payview = $this->Payview->get($id);
        if ($this->Payview->delete($payview)) {
            $this->Flash->success(__('The payview has been deleted.'));
        } else {
            $this->Flash->error(__('The payview could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

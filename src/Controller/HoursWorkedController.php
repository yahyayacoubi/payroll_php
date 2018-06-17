<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HoursWorked Controller
 *
 * @property \App\Model\Table\HoursWorkedTable $HoursWorked
 *
 * @method \App\Model\Entity\HoursWorked[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HoursWorkedController extends AppController
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
        $hoursWorked = $this->paginate($this->HoursWorked);

        $this->set(compact('hoursWorked'));
    }

    /**
     * View method
     *
     * @param string|null $id Hours Worked id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hoursWorked = $this->HoursWorked->get($id, [
            'contain' => ['Employees']
        ]);

        $this->set('hoursWorked', $hoursWorked);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hoursWorked = $this->HoursWorked->newEntity();
        if ($this->request->is('post')) {
            $hoursWorked = $this->HoursWorked->patchEntity($hoursWorked, $this->request->getData());
            if ($this->HoursWorked->save($hoursWorked)) {
                $this->Flash->success(__('The hours worked has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hours worked could not be saved. Please, try again.'));
        }
        $employees = $this->HoursWorked->Employees->find('list', ['limit' => 200]);
        $this->set(compact('hoursWorked', 'employees'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Hours Worked id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hoursWorked = $this->HoursWorked->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hoursWorked = $this->HoursWorked->patchEntity($hoursWorked, $this->request->getData());
            if ($this->HoursWorked->save($hoursWorked)) {
                $this->Flash->success(__('The hours worked has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hours worked could not be saved. Please, try again.'));
        }
        $employees = $this->HoursWorked->Employees->find('list', ['limit' => 200]);
        $this->set(compact('hoursWorked', 'employees'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Hours Worked id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hoursWorked = $this->HoursWorked->get($id);
        if ($this->HoursWorked->delete($hoursWorked)) {
            $this->Flash->success(__('The hours worked has been deleted.'));
        } else {
            $this->Flash->error(__('The hours worked could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

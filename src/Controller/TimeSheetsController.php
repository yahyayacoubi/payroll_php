<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TimeSheets Controller
 *
 * @property \App\Model\Table\TimeSheetsTable $TimeSheets
 *
 * @method \App\Model\Entity\TimeSheet[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TimeSheetsController extends AppController
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
        $timeSheets = $this->paginate($this->TimeSheets);

        $this->set(compact('timeSheets'));
    }

    /**
     * View method
     *
     * @param string|null $id Time Sheet id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $timeSheet = $this->TimeSheets->get($id, [
            'contain' => ['Employees']
        ]);

        $this->set('timeSheet', $timeSheet);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $timeSheet = $this->TimeSheets->newEntity();
        if ($this->request->is('post')) {
            $timeSheet = $this->TimeSheets->patchEntity($timeSheet, $this->request->getData());
            if ($this->TimeSheets->save($timeSheet)) {
                $this->Flash->success(__('The time sheet has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The time sheet could not be saved. Please, try again.'));
        }
        $employees = $this->TimeSheets->Employees->find('list', ['limit' => 200]);
        $this->set(compact('timeSheet', 'employees'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Time Sheet id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $timeSheet = $this->TimeSheets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $timeSheet = $this->TimeSheets->patchEntity($timeSheet, $this->request->getData());
            if ($this->TimeSheets->save($timeSheet)) {
                $this->Flash->success(__('The time sheet has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The time sheet could not be saved. Please, try again.'));
        }
        $employees = $this->TimeSheets->Employees->find('list', ['limit' => 200]);
        $this->set(compact('timeSheet', 'employees'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Time Sheet id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $timeSheet = $this->TimeSheets->get($id);
        if ($this->TimeSheets->delete($timeSheet)) {
            $this->Flash->success(__('The time sheet has been deleted.'));
        } else {
            $this->Flash->error(__('The time sheet could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

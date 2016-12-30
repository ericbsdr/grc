<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AuditDates Controller
 *
 * @property \App\Model\Table\AuditDatesTable $AuditDates
 */
class AuditDatesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $auditDates = $this->paginate($this->AuditDates);

        $this->set(compact('auditDates'));
        $this->set('_serialize', ['auditDates']);
    }

    /**
     * View method
     *
     * @param string|null $id Audit Date id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $auditDate = $this->AuditDates->get($id, [
            'contain' => []
        ]);

        $this->set('auditDate', $auditDate);
        $this->set('_serialize', ['auditDate']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $auditDate = $this->AuditDates->newEntity();
        if ($this->request->is('post')) {
            $auditDate = $this->AuditDates->patchEntity($auditDate, $this->request->data);
            if ($this->AuditDates->save($auditDate)) {
                $this->Flash->success(__('The audit date has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The audit date could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('auditDate'));
        $this->set('_serialize', ['auditDate']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Audit Date id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $auditDate = $this->AuditDates->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $auditDate = $this->AuditDates->patchEntity($auditDate, $this->request->data);
            if ($this->AuditDates->save($auditDate)) {
                $this->Flash->success(__('The audit date has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The audit date could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('auditDate'));
        $this->set('_serialize', ['auditDate']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Audit Date id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $auditDate = $this->AuditDates->get($id);
        if ($this->AuditDates->delete($auditDate)) {
            $this->Flash->success(__('The audit date has been deleted.'));
        } else {
            $this->Flash->error(__('The audit date could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

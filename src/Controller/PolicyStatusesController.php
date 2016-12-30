<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PolicyStatuses Controller
 *
 * @property \App\Model\Table\PolicyStatusesTable $PolicyStatuses
 */
class PolicyStatusesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $policyStatuses = $this->paginate($this->PolicyStatuses);

        $this->set(compact('policyStatuses'));
        $this->set('_serialize', ['policyStatuses']);
    }

    /**
     * View method
     *
     * @param string|null $id Policy Status id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $policyStatus = $this->PolicyStatuses->get($id, [
            'contain' => ['Policies']
        ]);

        $this->set('policyStatus', $policyStatus);
        $this->set('_serialize', ['policyStatus']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $policyStatus = $this->PolicyStatuses->newEntity();
        if ($this->request->is('post')) {
            $policyStatus = $this->PolicyStatuses->patchEntity($policyStatus, $this->request->data);
            if ($this->PolicyStatuses->save($policyStatus)) {
                $this->Flash->success(__('The policy status has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The policy status could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('policyStatus'));
        $this->set('_serialize', ['policyStatus']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Policy Status id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $policyStatus = $this->PolicyStatuses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $policyStatus = $this->PolicyStatuses->patchEntity($policyStatus, $this->request->data);
            if ($this->PolicyStatuses->save($policyStatus)) {
                $this->Flash->success(__('The policy status has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The policy status could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('policyStatus'));
        $this->set('_serialize', ['policyStatus']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Policy Status id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $policyStatus = $this->PolicyStatuses->get($id);
        if ($this->PolicyStatuses->delete($policyStatus)) {
            $this->Flash->success(__('The policy status has been deleted.'));
        } else {
            $this->Flash->error(__('The policy status could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

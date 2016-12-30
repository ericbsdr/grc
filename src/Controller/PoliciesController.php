<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Policies Controller
 *
 * @property \App\Model\Table\PoliciesTable $Policies
 */
class PoliciesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['PolicyStatuses', 'Projects']
        ];
        $policies = $this->paginate($this->Policies);

        $this->set(compact('policies'));
        $this->set('_serialize', ['policies']);
    }

    /**
     * View method
     *
     * @param string|null $id Policy id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $policy = $this->Policies->get($id, [
            'contain' => ['PolicyStatuses', 'Projects', 'Controls']
        ]);

        $this->set('policy', $policy);
        $this->set('_serialize', ['policy']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $policy = $this->Policies->newEntity();
        if ($this->request->is('post')) {
            $policy = $this->Policies->patchEntity($policy, $this->request->data);
            if ($this->Policies->save($policy)) {
                $this->Flash->success(__('The policy has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The policy could not be saved. Please, try again.'));
            }
        }
        $policyStatuses = $this->Policies->PolicyStatuses->find('list', ['limit' => 200]);
        $projects = $this->Policies->Projects->find('list', ['limit' => 200]);
        $this->set(compact('policy', 'policyStatuses', 'projects'));
        $this->set('_serialize', ['policy']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Policy id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $policy = $this->Policies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $policy = $this->Policies->patchEntity($policy, $this->request->data);
            if ($this->Policies->save($policy)) {
                $this->Flash->success(__('The policy has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The policy could not be saved. Please, try again.'));
            }
        }
        $policyStatuses = $this->Policies->PolicyStatuses->find('list', ['limit' => 200]);
        $projects = $this->Policies->Projects->find('list', ['limit' => 200]);
        $this->set(compact('policy', 'policyStatuses', 'projects'));
        $this->set('_serialize', ['policy']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Policy id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $policy = $this->Policies->get($id);
        if ($this->Policies->delete($policy)) {
            $this->Flash->success(__('The policy has been deleted.'));
        } else {
            $this->Flash->error(__('The policy could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

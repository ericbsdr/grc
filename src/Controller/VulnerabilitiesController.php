<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Vulnerabilities Controller
 *
 * @property \App\Model\Table\VulnerabilitiesTable $Vulnerabilities
 */
class VulnerabilitiesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $vulnerabilities = $this->paginate($this->Vulnerabilities);

        $this->set(compact('vulnerabilities'));
        $this->set('_serialize', ['vulnerabilities']);
    }

    /**
     * View method
     *
     * @param string|null $id Vulnerability id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vulnerability = $this->Vulnerabilities->get($id, [
            'contain' => []
        ]);

        $this->set('vulnerability', $vulnerability);
        $this->set('_serialize', ['vulnerability']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vulnerability = $this->Vulnerabilities->newEntity();
        if ($this->request->is('post')) {
            $vulnerability = $this->Vulnerabilities->patchEntity($vulnerability, $this->request->data);
            if ($this->Vulnerabilities->save($vulnerability)) {
                $this->Flash->success(__('The vulnerability has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The vulnerability could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('vulnerability'));
        $this->set('_serialize', ['vulnerability']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Vulnerability id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vulnerability = $this->Vulnerabilities->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vulnerability = $this->Vulnerabilities->patchEntity($vulnerability, $this->request->data);
            if ($this->Vulnerabilities->save($vulnerability)) {
                $this->Flash->success(__('The vulnerability has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The vulnerability could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('vulnerability'));
        $this->set('_serialize', ['vulnerability']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Vulnerability id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vulnerability = $this->Vulnerabilities->get($id);
        if ($this->Vulnerabilities->delete($vulnerability)) {
            $this->Flash->success(__('The vulnerability has been deleted.'));
        } else {
            $this->Flash->error(__('The vulnerability could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

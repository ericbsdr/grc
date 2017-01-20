<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Threats Controller
 *
 * @property \App\Model\Table\ThreatsTable $Threats
 */
class ThreatsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $threats = $this->paginate($this->Threats);

        $this->set(compact('threats'));
        $this->set('_serialize', ['threats']);
    }

    /**
     * View method
     *
     * @param string|null $id Threat id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $threat = $this->Threats->get($id, [
            'contain' => []
        ]);

        $this->set('threat', $threat);
        $this->set('_serialize', ['threat']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $threat = $this->Threats->newEntity();
        if ($this->request->is('post')) {
            $threat = $this->Threats->patchEntity($threat, $this->request->data);
            if ($this->Threats->save($threat)) {
                $this->Flash->success(__('The threat has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The threat could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('threat'));
        $this->set('_serialize', ['threat']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Threat id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $threat = $this->Threats->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $threat = $this->Threats->patchEntity($threat, $this->request->data);
            if ($this->Threats->save($threat)) {
                $this->Flash->success(__('The threat has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The threat could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('threat'));
        $this->set('_serialize', ['threat']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Threat id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $threat = $this->Threats->get($id);
        if ($this->Threats->delete($threat)) {
            $this->Flash->success(__('The threat has been deleted.'));
        } else {
            $this->Flash->error(__('The threat could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

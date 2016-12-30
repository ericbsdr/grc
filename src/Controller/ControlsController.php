<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Controls Controller
 *
 * @property \App\Model\Table\ControlsTable $Controls
 */
class ControlsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['AuditDates']
        ];
        $controls = $this->paginate($this->Controls);

        $this->set(compact('controls'));
        $this->set('_serialize', ['controls']);
    }

    /**
     * View method
     *
     * @param string|null $id Control id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $control = $this->Controls->get($id, [
            'contain' => ['AuditDates']
        ]);

        $this->set('control', $control);
        $this->set('_serialize', ['control']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $control = $this->Controls->newEntity();
        if ($this->request->is('post')) {
            $control = $this->Controls->patchEntity($control, $this->request->data);
            if ($this->Controls->save($control)) {
                $this->Flash->success(__('The control has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The control could not be saved. Please, try again.'));
            }
        }
        $auditDates = $this->Controls->AuditDates->find('list', ['limit' => 200]);
        $this->set(compact('control', 'auditDates'));
        $this->set('_serialize', ['control']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Control id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $control = $this->Controls->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $control = $this->Controls->patchEntity($control, $this->request->data);
            if ($this->Controls->save($control)) {
                $this->Flash->success(__('The control has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The control could not be saved. Please, try again.'));
            }
        }
        $auditDates = $this->Controls->AuditDates->find('list', ['limit' => 200]);
        $this->set(compact('control', 'auditDates'));
        $this->set('_serialize', ['control']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Control id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $control = $this->Controls->get($id);
        if ($this->Controls->delete($control)) {
            $this->Flash->success(__('The control has been deleted.'));
        } else {
            $this->Flash->error(__('The control could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

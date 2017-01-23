<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Regulatory Controller
 *
 * @property \App\Model\Table\RegulatoryTable $Regulatory
 */
class RegulatoryController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $regulatory = $this->paginate($this->Regulatory);

        $this->set(compact('regulatory'));
        $this->set('_serialize', ['regulatory']);
    }

    /**
     * View method
     *
     * @param string|null $id Regulatory id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $regulatory = $this->Regulatory->get($id, [
            'contain' => []
        ]);

        $this->set('regulatory', $regulatory);
        $this->set('_serialize', ['regulatory']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $regulatory = $this->Regulatory->newEntity();
        if ($this->request->is('post')) {
            $regulatory = $this->Regulatory->patchEntity($regulatory, $this->request->data);
            if ($this->Regulatory->save($regulatory)) {
                $this->Flash->success(__('The regulatory has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The regulatory could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('regulatory'));
        $this->set('_serialize', ['regulatory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Regulatory id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $regulatory = $this->Regulatory->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $regulatory = $this->Regulatory->patchEntity($regulatory, $this->request->data);
            if ($this->Regulatory->save($regulatory)) {
                $this->Flash->success(__('The regulatory has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The regulatory could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('regulatory'));
        $this->set('_serialize', ['regulatory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Regulatory id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $regulatory = $this->Regulatory->get($id);
        if ($this->Regulatory->delete($regulatory)) {
            $this->Flash->success(__('The regulatory has been deleted.'));
        } else {
            $this->Flash->error(__('The regulatory could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

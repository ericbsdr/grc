<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Assets Controller
 *
 * @property \App\Model\Table\AssetsTable $Assets
 */
class AssetsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $assets = $this->paginate($this->Assets);

        $this->set(compact('assets'));
        $this->set('_serialize', ['assets']);
    }

    /**
     * View method
     *
     * @param string|null $id Asset id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $asset = $this->Assets->get($id, [
            'contain' => ['Businessunits']
        ]);

        $this->set('asset', $asset);
        $this->set('_serialize', ['asset']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $asset = $this->Assets->newEntity();
        if ($this->request->is('post')) {
            $asset = $this->Assets->patchEntity($asset, $this->request->data);
            if ($this->Assets->save($asset)) {
                $this->Flash->success(__('The asset has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The asset could not be saved. Please, try again.'));
            }
        }
        $businessunits = $this->Assets->Businessunits->find('list', ['limit' => 200]);
        $this->set(compact('asset', 'businessunits'));
        $this->set('_serialize', ['asset']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Asset id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $asset = $this->Assets->get($id, [
            'contain' => ['Businessunits']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $asset = $this->Assets->patchEntity($asset, $this->request->data);
            if ($this->Assets->save($asset)) {
                $this->Flash->success(__('The asset has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The asset could not be saved. Please, try again.'));
            }
        }
        $businessunits = $this->Assets->Businessunits->find('list', ['limit' => 200]);
        $this->set(compact('asset', 'businessunits'));
        $this->set('_serialize', ['asset']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Asset id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $asset = $this->Assets->get($id);
        if ($this->Assets->delete($asset)) {
            $this->Flash->success(__('The asset has been deleted.'));
        } else {
            $this->Flash->error(__('The asset could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

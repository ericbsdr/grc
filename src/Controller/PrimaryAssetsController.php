<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PrimaryAssets Controller
 *
 * @property \App\Model\Table\PrimaryAssetsTable $PrimaryAssets
 */
class PrimaryAssetsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $primaryAssets = $this->paginate($this->PrimaryAssets);

        $this->set(compact('primaryAssets'));
        $this->set('_serialize', ['primaryAssets']);
    }

    /**
     * View method
     *
     * @param string|null $id Primary Asset id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $primaryAsset = $this->PrimaryAssets->get($id, [
            'contain' => ['Businessunits', 'SecondaryAssets']
        ]);

        $this->set('primaryAsset', $primaryAsset);
        $this->set('_serialize', ['primaryAsset']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $primaryAsset = $this->PrimaryAssets->newEntity();
        if ($this->request->is('post')) {
            $primaryAsset = $this->PrimaryAssets->patchEntity($primaryAsset, $this->request->data);
            if ($this->PrimaryAssets->save($primaryAsset)) {
                $this->Flash->success(__('The primary asset has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The primary asset could not be saved. Please, try again.'));
            }
        }
        $businessunits = $this->PrimaryAssets->Businessunits->find('list', ['limit' => 200]);
        $this->set(compact('primaryAsset', 'businessunits'));
        $this->set('_serialize', ['primaryAsset']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Primary Asset id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $primaryAsset = $this->PrimaryAssets->get($id, [
            'contain' => ['Businessunits']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $primaryAsset = $this->PrimaryAssets->patchEntity($primaryAsset, $this->request->data);
            if ($this->PrimaryAssets->save($primaryAsset)) {
                $this->Flash->success(__('The primary asset has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The primary asset could not be saved. Please, try again.'));
            }
        }
        $businessunits = $this->PrimaryAssets->Businessunits->find('list', ['limit' => 200]);
        $this->set(compact('primaryAsset', 'businessunits'));
        $this->set('_serialize', ['primaryAsset']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Primary Asset id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $primaryAsset = $this->PrimaryAssets->get($id);
        if ($this->PrimaryAssets->delete($primaryAsset)) {
            $this->Flash->success(__('The primary asset has been deleted.'));
        } else {
            $this->Flash->error(__('The primary asset could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

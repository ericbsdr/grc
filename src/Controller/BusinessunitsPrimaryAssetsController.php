<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BusinessunitsPrimaryAssets Controller
 *
 * @property \App\Model\Table\BusinessunitsPrimaryAssetsTable $BusinessunitsPrimaryAssets
 */
class BusinessunitsPrimaryAssetsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['PrimaryAssets', 'Businessunits']
        ];
        $businessunitsPrimaryAssets = $this->paginate($this->BusinessunitsPrimaryAssets);

        $this->set(compact('businessunitsPrimaryAssets'));
        $this->set('_serialize', ['businessunitsPrimaryAssets']);
    }

    /**
     * View method
     *
     * @param string|null $id Businessunits Primary Asset id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $businessunitsPrimaryAsset = $this->BusinessunitsPrimaryAssets->get($id, [
            'contain' => ['PrimaryAssets', 'Businessunits']
        ]);

        $this->set('businessunitsPrimaryAsset', $businessunitsPrimaryAsset);
        $this->set('_serialize', ['businessunitsPrimaryAsset']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $businessunitsPrimaryAsset = $this->BusinessunitsPrimaryAssets->newEntity();
        if ($this->request->is('post')) {
            $businessunitsPrimaryAsset = $this->BusinessunitsPrimaryAssets->patchEntity($businessunitsPrimaryAsset, $this->request->data);
            if ($this->BusinessunitsPrimaryAssets->save($businessunitsPrimaryAsset)) {
                $this->Flash->success(__('The businessunits primary asset has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The businessunits primary asset could not be saved. Please, try again.'));
            }
        }
        $primaryAssets = $this->BusinessunitsPrimaryAssets->PrimaryAssets->find('list', ['limit' => 200]);
        $businessunits = $this->BusinessunitsPrimaryAssets->Businessunits->find('list', ['limit' => 200]);
        $this->set(compact('businessunitsPrimaryAsset', 'primaryAssets', 'businessunits'));
        $this->set('_serialize', ['businessunitsPrimaryAsset']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Businessunits Primary Asset id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $businessunitsPrimaryAsset = $this->BusinessunitsPrimaryAssets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $businessunitsPrimaryAsset = $this->BusinessunitsPrimaryAssets->patchEntity($businessunitsPrimaryAsset, $this->request->data);
            if ($this->BusinessunitsPrimaryAssets->save($businessunitsPrimaryAsset)) {
                $this->Flash->success(__('The businessunits primary asset has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The businessunits primary asset could not be saved. Please, try again.'));
            }
        }
        $primaryAssets = $this->BusinessunitsPrimaryAssets->PrimaryAssets->find('list', ['limit' => 200]);
        $businessunits = $this->BusinessunitsPrimaryAssets->Businessunits->find('list', ['limit' => 200]);
        $this->set(compact('businessunitsPrimaryAsset', 'primaryAssets', 'businessunits'));
        $this->set('_serialize', ['businessunitsPrimaryAsset']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Businessunits Primary Asset id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $businessunitsPrimaryAsset = $this->BusinessunitsPrimaryAssets->get($id);
        if ($this->BusinessunitsPrimaryAssets->delete($businessunitsPrimaryAsset)) {
            $this->Flash->success(__('The businessunits primary asset has been deleted.'));
        } else {
            $this->Flash->error(__('The businessunits primary asset could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

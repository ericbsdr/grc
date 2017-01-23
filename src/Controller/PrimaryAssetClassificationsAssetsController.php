<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PrimaryAssetClassificationsAssets Controller
 *
 * @property \App\Model\Table\PrimaryAssetClassificationsAssetsTable $PrimaryAssetClassificationsAssets
 */
class PrimaryAssetClassificationsAssetsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['AssetClassifications', 'PrimaryAssets']
        ];
        $primaryAssetClassificationsAssets = $this->paginate($this->PrimaryAssetClassificationsAssets);

        $this->set(compact('primaryAssetClassificationsAssets'));
        $this->set('_serialize', ['primaryAssetClassificationsAssets']);
    }

    /**
     * View method
     *
     * @param string|null $id Primary Asset Classifications Asset id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $primaryAssetClassificationsAsset = $this->PrimaryAssetClassificationsAssets->get($id, [
            'contain' => ['AssetClassifications', 'PrimaryAssets']
        ]);

        $this->set('primaryAssetClassificationsAsset', $primaryAssetClassificationsAsset);
        $this->set('_serialize', ['primaryAssetClassificationsAsset']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $primaryAssetClassificationsAsset = $this->PrimaryAssetClassificationsAssets->newEntity();
        if ($this->request->is('post')) {
            $primaryAssetClassificationsAsset = $this->PrimaryAssetClassificationsAssets->patchEntity($primaryAssetClassificationsAsset, $this->request->data);
            if ($this->PrimaryAssetClassificationsAssets->save($primaryAssetClassificationsAsset)) {
                $this->Flash->success(__('The primary asset classifications asset has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The primary asset classifications asset could not be saved. Please, try again.'));
            }
        }
        $assetClassifications = $this->PrimaryAssetClassificationsAssets->AssetClassifications->find('list', ['limit' => 200]);
        $primaryAssets = $this->PrimaryAssetClassificationsAssets->PrimaryAssets->find('list', ['limit' => 200]);
        $this->set(compact('primaryAssetClassificationsAsset', 'assetClassifications', 'primaryAssets'));
        $this->set('_serialize', ['primaryAssetClassificationsAsset']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Primary Asset Classifications Asset id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $primaryAssetClassificationsAsset = $this->PrimaryAssetClassificationsAssets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $primaryAssetClassificationsAsset = $this->PrimaryAssetClassificationsAssets->patchEntity($primaryAssetClassificationsAsset, $this->request->data);
            if ($this->PrimaryAssetClassificationsAssets->save($primaryAssetClassificationsAsset)) {
                $this->Flash->success(__('The primary asset classifications asset has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The primary asset classifications asset could not be saved. Please, try again.'));
            }
        }
        $assetClassifications = $this->PrimaryAssetClassificationsAssets->AssetClassifications->find('list', ['limit' => 200]);
        $primaryAssets = $this->PrimaryAssetClassificationsAssets->PrimaryAssets->find('list', ['limit' => 200]);
        $this->set(compact('primaryAssetClassificationsAsset', 'assetClassifications', 'primaryAssets'));
        $this->set('_serialize', ['primaryAssetClassificationsAsset']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Primary Asset Classifications Asset id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $primaryAssetClassificationsAsset = $this->PrimaryAssetClassificationsAssets->get($id);
        if ($this->PrimaryAssetClassificationsAssets->delete($primaryAssetClassificationsAsset)) {
            $this->Flash->success(__('The primary asset classifications asset has been deleted.'));
        } else {
            $this->Flash->error(__('The primary asset classifications asset could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

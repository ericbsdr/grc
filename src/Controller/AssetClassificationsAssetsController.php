<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AssetClassificationsAssets Controller
 *
 * @property \App\Model\Table\AssetClassificationsAssetsTable $AssetClassificationsAssets
 */
class AssetClassificationsAssetsController extends AppController
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
        $assetClassificationsAssets = $this->paginate($this->AssetClassificationsAssets);

        $this->set(compact('assetClassificationsAssets'));
        $this->set('_serialize', ['assetClassificationsAssets']);
    }

    /**
     * View method
     *
     * @param string|null $id Asset Classifications Asset id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $assetClassificationsAsset = $this->AssetClassificationsAssets->get($id, [
            'contain' => ['AssetClassifications', 'PrimaryAssets']
        ]);

        $this->set('assetClassificationsAsset', $assetClassificationsAsset);
        $this->set('_serialize', ['assetClassificationsAsset']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $assetClassificationsAsset = $this->AssetClassificationsAssets->newEntity();
        if ($this->request->is('post')) {
            $assetClassificationsAsset = $this->AssetClassificationsAssets->patchEntity($assetClassificationsAsset, $this->request->data);
            if ($this->AssetClassificationsAssets->save($assetClassificationsAsset)) {
                $this->Flash->success(__('The asset classifications asset has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The asset classifications asset could not be saved. Please, try again.'));
            }
        }
        $assetClassifications = $this->AssetClassificationsAssets->AssetClassifications->find('list', ['limit' => 200]);
        $primaryAssets = $this->AssetClassificationsAssets->PrimaryAssets->find('list', ['limit' => 200]);
        $this->set(compact('assetClassificationsAsset', 'assetClassifications', 'primaryAssets'));
        $this->set('_serialize', ['assetClassificationsAsset']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Asset Classifications Asset id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $assetClassificationsAsset = $this->AssetClassificationsAssets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $assetClassificationsAsset = $this->AssetClassificationsAssets->patchEntity($assetClassificationsAsset, $this->request->data);
            if ($this->AssetClassificationsAssets->save($assetClassificationsAsset)) {
                $this->Flash->success(__('The asset classifications asset has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The asset classifications asset could not be saved. Please, try again.'));
            }
        }
        $assetClassifications = $this->AssetClassificationsAssets->AssetClassifications->find('list', ['limit' => 200]);
        $primaryAssets = $this->AssetClassificationsAssets->PrimaryAssets->find('list', ['limit' => 200]);
        $this->set(compact('assetClassificationsAsset', 'assetClassifications', 'primaryAssets'));
        $this->set('_serialize', ['assetClassificationsAsset']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Asset Classifications Asset id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $assetClassificationsAsset = $this->AssetClassificationsAssets->get($id);
        if ($this->AssetClassificationsAssets->delete($assetClassificationsAsset)) {
            $this->Flash->success(__('The asset classifications asset has been deleted.'));
        } else {
            $this->Flash->error(__('The asset classifications asset could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

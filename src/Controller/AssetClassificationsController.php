<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AssetClassifications Controller
 *
 * @property \App\Model\Table\AssetClassificationsTable $AssetClassifications
 */
class AssetClassificationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['AssetClassificationTypes']
        ];
        $assetClassifications = $this->paginate($this->AssetClassifications);

        $this->set(compact('assetClassifications'));
        $this->set('_serialize', ['assetClassifications']);
    }

    /**
     * View method
     *
     * @param string|null $id Asset Classification id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $assetClassification = $this->AssetClassifications->get($id, [
            'contain' => ['AssetClassificationTypes', 'AssetClassificationsAssets']
        ]);

        $this->set('assetClassification', $assetClassification);
        $this->set('_serialize', ['assetClassification']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $assetClassification = $this->AssetClassifications->newEntity();
        if ($this->request->is('post')) {
            $assetClassification = $this->AssetClassifications->patchEntity($assetClassification, $this->request->data);
            if ($this->AssetClassifications->save($assetClassification)) {
                $this->Flash->success(__('The asset classification has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The asset classification could not be saved. Please, try again.'));
            }
        }
        $assetClassificationTypes = $this->AssetClassifications->AssetClassificationTypes->find('list', ['limit' => 200]);
        $this->set(compact('assetClassification', 'assetClassificationTypes'));
        $this->set('_serialize', ['assetClassification']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Asset Classification id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $assetClassification = $this->AssetClassifications->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $assetClassification = $this->AssetClassifications->patchEntity($assetClassification, $this->request->data);
            if ($this->AssetClassifications->save($assetClassification)) {
                $this->Flash->success(__('The asset classification has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The asset classification could not be saved. Please, try again.'));
            }
        }
        $assetClassificationTypes = $this->AssetClassifications->AssetClassificationTypes->find('list', ['limit' => 200]);
        $this->set(compact('assetClassification', 'assetClassificationTypes'));
        $this->set('_serialize', ['assetClassification']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Asset Classification id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $assetClassification = $this->AssetClassifications->get($id);
        if ($this->AssetClassifications->delete($assetClassification)) {
            $this->Flash->success(__('The asset classification has been deleted.'));
        } else {
            $this->Flash->error(__('The asset classification could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

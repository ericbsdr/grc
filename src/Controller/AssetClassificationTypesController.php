<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AssetClassificationTypes Controller
 *
 * @property \App\Model\Table\AssetClassificationTypesTable $AssetClassificationTypes
 */
class AssetClassificationTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $assetClassificationTypes = $this->paginate($this->AssetClassificationTypes);

        $this->set(compact('assetClassificationTypes'));
        $this->set('_serialize', ['assetClassificationTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Asset Classification Type id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $assetClassificationType = $this->AssetClassificationTypes->get($id, [
            'contain' => ['AssetClassifications']
        ]);

        $this->set('assetClassificationType', $assetClassificationType);
        $this->set('_serialize', ['assetClassificationType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $assetClassificationType = $this->AssetClassificationTypes->newEntity();
        if ($this->request->is('post')) {
            $assetClassificationType = $this->AssetClassificationTypes->patchEntity($assetClassificationType, $this->request->data);
            if ($this->AssetClassificationTypes->save($assetClassificationType)) {
                $this->Flash->success(__('The asset classification type has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The asset classification type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('assetClassificationType'));
        $this->set('_serialize', ['assetClassificationType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Asset Classification Type id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $assetClassificationType = $this->AssetClassificationTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $assetClassificationType = $this->AssetClassificationTypes->patchEntity($assetClassificationType, $this->request->data);
            if ($this->AssetClassificationTypes->save($assetClassificationType)) {
                $this->Flash->success(__('The asset classification type has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The asset classification type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('assetClassificationType'));
        $this->set('_serialize', ['assetClassificationType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Asset Classification Type id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $assetClassificationType = $this->AssetClassificationTypes->get($id);
        if ($this->AssetClassificationTypes->delete($assetClassificationType)) {
            $this->Flash->success(__('The asset classification type has been deleted.'));
        } else {
            $this->Flash->error(__('The asset classification type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

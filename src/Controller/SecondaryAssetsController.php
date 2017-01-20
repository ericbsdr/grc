<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SecondaryAssets Controller
 *
 * @property \App\Model\Table\SecondaryAssetsTable $SecondaryAssets
 */
class SecondaryAssetsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['PrimaryAssets']
        ];
        $secondaryAssets = $this->paginate($this->SecondaryAssets);

        $this->set(compact('secondaryAssets'));
        $this->set('_serialize', ['secondaryAssets']);
    }

    /**
     * View method
     *
     * @param string|null $id Secondary Asset id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $secondaryAsset = $this->SecondaryAssets->get($id, [
            'contain' => ['PrimaryAssets']
        ]);

        $this->set('secondaryAsset', $secondaryAsset);
        $this->set('_serialize', ['secondaryAsset']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $secondaryAsset = $this->SecondaryAssets->newEntity();
        if ($this->request->is('post')) {
            $secondaryAsset = $this->SecondaryAssets->patchEntity($secondaryAsset, $this->request->data);
            if ($this->SecondaryAssets->save($secondaryAsset)) {
                $this->Flash->success(__('The secondary asset has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The secondary asset could not be saved. Please, try again.'));
            }
        }
        $primaryAssets = $this->SecondaryAssets->PrimaryAssets->find('list', ['limit' => 200]);
        $this->set(compact('secondaryAsset', 'primaryAssets'));
        $this->set('_serialize', ['secondaryAsset']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Secondary Asset id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $secondaryAsset = $this->SecondaryAssets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $secondaryAsset = $this->SecondaryAssets->patchEntity($secondaryAsset, $this->request->data);
            if ($this->SecondaryAssets->save($secondaryAsset)) {
                $this->Flash->success(__('The secondary asset has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The secondary asset could not be saved. Please, try again.'));
            }
        }
        $primaryAssets = $this->SecondaryAssets->PrimaryAssets->find('list', ['limit' => 200]);
        $this->set(compact('secondaryAsset', 'primaryAssets'));
        $this->set('_serialize', ['secondaryAsset']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Secondary Asset id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $secondaryAsset = $this->SecondaryAssets->get($id);
        if ($this->SecondaryAssets->delete($secondaryAsset)) {
            $this->Flash->success(__('The secondary asset has been deleted.'));
        } else {
            $this->Flash->error(__('The secondary asset could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

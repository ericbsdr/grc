<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Businessunits Controller
 *
 * @property \App\Model\Table\BusinessunitsTable $Businessunits
 */
class BusinessunitsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $businessunits = $this->paginate($this->Businessunits);

        $this->set(compact('businessunits'));
        $this->set('_serialize', ['businessunits']);
    }

    /**
     * View method
     *
     * @param string|null $id Businessunit id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $businessunit = $this->Businessunits->get($id, [
            'contain' => ['PrimaryAssets']
        ]);

        $this->set('businessunit', $businessunit);
        $this->set('_serialize', ['businessunit']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $businessunit = $this->Businessunits->newEntity();
        if ($this->request->is('post')) {
            $businessunit = $this->Businessunits->patchEntity($businessunit, $this->request->data);
            if ($this->Businessunits->save($businessunit)) {
                $this->Flash->success(__('The businessunit has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The businessunit could not be saved. Please, try again.'));
            }
        }
        $primaryAssets = $this->Businessunits->PrimaryAssets->find('list', ['limit' => 200]);
        $this->set(compact('businessunit', 'primaryAssets'));
        $this->set('_serialize', ['businessunit']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Businessunit id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $businessunit = $this->Businessunits->get($id, [
            'contain' => ['PrimaryAssets']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $businessunit = $this->Businessunits->patchEntity($businessunit, $this->request->data);
            if ($this->Businessunits->save($businessunit)) {
                $this->Flash->success(__('The businessunit has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The businessunit could not be saved. Please, try again.'));
            }
        }
        $primaryAssets = $this->Businessunits->PrimaryAssets->find('list', ['limit' => 200]);
        $this->set(compact('businessunit', 'primaryAssets'));
        $this->set('_serialize', ['businessunit']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Businessunit id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $businessunit = $this->Businessunits->get($id);
        if ($this->Businessunits->delete($businessunit)) {
            $this->Flash->success(__('The businessunit has been deleted.'));
        } else {
            $this->Flash->error(__('The businessunit could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

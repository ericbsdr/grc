<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Assetstypes Controller
 *
 * @property \App\Model\Table\AssetstypesTable $Assetstypes
 */
class AssetstypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $assetstypes = $this->paginate($this->Assetstypes);

        $this->set(compact('assetstypes'));
        $this->set('_serialize', ['assetstypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Assetstype id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $assetstype = $this->Assetstypes->get($id, [
            'contain' => []
        ]);

        $this->set('assetstype', $assetstype);
        $this->set('_serialize', ['assetstype']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $assetstype = $this->Assetstypes->newEntity();
        if ($this->request->is('post')) {
            $assetstype = $this->Assetstypes->patchEntity($assetstype, $this->request->data);
            if ($this->Assetstypes->save($assetstype)) {
                $this->Flash->success(__('The assetstype has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The assetstype could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('assetstype'));
        $this->set('_serialize', ['assetstype']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Assetstype id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $assetstype = $this->Assetstypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $assetstype = $this->Assetstypes->patchEntity($assetstype, $this->request->data);
            if ($this->Assetstypes->save($assetstype)) {
                $this->Flash->success(__('The assetstype has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The assetstype could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('assetstype'));
        $this->set('_serialize', ['assetstype']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Assetstype id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $assetstype = $this->Assetstypes->get($id);
        if ($this->Assetstypes->delete($assetstype)) {
            $this->Flash->success(__('The assetstype has been deleted.'));
        } else {
            $this->Flash->error(__('The assetstype could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

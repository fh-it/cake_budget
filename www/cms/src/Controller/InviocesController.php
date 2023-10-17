<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Invioces Controller
 *
 * @property \App\Model\Table\InviocesTable $Invioces
 */
class InviocesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Invioces->find();
        $invioces = $this->paginate($query);

        $this->set(compact('invioces'));
    }

    /**
     * View method
     *
     * @param string|null $id Invioce id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $invioce = $this->Invioces->get($id, contain: []);
        $this->set(compact('invioce'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $invioce = $this->Invioces->newEmptyEntity();
        if ($this->request->is('post')) {
            $invioce = $this->Invioces->patchEntity($invioce, $this->request->getData());
            if ($this->Invioces->save($invioce)) {
                $this->Flash->success(__('The invioce has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The invioce could not be saved. Please, try again.'));
        }
        $this->set(compact('invioce'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Invioce id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $invioce = $this->Invioces->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $invioce = $this->Invioces->patchEntity($invioce, $this->request->getData());
            if ($this->Invioces->save($invioce)) {
                $this->Flash->success(__('The invioce has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The invioce could not be saved. Please, try again.'));
        }
        $this->set(compact('invioce'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Invioce id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $invioce = $this->Invioces->get($id);
        if ($this->Invioces->delete($invioce)) {
            $this->Flash->success(__('The invioce has been deleted.'));
        } else {
            $this->Flash->error(__('The invioce could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

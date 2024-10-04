<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * UserType Controller
 *
 * @property \App\Model\Table\UserTypeTable $UserType
 * @method \App\Model\Entity\UserType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserTypeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $userType = $this->paginate($this->UserType);

        $this->set(compact('userType'));
    }

    /**
     * View method
     *
     * @param string|null $id User Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userType = $this->UserType->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('userType'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userType = $this->UserType->newEmptyEntity();
        if ($this->request->is('post')) {
            $userType = $this->UserType->patchEntity($userType, $this->request->getData());
            if ($this->UserType->save($userType)) {
                $this->Flash->success(__('The user type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user type could not be saved. Please, try again.'));
        }
        $this->set(compact('userType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userType = $this->UserType->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userType = $this->UserType->patchEntity($userType, $this->request->getData());
            if ($this->UserType->save($userType)) {
                $this->Flash->success(__('The user type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user type could not be saved. Please, try again.'));
        }
        $this->set(compact('userType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User Type id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userType = $this->UserType->get($id);
        if ($this->UserType->delete($userType)) {
            $this->Flash->success(__('The user type has been deleted.'));
        } else {
            $this->Flash->error(__('The user type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

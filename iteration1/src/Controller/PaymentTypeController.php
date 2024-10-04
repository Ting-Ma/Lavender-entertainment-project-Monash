<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * PaymentType Controller
 *
 * @property \App\Model\Table\PaymentTypeTable $PaymentType
 * @method \App\Model\Entity\PaymentType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PaymentTypeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $paymentType = $this->paginate($this->PaymentType);

        $this->set(compact('paymentType'));
    }

    /**
     * View method
     *
     * @param string|null $id Payment Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $paymentType = $this->PaymentType->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('paymentType'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $paymentType = $this->PaymentType->newEmptyEntity();
        if ($this->request->is('post')) {
            $paymentType = $this->PaymentType->patchEntity($paymentType, $this->request->getData());
            if ($this->PaymentType->save($paymentType)) {
                $this->Flash->success(__('The payment type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The payment type could not be saved. Please, try again.'));
        }
        $this->set(compact('paymentType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Payment Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $paymentType = $this->PaymentType->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paymentType = $this->PaymentType->patchEntity($paymentType, $this->request->getData());
            if ($this->PaymentType->save($paymentType)) {
                $this->Flash->success(__('The payment type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The payment type could not be saved. Please, try again.'));
        }
        $this->set(compact('paymentType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Payment Type id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $paymentType = $this->PaymentType->get($id);
        if ($this->PaymentType->delete($paymentType)) {
            $this->Flash->success(__('The payment type has been deleted.'));
        } else {
            $this->Flash->error(__('The payment type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

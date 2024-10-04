<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Venue Controller
 *
 * @property \App\Model\Table\VenueTable $Venue
 * @method \App\Model\Entity\Venue[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */

 
class VenueController extends AppController
{
    public function initialize():void
    {
        parent::initialize();
        $this->Authentication->allowUnauthenticated(['venueListing']);
    }

    public function assets()
    {

    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $key = $this->request->getQuery('key'); 
        $query = $this->Venue->find('all');
        
        if ($key) {
            $query->where(function ($exp, $q) use ($key) {
                return $exp->or_([
                    'postcode LIKE' => '%' . $key . '%',
                    'suburb LIKE' => '%' . $key . '%',
                    'name LIKE' => '%' . $key . '%',
                    'street LIKE' => '%' . $key . '%',
                    'facilities LIKE' => '%' . $key . '%',
                ]);
            });
        }
    
        $venue = $this->paginate($query);
    
        $this->set(compact('venue'));
    }

    /**
     * View method
     *
     * @param string|null $id Venue id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
    $venue = $this->Venue->get($id, [
        'contain' => [],
    ]);

    $this->set(compact('venue'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $venue = $this->Venue->newEmptyEntity();
        if ($this->request->is('post')) {
            $venue = $this->Venue->patchEntity($venue, $this->request->getData());
            //  debug($venue);
            if ($this->Venue->save($venue)) {
                $this->Flash->success(__('The venue has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The venue could not be saved. Please, try again.'));
        }
        $this->set(compact('venue'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Venue id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $venue = $this->Venue->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $venue = $this->Venue->patchEntity($venue, $this->request->getData());
            if ($this->Venue->save($venue)) {
                $this->Flash->success(__('The venue has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The venue could not be saved. Please, try again.'));
        }
        $this->set(compact('venue'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Venue id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $venue = $this->Venue->get($id);
        if ($this->Venue->delete($venue)) {
            $this->Flash->success(__('The venue has been deleted.'));
        } else {
            $this->Flash->error(__('The venue could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**For venue listing redirect */
    public function venueListing()
    {
       
        $venue = $this->Venue->find('all');
        $data = $venue->toArray();
        
        $this->set('data', $data);
        $this->render('venuelisting');
    }






}


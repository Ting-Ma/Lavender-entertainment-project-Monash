<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Booking Controller
 *
 * @property \App\Model\Table\BookingTable $Booking
 * @method \App\Model\Entity\Booking[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BookingController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $booking = $this->paginate($this->Booking);

        $this->set(compact('booking'));
    }

    /**
     * View method
     *
     * @param string|null $id Booking id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $booking = $this->Booking->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('booking'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $booking = $this->Booking->newEmptyEntity();
        if ($this->request->is('post')) {
            $booking = $this->Booking->patchEntity($booking, $this->request->getData());
            if ($this->Booking->save($booking)) {
                $this->Flash->success(__('The booking has been saved.'));

                return $this->redirect(['action' => 'review']);
            }
            $this->Flash->error(__('The booking could not be saved. Please, try again.'));
        }
        $this->set(compact('booking'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Booking id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $booking = $this->Booking->get($id, [
            'contain' => [],
        ]);
        //getting the data from other table
        // $user = $this->fetchTable('users')->find()->all();
        // $service = $this->fetchTable('service')->find()->all();
        // $venue = $this->fetchTable('venue')->find()->all();
        //turn table data into array
        // $venueid = $venue->extract('id')->toArray();


        //set data to template
        // $this->set('user',$user);
        // $this->set('service',$service);
        // $this->set('venue',$venueid);

        //debug
        // debug($venue);
        // debug($venueid);

        //check the data input
        if ($this->request->is(['patch', 'post', 'put'])) {
            $booking = $this->Booking->patchEntity($booking, $this->request->getData());

            if ($this->Booking->save($booking)) {
                $this->Flash->success(__('The booking has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The booking could not be saved. Please, try again.'));
        }
        $this->set(compact('booking'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Booking id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $booking = $this->Booking->get($id);
        if ($this->Booking->delete($booking)) {
            $this->Flash->success(__('The booking has been deleted.'));
        } else {
            $this->Flash->error(__('The booking could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    //method when user create a new booking
    public function clientBook()
    {
        // Set value to the form for client
        $venueId = $this->request->getQuery('venue_id');
        $this->set('venueid', $venueId);
        $service = $this->request->getQuery('service');
        $this->set('service', $service);
        $venueName = $this->request->getQuery('name');
        $this->set('name', $venueName);
        $price = $this->request->getQuery('price');
        $this->set('price', $price);
        $clientbook = $this->Booking->newEmptyEntity();
        $related = $this->related($venueId);

        if ($this->request->is('post')) {
            $clientbook = $this->Booking->patchEntity($clientbook, $this->request->getData());
            $bookingDate = $clientbook->date;
            $bookingEndTime = $clientbook->endtime; // 注意这里的变量名
           
            if ($bookingDate !== NULL && $bookingEndTime !== NULL) {
              
                if ($bookingDate >= $bookingEndTime) {
                    $this->Flash->error(__('The booking end time should be after the booking date.'));
                } else if ($this->isBookingDateAvailable($related, $bookingDate, $bookingEndTime)) {
                    if ($this->Booking->save($clientbook)) {
                        $review = $clientbook->toArray();
                        $review['price'] = $price;
                        $review['service'] = $service;
                        $this->request->getSession()->write('review_data', $review);
                        $this->Flash->success(__('The booking has been saved.'));
                        return $this->redirect(['action' => 'review']);
                    }
                } else {
                    
                    $this->Flash->error(_('The booking cannot be saved. It is already booked.'));
                }
            }
        }
        $this->set(compact('clientbook'));
        $this->render('clientbook');
    }

    public function isBookingDateAvailable($related, $bookingDate, $bookingEndTime)
    {   
        if($related === NULL)
        {
            return true;
        }
        foreach ($related as $existingBooking) {
            $existingBookingStartTime = $existingBooking['date'];
            $existingBookingEndTime = $existingBooking['endtime'];
                      
            if (
                ($bookingDate >= $existingBookingStartTime && $bookingDate < $existingBookingEndTime) ||
                ($bookingEndTime > $existingBookingStartTime && $bookingEndTime <= $existingBookingEndTime) ||
                ($bookingDate <= $existingBookingStartTime && $bookingEndTime >= $existingBookingEndTime)
            ) {
                return false;
            }
        }
        return true;
    }

    public function related($venueId)
    {
        $relatedbooking = $this->Booking->find('all')
            ->where(['venue_id' => $venueId])
            ->toArray();
        
        return !empty($relatedbooking) ? $relatedbooking : null;
    }




    public function review() {
        $review = $this->request->getSession()->read('review_data'); // 从session中检索
        if (!$review) {
            // 如果session中没有review数据，可以重定向或显示错误消息
            $this->Flash->error(__('No review data found.'));
            return $this->redirect(['action' => 'index']); // 假设你有一个名为'index'的动作
        }
        $this->set('review', $review);
        $this->viewBuilder()->setLayout('default');
        $this->render('review');
    }
}

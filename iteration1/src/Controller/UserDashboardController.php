<?php
namespace App\Controller;

use App\Controller\AppController;

class UserDashboardController extends AppController
{
    public function index()
    {
        
        
        
        //get user id 
        $userid = $this->request->getQuery('id');

        //set email to dashboard
        $email = $this->setEmail($userid);
        $this->set('email',$email);
        
       //set booking history to dashboard
        $history = $this->setbooking($userid);
        $this->set('history',$history);

        //get the current booking 
        $lbook = $this->lbooking($history);
        $this->set('lbook',$lbook);

        // Use the 'Pages' controller to render the 'userdashboard' template.
        $this->viewBuilder()->setLayout('default');
        $this->render('userdashboard');
    }

    public function setEmail($userid)
    {
        $user = $this->getTableLocator()->get('Users')->find()->all();
        $user = $user->toarray();
        $userid = intval($userid);
        for ($i = 0 ; $i < count($user) ; $i++)
        {
           
            if($user[$i]['id'] === $userid)
            {
                
                return $user[$i]['email'];
            }
        }
    }
    
    //get booking history
    public function setbooking($userid)
    {
        $booking = $this->getTableLocator()->get('Booking')->find()->all();
        $booking = $booking->toarray();
        $userid = intval($userid);
        $history = [];
        for ($i = 0 ; $i < count($booking) ; $i++)
        {
           
            if($booking[$i]['user_id'] === $userid)
            {
                
                $history[] = $booking[$i];
            }
        }
     
        return $history;
    }

    //get the lastest booking 
    public function lbooking($history)
    {   
        
        if (count($history) >= 1)
        {
            return $history;
        }
        else 
        {
            return NULL;
        }

    }
}
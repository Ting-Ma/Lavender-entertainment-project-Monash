<?php
namespace App\Controller;

use App\Controller\AppController;


class VenueController extends AppController
{

    public function assets()
    {

    }
}

class VenueListingController extends AppController
{
    public function initialize():void
    {
        parent::initialize();
        $this->Authentication->allowUnauthenticated(['index']);
    }

    public function index()
    {
        // Use the 'Pages' controller to render the 'venues' template.
        $this->viewBuilder()->setLayout('default');
        $this->render('venues');
    }

}
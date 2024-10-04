<?php
namespace App\Controller;

use App\Controller\AppController;


class ServiceController extends AppController
{

    public function assets()
    {

    }
}

class ServiceistingController extends AppController
{
    public function initialize():void
    {
        parent::initialize();
        $this->Authentication->allowUnauthenticated(['index']);
    }

    public function index()
    {
        // Use the 'Pages' controller to render the 'service' template.
        $this->viewBuilder()->setLayout('default');
        $this->render('service');
    }

}


<?php
namespace App\Controller;

use App\Controller\AppController;

class HomeController extends AppController
{
    public function initialize():void
    {
        parent::initialize();
        $this->Authentication->allowUnauthenticated(['index']);
    }

    public function index()
    {
        // Use the 'Pages' controller to render the 'home' template.
        $this->viewBuilder()->setLayout('default');
        $this->render('home');
    }

}
<?php
namespace App\Controller;

use App\Controller\AppController;

class AdminController extends AppController
{
    public function index()
    {
        // Use the 'Pages' controller to render the 'admin' template.
        $this->viewBuilder()->setLayout('default');
        $this->render('admin');
    }
}




<?php
declare(strict_types=1);

namespace App\Controller;

class DashboardController extends AppController
{
    public function index()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/index');
    }

    public function analytics()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/analytics');
    }

    public function finance()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/finance');
    }

    public function crypto()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/crypto');
    }

}

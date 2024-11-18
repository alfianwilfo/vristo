<?php
declare(strict_types=1);

namespace App\Controller;

class PagesController extends AppController
{
    public function pages_knowledge_base()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/pages/knowledge-base');
    }

    public function pages_contact_us()
    {
        $this->viewBuilder()->setLayout('auth');
        return $this->render('/pages/contact-us');
    }

    public function pages_faq()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/pages/faq');
    }

    public function pages_coming_soon()
    {
        $this->viewBuilder()->setLayout('auth');
        return $this->render('/pages/coming-soon');
    }

    public function pages_error404()
    {
        $this->viewBuilder()->setLayout('auth');
        return $this->render('/pages/error404');
    }

    public function pages_error500()
    {
        $this->viewBuilder()->setLayout('auth');
        return $this->render('/pages/error500');
    }

    public function pages_error503()
    {
        $this->viewBuilder()->setLayout('auth');
        return $this->render('/pages/error503');
    }

    public function pages_maintenence()
    {
        $this->viewBuilder()->setLayout('auth');
        return $this->render('/pages/maintenence');
    }

}

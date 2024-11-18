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

    public function pages_contact_us_boxed()
    {
        $this->viewBuilder()->setLayout('auth');
        return $this->render('/pages/contact-us-boxed');
    }

    public function pages_contact_us_cover()
    {
        $this->viewBuilder()->setLayout('auth');
        return $this->render('/pages/contact-us-cover');
    }

    public function pages_faq()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/pages/faq');
    }

    public function pages_coming_soon_boxed()
    {
        $this->viewBuilder()->setLayout('auth');
        return $this->render('/pages/coming-soon-boxed');
    }

    public function pages_coming_soon_cover()
    {
        $this->viewBuilder()->setLayout('auth');
        return $this->render('/pages/coming-soon-cover');
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

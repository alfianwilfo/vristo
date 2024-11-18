<?php
declare(strict_types=1);

namespace App\Controller;

class AppsController extends AppController
{
    public function chat()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/apps/chat');
    }

    public function mailbox()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/apps/mailbox');
    }

    public function todo_list()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/apps/todolist');
    }

    public function notes()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/apps/notes');
    }

    public function scrumboard()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/apps/scrumboard');
    }

    public function contacts()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/apps/contacts');
    }

    public function invoice_list()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/apps/invoice/list');
    }

    public function invoice_add()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/apps/invoice/add');
    }

    public function invoice_preview()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/apps/invoice/preview');
    }

    public function invoice_edit()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/apps/invoice/edit');
    }

    public function calendar()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/apps/calendar');
    }
}

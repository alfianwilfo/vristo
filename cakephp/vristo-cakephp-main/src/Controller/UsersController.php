<?php
declare(strict_types=1);

namespace App\Controller;

class UsersController extends AppController
{
    public function users_profile()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/users/profile');
    }

    public function users_account_settings()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/users/user-account-settings');
    }

}

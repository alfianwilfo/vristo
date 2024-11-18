<?php
declare(strict_types=1);

namespace App\Controller;
class AuthController extends AppController
{
    public function auth_boxed_signin()
    {
        $this->viewBuilder()->setLayout('auth');
        return $this->render('/auth/boxed-signin');
    }

    public function auth_boxed_signup()
    {
        $this->viewBuilder()->setLayout('auth');
        return $this->render('/auth/boxed-signup');
    }

    public function auth_boxed_lockscreen()
    {
        $this->viewBuilder()->setLayout('auth');
        return $this->render('/auth/boxed-lockscreen');
    }

    public function auth_boxed_password_reset()
    {
        $this->viewBuilder()->setLayout('auth');
        return $this->render('/auth/boxed-password-reset');
    }

    public function auth_cover_login()
    {
        $this->viewBuilder()->setLayout('auth');
        return $this->render('/auth/cover-login');
    }

    public function auth_cover_register()
    {
        $this->viewBuilder()->setLayout('auth');
        return $this->render('/auth/cover-register');
    }

    public function auth_cover_lockscreen()
    {
        $this->viewBuilder()->setLayout('auth');
        return $this->render('/auth/cover-lockscreen');
    }

    public function auth_cover_password_reset()
    {
        $this->viewBuilder()->setLayout('auth');
        return $this->render('/auth/cover-password-reset');
    }
}

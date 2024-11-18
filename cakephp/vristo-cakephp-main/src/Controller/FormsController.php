<?php
declare(strict_types=1);

namespace App\Controller;

class FormsController extends AppController
{
    public function forms_basic()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/forms/basic');
    }

    public function forms_input_group()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/forms/input-group');
    }

    public function forms_layouts()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/forms/layouts');
    }

    public function forms_validation()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/forms/validation');
    }

    public function forms_input_mask()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/forms/input-mask');
    }

    public function forms_checkbox_radio()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/forms/checkbox-radio');
    }

    public function forms_select2()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/forms/select2');
    }

    public function forms_switches()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/forms/switches');
    }


    public function forms_wizards()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/forms/wizards');
    }

    public function forms_file_upload()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/forms/file-upload');
    }

    public function forms_quill_editor()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/forms/quill-editor');
    }

    public function forms_markdown_editor()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/forms/markdown-editor');
    }

    public function forms_date_picker()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/forms/date-picker');
    }

    public function forms_clipboard()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/forms/clipboard');
    }

    public function forms_touchspin()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/forms/touchspin');
    }
}

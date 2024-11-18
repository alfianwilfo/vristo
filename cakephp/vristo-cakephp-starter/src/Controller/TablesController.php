<?php
declare(strict_types=1);

namespace App\Controller;

class TablesController extends AppController
{
    public function tables()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/tables');
    }

    public function datatables_advanced()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/datatables/advanced');
    }

    public function datatables_alt_pagination()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/datatables/alt-pagination');
    }

    public function datatables_basic()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/datatables/basic');
    }

    public function datatables_checkbox()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/datatables/checkbox');
    }

    public function datatables_clone_header()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/datatables/clone-header');
    }

    public function datatables_column_chooser()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/datatables/column-chooser');
    }

    public function datatables_export()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/datatables/export');
    }

    public function datatables_multi_column()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/datatables/multi-column');
    }

    public function datatables_multiple_tables()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/datatables/multiple-tables');
    }

    public function datatables_order_sorting()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/datatables/order-sorting');
    }

    public function datatables_range_search()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/datatables/range-search');
    }

    public function datatables_skin()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/datatables/skin');
    }

    public function datatables_sticky_header()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/datatables/sticky-header');
    }
}

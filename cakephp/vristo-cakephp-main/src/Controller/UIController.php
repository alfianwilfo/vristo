<?php
declare(strict_types=1);

namespace App\Controller;

class UIController extends AppController
{
    public function components_tabs()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/components/tabs');
    }

    public function components_accordions()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/components/accordions');
    }

    public function components_modals()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/components/modals');
    }

    public function components_cards()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/components/cards');
    }

    public function components_carousel()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/components/carousel');
    }

    public function components_countdown()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/components/countdown');
    }

    public function components_counter()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/components/counter');
    }

    public function components_sweet_alert()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/components/sweetalert');
    }

    public function components_timeline()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/components/timeline');
    }

    public function components_notifications()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/components/notifications');
    }

    public function components_media_object()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/components/media-object');
    }

    public function components_list_group()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/components/list-group');
    }

    public function components_pricing()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/components/pricing-table');
    }

    public function components_lightbox()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/components/lightbox');
    }

    public function ui_elements_alerts()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/ui-elements/alerts');
    }

    public function ui_elements_avatar()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/ui-elements/avatar');
    }

    public function ui_elements_badges()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/ui-elements/badges');
    }

    public function ui_elements_breadcrumbs()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/ui-elements/breadcrumbs');
    }

    public function ui_elements_buttons()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/ui-elements/buttons');
    }

    public function ui_elements_buttons_group()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/ui-elements/buttons-group');
    }

    public function ui_elements_color_library()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/ui-elements/color-library');
    }

    public function ui_elements_dropdown()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/ui-elements/dropdown');
    }

    public function ui_elements_infobox()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/ui-elements/infobox');
    }

    public function ui_elements_jumbotron()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/ui-elements/jumbotron');
    }

    public function ui_elements_loader()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/ui-elements/loader');
    }

    public function ui_elements_pagination()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/ui-elements/pagination');
    }

    public function ui_elements_popovers()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/ui-elements/popovers');
    }

    public function ui_elements_progress_bar()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/ui-elements/progress-bar');
    }

    public function ui_elements_search()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/ui-elements/search');
    }

    public function ui_elements_tooltips()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/ui-elements/tooltips');
    }

    public function ui_elements_treeview()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/ui-elements/treeview');
    }

    public function ui_elements_typography()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/ui-elements/typography');
    }

    public function charts()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/charts');
    }

    public function widgets()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/widgets');
    }

    public function font_icons()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/font-icons');
    }

    public function drag_and_drop()
    {
        $this->viewBuilder()->setLayout('default');
        return $this->render('/dragndrop');
    }

}

<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', static function () {
    return view('index');
});

$routes->get('/analytics', static function () {
    return view('analytics');
});
$routes->get('/finance', static function () {
    return view('finance');
});
$routes->get('/crypto', static function () {
    return view('crypto');
});

$routes->get('/apps/chat', static function () {
    return view('apps/chat');
});
$routes->get('/apps/mailbox', static function () {
    return view('apps/mailbox');
});
$routes->get('/apps/todolist', static function () {
    return view('apps/todolist');
});
$routes->get('/apps/notes', static function () {
    return view('apps/notes');
});
$routes->get('/apps/scrumboard', static function () {
    return view('apps/scrumboard');
});
$routes->get('/apps/contacts', static function () {
    return view('apps/contacts');
});
$routes->get('/apps/calendar', static function () {
    return view('apps/calendar');
});

$routes->get('/apps/invoice/list', static function () {
    return view('apps/invoice/list');
});
$routes->get('/apps/invoice/preview', static function () {
    return view('apps/invoice/preview');
});
$routes->get('/apps/invoice/add', static function () {
    return view('apps/invoice/add');
});
$routes->get('/apps/invoice/edit', static function () {
    return view('apps/invoice/edit');
});

$routes->get('/components/tabs', static function () {
    return view('ui-components/tabs');
});
$routes->get('/components/accordions', static function () {
    return view('ui-components/accordions');
});
$routes->get('/components/modals', static function () {
    return view('ui-components/modals');
});
$routes->get('/components/cards', static function () {
    return view('ui-components/cards');
});
$routes->get('/components/carousel', static function () {
    return view('ui-components/carousel');
});
$routes->get('/components/countdown', static function () {
    return view('ui-components/countdown');
});
$routes->get('/components/counter', static function () {
    return view('ui-components/counter');
});
$routes->get('/components/sweetalert', static function () {
    return view('ui-components/sweetalert');
});
$routes->get('/components/timeline', static function () {
    return view('ui-components/timeline');
});
$routes->get('/components/notifications', static function () {
    return view('ui-components/notifications');
});
$routes->get('/components/media-object', static function () {
    return view('ui-components/media-object');
});
$routes->get('/components/list-group', static function () {
    return view('ui-components/list-group');
});
$routes->get('/components/pricing-table', static function () {
    return view('ui-components/pricing-table');
});
$routes->get('/components/lightbox', static function () {
    return view('ui-components/lightbox');
});



$routes->get('/elements/alerts', static function () {
    return view('elements/alerts');
});
$routes->get('/elements/avatar', static function () {
    return view('elements/avatar');
});
$routes->get('/elements/badges', static function () {
    return view('elements/badges');
});
$routes->get('/elements/breadcrumbs', static function () {
    return view('elements/breadcrumbs');
});
$routes->get('/elements/buttons', static function () {
    return view('elements/buttons');
});
$routes->get('/elements/buttons-group', static function () {
    return view('elements/buttons-group');
});
$routes->get('/elements/color-library', static function () {
    return view('elements/color-library');
});
$routes->get('/elements/dropdown', static function () {
    return view('elements/dropdown');
});
$routes->get('/elements/infobox', static function () {
    return view('elements/infobox');
});
$routes->get('/elements/jumbotron', static function () {
    return view('elements/jumbotron');
});
$routes->get('/elements/loader', static function () {
    return view('elements/loader');
});
$routes->get('/elements/pagination', static function () {
    return view('elements/pagination');
});
$routes->get('/elements/popovers', static function () {
    return view('elements/popovers');
});
$routes->get('/elements/progress-bar', static function () {
    return view('elements/progress-bar');
});
$routes->get('/elements/search', static function () {
    return view('elements/search');
});
$routes->get('/elements/tooltips', static function () {
    return view('elements/tooltips');
});
$routes->get('/elements/treeview', static function () {
    return view('elements/treeview');
});
$routes->get('/elements/typography', static function () {
    return view('elements/typography');
});

$routes->get('/charts', static function () {
    return view('charts');
});
$routes->get('/widgets', static function () {
    return view('widgets');
});
$routes->get('/font-icons', static function () {
    return view('font-icons');
});
$routes->get('/dragndrop', static function () {
    return view('dragndrop');
});
$routes->get('/tables', static function () {
    return view('tables');
});


$routes->get('/datatables/advanced', static function () {
    return view('datatables/advanced');
});
$routes->get('/datatables/alt-pagination', static function () {
    return view('datatables/alt-pagination');
});
$routes->get('/datatables/basic', static function () {
    return view('datatables/basic');
});
$routes->get('/datatables/checkbox', static function () {
    return view('datatables/checkbox');
});
$routes->get('/datatables/column-chooser', static function () {
    return view('datatables/column-chooser');
});
$routes->get('/datatables/clone-header', static function () {
    return view('datatables/clone-header');
});
$routes->get('/datatables/export', static function () {
    return view('datatables/export');
});
$routes->get('/datatables/multi-column', static function () {
    return view('datatables/multi-column');
});
$routes->get('/datatables/multiple-tables', static function () {
    return view('datatables/multiple-tables');
});
$routes->get('/datatables/order-sorting', static function () {
    return view('datatables/order-sorting');
});
$routes->get('/datatables/range-search', static function () {
    return view('datatables/range-search');
});
$routes->get('/datatables/skin', static function () {
    return view('datatables/skin');
});
$routes->get('/datatables/sticky-header', static function () {
    return view('datatables/sticky-header');
});



$routes->get('/forms/basic', static function () {
    return view('forms/basic');
});
$routes->get('/forms/input-group', static function () {
    return view('forms/input-group');
});
$routes->get('/forms/layouts', static function () {
    return view('forms/layouts');
});
$routes->get('/forms/validation', static function () {
    return view('forms/validation');
});
$routes->get('/forms/input-mask', static function () {
    return view('forms/input-mask');
});
$routes->get('/forms/select2', static function () {
    return view('forms/select2');
});
$routes->get('/forms/touchspin', static function () {
    return view('forms/touchspin');
});
$routes->get('/tables', static function () {
    return view('tables');
});
$routes->get('/forms/checkbox-radio', static function () {
    return view('forms/checkbox-radio');
});
$routes->get('/forms/switches', static function () {
    return view('forms/switches');
});
$routes->get('/forms/wizards', static function () {
    return view('forms/wizards');
});
$routes->get('/forms/file-upload', static function () {
    return view('forms/file-upload');
});
$routes->get('/forms/quill-editor', static function () {
    return view('forms/quill-editor');
});
$routes->get('/forms/markdown-editor', static function () {
    return view('forms/markdown-editor');
});
$routes->get('/forms/date-picker', static function () {
    return view('forms/date-picker');
});
$routes->get('/forms/clipboard', static function () {
    return view('forms/clipboard');
});


$routes->get('/users/profile', static function () {
    return view('users/profile');
});
$routes->get('/users/user-account-settings', static function () {
    return view('users/user-account-settings');
});



$routes->get('/pages/knowledge-base', static function () {
    return view('pages/knowledge-base');
});
$routes->get('/pages/contact-us-boxed', static function () {
    return view('pages/contact-us-boxed');
});
$routes->get('/pages/contact-us-cover', static function () {
    return view('pages/contact-us-cover');
});
$routes->get('/pages/faq', static function () {
    return view('pages/faq');
});
$routes->get('/pages/coming-soon-boxed', static function () {
    return view('pages/coming-soon-boxed');
});
$routes->get('/pages/coming-soon-cover', static function () {
    return view('pages/coming-soon-cover');
});
$routes->get('/pages/error404', static function () {
    return view('pages/error404');
});
$routes->get('/pages/error500', static function () {
    return view('pages/error500');
});
$routes->get('/pages/error503', static function () {
    return view('pages/error503');
});
$routes->get('/pages/maintenence', static function () {
    return view('pages/maintenence');
});


$routes->get('/auth/boxed-lockscreen', static function () {
    return view('auth/boxed-lockscreen');
});
$routes->get('/auth/boxed-signin', static function () {
    return view('auth/boxed-signin');
});
$routes->get('/auth/boxed-signup', static function () {
    return view('auth/boxed-signup');
});
$routes->get('/auth/boxed-password-reset', static function () {
    return view('auth/boxed-password-reset');
});
$routes->get('/auth/cover-login', static function () {
    return view('auth/cover-login');
});
$routes->get('/auth/cover-register', static function () {
    return view('auth/cover-register');
});
$routes->get('/auth/cover-lockscreen', static function () {
    return view('auth/cover-lockscreen');
});
$routes->get('/auth/cover-password-reset', static function () {
    return view('auth/cover-password-reset');
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

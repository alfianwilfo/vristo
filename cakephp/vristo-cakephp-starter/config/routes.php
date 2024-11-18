<?php
use Cake\Routing\RouteBuilder;

return static function (RouteBuilder $routes) {

    $routes->connect('/', 'Dashboard::index');
    $routes->connect('/analytics', 'Dashboard::analytics');
    $routes->connect('/finance', 'Dashboard::finance');
    $routes->connect('/crypto', 'Dashboard::crypto');

    $routes->connect('/apps/chat', 'Apps::chat');
    $routes->connect('/apps/mailbox', 'Apps::mailbox');
    $routes->connect('/apps/todolist', 'Apps::todo_list');
    $routes->connect('/apps/notes', 'Apps::notes');
    $routes->connect('/apps/scrumboard', 'Apps::scrumboard');
    $routes->connect('/apps/contacts', 'Apps::contacts');
    $routes->connect('/apps/calendar', 'Apps::calendar');

    $routes->connect('/apps/invoice/list', 'Apps::invoice_list');
    $routes->connect('/apps/invoice/preview', 'Apps::invoice_preview');
    $routes->connect('/apps/invoice/add', 'Apps::invoice_add');
    $routes->connect('/apps/invoice/edit', 'Apps::invoice_edit');

    $routes->connect('/components/tabs', 'UI::components_tabs');
    $routes->connect('/components/accordions', 'UI::components_accordions');
    $routes->connect('/components/modals', 'UI::components_modals');
    $routes->connect('/components/cards', 'UI::components_cards');
    $routes->connect('/components/carousel', 'UI::components_carousel');
    $routes->connect('/components/countdown', 'UI::components_countdown');
    $routes->connect('/components/counter', 'UI::components_counter');
    $routes->connect('/components/sweetalert', 'UI::components_sweet_alert');
    $routes->connect('/components/timeline', 'UI::components_timeline');
    $routes->connect('/components/notifications', 'UI::components_notifications');
    $routes->connect('/components/media-object', 'UI::components_media_object');
    $routes->connect('/components/list-group', 'UI::components_list_group');
    $routes->connect('/components/pricing-table', 'UI::components_pricing');
    $routes->connect('/components/lightbox', 'UI::components_lightbox');

    $routes->connect('/elements/alerts', 'UI::ui_elements_alerts');
    $routes->connect('/elements/avatar', 'UI::ui_elements_avatar');
    $routes->connect('/elements/badges', 'UI::ui_elements_badges');
    $routes->connect('/elements/breadcrumbs', 'UI::ui_elements_breadcrumbs');
    $routes->connect('/elements/buttons', 'UI::ui_elements_buttons');
    $routes->connect('/elements/buttons-group', 'UI::ui_elements_buttons_group');
    $routes->connect('/elements/color-library', 'UI::ui_elements_color_library');
    $routes->connect('/elements/dropdown', 'UI::ui_elements_dropdown');
    $routes->connect('/elements/infobox', 'UI::ui_elements_infobox');
    $routes->connect('/elements/jumbotron', 'UI::ui_elements_jumbotron');
    $routes->connect('/elements/loader', 'UI::ui_elements_loader');
    $routes->connect('/elements/pagination', 'UI::ui_elements_pagination');
    $routes->connect('/elements/popovers', 'UI::ui_elements_popovers');
    $routes->connect('/elements/progress-bar', 'UI::ui_elements_progress_bar');
    $routes->connect('/elements/search', 'UI::ui_elements_search');
    $routes->connect('/elements/tooltips', 'UI::ui_elements_tooltips');
    $routes->connect('/elements/treeview', 'UI::ui_elements_treeview');
    $routes->connect('/elements/typography', 'UI::ui_elements_typography');

    $routes->connect('/charts', 'UI::charts');
    $routes->connect('/widgets', 'UI::widgets');
    $routes->connect('/font-icons', 'UI::font_icons');
    $routes->connect('/dragndrop', 'UI::drag_and_drop');

    $routes->connect('/tables', 'Tables::tables');

    $routes->connect('/datatables/advanced', 'Tables::datatables_advanced');
    $routes->connect('/datatables/alt-pagination', 'Tables::datatables_alt_pagination');
    $routes->connect('/datatables/basic', 'Tables::datatables_basic');
    $routes->connect('/datatables/checkbox', 'Tables::datatables_checkbox');
    $routes->connect('/datatables/clone-header', 'Tables::datatables_clone_header');
    $routes->connect('/datatables/column-chooser', 'Tables::datatables_column_chooser');
    $routes->connect('/datatables/export', 'Tables::datatables_export');
    $routes->connect('/datatables/multi-column', 'Tables::datatables_multi_column');
    $routes->connect('/datatables/multiple-tables', 'Tables::datatables_multiple_tables');
    $routes->connect('/datatables/order-sorting', 'Tables::datatables_order_sorting');
    $routes->connect('/datatables/range-search', 'Tables::datatables_range_search');
    $routes->connect('/datatables/skin', 'Tables::datatables_skin');
    $routes->connect('/datatables/sticky-header', 'Tables::datatables_sticky_header');

    $routes->connect('/forms/basic', 'Forms::forms_basic');
    $routes->connect('/forms/input-group', 'Forms::forms_input_group');
    $routes->connect('/forms/layouts', 'Forms::forms_layouts');
    $routes->connect('/forms/validation', 'Forms::forms_validation');
    $routes->connect('/forms/input-mask', 'Forms::forms_input_mask');
    $routes->connect('/forms/select2', 'Forms::forms_select2');
    $routes->connect('/forms/touchspin', 'Forms::forms_touchspin');
    $routes->connect('/forms/checkbox-radio', 'Forms::forms_checkbox_radio');
    $routes->connect('/forms/switches', 'Forms::forms_switches');
    $routes->connect('/forms/wizards', 'Forms::forms_wizards');
    $routes->connect('/forms/file-upload', 'Forms::forms_file_upload');
    $routes->connect('/forms/quill-editor', 'Forms::forms_quill_editor');
    $routes->connect('/forms/markdown-editor', 'Forms::forms_markdown_editor');
    $routes->connect('/forms/date-picker', 'Forms::forms_date_picker');
    $routes->connect('/forms/clipboard', 'Forms::forms_clipboard');

    $routes->connect('/users/profile', 'Users::users_profile');
    $routes->connect('/users/user-account-settings', 'Users::users_account_settings');

    $routes->connect('/pages/knowledge-base', 'Pages::pages_knowledge_base');
    $routes->connect('/pages/contact-us', 'Pages::pages_contact_us');
    $routes->connect('/pages/faq', 'Pages::pages_faq');
    $routes->connect('/pages/coming-soon', 'Pages::pages_coming_soon');
    $routes->connect('/pages/error404', 'Pages::pages_error404');
    $routes->connect('/pages/error500', 'Pages::pages_error500');
    $routes->connect('/pages/error503', 'Pages::pages_error503');
    $routes->connect('/pages/maintenence', 'Pages::pages_maintenence');

    $routes->connect('/auth/boxed-lockscreen', 'Auth::auth_boxed_lockscreen');
    $routes->connect('/auth/boxed-signin', 'Auth::auth_boxed_signin');
    $routes->connect('/auth/boxed-signup', 'Auth::auth_boxed_signup');
    $routes->connect('/auth/boxed-password-reset', 'Auth::auth_boxed_password_reset');
    $routes->connect('/auth/cover-login', 'Auth::auth_cover_login');
    $routes->connect('/auth/cover-register', 'Auth::auth_cover_register');
    $routes->connect('/auth/cover-lockscreen', 'Auth::auth_cover_lockscreen');
    $routes->connect('/auth/cover-password-reset', 'Auth::auth_cover_password_reset');




};

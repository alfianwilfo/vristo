/*
|--------------------------------------------------------------------------
| Routes
|--------------------------------------------------------------------------
|
| This file is dedicated for defining HTTP routes. A single file is enough
| for majority of projects, however you can define routes in different
| files and just make sure to import them inside this file. For example
|
| Define routes in following two files
| ├── start/routes/cart.ts
| ├── start/routes/customer.ts
|
| and then import them inside `start/routes.ts` as follows
|
| import './routes/cart'
| import './routes/customer''
|
*/

import Route from '@ioc:Adonis/Core/Route'

Route.get('/', async ({ view }) => {
  return view.render('index')
})
Route.get('/analytics', async ({ view }) => {
  return view.render('analytics')
})
Route.get('/finance', async ({ view }) => {
  return view.render('finance')
})
Route.get('/crypto', async ({ view }) => {
  return view.render('crypto')
})


Route.get('/apps/chat', async ({ view }) => {
  return view.render('apps/chat')
})
Route.get('/apps/mailbox', async ({ view }) => {
  return view.render('apps/mailbox')
})
Route.get('/apps/todolist', async ({ view }) => {
  return view.render('apps/todolist')
})
Route.get('/apps/notes', async ({ view }) => {
  return view.render('apps/notes')
})
Route.get('/apps/scrumboard', async ({ view }) => {
  return view.render('apps/scrumboard')
})
Route.get('/apps/contacts', async ({ view }) => {
  return view.render('apps/contacts')
})
Route.get('/apps/invoice/list', async ({ view }) => {
  return view.render('apps/invoice/list')
})
Route.get('/apps/invoice/add', async ({ view }) => {
  return view.render('apps/invoice/add')
})
Route.get('/apps/invoice/preview', async ({ view }) => {
  return view.render('apps/invoice/preview')
})
Route.get('/apps/invoice/edit', async ({ view }) => {
  return view.render('apps/invoice/edit')
})
Route.get('/apps/calendar', async ({ view }) => {
  return view.render('apps/calendar')
})


Route.get('/components/tabs', async ({ view }) => {
  return view.render('ui-components/tabs')
})
Route.get('/components/accordions', async ({ view }) => {
  return view.render('ui-components/accordions')
})
Route.get('/components/modals', async ({ view }) => {
  return view.render('ui-components/modals')
})
Route.get('/components/cards', async ({ view }) => {
  return view.render('ui-components/cards')
})
Route.get('/components/carousel', async ({ view }) => {
  return view.render('ui-components/carousel')
})
Route.get('/components/countdown', async ({ view }) => {
  return view.render('ui-components/countdown')
})
Route.get('/components/counter', async ({ view }) => {
  return view.render('ui-components/counter')
})
Route.get('/components/sweetalert', async ({ view }) => {
  return view.render('ui-components/sweetalert')
})
Route.get('/components/timeline', async ({ view }) => {
  return view.render('ui-components/timeline')
})
Route.get('/components/notifications', async ({ view }) => {
  return view.render('ui-components/notifications')
})
Route.get('/components/media-object', async ({ view }) => {
  return view.render('ui-components/media-object')
})
Route.get('/components/list-group', async ({ view }) => {
  return view.render('ui-components/list-group')
})
Route.get('/components/pricing-table', async ({ view }) => {
  return view.render('ui-components/pricing-table')
})
Route.get('/components/lightbox', async ({ view }) => {
  return view.render('ui-components/lightbox')
})


Route.get('/elements/alerts', async ({ view }) => {
  return view.render('elements/alerts')
})
Route.get('/elements/avatar', async ({ view }) => {
  return view.render('elements/avatar')
})
Route.get('/elements/badges', async ({ view }) => {
  return view.render('elements/badges')
})
Route.get('/elements/breadcrumbs', async ({ view }) => {
  return view.render('elements/breadcrumbs')
})
Route.get('/elements/buttons', async ({ view }) => {
  return view.render('elements/buttons')
})
Route.get('/elements/buttons-group', async ({ view }) => {
  return view.render('elements/buttons-group')
})
Route.get('/elements/color-library', async ({ view }) => {
  return view.render('elements/color-library')
})
Route.get('/elements/dropdown', async ({ view }) => {
  return view.render('elements/dropdown')
})
Route.get('/elements/infobox', async ({ view }) => {
  return view.render('elements/infobox')
})
Route.get('/elements/jumbotron', async ({ view }) => {
  return view.render('elements/jumbotron')
})
Route.get('/elements/loader', async ({ view }) => {
  return view.render('elements/loader')
})
Route.get('/elements/pagination', async ({ view }) => {
  return view.render('elements/pagination')
})
Route.get('/elements/popovers', async ({ view }) => {
  return view.render('elements/popovers')
})
Route.get('/elements/progress-bar', async ({ view }) => {
  return view.render('elements/progress-bar')
})
Route.get('/elements/search', async ({ view }) => {
  return view.render('elements/search')
})
Route.get('/elements/tooltips', async ({ view }) => {
  return view.render('elements/tooltips')
})
Route.get('/elements/treeview', async ({ view }) => {
  return view.render('elements/treeview')
})
Route.get('/elements/typography', async ({ view }) => {
  return view.render('elements/typography')
})


Route.get('/charts', async ({ view }) => {
  return view.render('charts')
})
Route.get('/widgets', async ({ view }) => {
  return view.render('widgets')
})
Route.get('/font-icons', async ({ view }) => {
  return view.render('font-icons')
})
Route.get('/dragndrop', async ({ view }) => {
  return view.render('dragndrop')
})


Route.get('/tables', async ({ view }) => {
  return view.render('tables')
})
Route.get('/datatables/advanced', async ({ view }) => {
  return view.render('datatables/advanced')
})
Route.get('/datatables/alt-pagination', async ({ view }) => {
  return view.render('datatables/alt-pagination')
})
Route.get('/datatables/basic', async ({ view }) => {
  return view.render('datatables/basic')
})
Route.get('/datatables/checkbox', async ({ view }) => {
  return view.render('datatables/checkbox')
})
Route.get('/datatables/clone-header', async ({ view }) => {
  return view.render('datatables/clone-header')
})
Route.get('/datatables/column-chooser', async ({ view }) => {
  return view.render('datatables/column-chooser')
})
Route.get('/datatables/export', async ({ view }) => {
  return view.render('datatables/export')
})
Route.get('/datatables/multi-column', async ({ view }) => {
  return view.render('datatables/multi-column')
})
Route.get('/datatables/multiple-tables', async ({ view }) => {
  return view.render('datatables/multiple-tables')
})
Route.get('/datatables/order-sorting', async ({ view }) => {
  return view.render('datatables/order-sorting')
})
Route.get('/datatables/range-search', async ({ view }) => {
  return view.render('datatables/range-search')
})
Route.get('/datatables/skin', async ({ view }) => {
  return view.render('datatables/skin')
})
Route.get('/datatables/sticky-header', async ({ view }) => {
  return view.render('datatables/sticky-header')
})


Route.get('/forms/basic', async ({ view }) => {
  return view.render('forms/basic')
})
Route.get('/forms/input-group', async ({ view }) => {
  return view.render('forms/input-group')
})
Route.get('/forms/layouts', async ({ view }) => {
  return view.render('forms/layouts')
})
Route.get('/forms/validation', async ({ view }) => {
  return view.render('forms/validation')
})
Route.get('/forms/input-mask', async ({ view }) => {
  return view.render('forms/input-mask')
})
Route.get('/forms/checkbox-radio', async ({ view }) => {
  return view.render('forms/checkbox-radio')
})
Route.get('/forms/select2', async ({ view }) => {
  return view.render('forms/select2')
})
Route.get('/forms/touchspin', async ({ view }) => {
  return view.render('forms/touchspin')
})
Route.get('/forms/switches', async ({ view }) => {
  return view.render('forms/switches')
})
Route.get('/forms/wizards', async ({ view }) => {
  return view.render('forms/wizards')
})
Route.get('/forms/file-upload', async ({ view }) => {
  return view.render('forms/file-upload')
})
Route.get('/forms/quill-editor', async ({ view }) => {
  return view.render('forms/quill-editor')
})
Route.get('/forms/markdown-editor', async ({ view }) => {
  return view.render('forms/markdown-editor')
})
Route.get('/forms/date-picker', async ({ view }) => {
  return view.render('forms/date-picker')
})
Route.get('/forms/clipboard', async ({ view }) => {
  return view.render('forms/clipboard')
})


Route.get('/users/profile', async ({ view }) => {
  return view.render('users/profile')
})
Route.get('/users/user-account-settings', async ({ view }) => {
  return view.render('users/user-account-settings')
})


Route.get('/pages/knowledge-base', async ({ view }) => {
  return view.render('pages/knowledge-base')
})
Route.get('/pages/contact-us', async ({ view }) => {
  return view.render('pages/contact-us')
})
Route.get('/pages/faq', async ({ view }) => {
  return view.render('pages/faq')
})
Route.get('/pages/coming-soon', async ({ view }) => {
  return view.render('pages/coming-soon')
})
Route.get('/pages/error404', async ({ view }) => {
  return view.render('pages/error404')
})
Route.get('/pages/error500', async ({ view }) => {
  return view.render('pages/error500')
})
Route.get('/pages/error503', async ({ view }) => {
  return view.render('pages/error503')
})
Route.get('/pages/maintenence', async ({ view }) => {
  return view.render('pages/maintenence')
})


Route.get('/auth/boxed-signin', async ({ view }) => {
  return view.render('auth/boxed-signin')
})
Route.get('/auth/boxed-signup', async ({ view }) => {
  return view.render('auth/boxed-signup')
})
Route.get('/auth/boxed-lockscreen', async ({ view }) => {
  return view.render('auth/boxed-lockscreen')
})
Route.get('/auth/boxed-password-reset', async ({ view }) => {
  return view.render('auth/boxed-password-reset')
})
Route.get('/auth/cover-login', async ({ view }) => {
  return view.render('auth/cover-login')
})
Route.get('/auth/cover-register', async ({ view }) => {
  return view.render('auth/cover-register')
})
Route.get('/auth/cover-lockscreen', async ({ view }) => {
  return view.render('auth/cover-lockscreen')
})
Route.get('/auth/cover-password-reset', async ({ view }) => {
  return view.render('auth/cover-password-reset')
})

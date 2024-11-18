<template>
    <div class="space-y-5">
        <h2 class="text-2xl font-bold text-primary">Installation process</h2>

        <div class="panel">
            <div class="space-y-4 text-black-light">
                <p class="text-black">
                    <strong>The following process will be used to install admin dashboard using package manager.</strong>
                </p>

                <ul class="list-decimal space-y-2 pl-5">
                    <li>
                        Install Node.js : Please install latest version of Node.js from
                        <a href="https://nodejs.org" class="font-semibold text-success hover:text-black" target="_blank">https://nodejs.org</a>
                    </li>
                    <li>Extract main template : Extract the admin template site to your suitable directory or folder.</li>
                    <li>
                        Access Command Prompt : Open node.js command prompt.
                        <ul>
                            <li><strong>Note:-</strong> The process mentioned below can also be excuted with system command prompt.</li>
                        </ul>
                    </li>
                    <li>In CMD, Navigate to the location where main folder is extracted.</li>
                    <li>Navigate to the root folder of project where package.json file exist.</li>
                    <li>Install node dependencies : Run<code class="text-black"> npm install</code>.</li>
                    <li>
                        To run <code class="text-black">npm start</code>.
                        <ul class="space-y-2">
                            <li><strong>Note:-</strong> when you run above command it will run project in browser automatically.</li>
                            <li><strong>Note:-</strong> It will enable auto refresh function everytime you save a file.</li>
                        </ul>
                    </li>
                    <li>Run command <code class="text-black">npm run build</code> to build for production.</li>
                </ul>

                <p>
                    In case if you have any problems or query then please
                    <NuxtLink to="/documentation/support" class="font-semibold text-success hover:text-black" target="_blank">contact us</NuxtLink>
                </p>
            </div>
        </div>

        <h2 class="text-2xl font-bold text-primary">File Sturcture</h2>

        <div class="panel">
            <p class="mb-4 text-black-light">The arrangement below describes our file structure.</p>

            <ul class="text-sm">
                <li>
                    <span class="inline-flex cursor-pointer items-center gap-2" @click="toggleTreeview('vristo')">
                        <span class="text-success">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2"></path>
                                <path v-if="!treeview.includes('vristo')" d="M12 10l0 6"></path>
                                <path d="M9 13l6 0"></path>
                            </svg>
                        </span>
                        Vristo
                    </span>
                    <ul class="space-y-2 pl-8" :class="{ hidden: !treeview.includes('vristo') }">
                        <li>
                            <span class="inline-flex cursor-pointer items-center gap-2" @click="toggleTreeview('src')">
                                <span class="text-success">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        fill="none"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2"></path>
                                        <path v-if="!treeview.includes('src')" d="M12 10l0 6"></path>
                                        <path d="M9 13l6 0"></path>
                                    </svg>
                                </span>
                                src
                            </span>
                            <ul class="space-y-2 pl-8" :class="{ hidden: !treeview.includes('src') }">
                                <li>
                                    <span class="inline-flex cursor-pointer items-center gap-2" @click="toggleTreeview('assets')">
                                        <span class="text-success">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="h-6 w-6"
                                                viewBox="0 0 24 24"
                                                stroke-width="1.5"
                                                stroke="currentColor"
                                                fill="none"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            >
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2"></path>
                                                <path v-if="!treeview.includes('assets')" d="M12 10l0 6"></path>
                                                <path d="M9 13l6 0"></path>
                                            </svg>
                                        </span>
                                        assets
                                    </span>
                                    <ul class="space-y-2 pl-8" :class="{ hidden: !treeview.includes('assets') }">
                                        <li>
                                            <span class="inline-flex cursor-pointer items-center gap-2" @click="toggleTreeview('css')">
                                                <span class="text-success">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="h-6 w-6"
                                                        viewBox="0 0 24 24"
                                                        stroke-width="1.5"
                                                        stroke="currentColor"
                                                        fill="none"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    >
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2"></path>
                                                        <path v-if="!treeview.includes('css')" d="M12 10l0 6"></path>
                                                        <path d="M9 13l6 0"></path>
                                                    </svg>
                                                </span>
                                                css
                                            </span>
                                            <ul class="mb-4 pl-8 text-black-light" :class="{ hidden: !treeview.includes('css') }">
                                                <li>all the css files and folders</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span class="inline-flex cursor-pointer items-center gap-2" @click="toggleTreeview('images')">
                                                <span class="text-success">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="h-6 w-6"
                                                        viewBox="0 0 24 24"
                                                        stroke-width="1.5"
                                                        stroke="currentColor"
                                                        fill="none"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    >
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2"></path>
                                                        <path v-if="!treeview.includes('images')" d="M12 10l0 6"></path>
                                                        <path d="M9 13l6 0"></path>
                                                    </svg>
                                                </span>
                                                images
                                            </span>
                                            <ul class="mb-4 pl-8 text-black-light" :class="{ hidden: !treeview.includes('images') }">
                                                <li>all the image files</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span class="inline-flex cursor-pointer items-center gap-2" @click="toggleTreeview('locales')">
                                                <span class="text-success">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="h-6 w-6"
                                                        viewBox="0 0 24 24"
                                                        stroke-width="1.5"
                                                        stroke="currentColor"
                                                        fill="none"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    >
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2"></path>
                                                        <path v-if="!treeview.includes('locales')" d="M12 10l0 6"></path>
                                                        <path d="M9 13l6 0"></path>
                                                    </svg>
                                                </span>
                                                i18n
                                            </span>
                                            <ul class="mb-4 pl-8 text-black-light" :class="{ hidden: !treeview.includes('locales') }">
                                                <li>all the locales json files</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <span class="inline-flex cursor-pointer items-center gap-2" @click="toggleTreeview('app')">
                                        <span class="text-success">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="h-6 w-6"
                                                viewBox="0 0 24 24"
                                                stroke-width="1.5"
                                                stroke="currentColor"
                                                fill="none"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            >
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2"></path>
                                                <path v-if="!treeview.includes('app')" d="M12 10l0 6"></path>
                                                <path d="M9 13l6 0"></path>
                                            </svg>
                                        </span>
                                        app
                                    </span>
                                    <ul class="space-y-2 pl-8" :class="{ hidden: !treeview.includes('app') }">
                                        <li>
                                            <span class="inline-flex cursor-pointer items-center gap-2" @click="toggleTreeview('layout')">
                                                <span class="text-success">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="h-6 w-6"
                                                        viewBox="0 0 24 24"
                                                        stroke-width="1.5"
                                                        stroke="currentColor"
                                                        fill="none"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    >
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2"></path>
                                                        <path v-if="!treeview.includes('layout')" d="M12 10l0 6"></path>
                                                        <path d="M9 13l6 0"></path>
                                                    </svg>
                                                </span>
                                                layout
                                            </span>
                                            <ul class="mb-4 pl-8 text-black-light" :class="{ hidden: !treeview.includes('layout') }">
                                                <li>all the angular js layout components</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span class="inline-flex cursor-pointer items-center gap-2" @click="toggleTreeview('store')">
                                                <span class="text-success">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="h-6 w-6"
                                                        viewBox="0 0 24 24"
                                                        stroke-width="1.5"
                                                        stroke="currentColor"
                                                        fill="none"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    >
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2"></path>
                                                        <path v-if="!treeview.includes('store')" d="M12 10l0 6"></path>
                                                        <path d="M9 13l6 0"></path>
                                                    </svg>
                                                </span>
                                                store
                                            </span>
                                            <ul class="mb-4 pl-8 text-black-light" :class="{ hidden: !treeview.includes('store') }">
                                                <li>angular js store file</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span class="inline-flex cursor-pointer items-center gap-2" @click="toggleTreeview('service')">
                                                <span class="text-success">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="h-6 w-6"
                                                        viewBox="0 0 24 24"
                                                        stroke-width="1.5"
                                                        stroke="currentColor"
                                                        fill="none"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    >
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2"></path>
                                                        <path v-if="!treeview.includes('service')" d="M12 10l0 6"></path>
                                                        <path d="M9 13l6 0"></path>
                                                    </svg>
                                                </span>
                                                service
                                            </span>
                                            <ul class="mb-4 pl-8 text-black-light" :class="{ hidden: !treeview.includes('service') }">
                                                <li>app.service.ts - custom app setting configuration file</li>
                                            </ul>
                                        </li>
                                        <li>app.component.html - angularjs project startup file</li>
                                        <li>app.component.ts</li>
                                        <li>app.module.ts - angularjs entry point file</li>
                                        <li>app.route.ts - angularjs router file</li>
                                        <li>all the app pages</li>
                                        <li>theme.config.ts</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>index.html</li>
                        <li>main.ts</li>
                        <li>package.json</li>
                        <li>tailwind.config.js</li>
                        <li>tsconfig.json</li>
                        <li>tsconfig.app.json</li>
                        <li>tsconfig.spec.json</li>
                        <li>angular.json</li>
                        <li>.editorconfig</li>
                        <li>.gitignore</li>
                        <li>.prettierrc</li>
                    </ul>
                </li>
            </ul>
        </div>

        <h2 class="text-2xl font-bold text-primary">Code Structure</h2>

        <div class="panel">
            <div class="mb-5 space-y-4 text-black-light">
                <p class="mb-4 bg-black-light/5 p-4">This section will give you a brief description of our code.</p>

                <p><strong class="text-black">1. Header Section : </strong>This is the default navbar section. It contains :</p>

                <ul class="list-inside list-[lower-alpha] space-y-2 pl-5">
                    <li>Sidebar Toggle button.</li>

                    <li>Quick access button for calendar.</li>

                    <li>Quick access button for todolist.</li>

                    <li>Quick access button for chat.</li>

                    <li>Search Bar</li>

                    <li>Theme toggle button.</li>

                    <li>Language Dropdown</li>

                    <li>Message Dropdown</li>

                    <li>Notification Dropdown</li>

                    <li>User Profile with Dropdown</li>

                    <li>Horizontal Menu</li>
                </ul>

                <p><strong>Note:-</strong> These categories are defined by us and you can modify as per your needs :)</p>

                <highlight>
                    <pre>
  &lt;!--  Navbar Component  --&gt;
  &lt;header&gt;&lt;/header&gt;
  ==========================================================

  &lt;!--  BEGIN NAVBAR  --&gt;
  &lt;header class=&quot;shadow-sm&quot; [ngClass]=&quot;{ 'dark text-white-dark': store.semidark &amp;&amp; store.menu === 'horizontal'}&quot;&gt;
        &lt;div class=&quot;relative flex w-full items-center bg-white px-5 py-2.5 dark:bg-[#0e1726]&quot;&gt;
            ..............................
        &lt;/div&gt;

        &lt;!-- horizontal menu --&gt;
        &lt;ul
            class=&quot;horizontal-menu hidden border-t border-[#ebedf2] bg-white py-1.5 px-6 font-semibold text-black rtl:space-x-reverse dark:border-[#191e3a] dark:bg-[#0e1726] dark:text-white-dark lg:space-x-1.5 xl:space-x-8&quot;
        &gt;
            ..............................
        &lt;/ul&gt;
  &lt;/header&gt;
  &lt;!--  END NAVBAR  --&gt;</pre
                    >
                </highlight>
            </div>

            <div class="mb-5 space-y-4 text-black-light">
                <p>
                    <strong class="text-black">2. Main Container Section : </strong>The main container section includes header, footer and main content section.
                </p>

                <ul class="list-inside list-[lower-alpha] space-y-2 pl-5">
                    <li>Sidebar Section</li>

                    <li>Header Section</li>

                    <li>Main Content Section</li>

                    <li>Footer Section</li>
                </ul>

                <highlight>
                    <pre>
  &lt;!--  BEGIN MAIN CONTAINER  --&gt;
  &lt;div
        class=&quot;main-section relative font-nunito text-sm font-normal antialiased&quot;
        [ngClass]=&quot;[store.sidebar ? 'toggle-sidebar' : '', store.menu, store.layout, store.rtlClass]&quot;
  &gt;
      ..............................
  &lt;/div&gt;
  &lt;!-- END MAIN CONTAINER --&gt;</pre
                    >
                </highlight>
            </div>

            <div class="mb-5 space-y-4 text-black-light">
                <p><strong class="text-black">3. Sidebar :</strong> This is the sidebar code.</p>

                <highlight>
                    <pre>
  &lt;!--  Sidebar Component  --&gt;
  &lt;sidebar&gt;&lt;/sidebar&gt;
  ==========================================================

  &lt;!--  BEGIN SIDEBAR  --&gt;
  &lt;div [ngClass]=&quot;{ 'dark text-white-dark': store.semidark }&quot;&gt;
      &lt;nav class=&quot;sidebar fixed top-0 bottom-0 z-50 h-full min-h-screen w-[260px] shadow-[5px_0_25px_0_rgba(94,92,154,0.1)] transition-all duration-300&quot;&gt;
          ..............................
      &lt;/nav&gt;
  &lt;/div&gt;
  &lt;!--  END SIDEBAR  --&gt;</pre
                    >
                </highlight>
            </div>

            <div class="mb-5 space-y-4 text-black-light">
                <p><strong class="text-black">4. Main Content : </strong>This is the Main Content code section.</p>

                <p class="pl-5">This is the root structure where you can create widgets, charts, tables etc.</p>

                <highlight>
                    <pre>
  &lt;!--  BEGIN CONTENT PART  --&gt;
  &lt;div class=&quot;main-content&quot;&gt;
      ..............................
  &lt;/div&gt;

  &lt;!--  END CONTENT PART  --&gt;</pre
                    >
                </highlight>
            </div>

            <div class="mb-5 space-y-4 text-black-light">
                <p><strong class="text-black">5. Footer :</strong> This is the Footer code.</p>

                <highlight>
                    <pre>
  &lt;!--  Footer Component  --&gt;
  &lt;footer&gt;&lt;/footer&gt;
  ==========================================================

  &lt;!--  BEGIN FOOTER  --&gt;
  &lt;p class=&quot;pt-6 text-center dark:text-white-dark ltr:sm:text-left rtl:sm:text-right&quot;&gt;
      ..............................
  &lt;/p&gt;
  &lt;!--  END FOOTER  --&gt;</pre
                    >
                </highlight>
            </div>

            <div class="mb-5 space-y-4 text-black-light">
                <h3 class="mb-5 text-xl font-bold text-success">The Combined Code</h3>
                <p>Now, after a brief description of our admin template. Below is the combined code of the snippets we have discuss above.</p>

                <highlight>
                    <pre>
  &lt;!--  BEGIN MAIN CONTAINER  --&gt;
  &lt;div
    class=&quot;main-section relative font-nunito text-sm font-normal antialiased&quot;
    [ngClass]=&quot;[store.sidebar ? 'toggle-sidebar' : '', store.menu, store.layout, store.rtlClass]&quot;
  &gt;
      &lt;!-- BEGIN SIDEBAR MENU OVERLAY --&gt;
      &lt;div class=&quot;fixed inset-0 z-50 bg-[black]/60 lg:hidden&quot;  [ngClass]=&quot;{ hidden: !store.sidebar }&quot;  (click)=&quot;storeData.dispatch({ type: 'toggleSidebar' })&quot;&gt;&lt;/div&gt;
      &lt;!-- END SIDEBAR MENU OVERLAY --&gt;

      &lt;!-- BEGIN SCREEN LOADER --&gt;
      &lt;div
            *ngIf=&quot;store.isShowMainLoader&quot;
            class=&quot;screen_loader fixed inset-0 bg-[#fafafa] dark:bg-[#060818] z-[60] grid place-content-center animate__animated&quot;
      &gt;
          &lt;svg&gt;...&lt;/svg&gt;
      &lt;/div&gt;
      &lt;!-- END SCREEN LOADER --&gt;

      &lt;!-- BEGIN SCROLL TO TOP BUTTON --&gt;
      &lt;div *ngIf=&quot;showTopButton&quot; class=&quot;fixed bottom-6 z-50 ltr:right-6 rtl:left-6&quot;&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary animate-pulse rounded-full bg-[#fafafa] p-2 dark:bg-[#060818] dark:hover:bg-primary&quot; @click=&quot;goToTop&quot;&gt;
                &lt;svg&gt;...&lt;/svg&gt;
            &lt;/button&gt;
      &lt;/div&gt;
      &lt;!-- END SCROLL TO TOP BUTTON --&gt;

      &lt;!-- BEGIN APP SETTING LAUNCHER --&gt;
      &lt;setting&gt;&lt;/setting&gt;
      &lt;!-- END APP SETTING LAUNCHER --&gt;

      &lt;div class=&quot;main-container text-black dark:text-white-dark min-h-screen&quot; :class=&quot;[store.navbar]&quot;&gt;
          &lt;!--  BEGIN SIDEBAR  --&gt;
          &lt;sidebar&gt;&lt;/sidebar&gt;
          &lt;!--  END SIDEBAR  --&gt;

          &lt;!--  BEGIN CONTENT AREA  --&gt;
          &lt;div class=&quot;main-content&quot;&gt;
              &lt;!--  BEGIN NAVBAR  --&gt;
              &lt;header&gt;&lt;/header&gt;
              &lt;!--  END NAVBAR  --&gt;

              &lt;div class=&quot;p-6 animation&quot;&gt;
                  &lt;!--  BEGIN PAGE CONTENT  --&gt;
                  &lt;router-outlet&gt;&lt;/router-outlet&gt;
                  &lt;!--  END PAGE CONTENT  --&gt;

                  &lt;!-- BEGIN FOOTER --&gt;
                  &lt;footer&gt;&lt;/footer&gt;
                  &lt;!-- END FOOTER --&gt;
              &lt;/div&gt;
          &lt;/div&gt;
          &lt;!--  END CONTENT AREA  --&gt;
      &lt;/div&gt;
  &lt;/div&gt;
  &lt;!--  END MAIN CONTAINER  --&gt;</pre
                    >
                </highlight>
            </div>
        </div>

        <h2 class="text-2xl font-bold text-primary">Admin JS Code Structure</h2>

        <div class="panel">
            <div class="space-y-4 text-black-light">
                <p class="mb-4 bg-black-light/5">This section will give you a brief description of our admin template JS code.</p>

                <p>
                    <strong class="text-black">1. app.service.ts : </strong>This is primary js file. It is necessary for the layout to work. It contains the
                    code as follows :-
                </p>

                <ul class="list-inside list-[lower-alpha] space-y-2 pl-5">
                    <li>Set default layout</li>

                    <li>Set Navigation Position</li>

                    <li>Set Navbar Type</li>

                    <li>Set Router Animation</li>

                    <li>Theme change funtionality</li>

                    <li>Direction change funtionality</li>
                </ul>

                <highlight>
                    <pre>
  import { Injectable } from '@angular/core';
  import { Store } from '@ngrx/store';
  import { $themeConfig } from '../theme.config';
  import { TranslateService } from '@ngx-translate/core';

  @Injectable()
  export class AppService {
      storeData: any;
      constructor(public translate: TranslateService, public store: Store&lt;any&gt;) {
          this.initStoreData();
      }

      initStoreData() {
          this.store
              .select((d: any) =&gt; d.index)
              .subscribe((d: any) =&gt; {
                  this.storeData = d;
              });

          // set default styles
          let val: any = localStorage.getItem('theme'); // light, dark, system
          val = val || $themeConfig.theme;
          this.store.dispatch({ type: 'toggleTheme', payload: val });

          val = localStorage.getItem('menu'); // vertical, collapsible-vertical, horizontal
          val = val || $themeConfig.menu;
          this.store.dispatch({ type: 'toggleMenu', payload: val });

          val = localStorage.getItem('layout'); // full, boxed-layout
          val = val || $themeConfig.layout;
          this.store.dispatch({ type: 'toggleLayout', payload: val });

          val = localStorage.getItem('i18n_locale'); // en, da, de, el, es, fr, hu, it, ja, pl, pt, ru, sv, tr, zh
          val = val || $themeConfig.locale;

          const list = this.storeData.languageList;
          const item = list.find((item: any) =&gt; item.code === val);
          if (item) {
              this.toggleLanguage(item);
          }

          val = localStorage.getItem('rtlClass'); // rtl, ltr
          val = val || $themeConfig.rtlClass;
          this.store.dispatch({ type: 'toggleRTL', payload: val });

          val = localStorage.getItem('animation'); // animate__fadeIn, animate__fadeInDown, animate__fadeInUp, animate__fadeInLeft, animate__fadeInRight, animate__slideInDown, animate__slideInLeft, animate__slideInRight, animate__zoomIn
          val = val || $themeConfig.animation;
          this.store.dispatch({ type: 'toggleAnimation', payload: val });

          val = localStorage.getItem('navbar'); // navbar-sticky, navbar-floating, navbar-static
          val = val || $themeConfig.navbar;
          this.store.dispatch({ type: 'toggleNavbar', payload: val });

          val = localStorage.getItem('semidark');
          val = val === 'true' ? true : $themeConfig.semidark;
          this.store.dispatch({ type: 'toggleSemidark', payload: val });
      }

      toggleLanguage(item: any) {
          let lang: any = null;
          lang = 'en';
          if (item) {
              lang = item;
          } else {
              let code = this.translate.currentLang || null;
              if (!code) {
                  code = localStorage.getItem('i18n_locale');
              }

              item = this.storeData.languageList.find((d: any) =&gt; d.code === code);
              if (item) {
                  lang = item;
              }
          }

          if (!lang) {
              lang = this.storeData.languageList.find((d: any) =&gt; d.code === 'en');
          }

          this.translate.use(lang.code); // set language
          this.store.dispatch({ type: 'toggleLocale', payload: lang.code });
          return lang;
      }

      changeAnimation(type = 'add') {
          if (this.storeData.animation) {
              const ele: any = document.querySelector('.animation');
              if (type === 'add') {
                  ele?.classList.add('animate__animated');
                  ele?.classList.add(this.storeData.animation);
              } else {
                  ele?.classList.remove('animate__animated');
                  ele?.classList.remove(this.storeData.animation);
              }
          }
      }
  }</pre
                    >
                </highlight>

                <p>
                    <strong class="text-black">2. theme.config.ts : </strong>This is theme configuration js file. This file contains optional setting for set
                    defaut layout, theme and language functionality. It contains the code as follows :-
                </p>

                <ul class="list-inside list-[lower-alpha] space-y-2 pl-5">
                    <li>Language</li>
                    <li>Theme</li>
                    <li>Navigation</li>
                    <li>Layout</li>
                    <li>Direction</li>
                    <li>Animation</li>
                    <li>Navbar</li>
                    <li>Semidark</li>
                </ul>

                <highlight>
                    <pre>
  // APP CONFIG
  export const $themeConfig = {
      locale: 'en', // en, da, de, el, es, fr, hu, it, ja, pl, pt, ru, sv, tr, zh
      theme: 'light', // light, dark, system
      menu: 'vertical', // vertical, collapsible-vertical, horizontal
      layout: 'full', // full, boxed-layout
      rtlClass: 'ltr', // rtl, ltr
      animation: '', // animate__fadeIn, animate__fadeInDown, animate__fadeInUp, animate__fadeInLeft, animate__fadeInRight, animate__slideInDown, animate__slideInLeft, animate__slideInRight, animate__zoomIn
      navbar: 'navbar-sticky', // navbar-sticky, navbar-floating, navbar-static
      semidark: false,
  };</pre
                    >
                </highlight>
            </div>
        </div>
    </div>
</template>
<script lang="ts" setup>
    import { ref } from 'vue';
    import highlight from '@/components/plugins/highlight.vue';
    definePageMeta({
        layout: 'app-layout',
    });
    const treeview = ref(['vristo', 'public', 'src', 'app', 'assets', 'components']);
    const toggleTreeview = (name: string) => {
        if (treeview.value.includes(name)) {
            treeview.value = treeview.value.filter((d) => d != name);
        } else {
            treeview.value.push(name);
        }
    };
</script>

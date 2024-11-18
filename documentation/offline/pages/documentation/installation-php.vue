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
                        Server Requirements:
                        <a href="https://httpd.apache.org/docs/2.4/install.html" class="font-semibold text-success hover:text-black" target="_blank"
                            >https://httpd.apache.org/docs/2.4/install.html</a
                        >
                        OR
                        <a
                            href="https://www.nginx.com/resources/wiki/start/topics/tutorials/install"
                            class="font-semibold text-success hover:text-black"
                            target="_blank"
                            >https://www.nginx.com/resources/wiki/start/topics/tutorials/install</a
                        >
                    </li>
                    <li>
                        Install PHP from
                        <a href="https://www.php.net/manual/en/install.php" class="font-semibold text-success hover:text-black" target="_blank"
                            >https://www.php.net/manual/en/install.php</a
                        >
                    </li>
                    <li>
                        Install Node.js : Please install latest version of Node.js from
                        <a href="https://nodejs.org" class="font-semibold text-success hover:text-black" target="_blank">https://nodejs.org</a>
                    </li>
                    <li>Extract main template : Extract the admin template site to your suitable directory or folder.</li>
                    <li>Open terminal or command prompt with installation directory/folder.</li>
                    <li>Install node dependencies: Run<code class="text-black"> npm install</code>.</li>
                    <li>
                        Run Command <code class="text-black">npm run dev</code>.
                        <ul class="space-y-2">
                            <li><strong>Note:-</strong> Start the Tailwind CLI build process when you make change in site.</li>
                            <li><strong>Note:-</strong> The CLI tool scan your template files for classes and build your CSS.</li>
                        </ul>
                    </li>
                    <li>Run command <code class="text-black">npm run build</code> to minify your CSS.</li>
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
                            <ul class="pl-8" :class="{ hidden: !treeview.includes('assets') }">
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
                                        <li>all the base css files including build css.</li>
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
                                    <span class="inline-flex cursor-pointer items-center gap-2" @click="toggleTreeview('js')">
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
                                                <path v-if="!treeview.includes('js')" d="M12 10l0 6"></path>
                                                <path d="M9 13l6 0"></path>
                                            </svg>
                                        </span>
                                        js
                                    </span>
                                    <ul class="mb-4 pl-8 text-black-light" :class="{ hidden: !treeview.includes('js') }">
                                        <li>all the js files</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>index.html and all other pages</li>
                        <li>package.json</li>
                        <li>tailwind.config.js</li>
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
&lt;!--  BEGIN NAVBAR  --&gt;
&lt;header :class=&quot;{'dark' : $store.app.semidark &amp;&amp; $store.app.menu === 'horizontal'}&quot;&gt;
  &lt;div class=&quot;shadow-sm&quot;&gt;
      &lt;div class=&quot;relative flex w-full items-center bg-white px-5 py-2.5 dark:bg-[#0e1726]&quot;&gt;
          ..............................
      &lt;/div&gt;

      &lt;!-- horizontal menu --&gt;
      &lt;ul
          class=&quot;horizontal-menu hidden border-t border-[#ebedf2] bg-white py-1.5 px-6 font-semibold text-black rtl:space-x-reverse dark:border-[#191e3a] dark:bg-[#0e1726] dark:text-white-dark lg:space-x-1.5 xl:space-x-8&quot;
      &gt;
          ..............................
      &lt;/ul&gt;
  &lt;/div&gt;
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
&lt;body
  x-data=&quot;main&quot;
  class=&quot;relative overflow-x-hidden font-nunito text-sm font-normal antialiased&quot;
  :class=&quot;[ $store.app.sidebar ? 'toggle-sidebar' : '', $store.app.theme, $store.app.menu, $store.app.layout,$store.app.rtlClass]&quot;
&gt;
  ..............................
&lt;/body&gt;
&lt;!-- END MAIN CONTAINER --&gt;</pre
                    >
                </highlight>
            </div>

            <div class="mb-5 space-y-4 text-black-light">
                <p><strong class="text-black">3. Sidebar :</strong> This is the sidebar code.</p>

                <highlight>
                    <pre>
&lt;!--  BEGIN SIDEBAR  --&gt;
&lt;div :class=&quot;{'dark text-white-dark' : $store.app.semidark}&quot;&gt;
  &lt;nav x-data=&quot;sidebar&quot; class=&quot;sidebar fixed top-0 bottom-0 z-50 h-full min-h-screen w-[260px] shadow-[5px_0_25px_0_rgba(94,92,154,0.1)] transition-all duration-300&quot;&gt;
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
&lt;body
  x-data=&quot;main&quot;
  class=&quot;relative overflow-x-hidden font-nunito text-sm font-normal antialiased&quot;
  :class=&quot;[ $store.app.sidebar ? 'toggle-sidebar' : '', $store.app.theme, $store.app.menu, $store.app.layout,$store.app.rtlClass]&quot;
&gt;
  &lt;!-- BEGIN SIDEBAR MENU OVERLAY --&gt;
  &lt;div x-cloak class=&quot;fixed inset-0 z-50 bg-[black]/60 lg:hidden&quot; :class=&quot;{'hidden' : !$store.app.sidebar}&quot; @click=&quot;$store.app.toggleSidebar()&quot;&gt;&lt;/div&gt;
  &lt;!-- END SIDEBAR MENU OVERLAY --&gt;

  &lt;!-- BEGIN SCREEN LOADER --&gt;
  &lt;div class=&quot;screen_loader animate__animated fixed inset-0 z-[60] grid place-content-center bg-[#fafafa] dark:bg-[#060818]&quot;&gt;
      &lt;svg&gt;...&lt;/svg&gt;
  &lt;/div&gt;
  &lt;!-- END SCREEN LOADER --&gt;

  &lt;!-- BEGIN SCROLL TO TOP BUTTON --&gt;
  &lt;div class=&quot;fixed bottom-6 z-50 ltr:right-6 rtl:left-6&quot; x-data=&quot;scrollToTop&quot;&gt;
      &lt;template x-if=&quot;showTopButton&quot;&gt;
          &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary animate-pulse rounded-full bg-[#fafafa] p-2 dark:bg-[#060818] dark:hover:bg-primary&quot; @click=&quot;goToTop&quot;&gt;
              &lt;svg&gt;...&lt;/svg&gt;
          &lt;/button&gt;
      &lt;/template&gt;
  &lt;/div&gt;
  &lt;!-- END SCROLL TO TOP BUTTON --&gt;

  &lt;!-- BEGIN APP SETTING LAUNCHER --&gt;
  &lt;div&gt;...&lt;/div&gt;
  &lt;!-- END APP SETTING LAUNCHER --&gt;

  &lt;div class=&quot;main-container min-h-screen text-black dark:text-white-dark&quot; :class=&quot;[$store.app.navbar]&quot;&gt;
      &lt;!--  BEGIN SIDEBAR  --&gt;
      &lt;div :class=&quot;{'dark text-white-dark' : $store.app.semidark}&quot;&gt;
          &lt;nav x-data=&quot;sidebar&quot; class=&quot;sidebar fixed top-0 bottom-0 z-50 h-full min-h-screen w-[260px] shadow-[5px_0_25px_0_rgba(94,92,154,0.1)] transition-all duration-300&quot;&gt;
              ..............................
          &lt;/nav&gt;
      &lt;/div&gt;
      &lt;!--  END SIDEBAR  --&gt;

      &lt;!--  BEGIN CONTENT AREA  --&gt;
      &lt;div class=&quot;main-content&quot;&gt;
          &lt;!--  BEGIN NAVBAR  --&gt;
          &lt;header :class=&quot;{'dark' : $store.app.semidark &amp;&amp; $store.app.menu === 'horizontal'}&quot;&gt;
              &lt;div class=&quot;shadow-sm&quot;&gt;
                  &lt;div class=&quot;relative flex w-full items-center bg-white px-5 py-2.5 dark:bg-[#0e1726]&quot;&gt;..............................&lt;/div&gt;

                  &lt;!-- horizontal menu --&gt;
                  &lt;ul
                      class=&quot;horizontal-menu hidden border-t border-[#ebedf2] bg-white py-1.5 px-6 font-semibold text-black rtl:space-x-reverse dark:border-[#191e3a] dark:bg-[#0e1726] dark:text-white-dark lg:space-x-1.5 xl:space-x-8&quot;
                  &gt;
                      ..............................
                  &lt;/ul&gt;
              &lt;/div&gt;
          &lt;/header&gt;
          &lt;!--  END NAVBAR  --&gt;

          &lt;div class=&quot;animate__animated p-6&quot; :class=&quot;[$store.app.animation]&quot;&gt;
              &lt;!--  BEGIN PAGE CONTENT  --&gt;
              &lt;div&gt;..............................&lt;/div&gt;
              &lt;!--  END PAGE CONTENT  --&gt;

              &lt;!-- BEGIN FOOTER --&gt;
              &lt;p class=&quot;pt-6 text-center dark:text-white-dark ltr:sm:text-left rtl:sm:text-right&quot;&gt;..............................&lt;/p&gt;
              &lt;!-- END FOOTER --&gt;
          &lt;/div&gt;
      &lt;/div&gt;
      &lt;!--  END CONTENT AREA  --&gt;
  &lt;/div&gt;
&lt;/body&gt;
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
                    <strong class="text-black">1. assets/js/custom.js : </strong>This is primary js file. It is necessary for the layout to work. It contains
                    the code as follows :-
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
(function () {
const $themeConfig = {
    locale: &quot;en&quot;, // en, da, de, el, es, fr, hu, it, ja, pl, pt, ru, sv, tr, zh
    theme: &quot;light&quot;, // light, dark, system
    menu: &quot;vertical&quot;, // vertical, collapsible-vertical, horizontal
    layout: &quot;full&quot;, // full, boxed-layout
    rtlClass: &quot;ltr&quot;, // rtl, ltr
    animation: &quot;&quot;, // animate__fadeIn, animate__fadeInDown, animate__fadeInUp, animate__fadeInLeft, animate__fadeInRight, animate__slideInDown, animate__slideInLeft, animate__slideInRight, animate__zoomIn
    navbar: &quot;navbar-sticky&quot;, // navbar-sticky, navbar-floating, navbar-static
    semidark: false,
};

document.addEventListener(&quot;alpine:init&quot;, () =&gt; {
    Alpine.store(&quot;app&quot;, {
        // theme
        theme: Alpine.$persist($themeConfig.theme),
        toggleTheme(val) {
            if (!val) {
                val = this.theme || $themeConfig.theme; // light|dark|system
            }

            this.theme = val;
        },

        // navigation menu
        menu: Alpine.$persist($themeConfig.menu),
        toggleMenu(val) {
            if (!val) {
                val = this.menu || $themeConfig.menu; // vertical, collapsible-vertical, horizontal
            }
            this.sidebar = false; // reset sidebar state
            this.menu = val;
        },

        // layout
        layout: Alpine.$persist($themeConfig.layout),
        toggleLayout(val) {
            if (!val) {
                val = this.layout || $themeConfig.layout; // full, boxed-layout
            }

            this.layout = val;
        },

        // rtl support
        rtlClass: Alpine.$persist($themeConfig.rtlClass),
        toggleRTL(val) {
            if (!val) {
                val = this.rtlClass || $themeConfig.rtlClass; // rtl, ltr
            }

            this.rtlClass = val;
            this.setRTLLayout();
        },

        setRTLLayout() {
            document.querySelector(&quot;html&quot;).setAttribute(&quot;dir&quot;, this.rtlClass || $themeConfig.rtlClass);
        },

        // animation
        animation: Alpine.$persist($themeConfig.animation),
        toggleAnimation(val) {
            if (!val) {
                val = this.animation || $themeConfig.animation; // animate__fadeIn, animate__fadeInDown, animate__fadeInLeft, animate__fadeInRight
            }

            this.animation = val;
        },

        // navbar type
        navbar: Alpine.$persist($themeConfig.navbar),
        toggleNavbar(val) {
            if (!val) {
                val = this.navbar || $themeConfig.navbar; // navbar-sticky, navbar-floating, navbar-static
            }

            this.navbar = val;
        },

        // semidark
        semidark: Alpine.$persist($themeConfig.semidark),
        toggleSemidark(val) {
            if (!val) {
                val = this.semidark || $themeConfig.semidark;
            }

            this.semidark = val;
        },

        // multi language
        locale: Alpine.$persist($themeConfig.locale),
        toggleLocale(val) {
            if (!val) {
                val = this.locale || $themeConfig.locale;
            }

            this.locale = val;
        },

        // sidebar
        sidebar: false,
        toggleSidebar() {
            this.sidebar = !this.sidebar;
        },
    });
});
})();</pre
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
    const treeview = ref(['vristo', 'assets']);
    const toggleTreeview = (name: string) => {
        if (treeview.value.includes(name)) {
            treeview.value = treeview.value.filter((d) => d != name);
        } else {
            treeview.value.push(name);
        }
    };
</script>

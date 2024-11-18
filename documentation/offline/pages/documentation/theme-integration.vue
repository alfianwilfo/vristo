<template>
    <div class="space-y-5">
        <h2 class="inline-flex rounded bg-success/20 px-6 py-3 text-2xl font-bold text-success">HTML & PHP</h2>

        <div class="panel">
            <div class="space-y-4 text-black-light">
                <p class="text-black">
                    <strong>The following process will be used to apply theme in your site.</strong>
                </p>

                <ul class="list-decimal space-y-2 pl-5">
                    <li>
                        Install Tailwind CSS: Ensure you have the latest version of Tailwind CSS installed by following the installation instructions provided
                        at
                        <a href="https://tailwindcss.com/docs/installation" class="font-semibold text-success hover:text-black" target="_blank">
                            https://tailwindcss.com/docs/installation</a
                        >.
                    </li>
                    <li>
                        Configuration File: Copy the <strong class="text-black">tailwind.config.js</strong> file from the Vristo theme and place it in the root
                        directory of your project. This configuration file allows you to customize various aspects of the Tailwind CSS framework.
                    </li>
                    <li>
                        CSS Folder: Copy the css folder from <strong class="text-black">assets/css</strong> of theme and add it to your project's
                        <strong class="text-black">assets</strong> directory. This folder contains the necessary CSS files for the theme.
                    </li>
                    <li class="space-y-2">
                        <p>
                            Google Font Link: In the <strong class="text-black">head</strong> tag of your project's HTML file, include the link to the Google
                            Font you want to use for the theme.
                        </p>
                        <highlight>
                            <pre>
&lt;link href=&quot;https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;display=swap&quot; rel=&quot;stylesheet&quot; /&gt; </pre
                            >
                        </highlight>
                        <p>
                            For add custom font follow the step from
                            <a href="/documentation/theme-color-customization" class="font-bold text-primary hover:underline">Font Family</a>.
                        </p>
                    </li>
                    <li class="space-y-2">
                        <p>
                            Compiled CSS File: In the <strong class="text-black">head</strong> tag of your HTML file, include the link to the compiled CSS file.
                            This file combines the Tailwind CSS framework and the theme-specific styles.
                        </p>
                        <highlight>
                            <pre>&lt;link href=&quot;assets/css/style.css&quot; rel=&quot;stylesheet&quot; /&gt; </pre>
                        </highlight>
                    </li>
                    <li class="space-y-2">
                        <p>
                            Development Mode: During development, run the following command in your project's terminal to continuously watch for changes and
                            recompile the CSS as needed:
                        </p>
                        <strong class="text-black"> npx tailwindcss -i assets/css/tailwind.css -o assets/css/style.css --watch </strong>
                    </li>
                    <li class="space-y-2">
                        <p>Production Mode: When you're ready to build your project for production, remember to run the following command to minify the CSS:</p>
                        <strong class="text-black"> npx tailwindcss -i assets/css/tailwind.css -o assets/css/style.css --minify </strong>
                    </li>
                </ul>
            </div>
        </div>

        <h2 class="!mt-14 inline-flex rounded bg-success/20 px-6 py-3 text-2xl font-bold text-success">Angular JS</h2>

        <div class="panel">
            <div class="space-y-4 text-black-light">
                <p class="text-black">
                    <strong>The following process will be used to apply theme in your site.</strong>
                </p>

                <ul class="list-decimal space-y-2 pl-5">
                    <li>
                        <p>
                            Install Tailwind CSS: Begin by installing the latest version of Tailwind CSS in your Angular JS project. You can do this by
                            referring to the official guide for Angular JS at
                            <a href="https://tailwindcss.com/docs/guides/angular" class="font-bold text-primary hover:underline"></a
                            >https://tailwindcss.com/docs/guides/angular.
                        </p>
                    </li>

                    <li>
                        <p>
                            Configuration File: Copy the <strong class="text-black">tailwind.config.js</strong> file from the theme and add it to the root of
                            your Angular JS project. This configuration file allows you to customize various aspects of the Tailwind CSS framework to match the
                            theme.
                        </p>
                    </li>
                    <li>
                        <p>
                            CSS Folder: Copy the css folder from <strong class="text-black">src/assets/css</strong> of the theme and add it to your Angular JS
                            project's src directory. This folder contains the necessary CSS files for the theme.
                        </p>
                    </li>
                    <li class="space-y-2">
                        <p>
                            Google Font Link: In the head tag of your Angular JS project's <strong class="text-black">index.html</strong> file, include the link
                            to the Google Font used in the theme:
                        </p>
                        <highlight>
                            <pre>
&lt;link href=&quot;https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;display=swap&quot; rel=&quot;stylesheet&quot; /&gt;</pre
                            >
                        </highlight>
                    </li>
                    <li>
                        <p>
                            CSS Import: In your Angular JS project's <strong class="text-black">angular.json</strong> file, import the theme's CSS file:
                            <strong class="text-black">styles: [ "src/assets/css/app.css" ],</strong>
                        </p>
                    </li>
                    <li>
                        <p>
                            Development Mode: During development, run the following command in your Angular JS project's terminal to start the development
                            server:
                            <strong class="text-black"> npm start</strong>
                        </p>
                    </li>
                    <li>
                        <p>
                            Production Build: When you're ready to build your Angular JS project for production, run the following command:
                            <strong class="text-black"> npm run build </strong>
                        </p>
                    </li>
                </ul>
            </div>
        </div>

        <h2 class="!mt-14 inline-flex rounded bg-success/20 px-6 py-3 text-2xl font-bold text-success">Vue JS</h2>

        <div class="panel">
            <div class="space-y-4 text-black-light">
                <p class="text-black">
                    <strong>The following process will be used to apply theme in your site.</strong>
                </p>

                <ul class="list-decimal space-y-2 pl-5">
                    <li>
                        <p>
                            Install Tailwind CSS: Begin by installing the latest version of Tailwind CSS in your Vue JS project. You can do this by referring to
                            the official Vite guide for Vue JS at
                            <a href="https://tailwindcss.com/docs/guides/vite#vue" class="font-bold text-primary hover:underline"></a
                            >https://tailwindcss.com/docs/guides/vite#vue.
                        </p>
                    </li>

                    <li>
                        <p>
                            Configuration File: Copy the <strong class="text-black">tailwind.config.cjs</strong> file from the theme and add it to the root of
                            your Vue JS project. This configuration file allows you to customize various aspects of the Tailwind CSS framework to match the
                            theme.
                        </p>
                    </li>
                    <li>
                        <p>
                            CSS Folder: Copy the css folder from <strong class="text-black">public/assets/css</strong> of the theme and add it to your Vue JS
                            project's public directory. This folder contains the necessary CSS files for the theme.
                        </p>
                    </li>
                    <li class="space-y-2">
                        <p>
                            Google Font Link: In the head tag of your Vue JS project's <strong class="text-black">index.html</strong> file, include the link to
                            the Google Font used in the theme:
                        </p>
                        <highlight>
                            <pre>
&lt;link href=&quot;https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;display=swap&quot; rel=&quot;stylesheet&quot; /&gt;</pre
                            >
                        </highlight>
                    </li>
                    <li>
                        <p>
                            CSS Import: In your Vue JS project's <strong class="text-black">/src/main.ts</strong> file, import the theme's CSS file:
                            <strong class="text-black">import '@/assets/css/app.css';</strong>
                        </p>
                    </li>
                    <li>
                        <p>
                            Development Mode: During development, run the following command in your Vue JS project's terminal to start the development server:
                            <strong class="text-black"> npm run dev </strong>
                        </p>
                    </li>
                    <li>
                        <p>
                            Production Build: When you're ready to build your Vue JS project for production, run the following command:
                            <strong class="text-black"> npm run build </strong>
                        </p>
                    </li>
                </ul>
            </div>
        </div>

        <h2 class="!mt-14 inline-flex rounded bg-success/20 px-6 py-3 text-2xl font-bold text-success">Nuxt JS</h2>

        <div class="panel">
            <div class="space-y-4 text-black-light">
                <p class="text-black">
                    <strong>The following process will be used to apply theme in your site.</strong>
                </p>

                <ul class="list-decimal space-y-2 pl-5">
                    <li>
                        <p>
                            Install Tailwind CSS: Begin by installing the latest version of Tailwind CSS in your Nuxt JS project. You can do this by referring
                            to the official guide for Nuxt JS at
                            <a href="https://tailwindcss.com/docs/guides/nuxtjs" class="font-bold text-primary hover:underline"></a
                            >https://tailwindcss.com/docs/guides/nuxtjs.
                        </p>
                    </li>

                    <li>
                        <p>
                            Configuration File: Copy the <strong class="text-black">tailwind.config.cjs</strong> file from the theme and add it to the root of
                            your Nuxt JS project. This configuration file allows you to customize various aspects of the Tailwind CSS framework to match the
                            theme.
                        </p>
                    </li>
                    <li>
                        <p>
                            CSS Folder: Copy the css folder from <strong class="text-black">assets/css</strong> of the theme and add it to your Nuxt JS
                            project's root directory. This folder contains the necessary CSS files for the theme.
                        </p>
                    </li>
                    <li class="space-y-2">
                        <p>
                            Google Font Link: In the head tag of your Nuxt JS project's <strong class="text-black">nuxt.config.ts</strong> file, include the
                            link to the Google Font used in the theme:
                        </p>
                        <highlight>
                            <pre>
export default defineNuxtConfig({
    app: {
        head: {
            link: [
                { rel: 'icon', type: 'image/x-icon', href: '/favicon.png' },
                {
                    rel: 'stylesheet',
                    href: 'https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;display=swap',
                },
            ],
        },
    },
});</pre
                            >
                        </highlight>
                    </li>

                    <li class="space-y-2">
                        <p>CSS Import: In your Nuxt JS project's <strong class="text-black">nuxt.config.ts</strong> file, add the theme's CSS file:</p>
                        <highlight>
                            <pre>
export default defineNuxtConfig({
    app: {
        css: ['~/assets/css/app.css'],
    },
});</pre
                            >
                        </highlight>
                    </li>

                    <li>
                        <p>
                            Development Mode: During development, run the following command in your Nuxt JS project's terminal to start the development server:
                            <strong class="text-black"> npm run dev </strong>
                        </p>
                    </li>
                    <li>
                        <p>
                            Production Build: When you're ready to build your Nuxt JS project for production, run the following command:
                            <strong class="text-black"> npm run build </strong>
                        </p>
                    </li>
                </ul>
            </div>
        </div>

        <h2 class="!mt-14 inline-flex rounded bg-success/20 px-6 py-3 text-2xl font-bold text-success">React JS</h2>

        <div class="panel">
            <div class="space-y-4 text-black-light">
                <p class="text-black">
                    <strong>The following process will be used to apply theme in your site.</strong>
                </p>

                <ul class="list-decimal space-y-2 pl-5">
                    <li>
                        <p>
                            Install Tailwind CSS: Begin by installing the latest version of Tailwind CSS in your React JS project. You can do this by referring
                            to the official Vite guide for React JS at
                            <a href="https://tailwindcss.com/docs/guides/vite#react" class="font-bold text-primary hover:underline"></a
                            >https://tailwindcss.com/docs/guides/vite#react.
                        </p>
                    </li>

                    <li>
                        <p>
                            Configuration File: Copy the <strong class="text-black">tailwind.config.cjs</strong> file from the theme and add it to the root of
                            your React JS project. This configuration file allows you to customize various aspects of the Tailwind CSS framework to match the
                            theme.
                        </p>
                    </li>
                    <li>
                        <p>
                            CSS Folder: Copy the css folder from <strong class="text-black">src/assets/css</strong> of the theme and add it to your React JS
                            project's src directory. This folder contains the necessary CSS files for the theme.
                        </p>
                    </li>
                    <li>
                        <p>
                            Tailwind CSS File: Copy the tailwind css file from <strong class="text-black">src/tailwind.css</strong> of the theme and add it to
                            your React JS project's src directory. This file contains the Tailwind directives and necessary CSS for the theme.
                        </p>
                    </li>
                    <li class="space-y-2">
                        <p>
                            Google Font Link: In the head tag of your React JS project's <strong class="text-black">index.html</strong> file, include the link
                            to the Google Font used in the theme:
                        </p>
                        <highlight>
                            <pre>
&lt;link href=&quot;https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;display=swap&quot; rel=&quot;stylesheet&quot; /&gt;</pre
                            >
                        </highlight>
                    </li>
                    <li>
                        <p>
                            CSS Import: In your React JS project's <strong class="text-black">/src/main.tsx</strong> file, import the theme's CSS file:
                            <strong class="text-black">import './tailwind.css';</strong>
                        </p>
                    </li>
                    <li>
                        <p>
                            Development Mode: During development, run the following command in your React JS project's terminal to start the development server:
                            <strong class="text-black"> npm run dev </strong>
                        </p>
                    </li>
                    <li>
                        <p>
                            Production Build: When you're ready to build your React JS project for production, run the following command:
                            <strong class="text-black"> npm run build </strong>
                        </p>
                    </li>
                </ul>
            </div>
        </div>

        <h2 class="!mt-14 inline-flex rounded bg-success/20 px-6 py-3 text-2xl font-bold text-success">Next JS</h2>

        <div class="panel">
            <div class="space-y-4 text-black-light">
                <p class="text-black">
                    <strong>The following process will be used to apply theme in your site.</strong>
                </p>

                <ul class="list-decimal space-y-2 pl-5">
                    <li>
                        <p>
                            Install Tailwind CSS: Begin by installing the latest version of Tailwind CSS in your Next JS project. You can do this by referring
                            to the official Vite guide for Next JS at
                            <a href="https://tailwindcss.com/docs/guides/nextjs" class="font-bold text-primary hover:underline"></a
                            >https://tailwindcss.com/docs/guides/nextjs.
                        </p>
                    </li>

                    <li>
                        <p>
                            Configuration File: Copy the <strong class="text-black">tailwind.config.cjs</strong> file from the theme and add it to the root of
                            your Next JS project. This configuration file allows you to customize various aspects of the Tailwind CSS framework to match the
                            theme.
                        </p>
                    </li>
                    <li>
                        <p>
                            CSS Folder: Copy the css folder from <strong class="text-black">styles/css</strong> of the theme and add it to your Next JS
                            project's src directory. This folder contains the necessary CSS files for the theme.
                        </p>
                    </li>
                    <li class="space-y-2">
                        <p>
                            Google Font Link: In the head tag of your Next JS project's <strong class="text-black">pages/_document.tsx</strong> file, include
                            the link to the Google Font used in the theme:
                        </p>
                        <highlight>
                            <pre>
&lt;link href=&quot;https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;display=swap&quot; rel=&quot;stylesheet&quot; /&gt;</pre
                            >
                        </highlight>
                    </li>
                    <li>
                        <p>
                            CSS Import: In your Next JS project's <strong class="text-black">pages/_app.tsx</strong> file, import the theme's CSS file:
                            <strong class="text-black">import '../styles/tailwind.css';</strong>
                        </p>
                    </li>
                    <li>
                        <p>
                            Development Mode: During development, run the following command in your Next JS project's terminal to start the development server:
                            <strong class="text-black"> npm run dev </strong>
                        </p>
                    </li>
                    <li>
                        <p>
                            Production Build: When you're ready to build your Next JS project for production, run the following command:
                            <strong class="text-black"> npm run build </strong>
                        </p>
                    </li>
                </ul>
            </div>
        </div>

        <h2 class="!mt-14 inline-flex rounded bg-success/20 px-6 py-3 text-2xl font-bold text-success">Laravel</h2>

        <div class="panel">
            <div class="space-y-4 text-black-light">
                <p class="text-black">
                    <strong>The following process will be used to apply theme in your site.</strong>
                </p>

                <ul class="list-decimal space-y-2 pl-5">
                    <li>
                        Install Tailwind CSS: Begin by installing the latest version of Tailwind CSS in your Laravel project. You can do this by referring to
                        the official guide for Laravel at
                        <a href="https://tailwindcss.com/docs/guides/laravel" class="font-semibold text-success hover:text-black" target="_blank">
                            https://tailwindcss.com/docs/guides/laravel</a
                        >.
                    </li>
                    <li>
                        Configuration File: Copy the <strong class="text-black">tailwind.config.js</strong> file from the Vristo theme and place it in the root
                        directory of your project. This configuration file allows you to customize various aspects of the Tailwind CSS framework.
                    </li>
                    <li>
                        CSS Folder: Copy the css folder from <strong class="text-black">resources/css</strong> of theme and add it to your project's
                        <strong class="text-black">assets</strong> directory. This folder contains the necessary CSS files for the theme.
                    </li>
                    <li class="space-y-2">
                        <p>
                            Google Font Link: In the <strong class="text-black">head</strong> tag of your project's
                            <strong class="text-black">default.blade.php</strong>, include the link to the Google Font you want to use for the theme.
                        </p>
                        <highlight>
                            <pre>
&lt;link href=&quot;https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;display=swap&quot; rel=&quot;stylesheet&quot; /&gt; </pre
                            >
                        </highlight>
                    </li>
                    <li class="space-y-2">
                        <p>
                            CSS Import: In your Laravel project's <strong class="text-black">resources/views/components/default.blade.php</strong> file, import
                            the theme's CSS file:
                        </p>
                        <highlight>
                            <pre>@vite(['resources/css/app.css'])</pre>
                        </highlight>
                    </li>
                    <li class="space-y-2">
                        <p>
                            Development Mode: During development, run the following command in your project's terminal to continuously watch for changes and
                            recompile the CSS as needed:
                        </p>
                        <strong class="text-black"> npm run dev </strong>
                    </li>
                    <li class="space-y-2">
                        <p>Production Mode: When you're ready to build your project for production, remember to run the following command to minify the CSS:</p>
                        <strong class="text-black"> npm run build </strong>
                    </li>
                </ul>
            </div>
        </div>

        <h2 class="!mt-14 inline-flex rounded bg-success/20 px-6 py-3 text-2xl font-bold text-success">React + Laravel</h2>

        <div class="panel">
            <div class="space-y-4 text-black-light">
                <p class="text-black">
                    <strong>The following process will be used to apply theme in your site.</strong>
                </p>

                <ul class="list-decimal space-y-2 pl-5">
                    <li>
                        <p>
                            Install Tailwind CSS: Begin by installing the latest version of Tailwind CSS in your React JS project. You can do this by referring
                            to the official Vite guide for React JS at
                            <a href="https://tailwindcss.com/docs/guides/vite#react" class="font-bold text-primary hover:underline"></a
                            >https://tailwindcss.com/docs/guides/vite#react.
                        </p>
                    </li>

                    <li>
                        <p>
                            Configuration File: Copy the <strong class="text-black">tailwind.config.cjs</strong> file from the theme and add it to the root of
                            your React JS project. This configuration file allows you to customize various aspects of the Tailwind CSS framework to match the
                            theme.
                        </p>
                    </li>
                    <li>
                        <p>
                            CSS Folder: Copy the css folder from <strong class="text-black">resources/js/src/assets/css</strong> of the theme and add it to your
                            React JS project's src directory. This folder contains the necessary CSS files for the theme.
                        </p>
                    </li>
                    <li>
                        <p>
                            Tailwind CSS File: Copy the tailwind css file from <strong class="text-black">resources/js/src/tailwind.css</strong> of the theme
                            and add it to your React JS project's src directory. This file contains the Tailwind directives and necessary CSS for the theme.
                        </p>
                    </li>
                    <li class="space-y-2">
                        <p>
                            Google Font Link: In the head tag of your React JS project's <strong class="text-black">resources/views/app.blade.php</strong> file,
                            include the link to the Google Font used in the theme:
                        </p>
                        <highlight>
                            <pre>
&lt;link href=&quot;https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;display=swap&quot; rel=&quot;stylesheet&quot; /&gt;</pre
                            >
                        </highlight>
                    </li>
                    <li>
                        <p>
                            CSS Import: In your your project's <strong class="text-black">resources/js/src/main.tsx</strong> file, import the theme's CSS file:
                            <strong class="text-black">import './tailwind.css';</strong>
                        </p>
                    </li>
                    <li>
                        <p>
                            Development Mode: During development, run the following command in your React JS project's terminal to start the development server:
                            <strong class="text-black"> npm run dev </strong>
                        </p>
                    </li>
                    <li>
                        <p>
                            Production Build: When you're ready to build your React JS project for production, run the following command:
                            <strong class="text-black"> npm run build </strong>
                        </p>
                    </li>
                </ul>
            </div>
        </div>

        <h2 class="!mt-14 inline-flex rounded bg-success/20 px-6 py-3 text-2xl font-bold text-success">Vue + Laravel</h2>

        <div class="panel">
            <div class="space-y-4 text-black-light">
                <p class="text-black">
                    <strong>The following process will be used to apply theme in your site.</strong>
                </p>

                <ul class="list-decimal space-y-2 pl-5">
                    <li>
                        <p>
                            Install Tailwind CSS: Begin by installing the latest version of Tailwind CSS in your Vue JS project. You can do this by referring to
                            the official Vite guide for Vue JS at
                            <a href="https://tailwindcss.com/docs/guides/vite#vue" class="font-bold text-primary hover:underline"></a
                            >https://tailwindcss.com/docs/guides/vite#vue.
                        </p>
                    </li>

                    <li>
                        <p>
                            Configuration File: Copy the <strong class="text-black">tailwind.config.cjs</strong> file from the theme and add it to the root of
                            your Vue JS project. This configuration file allows you to customize various aspects of the Tailwind CSS framework to match the
                            theme.
                        </p>
                    </li>
                    <li>
                        <p>
                            CSS Folder: Copy the css folder from <strong class="text-black">resources/js/src/assets/css</strong> of the theme and add it to your
                            Vue JS project's public directory. This folder contains the necessary CSS files for the theme.
                        </p>
                    </li>
                    <li class="space-y-2">
                        <p>
                            Google Font Link: In the head tag of your Vue JS project's <strong class="text-black">resources/views/app.blade.php</strong> file,
                            include the link to the Google Font used in the theme:
                        </p>
                        <highlight>
                            <pre>
&lt;link href=&quot;https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;display=swap&quot; rel=&quot;stylesheet&quot; /&gt;</pre
                            >
                        </highlight>
                    </li>
                    <li>
                        <p>
                            CSS Import: In your Vue JS project's <strong class="text-black">resources/js/src/main.ts</strong> file, import the theme's CSS file:
                            <strong class="text-black">import '@/assets/css/app.css';</strong>
                        </p>
                    </li>
                    <li>
                        <p>
                            Development Mode: During development, run the following command in your Vue JS project's terminal to start the development server:
                            <strong class="text-black"> npm run dev </strong>
                        </p>
                    </li>
                    <li>
                        <p>
                            Production Build: When you're ready to build your Vue JS project for production, run the following command:
                            <strong class="text-black"> npm run build </strong>
                        </p>
                    </li>
                </ul>
            </div>
        </div>

        <h2 class="!mt-14 inline-flex rounded bg-success/20 px-6 py-3 text-2xl font-bold text-success">Cakephp</h2>

        <div class="panel">
            <div class="space-y-4 text-black-light">
                <p class="text-black">
                    <strong>The following process will be used to apply theme in your site.</strong>
                </p>

                <ul class="list-decimal space-y-2 pl-5">
                    <li>
                        Install Tailwind CSS: Ensure you have the latest version of Tailwind CSS installed by following the installation instructions provided
                        at
                        <a href="https://tailwindcss.com/docs/installation" class="font-semibold text-success hover:text-black" target="_blank">
                            https://tailwindcss.com/docs/installation</a
                        >.
                    </li>
                    <li>
                        Configuration File: Copy the <strong class="text-black">tailwind.config.js</strong> file from the Vristo theme and place it in the root
                        directory of your project. This configuration file allows you to customize various aspects of the Tailwind CSS framework.
                    </li>
                    <li>
                        CSS Folder: Copy the css folder from <strong class="text-black">webroot/assets/css</strong> of theme and add it to your project's
                        <strong class="text-black">webroot/assets</strong> directory. This folder contains the necessary CSS files for the theme.
                    </li>
                    <li class="space-y-2">
                        <p>
                            Google Font Link: In the <strong class="text-black">head</strong> tag of your project's
                            <strong class="text-black">templates/layout/default.php</strong> file, include the link to the Google Font you want to use for the
                            theme.
                        </p>
                        <highlight>
                            <pre>
&lt;link href=&quot;https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;display=swap&quot; rel=&quot;stylesheet&quot; /&gt; </pre
                            >
                        </highlight>
                    </li>
                    <li class="space-y-2">
                        <p>
                            Compiled CSS File: In the <strong class="text-black">head</strong> tag of your
                            <strong class="text-black">templates/layout/default.php</strong> file, include the link to the compiled CSS file. This file combines
                            the Tailwind CSS framework and the theme-specific styles.
                        </p>
                        <highlight>
                            <pre>&lt;link href=&quot;assets/css/style.css&quot; rel=&quot;stylesheet&quot; /&gt; </pre>
                        </highlight>
                    </li>
                    <li class="space-y-2">
                        <p>
                            Development Mode: During development, run the following command in your project's terminal to continuously watch for changes and
                            recompile the CSS as needed:
                        </p>
                        <strong class="text-black"> npx tailwindcss -i webroot/assets/css/tailwind.css -o webroot/assets/css/style.css --watch </strong>
                    </li>
                    <li class="space-y-2">
                        <p>Production Mode: When you're ready to build your project for production, remember to run the following command to minify the CSS:</p>
                        <strong class="text-black"> npx tailwindcss -i webroot/assets/css/tailwind.css -o webroot/assets/css/style.css --minify </strong>
                    </li>
                </ul>
            </div>
        </div>

        <h2 class="!mt-14 inline-flex rounded bg-success/20 px-6 py-3 text-2xl font-bold text-success">Codeigniter</h2>

        <div class="panel">
            <div class="space-y-4 text-black-light">
                <p class="text-black">
                    <strong>The following process will be used to apply theme in your site.</strong>
                </p>

                <ul class="list-decimal space-y-2 pl-5">
                    <li>
                        Install Tailwind CSS: Ensure you have the latest version of Tailwind CSS installed by following the installation instructions provided
                        at
                        <a href="https://tailwindcss.com/docs/installation" class="font-semibold text-success hover:text-black" target="_blank">
                            https://tailwindcss.com/docs/installation</a
                        >.
                    </li>
                    <li>
                        Configuration File: Copy the <strong class="text-black">tailwind.config.js</strong> file from the Vristo theme and place it in the root
                        directory of your project. This configuration file allows you to customize various aspects of the Tailwind CSS framework.
                    </li>
                    <li>
                        CSS Folder: Copy the css folder from <strong class="text-black">public/assets/css</strong> of theme and add it to your project's
                        <strong class="text-black">public/assets</strong> directory. This folder contains the necessary CSS files for the theme.
                    </li>
                    <li class="space-y-2">
                        <p>
                            Google Font Link: In the <strong class="text-black">head</strong> tag of your project's
                            <strong class="text-black">app/Views/components/layout/default.php</strong> file, include the link to the Google Font you want to
                            use for the theme.
                        </p>
                        <highlight>
                            <pre>
&lt;link href=&quot;https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;display=swap&quot; rel=&quot;stylesheet&quot; /&gt; </pre
                            >
                        </highlight>
                        <p>
                            For add custom font follow the step from
                            <a href="/documentation/theme-color-customization" class="font-bold text-primary hover:underline">Font Family</a>.
                        </p>
                    </li>
                    <li class="space-y-2">
                        <p>
                            Compiled CSS File: In the <strong class="text-black">head</strong> tag of your
                            <strong class="text-black">app/Views/components/layout/default.php</strong> file, include the link to the compiled CSS file. This
                            file combines the Tailwind CSS framework and the theme-specific styles.
                        </p>
                        <highlight>
                            <pre>
&lt;link rel='stylesheet' type='text/css' media='screen' href=&quot;&lt;?php echo base_url('assets/css/style.css') ?&gt;&quot; /&gt; </pre
                            >
                        </highlight>
                    </li>
                    <li class="space-y-2">
                        <p>
                            Development Mode: During development, run the following command in your project's terminal to continuously watch for changes and
                            recompile the CSS as needed:
                        </p>
                        <strong class="text-black"> npx tailwindcss -i public/assets/css/tailwind.css -o public/assets/css/style.css --watch </strong>
                    </li>
                    <li class="space-y-2">
                        <p>Production Mode: When you're ready to build your project for production, remember to run the following command to minify the CSS:</p>
                        <strong class="text-black"> npx tailwindcss -i public/assets/css/tailwind.css -o public/assets/css/style.css --minify </strong>
                    </li>
                </ul>
            </div>
        </div>

        <h2 class="!mt-14 inline-flex rounded bg-success/20 px-6 py-3 text-2xl font-bold text-success">Symfony</h2>

        <div class="panel">
            <div class="space-y-4 text-black-light">
                <p class="text-black">
                    <strong>The following process will be used to apply theme in your site.</strong>
                </p>

                <ul class="list-decimal space-y-2 pl-5">
                    <li>
                        Install Tailwind CSS: Ensure you have the latest version of Tailwind CSS installed by following the installation instructions provided
                        at
                        <a href="https://tailwindcss.com/docs/guides/symfony" class="font-semibold text-success hover:text-black" target="_blank">
                            https://tailwindcss.com/docs/guides/symfony</a
                        >.
                    </li>
                    <li>
                        Configuration File: Copy the <strong class="text-black">tailwind.config.js</strong> file from the Vristo theme and place it in the root
                        directory of your project. This configuration file allows you to customize various aspects of the Tailwind CSS framework.
                    </li>
                    <li>
                        CSS Folder: Copy the css folder from <strong class="text-black">public/assets/css</strong> of theme and add it to your project's
                        <strong class="text-black">assets</strong> directory. This folder contains the necessary CSS files for the theme.
                    </li>
                    <li class="space-y-2">
                        <p>
                            Google Font Link: In the <strong class="text-black">head</strong> tag of your project's
                            <strong class="text-black">templates/components/layout/default.html.twig</strong> file, include the link to the Google Font you want
                            to use for the theme.
                        </p>
                        <highlight>
                            <pre>
&lt;link href=&quot;https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;display=swap&quot; rel=&quot;stylesheet&quot; /&gt; </pre
                            >
                        </highlight>
                    </li>
                    <li class="space-y-2">
                        <p>
                            Compiled CSS File: In the <strong class="text-black">head</strong> tag of your
                            <strong class="text-black">templates/components/layout/default.html.twig</strong> file, include the link to the compiled CSS file.
                            This file combines the Tailwind CSS framework and the theme-specific styles.
                        </p>
                        <highlight>
                            <pre>
 &lt;link rel='stylesheet' type='text/css' media='screen' href=&quot;&#123;&#123; asset('assets/css/style.css') &#125;&#125;&quot; /&gt; </pre
                            >
                        </highlight>
                    </li>
                    <li class="space-y-2">
                        <p>
                            Development Mode: During development, run the following command in your project's terminal to continuously watch for changes and
                            recompile the CSS as needed:
                        </p>
                        <strong class="text-black"> npm run dev </strong>
                    </li>
                    <li class="space-y-2">
                        <p>Production Mode: When you're ready to build your project for production, remember to run the following command to minify the CSS:</p>
                        <strong class="text-black"> npm run build </strong>
                    </li>
                </ul>
            </div>
        </div>

        <h2 class="!mt-14 inline-flex rounded bg-success/20 px-6 py-3 text-2xl font-bold text-success">Django</h2>

        <div class="panel">
            <div class="space-y-4 text-black-light">
                <p class="text-black">
                    <strong>The following process will be used to apply theme in your site.</strong>
                </p>

                <ul class="list-decimal space-y-2 pl-5">
                    <li>
                        Install Tailwind CSS: Ensure you have the latest version of Tailwind CSS installed by running the following command
                        <strong class="text-black">python3 -m pip install django-tailwind</strong>
                        <!-- <a
                            href="https://django-tailwind.readthedocs.io/en/latest/installation.html"
                            class="font-semibold text-success hover:text-black"
                            target="_blank"
                        >
                            https://django-tailwind.readthedocs.io/en/latest/installation.html</a
                        >. -->
                    </li>
                    <li>
                        Configuration File: Copy the <strong class="text-black">static_src/tailwind.config.js</strong> file from the Vristo theme and place it
                        in the static_src directory of your project. This configuration file allows you to customize various aspects of the Tailwind CSS
                        framework.
                    </li>
                    <li>
                        CSS Folder: Copy the css folder from <strong class="text-black">static/assets/css</strong> of theme and add it to your project's
                        <strong class="text-black">assets</strong> directory. This folder contains the necessary CSS files for the theme.
                    </li>
                    <li class="space-y-2">
                        <p>
                            Google Font Link: In the <strong class="text-black">head</strong> tag of your project's
                            <strong class="text-black">main/templates/components/layouts/default.html</strong> file, include the link to the Google Font you
                            want to use for the theme.
                        </p>
                        <highlight>
                            <pre>
&lt;link href=&quot;https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;display=swap&quot; rel=&quot;stylesheet&quot; /&gt; </pre
                            >
                        </highlight>
                    </li>
                    <li class="space-y-2">
                        <p>
                            Compiled CSS File: In the <strong class="text-black">head</strong> tag of your
                            <strong class="text-black">main/templates/components/layouts/default.html</strong> file, include the link to the compiled CSS file.
                            This file combines the Tailwind CSS framework and the theme-specific styles.
                        </p>
                        <highlight>
                            <pre>
&lt;link rel='stylesheet' type='text/css' media='screen' href=&quot;&#123;% static 'assets/css/styles.css' %$#125;&quot;&gt; </pre
                            >
                        </highlight>
                    </li>
                    <li class="space-y-2">
                        <p>
                            Development Mode: During development, run the following command in your project's terminal to continuously watch for changes and
                            recompile the CSS as needed:
                        </p>
                        <strong class="text-black"> python3 manage.py tailwind start </strong>
                    </li>
                    <li class="space-y-2">
                        <p>Production Mode: When you're ready to build your project for production, remember to run the following command to minify the CSS:</p>
                        <strong class="text-black"> python3 manage.py tailwind build </strong>
                    </li>
                </ul>
            </div>
        </div>

        <h2 class="!mt-14 inline-flex rounded bg-success/20 px-6 py-3 text-2xl font-bold text-success">Ruby</h2>

        <div class="panel">
            <div class="space-y-4 text-black-light">
                <p class="text-black">
                    <strong>The following process will be used to apply theme in your site.</strong>
                </p>

                <ul class="list-decimal space-y-2 pl-5">
                    <li>
                        Install Tailwind CSS: Begin by installing the latest version of Tailwind CSS in your project. You can do this by referring to the
                        official guide for Ruby on Rails at
                        <a href="https://tailwindcss.com/docs/guides/ruby-on-rails" class="font-semibold text-success hover:text-black" target="_blank">
                            https://tailwindcss.com/docs/guides/ruby-on-rails</a
                        >.
                    </li>
                    <li>
                        Configuration File: Copy the <strong class="text-black">tailwind.config.js</strong> file from the Vristo theme and place it in the root
                        directory of your project. This configuration file allows you to customize various aspects of the Tailwind CSS framework.
                    </li>
                    <li>
                        CSS Folder: Copy the css folder from <strong class="text-black">public/assets/css</strong> of theme and add it to your project's
                        <strong class="text-black">assets</strong> directory. This folder contains the necessary CSS files for the theme.
                    </li>
                    <li class="space-y-2">
                        <p>
                            Google Font Link: In the <strong class="text-black">head</strong> tag of your project's
                            <strong class="text-black">app/views/layouts/default.html.erb</strong> file, include the link to the Google Font you want to use for
                            the theme.
                        </p>
                        <highlight>
                            <pre>
&lt;link href=&quot;https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;display=swap&quot; rel=&quot;stylesheet&quot; /&gt; </pre
                            >
                        </highlight>
                    </li>
                    <li class="space-y-2">
                        <p>
                            Compiled CSS File: In the <strong class="text-black">head</strong> tag of your HTML file, include the link to the compiled CSS file.
                            This file combines the Tailwind CSS framework and the theme-specific styles.
                        </p>
                        <highlight>
                            <pre>&lt;link href=&quot;/assets/css/style.css&quot; type='text/css' rel=&quot;stylesheet&quot; /&gt; </pre>
                        </highlight>
                    </li>
                    <li class="space-y-2">
                        <p>
                            Development Mode: During development, run the following command in your project's terminal to continuously watch for changes and
                            recompile the CSS as needed:
                        </p>
                        <strong class="text-black"> npx tailwindcss -i ./public/assets/css/tailwind.css -o ./public/assets/css/style.css --watch </strong>
                    </li>
                    <li class="space-y-2">
                        <p>Production Mode: When you're ready to build your project for production, remember to run the following command to minify the CSS:</p>
                        <strong class="text-black"> npx tailwindcss -i ./public/assets/css/tailwind.css -o ./public/assets/css/style.css --minify </strong>
                    </li>
                </ul>
            </div>
        </div>

        <h2 class="!mt-14 inline-flex rounded bg-success/20 px-6 py-3 text-2xl font-bold text-success">Adonis</h2>

        <div class="panel">
            <div class="space-y-4 text-black-light">
                <p class="text-black">
                    <strong>The following process will be used to apply theme in your site.</strong>
                </p>

                <ul class="list-decimal space-y-2 pl-5">
                    <li>
                        Install Tailwind CSS: Begin by installing the latest version of Tailwind CSS in your project. You can do this by referring to the
                        official guide for Adonis JS at
                        <a href="https://tailwindcss.com/docs/guides/adonisjs" class="font-semibold text-success hover:text-black" target="_blank">
                            https://tailwindcss.com/docs/guides/adonisjs</a
                        >.
                    </li>
                    <li>
                        Configuration File: Copy the <strong class="text-black">tailwind.config.js</strong> file from the Vristo theme and place it in the root
                        directory of your project. This configuration file allows you to customize various aspects of the Tailwind CSS framework.
                    </li>
                    <li>
                        CSS Folder: Copy the css folder from <strong class="text-black">resources/assets/css</strong> of theme and add it to your project's
                        <strong class="text-black">assets</strong> directory. This folder contains the necessary CSS files for the theme.
                    </li>
                    <li class="space-y-2">
                        <p>
                            Google Font Link: In the <strong class="text-black">head</strong> tag of your project's
                            <strong class="text-black">resources/views/components/layout/default.edge</strong> file, include the link to the Google Font you
                            want to use for the theme.
                        </p>
                        <highlight>
                            <pre>
&lt;link href=&quot;https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;display=swap&quot; rel=&quot;stylesheet&quot; /&gt; </pre
                            >
                        </highlight>
                    </li>
                    <li class="space-y-2">
                        <p>
                            CSS Import: In your project's <strong class="text-black">resources/views/components/layout/default.edge</strong> file, import the
                            theme's CSS file:
                            <strong class="text-black">@entryPointStyles('app')</strong>
                        </p>
                    </li>
                    <li class="space-y-2">
                        <p>
                            Development Mode: During development, run the following command in your Adonis JS project's terminal to start the development
                            server:
                            <strong class="text-black"> npm run dev </strong>
                        </p>
                    </li>
                    <li>
                        <p>
                            Production Build: When you're ready to build your Adonis JS project for production, run the following command:
                            <strong class="text-black"> npm run build </strong>
                        </p>
                    </li>
                </ul>
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
</script>

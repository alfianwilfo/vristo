<template>
    <div class="space-y-5">
        <h2 class="text-2xl font-bold text-primary">Theme Color Customization</h2>

        <div class="panel space-y-6">
            <h3 class="text-xl font-bold text-success">tailwind.config.js</h3>

            <div class="space-y-4 text-black-light">
                <p><strong class="text-black">Font Family :</strong> To add Google Fonts or a custom font using Tailwind CSS, follow these steps:</p>
                <ul class="list-decimal space-y-3 pl-5">
                    <li class="space-y-2">
                        <div>
                            Link Google Fonts (if using Google Fonts) In your HTML file, locate the <strong>head</strong> section and add the following code to
                            link the desired font from Google Fonts:
                        </div>
                        <highlight>
                            <pre>
  &lt;link href=&quot;https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;amp;display=swap&quot; rel=&quot;stylesheet&quot;&gt; </pre
                            >
                        </highlight>
                    </li>
                    <li>
                        Use a Custom Font (if applicable) If you have your own custom font files, follow these steps:
                        <ul class="mt-2 list-disc space-y-2 pl-5">
                            <li>Prepare Font Files Place your font files (e.g., .woff2, .woff, .ttf) inside the assets/fonts/ directory of your project.</li>
                            <li class="space-y-2">
                                <div>
                                    Declare @font-face in CSS In your CSS file (or within a <strong>style</strong> tag in your HTML file), define the @font-face
                                    rule to specify the custom font and its location. Here's an example:
                                </div>
                                <highlight>
                                    <pre>
  @font-face {
    font-family: 'Nunito';
    src: url('/assets/fonts/Nunito.woff2') format('woff2'),
        url('/assets/fonts/Nunito.woff') format('woff'),
        url('/assets/fonts/Nunito.ttf') format('truetype');
  }</pre
                                    >
                                </highlight>
                                <div>Adjust the font-family name and the src URLs according to your custom font's name and file paths.</div>
                            </li>
                            <li class="space-y-2">
                                <div>
                                    Configure Tailwind CSS In your Tailwind configuration file (tailwind.config.js), locate the theme section and add or update
                                    the fontFamily property. Here's an example:
                                </div>
                                <highlight>
                                    <pre>
  module.exports = {
    theme: {
        fontFamily: {
            nunito: ['Nunito', 'sans-serif'],
        },
        // Other theme configurations...
    },
    // Other Tailwind CSS configurations...
  }</pre
                                    >
                                </highlight>
                                <div>
                                    Add a new entry to the fontFamily object with a key-value pair where the key is the name you want to use for the font family
                                    (e.g., nunito), and the value is an array of font names. In this example, we used 'Nunito' as the primary font and
                                    'sans-serif' as the fallback font.
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="space-y-2">
                        <div>
                            Update Font Class or Usage Replace the existing font class in your HTML or component code with the new font family class defined in
                            Step 3. For example, if you previously used a class named font-nunito, update it to use the font family class:
                        </div>
                        <highlight>
                            <pre>  &lt;div class=&quot;font-nunito&quot;&gt;Text using the Nunito font&lt;/div&gt; </pre>
                        </highlight>
                    </li>
                </ul>
            </div>

            <div class="space-y-4 text-black-light">
                <p>
                    <strong class="text-black">Theme Colors :</strong> You can update your own custom colors in tailwind.config.js. This colors will reflect in
                    whole project once you run the project.
                </p>

                <highlight>
                    <pre>
  colors: {
    primary: {
        DEFAULT: '#4361ee',
        light: '#eaf1ff',
        'dark-light': 'rgba(67,97,238,.15)',
    },
    secondary: {
        DEFAULT: '#805dca',
        light: '#ebe4f7',
        'dark-light': 'rgb(128 93 202 / 15%)',
    },
    success: {
        DEFAULT: '#00ab55',
        light: '#ddf5f0',
        'dark-light': 'rgba(0,171,85,.15)',
    },
    danger: {
        DEFAULT: '#e7515a',
        light: '#fff5f5',
        'dark-light': 'rgba(231,81,90,.15)',
    },
    warning: {
        DEFAULT: '#e2a03f',
        light: '#fff9ed',
        'dark-light': 'rgba(226,160,63,.15)',
    },
    info: {
        DEFAULT: '#2196f3',
        light: '#e7f7ff',
        'dark-light': 'rgba(33,150,243,.15)',
    },
    dark: {
        DEFAULT: '#3b3f5c',
        light: '#eaeaec',
        'dark-light': 'rgba(59,63,92,.15)',
    },
    black: {
        DEFAULT: '#0e1726',
        light: '#e3e4eb',
        'dark-light': 'rgba(14,23,38,.15)',
    },
    white: {
        DEFAULT: '#ffffff',
        light: '#e0e6ed',
        dark: '#888ea8',
    },
  } </pre
                    >
                </highlight>
            </div>
        </div>
    </div>
</template>
<script lang="ts" setup>
    import highlight from '@/components/plugins/highlight.vue';
    definePageMeta({
        layout: 'app-layout',
    });
</script>

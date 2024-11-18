<template>
    <div class="space-y-5">
        <h2 class="text-2xl font-bold text-primary">Getting Started</h2>

        <div class="panel">
            <h3 class="mb-5 text-xl font-bold text-success">What is Layouts covers?</h3>

            <div class="space-y-4 text-black-light">
                <p>Layouts covers all theme configuration settings if you want to apply manually in project.</p>

                <p>
                    i.e. if you want apply <code class="text-black">dark theme</code> then you can directly add <code class="text-black">dark</code> class in
                    body.
                </p>

                <p>You can set below layout, theme, menu style etc.</p>

                <ul class="list-disc space-y-2 pl-5">
                    <li>
                        <strong>Layout Style-</strong> You can set manually by adding layout class from <code class="text-black">[full, boxed-layout]</code> to
                        body.
                    </li>
                    <li>
                        <strong>Theme Style-</strong> You can set manually by adding theme class from <code class="text-black">[light, dark, system]</code> to
                        body.
                    </li>
                    <li>
                        <strong>Navigation Style-</strong> You can set manually by adding navigation class from
                        <code class="text-black">[vertical, collapsible-vertical, horizontal]</code> to body.
                    </li>
                    <li>
                        <strong>Header Style-</strong> You can set manually by adding header class from
                        <code class="text-black">[navbar-sticky, navbar-floating, navbar-static]</code> to body.
                    </li>
                    <li>
                        <strong>Animation Style-</strong> You can set manually by adding animation class from
                        <code class="text-black"
                            >[animate__fadeIn, animate__fadeInDown, animate__fadeInUp, animate__fadeInLeft, animate__fadeInRight, animate__slideInDown,
                            animate__slideInLeft, animate__slideInRight, animate__zoomIn]</code
                        >
                        to body.
                    </li>
                    <li><strong>Semidark Style-</strong> You can set manually by adding dark class to navigation block.</li>
                </ul>

                <p>Note: You can use such as an all above style using any combination. there is no restriction.</p>
            </div>
        </div>
    </div>
</template>
<script lang="ts" setup>
    definePageMeta({
        layout: 'app-layout',
    });
</script>

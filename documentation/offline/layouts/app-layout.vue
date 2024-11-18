<template>
    <div class="relative min-h-screen bg-[#fafafa] font-nunito text-base font-medium text-black antialiased">
        <div class="flex">
            <layout-sidebar :class="{ '!left-0': isShowSidebar }" @closeSidebar="toggleSidebar()"/>
            <div v-if="isShowSidebar" class="fixed inset-0 z-50 bg-[black]/60 lg:hidden" @click="isShowSidebar = false"></div>
            <div class="flex-1">
                <layout-header layoutType="app-layout" @toggleSidebar="isShowSidebar = !isShowSidebar" />

                <div class="p-6">
                    <div class="mx-auto grid max-w-7xl grid-cols-1">
                        <NuxtPage />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
    const isShowSidebar = ref(false);
    const toggleSidebar = () =>{
        setTimeout(() => {
            isShowSidebar.value = false;
        }, 100);
    }
</script>

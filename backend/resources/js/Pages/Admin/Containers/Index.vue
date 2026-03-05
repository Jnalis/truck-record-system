<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import AdminPanelPage from '@/Pages/Admin/AdminPanelPage.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
    title: { type: String, default: 'Container' },
});
</script>

<template>
    <Head :title="title" />
    <AuthenticatedLayout>
        <template #header>
            <h1 class="text-xl font-semibold text-slate-900">{{ title }}</h1>
        </template>
        <AdminPanelPage :title="title" />
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import AdminDashboard from '@/Pages/Dashboard/AdminDashboard.vue';
import UserDashboard from '@/Pages/Dashboard/UserDashboard.vue';
import { Head, usePage } from '@inertiajs/vue3';

const page = usePage();
const user = page.props.auth?.user;
const role = user?.role ?? 'user';
const isAdmin = role === 'admin';
const userName = user?.name ?? 'User';
</script>

<template>
    <Head :title="isAdmin ? 'Admin Dashboard' : 'Dashboard'" />

    <AuthenticatedLayout>
        <AdminDashboard v-if="isAdmin" :user-name="userName" />
        <UserDashboard v-else :user-name="userName" />
    </AuthenticatedLayout>
</template>

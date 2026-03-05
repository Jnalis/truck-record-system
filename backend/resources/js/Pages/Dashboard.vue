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
        <template #header>
            <div class="flex flex-col gap-2 sm:flex-row sm:items-end sm:justify-between">
                <div>
                    <p
                        class="text-[0.7rem] font-medium uppercase tracking-[0.18em] text-indigo-600"
                    >
                        {{ isAdmin ? 'Admin' : 'Overview' }}
                    </p>
                    <h2
                        class="mt-1 text-xl font-semibold leading-tight tracking-tight text-slate-900 sm:text-2xl"
                    >
                        Good {{ isAdmin ? 'day' : 'morning' }}, {{ userName }}.
                    </h2>
                    <p class="mt-1 text-sm text-slate-600">
                        {{ isAdmin
                            ? "Here's the admin overview of your product today."
                            : "Here's what's happening for you today."
                        }}
                    </p>
                </div>

                <button
                    v-if="isAdmin"
                    type="button"
                    class="mt-3 inline-flex items-center gap-2 rounded-lg bg-indigo-600 px-4 py-2 text-xs font-semibold tracking-tight text-white shadow shadow-indigo-600/30 hover:bg-indigo-500 sm:mt-0"
                >
                    <span
                        class="inline-flex h-5 w-5 items-center justify-center rounded-md bg-indigo-500/80 text-[0.65rem]"
                    >
                        +
                    </span>
                    New Order
                </button>
            </div>
        </template>

        <AdminDashboard v-if="isAdmin" :user-name="userName" />
        <UserDashboard v-else :user-name="userName" />
    </AuthenticatedLayout>
</template>

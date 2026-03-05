<script setup>
import { ref, computed, onMounted, onBeforeUnmount } from 'vue';
import { Link, usePage } from '@inertiajs/vue3';
import AppFooter from '@/Components/AppFooter.vue';

const showingMobileSidebar = ref(false);
const showingUserMenu = ref(false);
const isOnline = ref(true);

const page = usePage();
const isAdmin = computed(() => page.props.auth?.user?.role === 'admin');

function setOnline() {
    isOnline.value = true;
}
function setOffline() {
    isOnline.value = false;
}

onMounted(() => {
    if (typeof navigator !== 'undefined') {
        isOnline.value = navigator.onLine;
        window.addEventListener('online', setOnline);
        window.addEventListener('offline', setOffline);
    }
});

onBeforeUnmount(() => {
    if (typeof window !== 'undefined') {
        window.removeEventListener('online', setOnline);
        window.removeEventListener('offline', setOffline);
    }
});
</script>

<template>
    <div class="min-h-screen bg-slate-100 text-slate-800">
        <div class="flex min-h-screen">
            <!-- Desktop sidebar -->
            <aside
                class="hidden w-72 shrink-0 border-r border-slate-200 bg-white px-4 py-6 shadow-sm md:flex md:flex-col"
            >
                <div class="flex items-center gap-3 px-2">
                    <div
                        class="flex h-9 w-9 items-center justify-center rounded-lg bg-indigo-600 text-sm font-semibold text-white"
                    >
                        JS
                    </div>
                    <div class="text-sm font-semibold tracking-tight text-slate-800">
                        Jnet Solution
                    </div>
                </div>

                <nav class="mt-8 flex-1 space-y-0.5 text-sm">
                    <!-- Dashboard (all users) -->
                    <Link
                        :href="route('dashboard')"
                        :class="[
                            'flex items-center gap-2 rounded-lg px-2.5 py-2 text-xs font-medium transition',
                            route().current('dashboard')
                                ? 'bg-slate-100 text-slate-900'
                                : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900',
                        ]"
                    >
                        <svg class="h-5 w-5 shrink-0 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                        </svg>
                        Dashboard
                    </Link>

                    <!-- Admin-only menu -->
                    <template v-if="isAdmin">
                        <Link
                            :href="route('admin.users')"
                            :class="[
                                'flex items-center gap-2 rounded-lg px-2.5 py-2 text-xs font-medium transition',
                                route().current('admin.users')
                                    ? 'bg-slate-100 text-slate-900'
                                    : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900',
                            ]"
                        >
                            <svg class="h-5 w-5 shrink-0 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            User
                        </Link>

                        <Link
                            :href="route('admin.trucks')"
                            :class="[
                                'flex items-center gap-2 rounded-lg px-2.5 py-2 text-xs font-medium transition',
                                route().current('admin.trucks')
                                    ? 'bg-slate-100 text-slate-900'
                                    : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900',
                            ]"
                        >
                            <svg class="h-5 w-5 shrink-0 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                            </svg>
                            Truck
                        </Link>

                        <Link
                            :href="route('admin.containers')"
                            :class="[
                                'flex items-center gap-2 rounded-lg px-2.5 py-2 text-xs font-medium transition',
                                route().current('admin.containers')
                                    ? 'bg-slate-100 text-slate-900'
                                    : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900',
                            ]"
                        >
                            <svg class="h-5 w-5 shrink-0 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                            </svg>
                            Container
                        </Link>
                        <Link
                            :href="route('admin.documents')"
                            :class="[
                                'flex items-center gap-2 rounded-lg px-2.5 py-2 text-xs font-medium transition',
                                route().current('admin.documents')
                                    ? 'bg-slate-100 text-slate-900'
                                    : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900',
                            ]"
                        >
                            <svg class="h-5 w-5 shrink-0 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            Documents
                        </Link>
                        <Link
                            :href="route('admin.routes')"
                            :class="[
                                'flex items-center gap-2 rounded-lg px-2.5 py-2 text-xs font-medium transition',
                                route().current('admin.routes')
                                    ? 'bg-slate-100 text-slate-900'
                                    : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900',
                            ]"
                        >
                            <svg class="h-5 w-5 shrink-0 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                            </svg>
                            Route
                        </Link>
                    </template>
                </nav>

                <div class="mt-4 border-t border-slate-200 pt-4 text-[0.7rem] text-slate-500">
                    <div class="flex items-center justify-between">
                        <span>System status</span>
                        <span
                            :class="[
                                'inline-flex items-center gap-1 rounded-md px-2 py-1',
                                isOnline
                                    ? 'bg-emerald-100 text-emerald-700'
                                    : 'bg-red-100 text-red-700',
                            ]"
                        >
                            <span
                                :class="[
                                    'h-1.5 w-1.5 rounded-full',
                                    isOnline ? 'bg-emerald-500' : 'bg-red-500',
                                ]"
                            ></span>
                            {{ isOnline ? 'Online' : 'Offline' }}
                        </span>
                    </div>
                </div>
            </aside>

            <!-- Mobile sidebar -->
            <div
                class="fixed inset-0 z-40 bg-slate-900/40 backdrop-blur-sm md:hidden"
                v-if="showingMobileSidebar"
                @click.self="showingMobileSidebar = false"
            >
                <aside
                    class="flex h-full w-72 flex-col border-r border-slate-200 bg-white px-4 py-6 shadow-xl"
                >
                    <div class="flex items-center justify-between px-2">
                        <div class="flex items-center gap-3">
                            <div
                                class="flex h-9 w-9 items-center justify-center rounded-lg bg-indigo-600 text-sm font-semibold text-white"
                            >
                                JS
                            </div>
                            <div class="text-sm font-semibold tracking-tight text-slate-800">
                                Jnet Solution
                            </div>
                        </div>
                        <button
                            type="button"
                            class="inline-flex h-8 w-8 items-center justify-center rounded-full border border-slate-300 text-slate-500 hover:bg-slate-100 hover:text-slate-700"
                            @click="showingMobileSidebar = false"
                        >
                            <svg
                                class="h-4 w-4"
                                viewBox="0 0 20 20"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M5 5L15 15M15 5L5 15"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </button>
                    </div>

                    <nav class="mt-8 flex-1 space-y-0.5 text-sm">
                        <Link
                            :href="route('dashboard')"
                            class="flex items-center gap-2 rounded-lg px-2.5 py-2 text-xs font-medium text-slate-600 hover:bg-slate-100"
                            @click="showingMobileSidebar = false"
                        >
                            <svg class="h-5 w-5 shrink-0 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6z" />
                            </svg>
                            Dashboard
                        </Link>
                        <template v-if="isAdmin">
                            <Link :href="route('admin.users')" class="flex items-center gap-2 rounded-lg px-2.5 py-2 text-xs font-medium text-slate-600 hover:bg-slate-100" @click="showingMobileSidebar = false">User</Link>
                            <Link :href="route('admin.trucks')" class="flex items-center gap-2 rounded-lg px-2.5 py-2 text-xs font-medium text-slate-600 hover:bg-slate-100" @click="showingMobileSidebar = false">Truck</Link>
                            <Link :href="route('admin.containers')" class="flex items-center gap-2 rounded-lg px-2.5 py-2 text-xs font-medium text-slate-600 hover:bg-slate-100" @click="showingMobileSidebar = false">Container</Link>
                            <Link :href="route('admin.documents')" class="flex items-center gap-2 rounded-lg px-2.5 py-2 text-xs font-medium text-slate-600 hover:bg-slate-100" @click="showingMobileSidebar = false">Documents</Link>
                            <Link :href="route('admin.routes')" class="flex items-center gap-2 rounded-lg px-2.5 py-2 text-xs font-medium text-slate-600 hover:bg-slate-100" @click="showingMobileSidebar = false">Route</Link>
                        </template>
                    </nav>
                </aside>
            </div>

            <!-- Main content -->
            <div class="flex min-h-screen flex-1 flex-col bg-slate-100">
                <!-- Top bar -->
                <header
                    class="flex h-16 items-center justify-between border-b border-slate-200 bg-white px-4 shadow-sm md:px-6"
                >
                    <div class="flex items-center gap-3">
                        <button
                            type="button"
                            class="inline-flex h-8 w-8 items-center justify-center rounded-full border border-slate-300 text-slate-600 hover:bg-slate-100 hover:text-slate-800 md:hidden"
                            @click="showingMobileSidebar = true"
                        >
                            <svg
                                class="h-4 w-4"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M4 6H20M4 12H20M4 18H14"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                            </svg>
                        </button>
                        <div>
                            <p
                                class="text-[0.7rem] font-medium uppercase tracking-[0.18em] text-indigo-600"
                            >
                                Good morning
                            </p>
                            <h1
                                class="text-sm font-semibold leading-tight text-slate-800 md:text-base"
                            >
                                Here's what's happening with your product today.
                            </h1>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <button
                            type="button"
                            class="inline-flex h-8 w-8 items-center justify-center rounded-full border border-slate-200 text-slate-600 hover:bg-slate-100 hover:text-slate-800"
                        >
                            <span class="sr-only">Notifications</span>
                            <svg
                                class="h-4 w-4"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M12 3C9.51472 3 7.5 5.01472 7.5 7.5V9.0208C7.5 9.70938 7.28956 10.3826 6.89727 10.9511L5.63246 12.7535C4.80362 13.9437 5.65702 15.6 7.10866 15.6H16.8913C18.343 15.6 19.1964 13.9437 18.3675 12.7535L17.1027 10.9511C16.7104 10.3826 16.5 9.70938 16.5 9.0208V7.5C16.5 5.01472 14.4853 3 12 3Z"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                                <path
                                    d="M10 18C10.3111 18.9105 11.0905 19.5 12 19.5C12.9095 19.5 13.6889 18.9105 14 18"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                            </svg>
                        </button>

                        <div class="relative">
                            <button
                                type="button"
                                class="inline-flex items-center gap-2 rounded-full border border-slate-200 bg-white px-2.5 py-1.5 text-xs font-medium text-slate-700 shadow-sm hover:bg-slate-50"
                                @click="showingUserMenu = !showingUserMenu"
                            >
                                <span
                                    class="inline-flex h-6 w-6 items-center justify-center rounded-full bg-gradient-to-br from-indigo-500 to-fuchsia-500 text-[0.7rem] font-semibold text-white"
                                >
                                    {{ ($page.props.auth.user.name || 'User')
                                        .split(' ')
                                        .map((n) => n[0])
                                        .join('')
                                        .slice(0, 2) }}
                                </span>
                                <span
                                    class="hidden max-w-[7rem] truncate text-[0.7rem] md:inline"
                                >
                                    {{ $page.props.auth.user.name }}
                                </span>
                                <svg
                                    class="h-3 w-3 text-slate-400"
                                    viewBox="0 0 20 20"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M5 7L10 12L15 7"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                            </button>

                            <div
                                v-if="showingUserMenu"
                                class="absolute right-0 z-50 mt-2 w-44 rounded-lg border border-slate-200 bg-white py-1 text-xs shadow-xl"
                            >
                                <div class="px-3 pb-2 pt-1 text-[0.65rem] text-slate-500">
                                    Signed in as
                                    <div class="truncate text-[0.7rem] text-slate-800">
                                        {{ $page.props.auth.user.email }}
                                    </div>
                                </div>
                                <Link
                                    :href="route('profile.edit')"
                                    class="block px-3 py-1.5 text-left text-[0.75rem] text-slate-700 hover:bg-slate-50"
                                >
                                    Profile
                                </Link>
                                <Link
                                    :href="route('logout')"
                                    method="post"
                                    as="button"
                                    class="block w-full px-3 py-1.5 text-left text-[0.75rem] text-rose-600 hover:bg-rose-50"
                                >
                                    Log out
                                </Link>
                            </div>
                        </div>
                    </div>
                </header>

                <!-- Page content -->
                <main class="flex-1 overflow-y-auto bg-slate-100">
                    <div
                        class="mx-auto max-w-6xl px-4 py-6 md:px-6 md:py-8"
                    >
                        <div v-if="$slots.header" class="mb-6">
                            <slot name="header" />
                        </div>

                        <slot />
                    </div>
                </main>

                <!-- Footer: bottom, full width, white bar, centered -->
                <AppFooter />
            </div>
        </div>
    </div>
</template>

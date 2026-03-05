<script setup>
import { Link, usePage } from '@inertiajs/vue3';
import AppFooter from '@/Components/AppFooter.vue';

// Use different image for login vs register
const page = usePage();
const isLogin = () => (page.component || '').includes('Login');
const panelImage = isLogin() ? '/images/auth/login.jpg' : '/images/auth/register.jpg';
</script>

<template>
    <div class="flex min-h-screen flex-col bg-slate-100 text-slate-800">
        <div class="flex min-h-0 flex-1 flex-col lg:flex-row">
            <!-- Left panel: photo + branding -->
            <div
                class="relative hidden flex-1 flex-col overflow-hidden border-r border-slate-200 bg-slate-200 lg:flex"
            >
                <!-- Image shifted up so footer area is clear -->
                <div class="relative min-h-[50vh] flex-1 overflow-hidden">
                    <img
                        :src="panelImage"
                        alt=""
                        class="absolute inset-0 h-full w-full object-cover object-[center_20%]"
                    />
                    <div
                        class="absolute inset-0 bg-gradient-to-b from-white/85 via-white/60 to-white/70"
                        aria-hidden="true"
                    />
                    <!-- Logo -->
                    <div class="relative z-10 px-10 pt-8">
                        <div class="flex items-center gap-3">
                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-xl bg-indigo-600 text-sm font-bold text-white shadow-lg shadow-indigo-600/30"
                            >
                                JS
                            </div>
                            <div class="text-base font-semibold tracking-tight text-slate-800">
                                Jnet Solution
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Auth form -->
            <div class="flex flex-1 items-center justify-center bg-slate-100 px-4 py-10 sm:px-6 lg:px-12">
                <div
                    class="w-full max-w-md rounded-2xl border border-slate-200 bg-white p-8 shadow-xl shadow-slate-200/50"
                >
                    <div class="mb-8 flex items-center justify-between">
                        <Link href="/" class="flex items-center gap-2.5">
                            <div
                                class="flex h-9 w-9 items-center justify-center rounded-xl bg-indigo-600 text-xs font-bold text-white shadow-md shadow-indigo-600/30"
                            >
                                JS
                            </div>
                            <span
                                class="text-sm font-semibold tracking-tight text-slate-800"
                            >
                                Jnet Solution
                            </span>
                        </Link>
                    </div>

                    <slot />
                </div>
            </div>
        </div>

        <!-- Footer: bottom, full width, white bar, centered -->
        <AppFooter />
    </div>
</template>

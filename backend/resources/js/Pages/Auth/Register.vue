<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Create account" />

        <div class="mb-6">
            <h2
                class="text-xl font-semibold tracking-tight text-slate-900 sm:text-2xl"
            >
                Create your account
            </h2>
            <p class="mt-1 text-sm text-slate-600">
                Start managing your fleet and shipments in one place.
            </p>
        </div>

        <form @submit.prevent="submit" class="space-y-4">
            <div>
                <InputLabel
                    for="name"
                    value="Name"
                    class="text-xs font-medium text-slate-700"
                />

                <TextInput
                    id="name"
                    type="text"
                    class="mt-1 block w-full border-slate-300 bg-white text-slate-900 placeholder:text-slate-400 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    placeholder="Your name"
                    v-model="form.name"
                    required
                    autofocus
                    autocomplete="name"
                />

                <InputError
                    class="mt-1 text-xs text-rose-600"
                    :message="form.errors.name"
                />
            </div>

            <div>
                <InputLabel
                    for="email"
                    value="Email"
                    class="text-xs font-medium text-slate-700"
                />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full border-slate-300 bg-white text-slate-900 placeholder:text-slate-400 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    placeholder="you@example.com"
                    v-model="form.email"
                    required
                    autocomplete="username"
                />

                <InputError
                    class="mt-1 text-xs text-rose-600"
                    :message="form.errors.email"
                />
            </div>

            <div>
                <InputLabel
                    for="password"
                    value="Password"
                    class="text-xs font-medium text-slate-700"
                />

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full border-slate-300 bg-white text-slate-900 placeholder:text-slate-400 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    v-model="form.password"
                    required
                    autocomplete="new-password"
                />

                <InputError
                    class="mt-1 text-xs text-rose-600"
                    :message="form.errors.password"
                />
            </div>

            <div>
                <InputLabel
                    for="password_confirmation"
                    value="Confirm password"
                    class="text-xs font-medium text-slate-700"
                />

                <TextInput
                    id="password_confirmation"
                    type="password"
                    class="mt-1 block w-full border-slate-300 bg-white text-slate-900 placeholder:text-slate-400 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    v-model="form.password_confirmation"
                    required
                    autocomplete="new-password"
                />

                <InputError
                    class="mt-1 text-xs text-rose-600"
                    :message="form.errors.password_confirmation"
                />
            </div>

            <div class="flex flex-col gap-4 pt-2 sm:flex-row sm:items-center sm:justify-between">
                <p class="text-[0.75rem] text-slate-500">
                    Already have an account?
                    <Link
                        :href="route('login')"
                        class="font-medium text-indigo-600 hover:text-indigo-700"
                    >
                        Sign in
                    </Link>
                </p>

                <PrimaryButton
                    class="w-full bg-indigo-600 px-4 py-2.5 text-sm font-semibold tracking-tight text-white hover:bg-indigo-500 focus:ring-indigo-500 sm:w-auto"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >
                    Create account
                </PrimaryButton>
            </div>
        </form>
    </GuestLayout>
</template>

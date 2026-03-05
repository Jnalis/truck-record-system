<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import { onMounted } from 'vue';
import Swal from 'sweetalert2';

const props = defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
    logoutSuccess: {
        type: Boolean,
        default: false,
    },
});

onMounted(() => {
    if (props.logoutSuccess) {
        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'success',
            title: 'You are successfully logged out.',
            showConfirmButton: false,
            timer: 3500,
            timerProgressBar: true,
        });
    }
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Sign in" />

        <div class="mb-6">
            <h2
                class="text-xl font-semibold tracking-tight text-slate-900 sm:text-2xl"
            >
                Sign in to your account
            </h2>
            <p class="mt-1 text-sm text-slate-600">
                Access your dashboard to manage fleet, containers, and
                shipments.
            </p>
        </div>

        <div
            v-if="status"
            class="mb-4 rounded-lg border border-emerald-200 bg-emerald-50 px-3 py-2 text-xs font-medium text-emerald-800"
        >
            {{ status }}
        </div>

        <form @submit.prevent="submit" class="space-y-4">
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
                    autofocus
                    autocomplete="username"
                />

                <InputError
                    class="mt-1 text-xs text-rose-600"
                    :message="form.errors.email"
                />
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <InputLabel
                        for="password"
                        value="Password"
                        class="text-xs font-medium text-slate-700"
                    />

                    <Link
                        v-if="canResetPassword"
                        :href="route('password.request')"
                        class="text-xs font-medium text-indigo-600 hover:text-indigo-700"
                    >
                        Forgot password?
                    </Link>
                </div>

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full border-slate-300 bg-white text-slate-900 placeholder:text-slate-400 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    v-model="form.password"
                    required
                    autocomplete="current-password"
                />

                <InputError
                    class="mt-1 text-xs text-rose-600"
                    :message="form.errors.password"
                />
            </div>

            <div class="flex items-center justify-between pt-1">
                <label class="flex items-center gap-2 text-xs text-slate-600">
                    <Checkbox
                        name="remember"
                        v-model:checked="form.remember"
                        class="border-slate-300 bg-white text-indigo-600 focus:ring-indigo-500"
                    />
                    <span>Remember this device</span>
                </label>
            </div>

            <div class="pt-2">
                <PrimaryButton
                    class="flex w-full items-center justify-center gap-2 bg-indigo-600 px-4 py-2 text-sm font-semibold tracking-tight text-white hover:bg-indigo-500 focus:ring-indigo-500"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >
                    <span>Sign in</span>
                </PrimaryButton>
            </div>
        </form>

        <p class="mt-6 text-center text-[0.75rem] text-slate-500">
            Don't have an account?
            <Link
                :href="route('register')"
                class="font-medium text-indigo-600 hover:text-indigo-700"
            >
                Create one
            </Link>
        </p>
    </GuestLayout>
</template>
